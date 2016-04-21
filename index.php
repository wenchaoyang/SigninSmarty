<?php
require 'smarty/libs/Smarty.class.php';
$smarty = new Smarty();//���ø���Ŀ¼��·���������ǰ�װ���ص�
$smarty->template_dir ="smarty/templates/templates";
$smarty->compile_dir ="smarty/templates/templates_c";
$smarty->config_dir = "smarty/templates/config";
$smarty->cache_dir ="smarty/templates/cache";
//smartyģ���и��ٻ���Ĺ��ܣ����������true�Ļ�����caching�����ǻ������ҳ���������µ����⣬��ȻҲ����ͨ�������İ취���
$smarty->caching = false;
$smarty->left_delimiter = "{#"; //���¶���߽磬��ΪĬ�ϱ߽硰{}��������htmlҳ����Ƕ��js�ű��ļ���д�����ʱʹ�õľ��ǡ�{}�������Զ���߽����������<{ }>, {/ /} ��
$smarty->right_delimiter = "#}";
///从以下开始就是自己的功能代码
///头定义规定了环境相关的信息，在这个文件中
///下面的文件会直接调用index.tpl用于显示
$hello = "Hello World!";
$smarty->compile_check = true;
//$smarty->debugging = true;
$smarty->debugging = false;
$smarty->caching=true;
$conn=mysql_connect("localhost", "root","root"); //打开MySQL服务器连接
mysql_select_db("lava_guess"); //链接数据库
mysql_query("set names utf8"); //解决中文乱码问题
$sql_list="Select * from t_sys_msg Order by id desc limit 0,10";
$result_list=mysql_query($sql_list); //执行sql语句，返回结果
//把记录集转换为数组
while($rs_list=mysql_fetch_array($result_list))
{
    $msg_array[]=$rs_list;
}
$array[] = array("newsID"=>1, "newsTitle"=>"第1条新闻");
$array[] = array("newsID"=>2, "newsTitle"=>"第2条新闻");
$array[] = array("newsID"=>3, "newsTitle"=>"第3条新闻");
$array[] = array("newsID"=>4, "newsTitle"=>"第4条新闻");
$array[] = array("newsID"=>5, "newsTitle"=>"第5条新闻");
$array[] = array("newsID"=>6, "newsTitle"=>"第6条新闻");
$smarty->assign("newsArray", $array);
$smarty->assign("hello",$hello);
//赋值
$smarty->assign("msglist",$msg_array);
$smarty->display('index.tpl');?>
<?php
class mysql
{
    var $db_host	= 'localhost';
    var $db_username= 'root';
    var $db_password= '123456';
    var $db_database= 'new';

    function connect() {
        $db = new mysqli($this-> db_host,$this-> db_username,$this-> db_password,$this-> db_database);
        if (mysqli_connect_errno()) {
            echo "连接数据库失败!";
            exit;
        }
        return $db;
    }

    function query_exec($query) {
        $db = $this-> connect();
        $result = $db-> query($query);
        return $result;
    }
}
?>
<?php
require('./mysql.php');
$username=$_REQUEST['username'];
$passwd=$_REQUEST['passwd'];
session_start();
$_SESSION['s_username']=$username;

$query_user="select * from user where username = '$username' and passwd = '$passwd'";
$db=new mysql();//实例化类mysql
$result = $db->query_exec($query_user);//验证用户
$num_results=$result->num_rows;//取得数据库中的记录行

if($num_results==0)
{
    echo 'login fail!!';
    ?>
    <p><a href="./template/login.htm">返回登陆</a></p>
    <?php
}else{
    header("Location: ./index.php");
}
?>


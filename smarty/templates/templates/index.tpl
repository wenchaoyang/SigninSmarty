<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
<html>
<head>
<metahttp-equiv="Content-Type" content="text/html;charset=gb2312">
<title>Smarty</title></head>
<body>{#$txt1#}</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{$page_title}</title>

</head>

<body>
<p class="style1">新闻管理</p>
<hr>
<table width="771" height="115" border="0">
    <tr>
        <td height="62"><div align="center">系统管理</div></td>
        <td width="666" rowspan="2"><form name="form1" method="post" action="">
                <table width="543" border="0">
                    <tr>
                        <td width="253">标题</td>
                        <td width="230">日期</td>
                        <td width="46">选择</td>
                    </tr>
                    {section name=news loop=$news}
                        <tr>
                            <td><a href="./index.php?action=editnewsview&id={$news[news].id}">{$news[news].title}</a></td>
                            <td>{$news[news].date}</td>
                            <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value="{$news[news].id}"></td>
                        </tr>
                    {/section}
                </table>
                <p>
                    <input type="submit" name="Submit" value="删除">
                    <input name="action" type="hidden" id="action" value="{$actionvalue}">
                </p>
            </form> </td>
    </tr>
    <tr>
        <td width="95" height="47"><div align="center"><a href="./index.php?action=addnewsview">添加新闻</a></div></td>
    </tr>
</table>
<p class="style1">&nbsp;</p>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>无标题文档</title>
    <style type="text/css">
        <!--
        .style1 {
            font-size: 36px;
            font-weight: bold;
        }
        -->
    </style>
</head>

<body>
<p class="style1">新闻管理登陆
</p>
<form name="form1" method="post" action="../login.php">
    <table width="282" border="1">
        <tr>
            <td width="57">用户名</td>
            <td width="209"><input name="username" type="text" id="username"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input name="passwd" type="password" id="passwd"></td>
        </tr>
    </table>
    <p>
        <input type="submit" name="Submit" value="提交">
    </p>
</form>
<p class="style1">&nbsp;</p>
</body>
</html>

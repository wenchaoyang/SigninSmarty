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
$hello = "Hello My PHP World!";//��ֵ
$smarty->assign("txt1",$hello);//����ģ���ļ�
$smarty->display('index.tpl');?>
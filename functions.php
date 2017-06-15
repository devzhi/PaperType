<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	#自定义顶部文字
	$headerSay = new Typecho_Widget_Helper_Form_Element_Text('headerSay',NULL,NULL,_t("顶部文字"),_t("在这里填入的文字会出现在网页标题下"));
	$form->addInput($headerSay);

    #自定义侧边栏设置
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('sidebarSearch' => _t('显示搜索框'),
    'sidebarCategory' => _t('显示分类'),
    'sidebarComments' => _t('显示最新评论'),
	'sidebarArchive' => _t('显示归档'),
	'sidebarRss' => _t('显示RSS'),
    'sidebarLinks' => _t('显示友情链接')),
    
    array('sidebarLinks', 'sidebarSearch'), _t('侧边栏设置'));
    
    $form->addInput($sidebarBlock->multiMode());

	}
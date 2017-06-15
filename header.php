<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<title><?php $this->archiveTitle(array(
				'category'  =>  _t(' %s '),
				'search'    =>  _t(' %s '),
				'tag'       =>  _t(' %s '),
				'author'    =>  _t(' %s ')
				), '', ' - '); ?><?php $this->options->title(); ?>
			</title>
	<?php $this->header(); ?>
</head>
<body>
	<div class="container">
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?php $this->options->siteUrl(); ?>">Home</a>
					</li>
					<?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
			</div>
		</div>
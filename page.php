		<?php $this->need('header.php'); ?>
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<?php $this->need('crumbs.php'); ?>
		<div class="content-main">
			<h2 class="text-center"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<h4 class="text-center"><small>发表于 <?php $this->date('Y年n月j日'); ?> <?php $this->category(','); ?></small></h4>
			<?php $this->content(); ?>
		</div>
		<div id="postTag">

			<h4>标签 / Tag : <?php $this->tags(',', true, 'none'); ?></h4>
		</div>
		<?php include('comments.php'); ?>
	</div>

		<?php $this->need('sidebar.php'); ?>
		<?php $this->need('footer.php'); ?>
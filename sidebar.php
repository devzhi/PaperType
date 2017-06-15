		<div class="col-md-3 col-lg-3 visible-md-block visible-lg-block">
		<?php if (!empty($this->options->sidebarBlock) && in_array('sidebarSearch', $this->options->sidebarBlock)) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">搜索</h3>
				</div>
				<div class="panel-body">
					<form action="" method="POST" role="form">
				
						<div class="form-group">
							<input type="text" name="s" class="form-control" id="" placeholder="Search">
						</div>						
						<button type="submit" class="btn btn-primary btn-right">搜索</button>
					</form>
				</div>
			</div>
		<?php } ?>
		<?php if (!empty($this->options->sidebarBlock) && in_array('sidebarComments', $this->options->sidebarBlock)) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">最新评论</h3>
				</div>
				<ul class="list-group">
				    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
				    <?php while($comments->next()): ?>
				        <li class="list-group-item"><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(10, '[...]'); ?></a></li>
				    <?php endwhile; ?>
				</ul>
			</div>
		<?php } ?>
		<?php if (!empty($this->options->sidebarBlock) && in_array('sidebarCategory', $this->options->sidebarBlock)) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">分类</h3>
				</div>
					<ul class="list-group">
					<?php $this->widget('Widget_Metas_Category_List')
               		->parse('<li class="list-group-item">
               		<span class="badge">{count}</span>
               		<a href="{permalink}">{name}</a>
               		</li>'); ?>
					</ul>
			</div>
		<?php } ?>
		<?php if (!empty($this->options->sidebarBlock) && in_array('sidebarArchive', $this->options->sidebarBlock)) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">归档</h3>
				</div>
					<ul class="list-group">
					<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
               ->parse('<li class="list-group-item">
               <a href="{permalink}">{date}</a>
               </li>'); ?>
					</ul>
			</div>
		<?php } ?>
		<?php if (!empty($this->options->sidebarBlock) && in_array('sidebarRss', $this->options->sidebarBlock)) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">RSS</h3>
				</div>
				<ul class="list-group">

		            <li class="list-group-item"><a href="<?php $this->options->feedUrl(); ?>">文章 RSS</a></li>
		            <li class="list-group-item"><a href="<?php $this->options->commentsFeedUrl(); ?>">评论 RSS</a></li>
				</ul>
			</div>
		<?php } ?>
		<?php if (!empty($this->options->sidebarBlock) && in_array('sidebarLinks', $this->options->sidebarBlock)) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">友情链接</h3>
				</div>
				<ul class="list-group">
					<?php $this->need('links.php'); ?>
				</ul>
			</div>
		<?php } ?>
		</div>
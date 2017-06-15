		<ol class="breadcrumb">
			<li>
				<a href="<?php $this->options->siteUrl(); ?>">Home</a>
			</li>
			<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
				<li class="active">最新文章</li>
			<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
				<li><?php $this->category(); ?></li><li class="active"><?php $this->title() ?></li>
			<?php else: ?><!-- 页面为其他页时 -->
				<li class="active"><?php $this->archiveTitle(' &raquo; ','',''); ?></li>
			<?php endif; ?>
		</ol>
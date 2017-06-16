		</div>


		<div class="container text-center">
		<hr>
			<p>&copy; <?php echo date('Y') ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></p>
			<p>Power by <a href="http://typecho.org">Typecho</a> &amp; Theme By <a href="https://www.sstype.com">PaperType</a></p>
		</div>

	</div>
</body>
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="<?php $this->options->themeUrl('js/jquery.goup.min.js'); ?>"></script>
	<script>
	jQuery(document).ready(function(){
	    jQuery.goup();
	});
	</script>
</html>
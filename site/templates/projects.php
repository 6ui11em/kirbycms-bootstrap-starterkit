<?php snippet('header') ?>

	<div class="container" role="main">
		<div class="text">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
    <hr>
    <?php snippet('projects') ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>
<div class="row">
	<h2 class="col-xs-12">Latest projects</h2>
	<?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
		<div class="col-sm-4">
			<h2><?php echo $project->title()->html() ?></h2>
			<p><?php echo $project->text()->excerpt(80) ?></p>
			<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
				<a href="<?php echo $project->url() ?>" class="thumbnail">
					<img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
				</a>
			<?php endif ?>
		</div>
	<?php endforeach ?>
</div>
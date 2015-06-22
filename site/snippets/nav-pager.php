<nav role="navigation">
	<ul class="pager">
		<?php if($prev = $page->prevVisible()): ?>
			<li>
				<a href="<?php echo $prev->url() ?>" aria-label="Previous">
					<span aria-hidden="true">&lsaquo; Previous: <?= $page->prevVisible()->title()->html() ?></span>
				</a>
			</li>
		<?php endif; ?>
		<?php if($next = $page->nextVisible()): ?>
			<li>
				<a href="<?php echo $next->url() ?>" aria-label="Next">
					<span aria-hidden="true">Next: <?= $page->nextVisible()->title()->html() ?> &rsaquo;</span>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</nav>

<div class="row">
    <div class="small-12 columns header-image small-only-no-gutter">
		
		<?php if ($c->isEditMode()): ?>
		
			<?php $a = new Area('Header Image');
			$a->display($c); ?>
		
			<?php if ($thumbnail_image) { $thumbnail_image->display($c);} ?>
		
		<?php else: ?>
		
			<?php if ($thumbnail_image && $thumbnail_image->getTotalBlocksInArea($c) > 0): ?>

				<?php $thumbnail_image->display($c); ?>

			<?php else: ?>

				<?php $a = new Area('Header Image');
				$a->display($c); ?>

			<?php endif; ?>
		
		<?php endif; ?>
        
    </div>
</div>
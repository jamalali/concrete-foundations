<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

	<div class="row">
		
		<div class="small-12 columns">
	
			<div class="row">

				<div class="small-12 medium-8 columns">

					<div class="main-content-inner">

						<?php $a = new Area('Main');
						$a->display($c); ?>

					</div>

				</div>

				<div class="small-12 medium-4 columns">

					<div class="right-sidebar-inner">

						<?php $a = new Area('Sidebar');
						$a->display($c); ?>

					</div>

				</div>

			</div>
			
		</div>
		
	</div>
	
<?php $this->inc('elements/footer.php'); ?>

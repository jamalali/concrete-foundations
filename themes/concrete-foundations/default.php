<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
	<div class="row">

		<div class="small-12 large-8 columns">

				<?php 
				$a = new Area('Main');
				$a->display($c);
				?>

		</div>

		<div class="small-12 large-4 columns">

				<?php 
				$a = new Area('Sidebar');
				$a->display($c);
				?>


		</div>
		
	</div>
	
	<!-- end sidebar -->
	
<?php $this->inc('elements/footer.php'); ?>

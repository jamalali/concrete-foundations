<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
$this->inc('elements/header_image.php'); ?>

	<div class="row">
		<div class="small-12 columns">

			<div class="row">

				<div class="small-12 columns">
					
					<div class="main-content-inner">
						
						<?php Loader::element('system_errors', array('error' => $error));
						print $innerContent; ?>

					</div>
					
				</div>

			</div>
			
		</div>
	</div>
	
<?php $this->inc('elements/footer.php');
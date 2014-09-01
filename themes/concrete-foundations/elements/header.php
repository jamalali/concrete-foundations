<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" lang="<?php echo LANGUAGE?>">

    <head>

        <!-- Site Header Content //-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <script src="<?php echo $this->getThemePath(); ?>/bower_components/modernizr/modernizr.js"></script>
        
        <script src="<?php echo $this->getThemePath(); ?>/bower_components/jquery/dist/jquery.min.js"></script>

        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/text.css" />
        <link rel="stylesheet" href="<?php echo $this->getStyleSheet('css/main.css')?>" media="screen" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->getStyleSheet('css/typography.css')?>" media="screen" type="text/css" />
        <link rel="stylesheet" href='//fonts.googleapis.com/css?family=Merriweather:400,700,900,300' type='text/css' />
        
        <?php  Loader::element('header_required'); ?>

    </head>

    <body>
        
        <div class="cf-ui">
			
			<div class="row">
				<div class="small-12 columns main-container">
            
					<?php $this->inc('elements/main_menu.php'); ?>

					<div class="row">
						<div class="small-12 columns">
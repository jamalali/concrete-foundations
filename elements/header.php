<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html class="no-js" lang="en" lang="<?php echo LANGUAGE?>">

    <head>

        <?php  Loader::element('header_required'); ?>

        <!-- Site Header Content //-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <script src="<?php echo $this->getThemePath(); ?>/bower_components/modernizr/modernizr.js"></script>

        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/text.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/960_24_col.css" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('css/main.css')?>" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('css/typography.css')?>" />
        <link href='//fonts.googleapis.com/css?family=Merriweather:400,700,900,300' rel='stylesheet' type='text/css' />

    </head>

    <body>
        
        <div class="cf-ui">

            <div class="row">
                
                <div class="small-12 columns">

                    <div id="main-container" class="main-container container_24">

                        <div id="header">


                            <?php 
                            $a = new GlobalArea('Site Name');
                            $a->display();
                            ?>

                            <?php 
                            $a = new GlobalArea('Header Nav');
                            $a->display();
                            ?>

                            <div id="header-image">

                                    <?php 
                                    $a = new Area('Header Image');
                                    $a->display($c);
                                    ?>

                            </div>

                        </div>

                        <div class="clear"></div>

<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        ##GLOBAL STYLES##
        echo $this->Html->css('/assets/bootstrap/css/bootstrap');
        echo $this->Html->css('main');
        echo $this->Html->css('theme');
        echo $this->Html->css('MoneAdmin');
        echo $this->Html->css('/assets/Font-Awesome/css/font-awesome');
        ##END GLOBAL STYLES##    
        ##PAGE LEVEL STYLES##
        echo $this->Html->css('/assets/dataTables/dataTables.bootstrap');
        ##END PAGE LEVEL  STYLES##
        echo $this->fetch('css');
        ##GLOBAL SCRIPTS##
        echo $this->Html->script('/assets/jquery-2.0.3.min');
        echo $this->Html->script('/assets/bootstrap/js/bootstrap.min');
        echo $this->Html->script('/assets/modernizr-2.6.2-respond-1.1.0.min');
        ##END GLOBAL SCRIPTS##
        echo $this->fetch('script');
        ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="padTop53">
        <!-- MAIN WRAPPER -->
        <div id="wrap">
            <!-- HEADER SECTION -->
            <?php echo $this->element('header') ?>
            <!-- END HEADER SECTION -->
            <!-- MENU SECTION -->
            <?php echo $this->element('left-menu') ?>
            <!--END MENU SECTION -->
            <!--PAGE CONTENT -->
            <div id="content">
                <div class="inner">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
                <!--END PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!--END MAIN WRAPPER -->
        <!-- FOOTER -->
        <?php echo $this->element('footer') ?>
        <!-- END FOOTER -->
    </body>
</html>

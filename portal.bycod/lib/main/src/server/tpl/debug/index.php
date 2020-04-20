<!DOCTYPE html>
<html>
    <head>
        <?php echo $assist->view->compile(':debug/index.head', array("active"=>"home")); ?>
    </head>

    <body id="wrapper">
        <?php echo $assist->view->compile(':debug/index.header'); ?>

        <?php echo $assist->view->compile(':debug/index.carousel'); ?>

        <?php echo $assist->view->compile(':debug/index.features'); ?>

        <?php echo $assist->view->compile(':debug/index.about'); ?>

        <?php echo $assist->view->compile(':debug/index.process'); ?>

        <?php echo $assist->view->compile(':debug/index.testimonials'); ?>

        <?php echo $assist->view->compile(':debug/index.footer'); ?>
    </body>   
</html>
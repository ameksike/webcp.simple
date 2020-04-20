<!DOCTYPE html>
<html>
    <head>
        <?php echo $assist->view->compile('main:debug/index.head'); ?>
    </hedad>
    <body id="wrapper">

        <?php echo $assist->view->compile('main:debug/index.header'); ?>

        <section id="features-page">
            <?php echo $assist->view->compile(':debug/features.seg1'); ?>
            <?php echo $assist->view->compile(':debug/features.seg2'); ?>
            <?php echo $assist->view->compile(':debug/features.seg3'); ?>
            <?php echo $assist->view->compile(':debug/features.seg5'); ?>

        </section>

        <?php echo $assist->view->compile('main:debug/index.footer'); ?>
    </body>

</html>
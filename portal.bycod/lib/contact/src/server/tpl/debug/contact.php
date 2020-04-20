<!DOCTYPE html>
<html>

    <head>
        <?php echo $assist->view->compile('main:debug/index.head'); ?>
    </hedad>
    <body id="wrapper">

        <?php echo $assist->view->compile('main:debug/index.header'); ?>

        <section id="top_banner">
            <div class="banner">
                <div class="inner text-center">
                    <h2>Lorem ipsum dolor sit amet</h2>
                </div>
            </div>
        </section>

        <?php echo $assist->view->compile(':debug/contact.reg'); ?>
        <?php echo $assist->view->compile(':debug/contact.map'); ?>

        <?php echo $assist->view->compile('main:debug/index.footer'); ?>
    </body>

</html>
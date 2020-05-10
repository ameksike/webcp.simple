<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $assist->view->compile('dashboard:sb-admin/index.head'); ?>
    </head>
    <body class="sb-nav-fixed">
        <?php echo $assist->view->compile('dashboard:sb-admin/index.nav'); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php echo $assist->view->compile('dashboard:sb-admin/index.navside', array("active"=>"home")); ?>
            </div>
            <div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid">
                        <!-- content_head_page -->
                        <h1 class="mt-4">Blank</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blank sub</li>
                        </ol>
                        TEST HEAD data 
                    </div>
                </main>
                <!-- content_body_page -->
                <div class="container-fluid">
                    DEMO TEST body data
                </div>
                <!-- footer -->
                <?php echo $assist->view->compile('dashboard:sb-admin/index.footer'); ?>
            </div>
        </div>
        <!-- script -->
    </body>
</html>

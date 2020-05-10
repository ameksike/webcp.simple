<?php $idiom = $assist->view->idiom("main"); ?>
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">

            <!-- ITEM 1 -->
            <div class="sb-sidenav-menu-heading"><?php echo $idiom['dashboard']['menu'][0]['title']; ?></div>
            <a class="nav-link" href="<?php echo $assist->view->url("dashboard/index"); ?>" >
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                <?php echo $idiom['dashboard']['menu'][0]['menu'][0]['title']; ?>
            </a>

            <!-- ITEM 2 -->
            <div class="sb-sidenav-menu-heading"> <?php echo  $idiom['dashboard']['menu'][1]['title']; ?> </div>
            <a class="nav-link" href="<?php echo $assist->view->url("person/show"); ?>" ><div class="sb-nav-link-icon">
                <i class="fas fa-user"></i></div>
                <?php echo $idiom['dashboard']['menu'][1]['menu'][0]['title']; ?>
            </a >
            <a class="nav-link" href="<?php echo $assist->view->url("phone/show"); ?>" >
                <div class="sb-nav-link-icon"> <i class="fas fa-phone"></i></div>
                <?php echo $idiom['dashboard']['menu'][1]['menu'][1]['title'] ; ?>
            </a >

            <!-- ITEM 3 -->
            <div class="sb-sidenav-menu-heading"> <?php echo  $idiom['dashboard']['menu'][2]['title']; ?> </div>
            <a class="nav-link" href="<?php echo $assist->view->url("news/backend"); ?>" ><div class="sb-nav-link-icon">
                <i class="fas fa-newspaper"></i></div>
                <?php echo $idiom['dashboard']['menu'][2]['menu'][0]['title']; ?>
            </a >
            <a class="nav-link" href="<?php echo $assist->view->url("docs/show"); ?>" >
                <div class="sb-nav-link-icon"> <i class="fas fa-book"></i></div>
                <?php echo $idiom['dashboard']['menu'][2]['menu'][1]['title'] ; ?>
            </a >
            <a class="nav-link" href="<?php echo $assist->view->url("portfolio/show"); ?>" >
                <div class="sb-nav-link-icon"> <i class="fas fa-table"></i></div>
                <?php echo $idiom['dashboard']['menu'][2]['menu'][2]['title'] ; ?>
            </a >

            <!-- ITEM 4 TOOL -->
            <div class="sb-sidenav-menu-heading"><?php echo $idiom['dashboard']['menu'][3]['title']; ?></div>
            
            <!-- ITEM 4 TOOL Idiom-->
            <a class="nav-link" href="<?php echo $assist->view->url("language/show"); ?>" >
                <div class="sb-nav-link-icon"> <i class="fas fa-globe"></i></div>
                <?php echo $idiom['dashboard']['menu'][3]['menu'][0]['title'] ; ?>
            </a >

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" >
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                <?php echo $idiom['dashboard']['menu'][3]['menu'][1]['title'] ; ?>
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <!-- ITEM 4 TOOL Company-->
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html"><?php echo  $idiom['dashboard']['menu'][3]['menu'][1]['menu'][0]['title']; ?></a>
                    <a class="nav-link" href="layout-sidenav-light.html"><?php echo  $idiom['dashboard']['menu'][3]['menu'][1]['menu'][1]['title']; ?></a>
                </nav>
            </div>
            
            <!-- ITEM 4 TOOL EXTERN-->
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages" >
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                <?php echo $idiom['dashboard']['menu'][3]['menu'][2]['title'] ; ?>
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div >
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth" >
                        <?php echo $idiom['dashboard']['menu'][3]['menu'][2]['menu'][0]['title'] ; ?>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="login.html"><?php echo $idiom['dashboard']['menu'][3]['menu'][2]['menu'][0]['menu'][0]['title'] ; ?></a>
                            <a class="nav-link" href="register.html"><?php echo $idiom['dashboard']['menu'][3]['menu'][2]['menu'][0]['menu'][1]['title'] ; ?></a>
                         </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" >
                        <?php echo $idiom['dashboard']['menu'][3]['menu'][2]['menu'][1]['title'] ; ?>
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div >
                    </a>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="401.html"><?php echo $idiom['dashboard']['menu'][3]['menu'][2]['menu'][1]['menu'][0]['title'] ; ?></a>
                            <a class="nav-link" href="404.html"><?php echo $idiom['dashboard']['menu'][3]['menu'][2]['menu'][1]['menu'][1]['title'] ; ?></a>
                        </nav>
                    </div>
                </nav>
            </div>

        </div>
    </div>

    <div class="sb-sidenav-footer">
        <a class="nav-link" href="<?php echo $assist->view->url("main/index"); ?>" >
            <i class="fas fa-table"></i>
            <?php echo $idiom['dashboard']['menu'][0]['menu'][1]['title'] ; ?>
        </a >
    </div>
</nav>
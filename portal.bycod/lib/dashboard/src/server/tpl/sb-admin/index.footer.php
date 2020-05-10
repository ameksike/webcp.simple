
<?php $idiom = $assist->view->idiom("main"); ?>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; <a href="https://ameksike.github.io/">Ksike Develop Team</a> (KSDT)</a> 2019</div>
            <div>
                <a href="<?php echo $assist->view->url("dashboard/privacy"); ?>">Privacy Policy</a>
                &middot;
                <a href="<?php echo $assist->view->url("dashboard/conditions"); ?>">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

<?php
    echo $assist->view->include(array(
        "main/lib/jquery/3.4.1/jquery.min.js",
        "main/lib/bootstrap/4.3.1/js/bootstrap.bundle.min.js",
        "dashboard/src/client/sb-admin/js/scripts.js"
    ));
?>
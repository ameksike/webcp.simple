
<?php $idiom = $assist->view->idiom("main"); ?>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; <a href="#">Ksike Develop Team</a> (KSDT)</a> 2019</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

<?php
    echo $assist->view->include(array(
        "main/lib/jquery/3.4.1/jquery.min.js",
        "main/lib/bootstrap/4.3.1/js/bootstrap.bundle.min.js",
        "dashboard/src/client/sb-admin/js/scripts.js",
        "main/lib/chart.js/2.8.0/js/Chart.min.js",
        "dashboard/src/client/sb-admin/assets/demo/chart-area-demo.js",
        "dashboard/src/client/sb-admin/assets/demo/chart-bar-demo.js",
        "main/lib/dataTables/1.10.20/js/jquery.dataTables.min.js",
        "main/lib/dataTables/1.10.20/js/dataTables.bootstrap4.min.js",
        "dashboard/src/client/sb-admin/assets/demo/chart-bar-demo.js",
    ));
?>
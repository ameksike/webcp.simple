
<?php $idiom = $assist->view->idiom("main"); ?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="<?php echo $idiom['main']['meta']['description'] ?>" />
<meta name="author" content="<?php echo $idiom['main']['meta']['author'] ?>" />

<title><?php echo $idiom['main']['app']['title'] . " - Dashboard"; ?></title>

<?php
    echo $assist->view->include(array(
        "dashboard/src/client/sb-admin/css/styles.css",
        "main/lib/dataTables/1.10.20/css/dataTables.bootstrap4.min.css",
        "main/lib/font-awesome/5.11.2/js/all.min.js"
    ));
?>

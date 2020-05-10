
<?php $idiom = $assist->view->idiom("main"); ?>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="<?php echo $idiom['main']['meta']['description'] ?>" />
<meta name="author" content="<?php echo $idiom['main']['meta']['author'] ?>" />
<link rel="icon"  type="image/svg"  href="<?php echo $assist->view->url("lib/main/src/client/img/logo/logo.icox16.svg"); ?>" />
<title><?php echo $idiom['dashboard']['main']['title']; ?></title>

<?php
    echo $assist->view->include(array(
        "dashboard/src/client/sb-admin/css/styles.css",
        "main/lib/font-awesome/5.11.2/js/all.min.js"
    ));
?>

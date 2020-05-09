
<?php $idiom = $assist->view->idiom("main"); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="<?php echo $idiom['main']['meta']['description'] ?>" />
<meta name="author" content="<?php echo $idiom['main']['meta']['author'] ?>" />

<title><?php echo $idiom['main']['app']['title']; ?></title>

<?php
    echo $assist->view->include(array(
        "main/lib/font-awesome/4.5.0/css/font-awesome.min.css",
        "main/src/client/scss/skin.css",
        "main/src/client/scss/main.css",
    
        "main/lib/jquery/3.2.1/jquery.min.js",
        "main/lib/bootstrap/3.3.1/js/bootstrap.min.js",
        "main/src/client/js/index.js"
    ));
?>

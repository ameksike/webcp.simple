<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

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
</head>
<?php
/*
 *
 * @package: Simple Web Corporative Portal
 * @version: 0.1
 * @authors: Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @created: 23/4/2011
 * @updated: 23/4/2011
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 *
 */
include "app.head.php"; ?>
<?php include "app.header.php"; ?>

<body>
<style>
		.inf01 {
			border: 0;
			width: 75%;
			font-size: medium;
		}
		.inf02 {
			border: 0;
			width: 75%;
			font-size: medium;
		}
		.inf03 {
			border: 0;
			width: 75%;
			font-size: medium;
		}
		td, th {
			display: table-cell;
			vertical-align: top;
		}

		a {
			text-decoration: none;
		}
		a:hover {
			color: black;
			text-decoration: underline;

		}
	</style>
	
<?php include "app.content.php"; ?>
<?php include "app.footer.php";  ?>

<script> $( "#home" ).addClass( "current" ); </script>
</body>
</html>
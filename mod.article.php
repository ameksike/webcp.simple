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

<?php 
	if(isset($_REQUEST['act'])){
		if($_REQUEST['act']=="del")
			include "server/article.del.php"; 
	}
?>

<body>

	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.css">
	<!-- < GRID -->
	<link rel="stylesheet" type="text/css" href="lib/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="lib/grid/person.css">
	<!-- > GRID -->

	<link rel="stylesheet" href="lib/jquery/themes/base/jquery.ui.all.css">

	<style>
		.fa {
			font-size: large;
			color: #009FE3;
			margin: 1px;
		}

		.seg_act{
			float:right;
		}
	</style>
	
	<!--------------Content--------------->
	<section id="content">
		<div class="wrap-content zerogrid">
			<div class="seg_act">			
				<a class="toggle-add" style="display:none;" href="mod.article.edit.php?art=0" data-column="3"><span class="fa fa-plus"> </span></a>
				<a class="toggle-opt" data-column="3"><span class="fa fa-server"> </span></a>
			</div>

			<table id="person" class="display" cellspacing="1" width="100%">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>T&iacute;tulo</th>
						<th>Sumario</th>
						<th>Aciones</th>
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>Fecha</th>
						<th>T&iacute;tulo</th>
						<th>Sumario</th>
						<th>Aciones</th>
					</tr>
				</tfoot>

				<tbody></tbody>
			</table>
			
		</div>
	</section>
<!--------------Footer--------------->
<?php include "app.footer.php"; ?>

<script type="application/javascript" src="lib/datatables/jQuery-3.2.1/jquery-3.2.1.min.js" ></script>
<!-- < GRID -->
<script type="application/javascript" src="lib/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js" ></script>
<script type="application/javascript" src="lib/grid/article.js" > </script>

<script>
	$( "#article" ).addClass( "current" );

</script>

</body>
</html>
<?php include "app.head.php"; ?>
<?php include "app.header.php"; ?>

<body>

<style>

.atxshd{

}

p{
	font-size: 15px; 
	
}

.artshd{
	-webkit-box-shadow: -7px 10px 14px -1px rgba(0,0,0,0.15);
	-moz-box-shadow: -7px 10px 14px -1px rgba(0,0,0,0.15);
	box-shadow: -7px 10px 14px -1px rgba(0,0,0,0.15);
}

hr {
	height: 1.2px;
	background-color: #108acb33;
	border: #0e95dd66;
}
</style>

	<!-- < GRID -->
	<link rel="stylesheet" type="text/css" href="lib/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="lib/grid/person.css">
	<!-- > GRID -->

	<link rel="stylesheet" href="lib/jquery/themes/base/jquery.ui.all.css">

	<!--------------Content--------------->
	<section id="content" >
		<div class="wrap-content zerogrid">
			<div class="art" style="padding-left: 19px; padding-right: 15px;">
				<?php $out = include "server/article.list.php"; ?>
				</br>
				
				<?php 
					if(!empty($out[0]["url"])){
						echo "<a href='" .$out[0]["url"].  "'>";
					}
					if(!empty($out[0]["ico"])){
						echo '<img class="artshd" src="'.$out[0]["ico"].'"  width="50%">';
					}
					if(!empty($out[0]["ico"])){
						echo "</a>";
					}
				?>	
				<h1 class="atxshd" style="font-size: 241%; color: #009fe3; margin-bottom: 4.917px;"> <?php  
					if(!empty($out[0]["url"])){
						echo "<a href='" .$out[0]["url"].  "'>";
					}
					echo $out[0]["title"]; 
					if(!empty($out[0]["ico"])){
						echo "</a>";
					}
					?> </h1>
				<hr>
				<h4 style="margin-left: -1px;margin-bottom: -2.033px;margin-top: 0px;"> <b><?php  
				
				$date = new DateTime($out[0]["date"]);				
				echo $date->format('d/m/Y'); ?></b>, escrito por: <b><?php  echo $out[0]["author"]; ?></b> </h4> 
				<hr style="padding-bottom: -4px;">
						
				
				<p> <?php  echo substr($out[0]["sumary"], 0, strrpos($out[0]["sumary"], "<a") ); ?> </p>
				<p> <?php  echo $out[0]["description"]; ?> </p>
			</div>
		</div>
	</section>
<!--------------Footer--------------->
<?php include "app.footer.php"; ?>

<script type="application/javascript" src="lib/datatables/jQuery-3.2.1/jquery-3.2.1.min.js" ></script>
<!-- < GRID -->
<script type="application/javascript" src="lib/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js" ></script>

<script>

</script>

</body>
</html>
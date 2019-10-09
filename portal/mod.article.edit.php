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
	$_REQUEST['type'] = $_REQUEST['art']=="" || $_REQUEST['art']=="0" ? "new" : "one";
	$out = include "server/article.list.php"; 
	$out = isset($out[0]) ? $out[0] : array(
		"id"=>"",
		"title"=>"",
		"imgfront"=>"",
		"imgico"=>"",
		"date"=>date("Y-m-d"),
		"sumary"=>"",
		"description"=>"",
		"author"=>"",
		"url"=>"","status"=>"normal"  
	);
	include "server/article.save.php"; 
?>
<body>
	<!-- < TYNIMCE -->
	<style>
		.wrap-content{
			padding-left: 19px; 
			padding-right: 15px;		
			padding-bottom: 15px;	
		}
		.seg_title input{
			width: 100%;
		}
		.seg_title{
			float: left;
			width: 40%;
		}
		.seg_ico{
			float: left;
			width: 20%;
		}
		.seg_front{
			float: left;
			width: 40%;		
		}
		.sumary{
			clear:left;
			padding-top: 3px;
		}
		.seg_head{
		
		}
		h1{
			margin-bottom: 2px;		
		}
		input{
			border-color: #009FE3;
		}
		#btnSafe{
			float: right;
			margin-top: 15px;	
			padding: 4px 8px;
			background-color: #009FE3;
		}
		#btnSafe:hover{
			background-color: #252525;		
			color: #ffffff;
		}
		span {
			font-size: large;
			color: #009FE3;
		}
		
	</style>
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.css">
	<!-- > TYNIMCE -->

	<!--------------Content--------------->
	<section id="content">
		<div class="wrap-content zerogrid">
		<form method="post" action="">
			<div class="seg_head">	
				<div class="seg_title"> 
					<h1> Titulo </h1>
					<input type="text" name="title" value="<?php  echo $out["title"]; ?>" />
					<h1> Fecha </h1>
					<input type="text" name="date" value="<?php  echo $out["date"]; ?>" />
					<h1> Autor </h1>
					<input type="text" name="author" value="<?php  echo $out["author"]; ?>" />
					<h1> Categoría </h1>
					<select name="status">
						<option value="normal" <?php  echo ($out["status"]=="normal" || $out["status"]=="") ? "selected" : ""; ?> >Normal</option>
						<option value="relevant" <?php  echo ($out["status"]=="relevant") ? "selected" : ""; ?> >Relevante</option>
					</select>
				</div>
				
				<div class="seg_ico"> 
					<h1> Icono </h1> 
					<img   id="imgico"  src="<?php echo (!empty($out["imgico"])) ? $out["imgico"] : "images/icos/estadistica.svg";  ?>"  width="50%">
					<input id="imgicoF" style="display:none;" type="file" >
					<input id="imgicoS" name="imgico" style="display:none;" type="text" value="<?php  echo $out["imgico"]; ?>" >
				</div>
				
				<div class="seg_front"> 
					<h1> Portada </h1>
					<img   id="imgfront"  src="<?php echo (!empty($out["imgfront"])) ? $out["imgfront"] : "images/icos/estadistica.svg";  ?>"  width="50%">
					<input id="imgfrontF" style="display:none;" type="file" >
					<input id="imgfrontS" name="imgfront" style="display:none;" type="text" value="<?php  echo $out["imgfront"]; ?>" >
				</div>
			</div>
			
			<div class="sumary"> 
				<h1> Preámbulo </h1>
				<textarea id="sumary" name="sumary"> <?php  echo $out["sumary"]; ?></textarea> 
			</div>
			<div class="description"> 
				<h1> Descripción extendida </h1>
				<textarea id="description" name="description"> <?php  echo $out["description"]; ?></textarea>
			</div>

			<div>
				<input type="text" style="display:none;" name="id" value="<?php  echo $out["id"]; ?>" />
				<input type="text" style="display:none;" name="url" value="<?php  echo $out["url"]; ?>" />
			</div>

			<input type="submit" name="btnSafe" id="btnSafe" value="Salvar" />
		</form>
			
		</div>
	</section>
<!--------------Footer--------------->
<?php include "app.footer.php"; ?>
<script type="text/javascript" src="lib/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="lib/tinymce/tinymce.min.js"></script>
<script type="application/javascript" src="lib/grid/edit.js" > </script>
<script type="application/javascript" src="lib/img/imgloader.js" > </script>

<script>
	newEditor('#sumary', 200);
	newEditor('#description', 400);
	// 
	ImgLoader.init("imgico", "imgicoF", "server/article.upload.php?raw=1","imgicoS");
	ImgLoader.init("imgfront", "imgfrontF", "server/article.upload.php?raw=1","imgfrontS");
</script>
<!-- < TYNIMCE -->

</body>
</html>
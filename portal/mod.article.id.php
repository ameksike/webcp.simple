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


.art{
	padding-bottom: 1%;
	padding-left: 19px; 
	padding-right: 15px;
	margin-bottom: 2%;
	float: left;
	width: 75%;
}

.lat{
	float: right;
	width: 20%;
}

.atxshd{}

p{
	font-size: 15px; 
}

.artshd{
	-webkit-box-shadow: -7px 10px 14px -1px rgba(0,0,0,0.15);
	-moz-box-shadow: -7px 10px 14px -1px rgba(0,0,0,0.15);
	box-shadow: -7px 10px 14px -1px rgba(0,0,0,0.15);
}

.art hr {
	height: 1.2px;
	background-color: #108acb33;
	border: #0e95dd66;
}

.segimg{
	max-height: 100px;
	
}

.seg{
	padding: 8px 4px;	
	margin-bottom: 4.917px;
}
.seghr {
	height: 4px;
	background-color: #009FE3;
	border: #009FE3;
	padding-bottom: -4px;
}
.seg video{
	width: 95%;	
	
}
.seg span{
	color: #000000;
	
}
.segTitle{
	font-size: 200%;
	color: #009fe3;
}

.ntitle{
	font-size: 15px;
}
.nauthor{
	font-size: 12px;
}
.ndiv{
	height: 1px;
	background-color: #108acb33;
	border: #0e95dd66;
}

.ndate{
	font-size: 12px;
	padding-right: 7px; 
}

.demo-gallery{	
      overflow: hidden;
}

.demo-gallery img{
	max-width: 100% !important;	
	min-width: 100% !important;	
}
</style>

	<!--------------Content--------------->
	<section id="content" >
		<div class="wrap-content zerogrid">
			<div class="art">
				<?php $out = include "server/article.list.php"; 
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
				?>
				</br>
				
				<?php 
					if(!empty($out["url"])){
						echo "<a href='" .$out["url"].  "'>";
					}
					if(!empty($out["imgfront"])){
						echo '<img class="artshd" src="'.$out["imgfront"].'"  width="50%">';
					}
					if(!empty($out["imgfront"])){
						echo "</a>";
					}
				?>	
				<h1 class="atxshd" style="font-size: 241%; color: #009fe3; margin-bottom: 4.917px;"> <?php  
					if(!empty($out["url"])){
						echo "<a href='" .$out["url"].  "'>";
					}
					echo $out["title"]; 
					if(!empty($out["imgfront"])){
						echo "</a>";
					}
					?> </h1>
				<hr>
				<h4 style="margin-left: -1px;margin-bottom: -2.033px;margin-top: 0px;"> <b><?php  
				
				$date = new DateTime($out["date"]);				
				echo $date->format('d/m/Y'); ?></b>, escrito por: <b><?php  echo $out["author"]; ?></b> </h4> 
				<hr style="padding-bottom: -4px;">
						
				
				<p> <?php  echo substr($out["sumary"], 0, strrpos($out["sumary"], "<a") ); ?> </p>
				<p> <?php  echo $out["description"]; ?> </p>
			</div>

			<div class="lat"> 
				<div class="seg">
					<span class="segTitle">Relevante </span>
					<hr class="seghr">
					<?php
						$vid = '';
						foreach($config['media']['imp'] as $i){
							$vid .= '<video style="padding-bottom: 2px;" controls="" autoplay="" poster="'. $config['media']['url'] . $i . '-poster.jpg">';
							$vid .= '<source src="'. $config['media']['url'] . $i . '.mp4" type="video/mp4">';
							$vid .= '</video> ';	
						}		
						echo $vid;						
					?>
				</div>
				
				<div class="seg">
					<span class="segTitle">Informaciones Recientes</span>
					<hr class="seghr" >
					<?php
						$vid = '';
						foreach($lst as $i){
							$vid .= '<a href="' .$config['sys']['pag'].$i["id"].  '"> <div> ';
							$vid .= '<span class="ntitle">'. $i['title'] . '</span> <br>';
							$vid .= '<span class="ndate">'. $i['date'] . '</span>';
							$vid .= '<span class="nauthor">'. $i['author'] . '</span> ';
							$vid .= '<hr class="ndiv">';
							$vid .= '</div>';
							$vid .= '</a>';
						}		
						echo $vid;						
					?>
				</div>
				
				<div class="seg">
					<span class="segTitle">Reflexiones</span>
					<hr class="seghr" >
					<div class="segimg"> <?php include "app.tips.php"; ?> </div>
				</div>
			</div>
		</div>
	</section>
<!--------------Footer--------------->
<?php include "app.footer.php"; ?>

<script>

</script>

</body>
</html>
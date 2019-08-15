<style>
.blok {
	background: #54c0eb5e;
    margin:3px 0 10px 0;
    color: #696969;
    padding: 5px 10px;
    box-shadow: 0 3px rgba(0,0,0,.08);
    float: left;
    clear: both;
	min-width: 97%;
	max-width: 97%;
}

ul#rtl_func ul:before, ul#rtl_func ul:after {
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
}

ul#rtl_func {
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
  overflow: auto;
  padding: 0 10px;
  list-style: none;
}
ul#rtl_func > li {
  border-radius: 4px;
  border: 1px solid #dedede;
  font-weight: bold;
  font-family: 'segoe ui', sans-serif;
  margin: 10px 0;
  min-width: 47%;
  max-width: 47%;
  padding: 5px 10px;
  transition: box-shadow .25s ease;
}
ul#rtl_func > li:hover {
  box-shadow: 0px 0px 10px 3px rgba(0,0,0,.15);
  cursor: default;
}
ul#rtl_func > li > ul > li {
  list-style: none;
  font-weight: normal;
}
ul#rtl_func > li > ul > li:first-of-type {
  border-top: 1px solid #eee;
  margin-top: 4px;
}

img.imgico {
  float: left;
  min-width: 4%;
  max-width: 22%;
  margin-right: 5px;
}

</style>	
<TD COLSPAN="4"  >
	<p> <img class="icotitle" src="images/icos/news01.svg"> <b> NOTICIAS </b> <br/>
	
	<ul id="rtl_func">
		<?php
			$out = include "server/article.list.php";
			foreach ($out as $k=>$i){
				$dtas  = '<li class="list_root" id="f_0">';
				$dtas .= '<p class="blok"> <blod>'.$i['date'].'</blod>' . '<a href="'.$config['sys']['pag'].$i["id"].'" > '.$i['title'].' </a> </p>';
				$dtas .= '<ul id="c_i" style="padding-left: 0px; "><li>';
				$dtas .= '<a href="'.$config['sys']['pag'].$i["id"].'">';
				$dtas .= '<img  src="'.$i['imgico'].'" class="imgico"> </a>';
				$dtas .= '<p style=" margin-bottom: 7px;  margin-top: 7px; "> '.$i['sumary'].' </p>';
				$dtas .= "</li></ul>";
				$dtas .= '</li>';
				echo $dtas;
			}
		?>
		
	</ul>
	
</TD>
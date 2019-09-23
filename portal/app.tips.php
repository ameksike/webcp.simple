
<style type="text/css">
    .demo-gallery ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    .demo-gallery li{
        max-width: 100%;
        min-width: 100%;
    }
    .demo-gallery img{
      max-width: 100%;
      min-width: 100%;
    }
    
    .demo-gallery > ul {
      margin-bottom: 0;
    }
    .demo-gallery > ul > li {
        float: left;
        margin-bottom: 15px;
        margin-right: 20px;
        width: 200px;
    }
    .demo-gallery > ul > li a {
      border: 3px solid #FFF;
      border-radius: 3px;
      display: block;
      overflow: hidden;
      position: relative;
      float: left;
    }
    .demo-gallery > ul > li a > img {
      -webkit-transition: -webkit-transform 0.15s ease 0s;
      -moz-transition: -moz-transform 0.15s ease 0s;
      -o-transition: -o-transform 0.15s ease 0s;
      transition: transform 0.15s ease 0s;
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
      width: 100%;
    }
    .demo-gallery > ul > li a:hover > img {
      -webkit-transform: scale3d(1.1, 1.1, 1.1);
      transform: scale3d(1.1, 1.1, 1.1);
    }
    .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
      opacity: 1;
    }
    .demo-gallery > ul > li a .demo-gallery-poster {
      background-color: rgba(0, 0, 0, 0.1);
      bottom: 0;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      -webkit-transition: background-color 0.15s ease 0s;
      -o-transition: background-color 0.15s ease 0s;
      transition: background-color 0.15s ease 0s;
    }
    .demo-gallery > ul > li a .demo-gallery-poster > img {
      left: 50%;
      margin-left: -10px;
      margin-top: -10px;
      opacity: 0;
      position: absolute;
      top: 50%;
      -webkit-transition: opacity 0.3s ease 0s;
      -o-transition: opacity 0.3s ease 0s;
      transition: opacity 0.3s ease 0s;
    }
    .demo-gallery > ul > li a:hover .demo-gallery-poster {
      background-color: rgba(0, 0, 0, 0.5);
    }
    .demo-gallery .justified-gallery > a > img {
      -webkit-transition: -webkit-transform 0.15s ease 0s;
      -moz-transition: -moz-transform 0.15s ease 0s;
      -o-transition: -o-transform 0.15s ease 0s;
      transition: transform 0.15s ease 0s;
      -webkit-transform: scale3d(1, 1, 1);
      transform: scale3d(1, 1, 1);
      height: 100%;
      width: 100%;
    }
    .demo-gallery .justified-gallery > a:hover > img {
      -webkit-transform: scale3d(1.1, 1.1, 1.1);
      transform: scale3d(1.1, 1.1, 1.1);
    }
    .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
      opacity: 1;
    }
    .demo-gallery .justified-gallery > a .demo-gallery-poster {
      background-color: rgba(0, 0, 0, 0.1);
      bottom: 0;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      -webkit-transition: background-color 0.15s ease 0s;
      -o-transition: background-color 0.15s ease 0s;
      transition: background-color 0.15s ease 0s;
    }
    .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
      left: 50%;
      margin-left: -10px;
      margin-top: -10px;
      opacity: 0;
      position: absolute;
      top: 50%;
      -webkit-transition: opacity 0.3s ease 0s;
      -o-transition: opacity 0.3s ease 0s;
      transition: opacity 0.3s ease 0s;
    }
    .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
      background-color: rgba(0, 0, 0, 0.5);
    }
    .demo-gallery .video .demo-gallery-poster img {
      height: 48px;
      margin-left: -24px;
      margin-top: -24px;
      opacity: 0.8;
      width: 48px;
    }
    .demo-gallery.dark > ul > li a {
      border: 3px solid #04070a;
    }
    .home .demo-gallery {
      padding-bottom: 80px;
    }

    .imgtips{

      min-width: 427px !important;
      max-width: 427px !important;
      
    }

    .vi-lear{
      overflow: hidden;
    }
    .inf01{
      margin-bottom: 15px;
    }
    
    .atips{
      float: right;
      max-height: 285px;
      min-height: 285px;
    }
</style>

		
<div class="demo-gallery">
    <ul id="lightgallery" class="list-unstyled row">
      <?php
        for ($i=1; $i<60; $i++){
          $dtas  = '<li id="im'.$i.'" class="col-xs-6 col-sm-4 col-md-3 atips" style="display:none;" style="display:none;" data-responsive="./images/tips/'.$i.'.png" data-src="./images/tips/'.$i.'.png" data-sub-html="">';
          $dtas .= '<a href=""> <img class="img-responsive imgtips"  src="./images/tips/'.$i.'.png">  </a>';
          $dtas .= '</li>';
          echo $dtas;
        }
      ?>
    </ul>
</div>		

<script type="text/javascript">
	$(document).ready(function(){
		  $('#lightgallery').lightGallery();
	});

	var id = Math.floor(Math.random() * 60 + 1);  
	$("#im"+id).css("display", "");
</script>
		
<link href="lib/lightGallery/css/lightgallery.css" rel="stylesheet">
<script src="lib/lightGallery/lib/picturefill.min.js"></script>
<script src="lib/lightGallery/js/lightgallery-all.min.js"></script>
<script src="lib/lightGallery/lib/jquery.mousewheel.min.js"></script>

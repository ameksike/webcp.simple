<?php
			$out = include __DIR__."/article.list.php";
			print_r(json_encode(array( "data"=>$out)));
<?php

function is($surc, $dstn, $nw=100, $nh=100){
	list($wi, $he)=getimagesize($surc);
	
	$ni = imagecreatetruecolor($nw, $nh);
	$fi = finfo_open(FILEINFO_MIME_TYPE);
	$mie = finfo_file($fi, $surc);
	
	if($mie == 'image/jpeg') {
		$s = imagecreatefromjpeg($surc);
		imagecopyresized($ni,$s,0,0,0,0,$nw,$nh,$wi,$he);
		imagejpeg($ni,$dstn);
	}
	elseif($mie=='image/png'){
		$s = imagecreatefrompng($surc);
		imagecopyresized($ni,$s,0,0,0,0,$nw,$nh,$wi,$he);
		imagepng($ni,$dstn);
	}
	elseif($mie== 'image/gif'){
		$s = imagecreatefromgif($surc);
		imagecopyresized($ni,$s,0,0,0,0,$nw,$nh,$wi,$he);
		imagegif($ni,$dstn);
	}
	elseif($mie=='image/jpg'){
		$s = imagecreatefromjpg($surc);
		imagecopyresized($ni,src,0,0,0,0,$nw,$nh,$wi,$he);
		imagejpg($ni,$dstn);
	}
}
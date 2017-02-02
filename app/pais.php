<?php
if(isset($_POST) && !empty($_POST)){
	$id = $_POST['id'];
	$datos = file_get_contents("http://youtube.com/get_video_info?video_id=$id");
	parse_str($datos, $arr);
	$dataSet = explode(',', $arr['url_encoded_fmt_stream_map']);
	$finalUrl = "";
			for($i = 0; $i < sizeof($dataSet); $i++):
				if(strpos($dataSet[$i], "itag=".'17') !== FALSE):
					$finalUrl = $dataSet[$i];
				endif;
			endfor;
	 parse_str(urldecode($finalUrl),$data);
	 parse_str($arr['url_encoded_fmt_stream_map'],$dat);
	 parse_str($dat['url'],$date);
	 $datos_finales['original'] =$data;
	 $url = $data['url'];
	 $sig = $data['s'];
	 unset($data['type']);
	 unset($data['url']);
	 unset($data['sig']);
	 $link = str_replace('%2C', ',' ,$url.'&'.http_build_query($data).'&signature='.$sig);
	 $datos_finales['modificado'] =$data;
	 $link = str_replace('%2C', ',' ,$url.'&'.http_build_query($data).'&signature='.$sig);
	 $datos_finales['link_final'] = $link;
	 echo json_encode($datos_finales);
	 exit();
}


    /*$url = $data['url'];
		$sig = $data['s'];
    $link = str_replace('%2C', ',' ,$url.'&'.http_build_query($data).'&signature='.$sig);
    $code = 'wget --output-document=E:\Escritorio\descargas\opera\video.mp4 '."'$link'";
    shell_exec($code);
    echo "\n Download complete using WGET \n";*/
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<title>Pais0</title>
		<script type="text/javascript" src="<?php echo RUTA_JS?>jquery.min.js"></script>
		<script type="text/javascript" src="youtube.js">

		</script>
 	</head>
 	<body>
		<form id="youtube" action="youtube" method="post">
			<input type="text" name="id" value="">
			<input type="submit" name="" value="Enviar">
		</form>
 	</body>
 </html>

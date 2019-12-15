<?php
	$file = $_GET['file'];

	if($file == '') header('Location: /?file=readme.txt');

	highlight_file(__FILE__);

	$a = $_GET['keyA'];
	$b = $_GET['keyB'];

	if((isset($a) && !empty($a)) && (isset($b) && !empty($b)))
	{
		if(($a != $b) && (md5($a) == md5($b)))
		{
			echo file_get_contents($file);
		}
		else
		{
			echo('Two keys cannot match!');
		}
	}
	else
		echo('Oh! Missing two keys to open file.');
?>
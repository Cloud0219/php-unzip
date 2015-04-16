<?php
error_reporting('E_ALL');
$zip = new ZipArchive;
$path = "test_zip.zip";

if ($zip->open($path ) === TRUE)
{
	$result = $zip->extractTo('unzip');
	$zip->close();
	if($result) {
		echo "success";
	}else{
		echo "failed, check director permission";
	}
	
}else {
	echo "failed";
}


?>
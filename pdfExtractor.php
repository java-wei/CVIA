<?php 


function extractPDF($file_path) {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		$file_path = convert_path($file_path);
		return shell_exec("D:\cygwin\bin\bash.exe --login  -c 'pdf2txt.py $file_path'");
	} else {
    	return shell_exec("pdfminer/build/scripts-2.7/pdf2txt.py $file_path");
	}
}

function convert_path($path) {
  $path = str_replace('\\','/', $path);
  $path = str_replace(' ','\ ', $path);
  $pieces = explode(":", $path, 2);
  return "/cygdrive/".strtolower($pieces[0]).$pieces[1];
}

// echo extractPDF(dirname(__FILE__)."\CVs\LinkedIn\Desmond Lim.pdf");
?>
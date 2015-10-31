<?php 


function extractPDF($file_path) {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		return shell_exec("D:\cygwin\bin\bash.exe --login  -c 'pdf2txt.py $file_path'");
	} else {
    	return shell_exec('pdf2txt.py $file_path');
	}
}


// echo extractPDF('/cygdrive/d/xampp/htdocs/CVIA/CVs/LinkedIn/RussellOng.pdf');

?>
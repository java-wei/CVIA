<?php 


function extractPDF($file_path) {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		return shell_exec("D:\cygwin\bin\bash.exe --login  -c 'pdf2txt.py $file_path'");
	} else {
    	return shell_exec("pdfminer/build/scripts-2.7/pdf2txt.py $file_path");
	}
}


echo extractPDF('/Users/wenyiran/Documents/WenYiran_Resume.pdf');

?>
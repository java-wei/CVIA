<?php
require_once('../model/db.php'); 
require_once('../includes/fpdf17/fpdf.php'); 

$result = dbSelect(CV_TABLE, "WHERE cv_id = ".$_GET['id']);
$row = mysql_fetch_assoc($result);
$cv_description = $row['cv_description'];

$text_file = "testFile.txt";
$fh = fopen($text_file, 'w') or die("can't open file");

fwrite($fh, $cv_description);
fclose($fh);

class PDF extends FPDF
{

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Text color in gray
        $this->SetTextColor(128);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    }

    function ChapterTitle($num, $label)
    {
        // Arial 12
        $this->SetFont('Arial','',12);
        // Background color
        $this->SetFillColor(200,220,255);
        // Title
        $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
        // Line break
        $this->Ln(4);
    }

    function ChapterBody($file)
    {
        // Read text file
        $txt = file_get_contents($file);
        // Times 12
        $this->SetFont('Times','',12);
        // Output justified text
        $this->MultiCell(0,5,$txt);
        // Line break
        $this->Ln();
        // Mention in italics
        $this->SetFont('','I');
        //$this->Cell(0,5,'(end of excerpt)');
    }

    function PrintChapter($num, $title, $file)
    {
        $this->AddPage();
        //$this->ChapterTitle($num,$title);
        $this->ChapterBody($file);
    }
}

$pdf = new PDF();
$pdf->SetAuthor('CViA');
$pdf->PrintChapter(1,'A PDF TEST',$text_file);
$pdf->Output();

unlink($text_file);

?>

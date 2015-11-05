<!DOCTYPE html>
<html>
<body>
<?php 
$str = "Praveen Deorani
Research Assistant E-mail: deorani@gmail.com; elepd@nus.edu.sg
Electrical and Computer Engineering Address: Blk 12, #07-01, Jalan Lempeng
National University of Singapore Phone: +65 98632702
KEY QUALIFICATIONS
· Strong programming skills and analytic capability
· Expertise in statistical and mathematical modeling
· Skilled in machine learning and data mining
COMPUTER SKILLS
· Programming languages: Python, R, Java, Ruby, Common Lisp, C/C++
· Software tools: Matlab, Octave, Origin, LabVIEW, AutoCAD, MS Office
· Expertise in Unix based systems and shell programming
EDUCATION
· PhD in Electrical and Computer Engineering GPA: 4.58/5
National University of Singapore (Jan 2015)
Title: “Magnetization dynamics in spin orbit coupled systems”
· M.Sc. (Integrated) in Physics (July 2010) GPA: 7.3/10
Indian Institute of Technology, Kanpur
· Independent (coursework completed in MOOC)
1 – Learning from data, EDX (Caltech.)
2 – Statistical inference, Coursera (John Hopkins University)
3 – Machine learning, Coursera (Stanford University)
4 – R programming, Coursera (John Hopkins University)
WORK EXPERIENCE
· Research Scholar Jan 2011 – present
Spin and Energy Laboratory, National University of Singapore
 Developed simulations and computational methods for various research projects
 Designed and conducted nanofabrication experiments for spintronic devices
 Mentored junior students and taught undergraduate modules
· Research Assistant Aug 2009 – Oct 2010
Low Temperature Physics Laboratory, Indian Institute of Technology, Kanpur
 Developed Internet based labs
 Researched spin injection into metals
· Summer Internship June 2008 – July 2008
Laboratory of Photonics and Interfaces, Ecole Polytechnique de Lausanne, Switzerland
 Researched electro-catalytic activity of a Ruthenium complex in a PEFC electrode
EXPERIMENTAL SKILLS
· Nanofabrication skills: photolithography, Ion-milling, Deposition
· Electrical transport measurements
OTHER SCHOLASTIC ACHIEVEMENTS
· Selected for 6 presentations in international conferences from 2012 – 2014 (oral and poster)
· Recipient of NUS research scholarship (2011-2014)
· Recipient of CBSE Merit scholarship (2005-2010)
· Secured all India rank 506 in IIT JEE 2005 (top 0.1 %)
EXTRA CURRICULARS AND RESPONSIBILITIES
· Member of the badminton team of National University of Singapore (NUS)
· Member of the badminton team of Indian Institute of Technology Kanpur and captain during the
period of Mar 08 – Mar 09
· Festival coordinator of ‘Josh’ 09, the annual IIT Kanpur sports festival
· General Secretary of Games and Sports Council, IIT Kanpur (Oct 08 - Dec 08)
PUBLICATIONS
· Praveen Deorani, Hyunsoo Yang, “Role of spin mixing conductance in spin pumping:
Enhancement of spin pumping efficiency in Ta/Cu/Py structures”, Applied Physics Letters, 2013
· Praveen Deorani, JH Kwon, Hyunsoo Yang, “Nonreciprocity engineering in magnetostatic spin
waves”, Current Applied Physics, 2014
· Praveen Deorani, Jaesung Son, Karan Banerjee, Nikesh Koirala, Matthew Brahlek, Seongshik
Oh, Hyunsoo Yang, “Observation of inverse spin Hall effect in bismuth selenide”, Physical
Review B, 2014
· SS Mukherjee, Praveen Deorani, JH Kwon, Hyunsoo Yang, “Attenuation characteristics of spinpumping
signal due to traveling spin waves”, Physical Review B, 2012
· JH Kwon, SS Mukherjee, Praveen Deorani, M Hayashi, and Hyunsoo Yang, “Characterization
of magnetostatic surface spin waves in magnetic thin films: evaluation for microelectronic
applications”, Applied Physics A, 2013
· Xuepeng Qiu, Kulothungasagaran Narayanapillai, Yang Wu, Praveen Deorani, Xinmao Yin,
Andrivo Rusydi, Kyung-Jin Lee, Hyun-Woo Lee, Hyunsoo Yang, “Spin-orbit torque engineering
via oxygen manipulation”, Nature nanotechnology, 2015
· Xuepeng Qiu, Praveen Deorani, Kulothungasagaran Narayanapillai, Ki-Seung Lee, Kyung-Jin
Lee, Hyun-Woo Lee, and Hyunsoo Yang , “Angular and temperature dependence of current
induced spin-orbit effective fields in Ta/CoFeB/MgO nanowires”, Scientific Reports, 2014
· Li Ming Loong, Jae Hyun Kwon, Praveen Deorani, Chris Nga Tung Yu, Atsufumi Hirohata, and
Hyunsoo Yang, “Investigation of the temperature-dependence of ferromagnetic resonance and
spin waves in Co2FeAl0.5Si0.5”, Applied Physics Letters, 2014
· Yi Wang, Praveen Deorani, Xuepeng Qiu, JH Kwon, and Hyunsoo Yang, “Determination of
intrinsic spin Hall angle in Pt”, Applied Physics Letters, 2014
· Li Ming Loong, Xuepeng Qiu, Zhi Peng Neo, Praveen Deorani, Yang Wu, Charanjit S. Bhatia,
Mark Saeys, and Hyunsoo Yang, “Strain-enhanced tunneling magnetoresistance in MgO
magnetic tunnel junctions”, Scientific Reports, 2014";

   function htmlizestring($a){
    $lastPos = 0;
    while (($lastPos = strpos($a, "@", $lastPos))!== false) {
            $b4 = stristr($a,"@",true);
            $b4pos = strripos($b4," ")+1;
            $b4 = trim(substr($b4,$b4pos));
            $after = stristr($a,"@");           
            if(substr_count($after, " ") == 0){
                $after=rtrim($after," .,");
            }else{
                $after=trim(stristr($after," ",true));
            }
            $email = $b4.$after;
            echo $email;
            $lastPos = $lastPos + 1;   
        }   
   }
function extract_name($str) {
    $str = strip_tags($str);
    $Name = null;
    foreach(preg_split('/([^A-Za-z0-9üß\-\@\.\(\)\& .])+/', $str) as $token) {
        if(preg_match('/([A-Za-z\&.])+ ([A-Za-z.])+/', $token) && !preg_match('/([A-Za-zß])+ ([0-9])+/', $token)){
            //echo("N:$token<br />");
            $Name = $token;
            echo $Name;
        }
    }
}

function matching($cv, array $arr){
    $counter = 0;
    foreach($arr as $a) {
        if (stripos($cv,$a) !== false){
            echo $a;
            $counter++;
        }
    }
    echo $counter;
}
function findPhoneNumber($str){
    $str = strip_tags($str);
    $Number = null;
    foreach(preg_split('/([^A-Za-z0-9üß\-\@\.\(\)\& .])+/', $str) as $token) {
        if(preg_match('/([A-Za-z\&.])+ ([A-Za-z.])+/', $token) && !preg_match('/([A-Za-zß])+ ([0-9])+/', $token)){
            //echo("N:$token<br />");
            $Number = $token;
            echo $Number;
        }
    }
}

//extract_name($str);
findPhoneNumber($str);
$keywords = array("Xuepeng Qiu", "Praveen Deorani");
//matching($str, $keywords);
//htmlizestring($str);
?>
</body>
</html>
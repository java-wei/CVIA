<!DOCTYPE html>
<html>
<body>
<?php 
require_once('includes/config.php'); 

$CV_id = $_GET['cv'];
$job_id = $_GET['job'];

# Fetch the job keywords
$cv_description = $_SESSION['cv_description'][$CV_id];
$sql = "SELECT * FROM Job WHERE job_id = ".$job_id;
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

$job_keyword= $row['job_keyword'];
$job_keyword_string = explode(",", $job_keyword);

$importance = $row['keyword_importance'];
$importance_string = explode(",", $importance);


$fullMark = 0;
foreach ($job_keyword_string as $index => $keyword) {
    $job_keyword_arr[$keyword] = $importance_string[$index];
    $fullMark += $importance_string[$index];
}

# Extract the cv information
$cv_email = findEmail($cv_description);
$cv_phone = findPhoneNumber($cv_description);
$cv_name = findName($cv_description);
$cv_description = $_SESSION['cv_description'][$CV_id];

$result = matchingJobAndCV($cv_description, $job_keyword_arr);
foreach ($result as $key => $value) {
    $matched_keyword = $key;
    $grade = $value;
}
$percentage = round($grade / $fullMark * 100, 2);


# Update the cv information in database
$sql = "UPDATE ".CV_TABLE." SET cv_keyword = '$matched_keyword', cv_name = '$cv_name', cv_phone = '$cv_phone',
        cv_email = '$cv_email', cv_grade = '$percentage' WHERE cv_id = '$CV_id';";

$result = mysql_query($sql);



function findEmail($a){
    $lastPos = 0;
    // while (($lastPos = strpos($a, "@", $lastPos))!== false) {
    $b4 = stristr($a,"@",true);
    $b4pos = strripos($b4," ")+1;
    $b4 = trim(substr($b4,$b4pos));
    $after = stristr($a,"@");           
    if(substr_count($after, " ") == 0){
        $after=rtrim($after," .,");
    }else{
        $after=trim(stristr($after," ",true));
    }
    $email = removeLastOccurence($b4.$after, ';');
    return $email;
}

function findName($str) {
    $pieces = explode("\n", $str, 2);
    if ($pieces[0] === " ") {
        $regex = '(\A[\w\s]+\n)';
        preg_match_all($regex, $str, $matches);
        if(isset($matches) and isset($matches[0]) and $matches[0] !== []) {
            return $matches[0][0];
        } else {
            return null;
        }
    } else {
        return $pieces[0];
    }
    
}


function findPhoneNumber($str){

    $regex = '((6|8|9)\d{3}\s*-?\s*\d{4})'; 
    preg_match_all($regex, $str, $matches);

    if(isset($matches) and isset($matches[0]) and $matches[0] !== []) {
        return $matches[0][0];
    } else {
        return null;
    }
}

function matchingJobAndCV($cv, $arr){
    $mark = 0;
    $matched_keyword = "";

    foreach($arr as $k => $v) {
        if (stripos($cv,$k) !== false){
            $mark += $v;
            $matched_keyword = $matched_keyword.$k.", ";
        }
    }

    $matched_keyword = removeLastOccurence($matched_keyword, ", ");
    $result[$matched_keyword] = $mark;
    return $result;
}

function removeLastOccurence($subject, $search){
    $index = strripos($subject,$search);
    if($index !== false){
        $subject = substr($subject, 0, $index);
    }

    return $subject;
}

header('Location: jobPage.php?job='.$job_id.'&cv='.$CV_id.'&status=success');
?>
</body>
</html>
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
$job_keyword_string = $row['job_keyword'];
$job_keywords = explode(",", $job_keyword_string);

# Extract the cv information
$cv_email = findEmail($cv_description);
$cv_phone = findPhoneNumber($cv_description);
$cv_name = findName($cv_description);
$cv_description = $_SESSION['cv_description'][$CV_id];

echo "$cv_email     $cv_phone            $cv_name";

exit(0);
$matching_keywords = matchingJobAndCV($cv_description, $job_keywords);
$grades = count($matching_keywords) / count($job_keywords) * 100;

# Update the cv information in database
$sql = "UPDATE ".CV_TABLE." SET cv_keyword = '$matching_keywords', cv_name = '$cv_name', cv_phone = '$cv_phone',
        cv_email = '$cv_email' WHERE cv_job_id = '$job_id';";

// var_dump($sql);

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
    $email = $b4.$after;
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
    $counter = 0;
    foreach($arr as $a) {
        if (stripos($cv,$a) !== false){
            $matching["$a"] = $a;
        }
    }
    return matching;
}



?>
</body>
</html>
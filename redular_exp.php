<?php 
$string = "php is the scripting php language of choice.";

// $exp = preg_match_all("/php|the/",$string,$array);
// $exp = preg_match_all("/[the]/",$string,$array);
$exp = preg_match_all("/[a-m]/",$string,$array);
if($exp){
    echo "A match was found";
}else{
    echo "A match was not found";
}

echo "<pre>";
print_r($array);
echo "</pre>";

//functions for regular expression
$string = "PHP is the web scripting language of choice";

$pattern = "/PHP/i";

$replacement = "Javascript";
echo preg_replace($pattern,$replacement,$string);

?>
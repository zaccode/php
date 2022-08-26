<?php
// $var = "ahoo's baba";
//    var_dump( filter_var($var, FILTER_VALIDATE_INT));

//    $option = array("options"=>array("min_range"=>20,"max_range"=>50));

//    if(filter_var($var,FILTER_VALIDATE_EMAIL)){
//     echo $var. "is an integer <br>";
// }else{
//        echo $var. "is not an integer <br>";

//    }


//    //Sanitize Filter
// //    echo filter_var($var,FILTER_SANITIZE_EMAIL)
//    echo filter_var($var,FILTER_SANITIZE_MAGIC_QUOTES)


   //filter_var_array();
   $arr = array(
            "stname" => "Ram Kumar",
            "stmark" => "90",
            "stemail" => "ram kumar@example.com",

   );

   $filter = array(
        "stname" => array(
                    "filter" =>FILTER_SANITIZE_STRING,
                    "flags " => FILTER_FLAG_STRIP_HIGH
        ),
        "stmark" =>array(
                    "filter" => FILTER_VALIDATE_INT,
                    "options" => array(
                        "min_range" => 1,
                        "max_range" => 100
                    )
        ),
        "stemail" => FILTER_SANITIZE_EMAIL

   );

   echo "<pre>";
   print_r (filter_var_array($arr,$filter));
   echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    E-mail: <input type = "text" name = "email" >
    <input type = "submit" name = "submit" value = "submit">
    </form>
    <br>
    <?php
        if($_REQUEST['submit']){
            // echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);

            if(filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
                echo "Email is valid";
            }else{
                echo "Email is not valid";
            }
        }
    ?>
</body>
</html>
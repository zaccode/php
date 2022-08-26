<?php
// echo readfile('readme.txt');

// $f = fopen('readme.txt',"r");
// echo fread($f,100);

// echo file_put_contents("readme.txt","this is new text.",FILE_APPEND | LOCK_EX);

// echo file_get_contents("readme.txt",FALSE,NULL,50,100);

// echo "<pre>";
// print_r(glob("[li]*"));
// echo "</pre>";

    // echo getcwd() . "<br>";
    
    // chdir("css");


    // $dir ="..";
    // echo "<pre>";
    // print_r(scandir($dir));
    // echo "</pre>";

    $dir = ".";
    if(is_dir($dir)){
        if($d = opendir($dir)){
            while($file = readdir($d)){
                echo "filename :" . $file ."<br>";

            }
            closedir($d);
        }
    }

?>

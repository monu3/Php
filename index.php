<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            $title = "monu siddiki";
            $surname =  10;
            $bool = true;
            echo  $bool?"hello world!":$title.$surname;
        ?>
    </title>
    <script>
        console.log("<?php echo "megha mero ho "?>");                                  
    </script>
    <style>
        body{
            background:<?php echo "grey"?>;
            color:<?php echo "white"?>;
        }
    </style>
</head>
<body>

<button style="color: <?php echo "green";?>"> CLick me </button>
<?php 
    $name ="monu siddiki";
    $word = "Hello world 123 asd";
    echo "the length is : ".strlen($name)."<br/>";
    echo "Total word  is : ".str_word_count($word)."<br/>";
    echo "the reverse is : ".strrev($name)."<br/>";


    define("API_URL","https://example.com");    ///constant declaration
    echo API_URL;


    //it helps to print all data type like array ,object and soon 
    print_r("current port : ".$_SERVER['SERVER_PORT']."<br/>");   //super global variable
    print_r("current server name : ".$_SERVER['SERVER_NAME']."<br/>");   //super global variable
    print_r("current file : ".$_SERVER['PHP_SELF']."<br/>");   //super global variable
    print_r("current http user agent  : ".$_SERVER['HTTP_USER_AGENT']."<br/>");   //super global variable

    //class 
    class bike{
        function model(){
            $model_name = "royal enfield";
            echo "Bike Model : ".$model_name;
        }
    }
    //Object
    $obj=new bike();
    $obj->model();
?>


<!-- if else  -->
<?php 

$mark = 50;
if($mark>60){
    echo "the student is pass !!"."<br/>";
}
elseif($mark<20){
    echo "the is never ever giving exam !!"."<br/>";
}
else{
    echo "the student is fail !!"."<br/>";
}

?>


<!-- switch  -->
<?php

function getDayOfWeek($num){

    switch($num){
        case 1:
            return  "Sunday !! "."<br/>";
            break;
        case 2:
            return "Monday !! "."<br/>";
            break;
        case 3:
            return "tuesday !! "."<br/>";
            break;
        case 4:
            return "wednesday !! "."<br/>";
            break;
        case 5:
            return "thuesday !! "."<br/>";
            break;
        case 6:
            return "friday !! "."<br/>";
            break;
        case 7:
            return "saturday !! "."<br/>";
            break;
        default:
        return "input is no valid !!"."<br/>";
    }
}

$day = getDayOfWeek(4);
echo "the day is : ".$day;


?>

<!-- looping  -->

<?php

for($i=1;$i<10;$i++){
    echo "this is loop ".$i."<br/>" ;
}

$mark = 5;
while($mark>0){
    echo "this is while loop ".$mark."<br/>";
    $mark --;
}

do{
    echo "this is do while loop ".$mark."<br/>";
}

?>


    
</body>
</html>
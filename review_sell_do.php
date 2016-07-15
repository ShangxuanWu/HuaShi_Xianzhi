<meta charset="UTF-8"> 
<?php
 
$con1 = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

if(!$con1){ 

    die('could not connect:'.mysql_error());
    
}

mysql_select_db(SAE_MYSQL_DB,$con1);

mysql_set_charset("utf8_general_ci");  

$v=$_POST['reviewed_things'];//這樣取到的是一個數組，4個checkbox的value

echo "以下编号的闲置已经被审核通过，将会显示在粉丝页面上。请关闭此页面。<br>";

foreach ($v as $value)//再循環取出

{

    //    echo $value;
    
    //echo "<br>";
        $sql1 = "update `test` set review_ok = 1 where id = $value";
        $query1 = mysql_query($sql1) or die(mysql_error());  
    echo $value;
    echo "<br>";
    //echo $sql1;
    //echo "<br>";
}



//echo $sql1;
//                                    
     mysql_close($con1);
//     echo "<script>alert('删掉了~现在带你返回审核页面~');</script>";
//	 echo "<script>window.location.href='review.php'</script>";
	 
?>
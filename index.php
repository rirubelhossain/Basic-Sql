<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db = "backend_db";


$conn = new mysqli($servername , $username , $pass , $db) ;

if($conn -> connect_error){
    die("not connected");
}
else{
    echo "yes connected";
}

echo "<br><br>";

$sql = "CREATE database backend_db";

$sql_1 = "CREATE TABLE test(
    id int(30) unsigned  auto_increment primary key ,
    first_name varchar(30) not null ,
    last_name varchar(30) not null ,
    email varchar(30) not null ,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$sql_3 = "CREATE TABLE test_4(
    id int(30) unsigned  auto_increment primary key ,
    first_name varchar(30) not null ,
    last_name varchar(30) not null ,
    email varchar(30) not null ,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


/*
$sql_2 = "INSERT into test(first_name , last_name , email )values('imran' , 'Hossain' , 'su94@gmail.com')";
$sql_3 = "SELECT id , first_name , last_name from test";
$sql_4 = "SELECT avg(id) as value_ from test ";

$sql_5 = "UPDATE test set first_name = 'rasel'  where id = 1 "; 
$sql_5 = "UPDATE test set first_name = 'Amin'  where id = 2 "; 
$sql_6 = "UPDATE test set last_name = 'islam' where first_name = 'Amin' "; 
$sql_7 = "DELETE from test where id = 1 "; 
$sql_8 = "SELECT max(id) as id_result from test ";
*/

$result = $conn->query($sql_3);

//$count = 0 ; 




if( $result === true)
{
    echo "yes table is updated";
}
else{
    echo "not updated";
}
/*
if($result -> num_rows > 0 )
{
    while( $a = $result -> fetch_assoc())
    {   
   //     ++$count ;
        echo "<br> The minimum ID =  : " . $a["id_result"]. "<br>";
    }
}

echo "the total value is = ".$count;

/*

if($result ->num_rows > 0 )
{
    while($var = $result -> fetch_assoc())
    {   
        ++$count ;
        echo "<br> ID : " . $var["id"] . "First_Name : ". $var["first_name"] ."<br>". "last name " . $var["last_name"]."<br>";
    }
}else{
    echo "0 Result";
}
echo "The value is = ". $count; 
*/ 
/*
if($result === true )
{
    echo "yes created";
}
else{
    echo "not created";
}
*/
$conn->close() ;    


?>
<html data-page="construction">
    <head>
        <meta charset="UTF-8">    
        <meta http-equiv="content-type" content="text/html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Under Construction</title>
    </head>
    <body>
<?php
include 'header.php';

$servername = "mysql.nplipkin.myjino.ru";
$username = "046508412_agr";
$password = "SKdhf208*@7869";
/*
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$result = $conn->query("INSERT INTO test_table VALUES ('Ramzes', 18);");

echo $result;

if($result){
    while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['Username']}</p>";
    }
}
else 
    echo "<br/>No result";*/

    $link = mysqli_connect($servername, $username, $password , 'nplipkin_agregaster');

if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

echo 'Connected... ' . mysqli_get_host_info($link) . "\n";



$sql = 'SELECT Username FROM test_table';
echo $sql;
$result = $link->query($sql);
if (!$result) {
    echo 'Error: ', $link->error;
}
else{
    
while ($row = $result->fetch_row()) {
        printf ($row[0]);
    }
}


?>


            <h1>Under Construction</h1>
            <p>Если вы являетесь администратором этого сайта, вам необходимо заменить эту страницу своими файлами.</p>
        <div id="root"></div>
    </body>
</html>



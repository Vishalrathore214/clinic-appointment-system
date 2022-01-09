<html>
    <head>
        <title>Appointments</title>
        <style>
            body{
                background: skyblue;
            }table{
                background-color: greenyellow;
            }tr{
                background: white;
            }
        </style>
    </head>
<?php
$servernsme = "localhost";
$username = "root";
$password = "";
$database = "clinic";

$conn = mysqli_connect($servernsme, $username, $password, $database);

if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}else{
   // echo "connection was successful<br>";
}

$sql = "SELECT * FROM appointment ORDER BY sno DESC";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
//echo $num;
echo "<br>";

if($num > 0){
    ?>
    <h1 align="center"><b>Appointments...</b></h1><br>
    <table border="10" cellspacing="10" cellpadding="10" width=80% align="center">
        <tr>
        <th width=16%>ADDRESS</th>
        <th width=8%>PHONE</th>
        <th width=12%>EMAIL</th>
        <th width=8%>NAME</th>
        <th width=4%>GENDER</th>
        <th width=4%>AGE</th>
        <th width=12%>DISEASE</th>
        <th width=10%>DATE</th>
        <th width=6%>SLOT</th>
       </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                 <td>".$row['address']."</td>
                 <td>".$row['phone']."</td>
                 <td>".$row['email']."</td>
                 <td>".$row['name']."</td>
                 <td>".$row['gender']."</td>
                 <td>".$row['age']."</td>
                 <td>".$row['disease']."</td>
                 <td>".$row['date']."</td>
                 <td>".$row['slot']."</td>
              </tr>     
              ";
        //echo $row['name']." ".$row['phone']." ".$row['email']." ".$row['address']." ".$row['gender']." ".$row['age']." ".$row['disease']." ".$row['date']." ".$row['slot'];
       // echo "<br>";
    }
}
?>
</table>
</html>
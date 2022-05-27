<?php

$link = mysqli_connect( hostname: "localhost", username: "root",password: "", database:"motor");


$sql= "SELECT * FROM `details`";

#execute query
$result = mysqli_query($link,$sql);

if(result){
$data = mysqli_num_rows($result);

if (data>0){
echo "<h3>The Data</h3>";
echo "<table>";
echo "<tr>";
echo "<th># </th>";
echo "<th>First Name</th>";
echo "<th>Second Nmae </th>";
echo "<th>Phone number </th>";
echo "</tr>";

while ($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["first name"]."</td>";
    echo "<td>".$row["second name"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["phone number"]."</td>";
    
}
echo "</table>";


}else{
    echo "No records were found in the database";
}



}else{
    echo "Error executing query $sql.mysqli_error($link)";
}
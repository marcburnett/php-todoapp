<?php 
include "db_connect.php";
if(isset($_GET['id'])) {
 $id = $_GET['id'];
 db();
 global $link;
 $query = "SELECT todoTitle, todo, date FROM todos WHERE id = '$id'";
 $result = mysqli_query($link, $query);
 if(mysqli_num_rows($result)==1){
 $row = mysqli_fetch_array($result);
 if($row){
 $title = $row['todoTitle'];
 $description = $row['todo'];
 $date = $row['date'];
echo "
 <h2>$title</h2>
 <h3>Description</h3>
 <p>$description</p>
 <small>$date</small>
 ";
 }
 }else{
 echo 'no todo';
 }
}
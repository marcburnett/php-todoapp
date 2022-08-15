<html>
<head>
 <title>Create Todo list</title>
</head>
<body>
<h1>Create Todo List</h1>
<form method="post" action="create.php">
 <p>Todo title: </p>
 <input name="todoTitle" type="text">
 <p>Todo description: </p>
 <input name="todoDescription" type="text">
 <br>
 <input type="submit" name="submit" value="submit">
</form>

<p><a href="index.php">View Todos</a></p>

</body>

</html>



<?php

include "db_connect.php";


if(isset($_POST["submit"])) {
    $title = $_POST["todoTitle"];

    $description = $_POST["todoDescription"];
    if(!$title){
        echo "You must enter a title";
        
    }
}

// return;

echo $title;
echo $description;

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$link = mysqli_connect("localhost", "root", "", "todolist");
global $link;
 
// Check connection
if($link === FALSE){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO todos (todoTitle, todo, date) VALUES ('$title', '$description', now())";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

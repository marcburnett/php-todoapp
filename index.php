<?php
include "db_connect.php"; ?>
<html>
<head>
 <title>my todos</title>
</head>
<body>
<h2>
 Next on my agenda
</h2>
<p><a href="create.php">Add Todo</a></p>
<?php
db();
global $link;
$query = "SELECT id, todoTitle, todo, date FROM todos";
$result = mysqli_query($link, $query);
//check if there’s any data inside the table
if(mysqli_num_rows($result) >= 1){
 while($row = mysqli_fetch_array($result)){
 $id = $row['id'];
 $title = $row['todoTitle'];
 $date = $row['date'];
?>
<ul>
 <li><a href="detail.php?id=<?php echo $id?>"><?php echo $title ?></a>
</li> <?php echo "[[ $date ]]";?>
<button>Edit</button><button>Delete</button>
 </ul>
 
<?php
 }
}
?>
</body>
</html>
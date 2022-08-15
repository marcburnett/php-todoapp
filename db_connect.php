<?php
function db(){
    global $link;
    
   $link = mysqli_connect("localhost", "root", "", "todolist") or die("could not connect to database");
    
    return $link;
}

if(db()){
    echo "Hello, I am connected...";
}

?>
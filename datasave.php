<?php
    include "connect.php";
    $name=$_POST['name'];
    $course=(int)$_POST['course'];
    $department=$_POST['department'];
    $semester=$_POST['semester'];
    $rating=(int)$_POST['rating'];
    $comments=$_POST['comments'];
    $sql = "INSERT INTO tatable (name, course, department, semester, rating, comments)
      VALUES ('$name' , '$course', '$department', '$semester', '$rating', '$comments')";
    $update =$conn->prepare($sql);
    $update->execute();
    $conn = null;
?>

<html>
<head>
  <title>user update</title>
</head>
<body>
  <div>

  </div>
</body>
</html>

<?php
    include "connect.php";
    $sql= "SELECT * FROM tatable WHERE ";
    if($_POST['name'] != ''){
        $name=$_POST['name'];
        $sql.= "name = '$name' AND";
    }
    if($_POST['course'] != ''){
        $course=(int)$_POST['course'];
        $sql.= " course = '$course' AND";
    }
    if($_POST['department'] != ''){
        $department=$_POST['department'];
        $sql.= " department = '$department' AND";
    }
    if($_POST['semester'] != ''){
        $department=$_POST['semester'];
        $sql.= " semester = '$semester' AND";
    }
    $sql=substr($sql, 0, strlen($sql)-4);
    $update = $conn->prepare($sql);
    $update->execute();
    $results = $update->fetchAll();
    $conn = null;
?>

<?php
foreach ($results as $temp) {
  echo "<tr>";
    echo "<td>".$temp['name']."</td> ";
    echo "<td>".$temp['course']."</td> ";
    echo "<td>".$temp['department']."</td> ";
    echo "<td>".$temp['semester']."</td> ";
    echo "<td>".$temp['rating']."</td> ";
    echo "<td>".$temp['comments']."</td> ";
  echo "</tr>";
}
?>

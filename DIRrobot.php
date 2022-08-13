<html>
<body>
  <form action="direction.php" method="post">
  </form>
<style>
body{
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Segoe UI", sans-serif;
  background: #111;
  font-size: 500%;
  color: #f6f6f6;

}
</style>
</body>
</html>
<?php
$SERVER ="localhost";
$username="root";
$password="";
$dbname="waad";

$conn=mysqli_connect($SERVER,$username,$password,$dbname);

if (isset($_POST["right"])) {
  echo "R";
 $query= "insert into path (direction) values('right')" ;
 mysqli_query($conn,$query);
} if(isset($_POST["left"])){
       echo "L";
      $query= "insert into path (direction) values('left')" ;
      mysqli_query($conn,$query);
}
if(isset($_POST["front"])){
       echo "F";
      $query= "insert into path (direction) values('front')" ;
      mysqli_query($conn,$query);
}
if(isset($_POST["back"])){
       echo "B";
      $query= "insert into path (direction) values('back')" ;
      mysqli_query($conn,$query);
}
if(isset($_POST["stop"])){
       echo "S";
      $query= "insert into path (direction) values('stop')" ;
      mysqli_query($conn,$query);
}

       ?>

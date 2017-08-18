<?php
$name=$_REQUEST['name'];
$pass=$_REQUEST['pwd'];
$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'citation'))
{
  die(mysqli_error($conn));
}
else
{
  $sql="SELECT * from Users where NAME='$name' and PASSWORD='$pwd'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    header('location:brython.php');  }
  else
  {
    echo "Invalid User!!! Please Register.";
  }
}
echo "<script>$('#UNMATCHED').modal('hide')</script>";
?>
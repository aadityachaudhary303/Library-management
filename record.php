    <?php
include ("connect.php");
if(isset($_POST["submit"])){
  $ID=$_POST["id"];
  $name=$_POST["name"];
  $address=$_POST["add"];
  $book=$_POST["book"];
  $sql="INSERT INTO crud(ID,Name,Address,Book Rented)
  VALUES('$ID','$name','$address','$book')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "data successful";
  }
  else{
    die(mysqli_error($conn));
  }

}
?>

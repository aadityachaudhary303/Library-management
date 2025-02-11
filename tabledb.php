
   <?php
session_start();
require("connect.php");


if(isset($_POST['delete']))
{
        $student_id = mysqli_real_escape_string($conn, $_POST['delete']);
        $query="DELETE FROM library WHERE ID='$student_id' ";
            $query_run = mysqli_query($conn, $query);

 if ($query_run) {
        $_SESSION['message'] = "Student Deleted successfully";
    } else {
        $_SESSION['message'] = "Student not deleted";
    }

    header('Location: index.php');
    exit(); 

}

if (isset($_POST['update'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["add"]);

    $query = "UPDATE library SET ID='$id', NAME='$name', EMAIL='$email', ADDRESS='$address' WHERE ID=$student_id";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Student updated successfully";
    } else {
        $_SESSION['message'] = "Student not updated";
    }

    header('Location: index.php');
    exit(); 
}


if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["add"]);

    
    $sql = "INSERT INTO library (ID, NAME, EMAIL, ADDRESS) VALUES ('$id', '$name', '$email', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Student registered successfully";
        header('Location: user.php');
        exit(); 
    } else {
        $_SESSION['message'] = "Student not registered";
        header('Location: user.php');
        exit();
    }
}
?>

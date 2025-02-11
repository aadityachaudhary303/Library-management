<?php
$server="localhost";
$user="root";
$password="";
$database="crud operation(2025)";

$conn=new mysqli($server, $user, $password, $database);

if($conn->connect_error)
{
    die("error".mysqli_connect_error($conn));

}




if (isset($_GET["id"])) {
    $student_id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * FROM library WHERE ID='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $student = mysqli_fetch_array($query_run);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Update Details</title>
            <style>
              body{
                background-image: url('s.jpg');
                background-repeat: no-repeat;
                background-size: cover;

        }
         .back {
                    font-size: 30px;
                    background-color: orange;
                    padding: 5px 10px;
                    border-radius: 5px;
                }
                .back a {
                    text-decoration: none;
                    color: white;
                    font-weight: bold;
                }
                .back:hover {
                    background-color: white;
                    color: orange;
                    transition: 0.4s ease;
                }
                .form {
                    width: 400px;
                    margin: auto;
                    padding: 20px;
                    border: 1px solid black;
                    border-radius: 10px;
                    text-align: center;
                    background-color:black;
                    position: relative;
                    top:100px;
                    left:240px;
                    color:white;
                }
                .form input {
                    width: 90%;
                    padding: 8px;
                    margin: 5px 0;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                }
                .b {
                    background-color: orange;
                    color: white;
                    padding: 10px 15px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                .b a{
        text-decoration: none;
        color:black;
        font-weight: bold;
}
                .b:hover {
                    background-color: darkorange;
                }   

                   </style>
        </head>
        <body>

            <div class="form">
                <h2>
                    <button class="back"><a href="index.php">Back</a></button><br>
                    Update Details
                </h2>

                <?php include('message.php'); ?>

                <form action="tabledb.php" method="POST">
                    <input type="hidden" name="student_id" value="<?=$student['ID'];; ?>">
                    <label>ID</label><br>
                    <input type="number" name="id" value="<?= $student['ID']; ?>"><br><br>
                     <label>NAME</label><br>
                    <input type="text" name="name" value="<?= $student['NAME']; ?>"><br><br>
                     <label>EMAIL</label><br>
                    <input type="email" name="email" value="<?=$student['EMAIL']; ?>"><br><br>
                     <label>ADDRESS</label><br>
                    <input type="text"  name="add" value="<?= ($student['ADDRESS']); ?>"><br><br>

                    <button type="submit" name="update" class="b">Update_Details</button>
                </form>
            </div>

        </body>
        </html>

        <?php
    } else {
        echo "<h4>No such ID found</h4>";
    }
}


mysqli_close($conn);
?>
<?php
require "connect.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>index</title>
    <style>
      .give{
        color:white;
        background-color:black;
        width:900px;
        position: relative;
        left:550px;
        right:50px;
        top:200px;
        bottom:50px;
      }
      .table th, .table td {
        color: white !important;
      }
      .b {
        width:150px;
        height:40px;
        background-color: lightseagreen;
        border:none;
        margin: 20px;
        font-size: 18px;
        border-radius: 10px;
        position: relative;
        left:150px;
        cursor:pointer;
        color: white;
      }
      .b:hover {
        background-color: white;
        color:orange;
        transition: 0.4s ease;
      }
      .b a {
        text-decoration: none;
        color:black;
        font-weight: bold;
      }
      .video-container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
      }
      video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .back-button {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        margin-top: 30px;
        text-decoration: none;
        font-size: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s;
        display: inline-block;
      }
      .back-button:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <div class="video-container">
      <?php include "message.php"; ?>
      <video autoplay loop muted playsinline>
        <source src="v.mp4" type="video/mp4">
      </video>
      <div class="give">
        <h4>Student Details <button class="b"><a href="user.php">Add New Student</a></button></h4>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>ADDRESS</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query="SELECT * FROM library";
            $query_run=mysqli_query($conn,$query);
            if(mysqli_num_rows($query_run)>0){
              foreach($query_run as $student){
            ?>
                <tr>
                  <td><?=$student['ID'];?></td>
                  <td><?=$student['NAME'];?></td>
                  <td><?=$student['EMAIL'];?></td>
                  <td><?=$student['ADDRESS'];?></td>
                  <td>
                    <a href="student-edit.php?id=<?=$student['ID'];?>" class="btn btn-success btn-sm">Update</a>
                    <form action="tabledb.php" method="POST" class="d-inline">
                      <button type="submit" name="delete" value="<?=$student['ID'];?>" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "<h5> No Record Found</h5> ";
            }
            ?>
          </tbody>
        </table>

        <!-- Back Button -->
        <a href="home.php" class="back-button">Back</a>

      </div>
    </div>
  </body>
</html>

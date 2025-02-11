<?php
     

?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>crude operation</title>
        <style> 
                 body{
                background-image: url('chat.webp');
              
        }
        
        .form{

width:500px;

height: 500px;

background:black;
position:relative ;

top: 20px;

left:800px;

border-radius: 10px;

padding: 25px;

}

.form h2{
width: 320px;

font-family: sans-serif;

text-align: left;

color: #ff7200;

font-size: 40px;

background-color: #fff;

border-radius: 10px;

margin: 2px;
padding:8px;
}
.form input{

width: 240px;

height: 35px;

background: transparent;

border-bottom: 1px solid #ff7200;

border-top: none;

border-right: none;

border-left: none;

color: #fff;

font-size: 15px;

letter-spacing: 1px;

margin-top: 30px;

font-family: sans-serif;
}
.form input:focus{
        outline: none;

}
::placeholder{
        color:white;
        font-family: aerial;
}
.b{
        width:240px;
        height:40px;
        background-color: orange;
        border:none;
        margin: 30px;
        font-size: 18px;
        border-radius: 10px;
        cursor:pointer;
        color: white;
}
.b:hover{
        background-color: white;
        color:orange;
        transition: 0.4s ease;
}
.b a{
        text-decoration: none;
        color:black;
        font-weight: bold;
}
.back{
        font-size: 30px;
}
.back a{
         text-decoration: none;
          
        color:black;
        font-weight: bold;


}
.back:hover{
        background-color: white;
        color:orange;
        transition: 0.4s ease;


}

</style>
</head>

  <body>
        
         
     
        <form action="tabledb.php" method="POST">
               <div class="form">
              
                       <h2> <button class="back"><a href="index.php">Back</a></button>
                       REGISTRATION </h2>
                      

                

                       <?php include('message.php');?>
                
                <input type="number" placeholder="Enter your ID" name="id" autocomplete="off" required ><br>
           
        
                <input type="text" placeholder="Enter your name" name="name" autocomplete="off" required><br>
                <input type="email" placeholder="Enter your email" name="email" autocomplete="off" required><br>
            
                <input type="text" placeholder="Enter your address" name="add" autocomplete="off" required><br>
            
           
            <button class="b" name="submit">Submit</button>
                                </div>




</form>
</body>
</html>
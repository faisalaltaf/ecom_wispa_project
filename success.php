<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
        .success-container {
            width:50%;
            position:absolute;
            top:30%;
            left:50%;
            transform:translate(-50%,-50%);
            color:#bdc3c7;
            font-weight:bold;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
      <div class="success-container">
        <?php
           if(isset($_GET["amount"]) && !empty($_GET["amount"])){
               ?>
            <h3>Your Transaction has been Successfully Completed</h3>
          <?php
           }
        ?>
      </div>  
</body>
</html>
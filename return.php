<?php
include 'connection.php';

$select_query = 'SELECT * FROM library';

$select_final_query = mysqli_query($con, $select_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Issue Book</title>

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .section{
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            display: flex;
        }
        .issue{
            /*border: 1px solid black;*/
            box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
            padding: 50px 20px 50px 20px; 
        }
        input{width:400px; margin-top: 20px; height: 40px; border-radius: 3px; outline: none; padding: 3px; font-size: 20px;}
        h3{text-align: center;}
        .btn{margin-top: 20px;}
        hr{text-align: center; width: 120px;}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="section">
        <div class="issue">
            <h3>Return Books</h3>
            <center><hr></center>
            
            <form action="returnvalidate.php" method="POST">
                <input type="text" name="id" placeholder="Book Id" autocomplete="off" required><br>
                <input type="date" name="return_date" placeholder="Return Date"><br>
                <a href="#"><button class="btn btn-warning"> Return Book</button></a>
            </form>
            <a href="issue.php"><button class="btn btn-success">Go for Issue Book</button></a>
            <a href="main.php"><button class="btn btn-primary">Main Page</button></a>
            
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
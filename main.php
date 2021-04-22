<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Library Management</title>
    <style>
        .section{
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
            margin-top: -100px;
        }
        .extra{
           
            padding: 10px;
            margin-top: -60px;
            overflow: hidden;
        }
        @keyframes moving {
            from {left: 0px; color: red;}
            to {left: 800px; color: green;}
        }
        .extra p{font-size: 15px;padding-top: 10px; animation-name: moving; animation-iteration-count: infinite; animation-direction: alternate-reverse; animation-duration: 6s; position: relative; font-weight: bold;}

        h2{font-weight: bold;}
        img{height: 150px; width: 260px; margin-top: -180px;}
        .account a{
            border: 1px soild black; padding: 4px;  text-decoration: none;
            font-weight: bold;font-size: 20px;
        }
        .account a:hover{color: red;}
        i{margin-right: 10px; font-size: 20px;}
        .manage a{border: 1px solid black; padding: 7px 10px 7px 10px ;  margin: 10px; font-size: 20px; border-radius: 3px; outline: none; text-decoration: none; font-weight: bold;}
        .manage a:hover{background-color: black; color: red; font-weight: bold;}
        hr{margin-top: -2px;}
        </style>
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <div class="navbar">
                <div class="logo">
                    <h2>Library Management</h2>
                </div>
                <div class="account">
                    <a href="#"><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>Login</a>
                    <a href="#"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Sign Up</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="section">
            <div class="manage">
                <center><img src="book.png" alt=""></center>
                <a href="issue.php"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Issue Book</a>
                <a href="return.php"><span><i class="fa fa-minus-circle" aria-hidden="true"></i></span>Return Book</a>
            </div>
        </div>
        <div class="extra">
            <p>This is a Library Management Websites Managed or Created By @DAY_WITH_SURYA Company</p>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
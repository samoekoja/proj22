<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="MyStyle.css">
    <script src="script.js"></script>
    <style>
        body{
            align-items: center;
        }
        h3{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }
        #DisplayBox{
            text-align: center;
            border: 5px solid black;
            border-radius: 5px;
            padding-left: 30px;
            margin-left: 40px;
        }
    </style>
</head>
</head>
<body class="jumbotron">
    <div >
        <h3>Welcome, User</h3>
    </div>
    <div class = "col-sm-4 login" id="DisplayBox">
        <p>Your Code is </p>
        <?php
        $codeopen = rand(1000, 9999);
        
        if (($codeopen % 6 == 0)){
            $DisplayCode = $codeopen;
        } else {
            $diff = $codeopen % 6;
            $DisplayCode = $codeopen - $diff;
        }
        
        echo $DisplayCode;
        ?>
    </div>
</body>
</html>
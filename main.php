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
</head>
</head>
<body class="jumbotron">
    <div >
        <h1>Welcome User</h1>
    </div>
    <div class = "col-sm-4 login">
        <p>Your Code is </p>
        <?php
        $codeopen = rand(0000, 9999);
        
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
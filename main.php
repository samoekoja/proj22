<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body class="jumbotron">
    <div>
        <h1>Welcome User</h1>
    </div>
    <div>
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
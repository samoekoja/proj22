<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="MyStyle.css">
    <script src="script.js"></script>
</head>
<body class="jumbotron">
    <div id = "login" class = "col-sm-4 login">
            <h3> Please login to Continue</h3>
            <form role="form" method="POST" action="index/index.php">
                <div class = "form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" required="required"  name = "username">     
                </div>
                <div class = "form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" required="required"  name = "password">     
                </div>   
                 <input type="Submit" value="LOG IN" name="login" class="btn btn-success btn-md">
                 <button type = 'reset' class="btn btn-md btn-danger">Clear</button><br><br>


              
             
            </form>
            
        </div>
    
    
</body>
</html>
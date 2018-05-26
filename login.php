
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>SecurityCam</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style type="text/css">
            body 
            {
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-position: center center;
            }
        </style>
    </head>
    <body>
        
            <div class="container">
            
                <div class="col-12">
                    <div  class="row"  style="margin-bottom: 3%;">
                        <img src="immagini/logo2.jpg" class="rounded mx-auto d-block">
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-2"></div>
                    <div class="col-8">
                        <form action="backPage/redirecting.php" method="GET">
                             <div class="form-group">
                                  <label for="inputUsername">Username*</label>
                                  <input type="text" class="form-control" name="inputUser" placeholder="MyUsername">
                                </div>
                                     
                                <div class="form-group">
                                    <label for="inputPassword">Password*</label>
                                    <input type="password" class="form-control" name="inputPass" placeholder="Password1234">
                                </div>
                            <button type="submit" value="Submit" class="btn btn-outline-primary">Login</button>
                        </form>
                            <!--    
                                <div class="form-group">
                                    <label for="inputAddress">Email*</label>
                                    <input type="text" class="form-control" id="inputEmail" placeholder="example@domain.com">
                                </div>
                            -->   
                                
                            <div class="form-group">
                                
                                
                        <div class ="row">
                            <a href="userPage/register.php"> Create an account</a>
                        </div>
                                    
                    </div>
                    <div class="col-2"></div>
                </div>
                
            </div>
        </div>
    </body>
</html>
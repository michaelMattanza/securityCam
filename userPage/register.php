
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row">
         <div class="container">
<!-- TITLE -->
             <div class="col-12">
                <div  class="row"  style="margin-bottom: 3%;">
                    <img src="immagini/logo.png" class="rounded mx-auto d-block">
                </div>
            </div>
             
<!-- BODY -->  
            <div class="row">
            <div class="col-2"></div>
                <div class="col-8">
                    <form action="../../backPage/insert.php" method="GET">

                     <div class="form-group">
                        <label for="inputEmail">Email*</label>
                        <input type="text" class="form-control" name="inputE" placeholder="example@domain.com">
                     </div>

                     <div class="form-group">
                        <label for="inputUsername">Username*</label>
                        <input type="text" class="form-control" name="inputU" placeholder="MyUsername">
                     </div>

                     <div class="form-group">
                        <label for="inputPassword">Password*</label>
                        <input type="password" class="form-control" name="inputP" placeholder="Password1234">
                     </div>

                        <button type="submit" value="Submit" class="btn btn-outline-primary">Sign in</button>
                    </form>
                    </div>
            <div class="col-2"></div>
            </div>
         <!-- -->
            </div>
        </div>
    </body>
</html>

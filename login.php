
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
                        <img src="immagini/logo.png" class="rounded mx-auto d-block">
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-2"></div>
                    <div class="col-8">
                        <form>
                             <div class="form-group">
                                  <label for="inputUsername">Nome utente*</label>
                                  <input type="text" class="form-control" name="inputUser" id="inputUser" placeholder="MyUsername" required/>
                                </div>
                                     
                                <div class="form-group">
                                    <label for="inputPassword">Password*</label>
                                    <input type="password" class="form-control" name="inputPass" id="inputPass" placeholder="Password1234" required/>
                                </div>
                            <button type="button" class="btn btn-outline-primary" onclick="loginFunction()">Accedi</button>
                        </form>

                            <div class="form-group">
                                
                                
                        <div class ="row">
                            <a href="userPage/register.php">Crea un account</a>
                        </div>
                                    
                    </div>
                    <div class="col-2"></div>
                </div>
                
            </div>
        </div>

        <script src="backPage/framework/jquery-3.3.1.min.js"></script> 

    <script type='text/javascript'>

           function loginFunction(){
          var userName = $('#inputUser').val();
          var password=$('#inputPass').val();
          
          if(userName==null|| userName == "", password==null||password==""){
              window.alert("Campo/i vuoti");
              return false;
          }

         $.ajax({
           method: "POST",
           url: "backPage/redirecting.php",
           data: { "user": userName, "pass": password },
           success: function (response){
              var r = JSON.parse(response);
              if(r=="administrator"){window.location.replace("adminPage/homeAdm.php");}
              else if(r=="user"){window.location.replace("userPage/home.php");}
              else if(r=="password"){window.alert("Password Errata!");}
              else if(r=="no") {window.alert("Utente non trovato");}
        }

        });
      }
  </script>

    </body>
</html>
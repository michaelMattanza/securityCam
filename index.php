<!DOCTYPE html>
<html>
    <head>
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container" style="background-color: ">
            
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand">Menu</a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item">
                          <a class="nav-link" href="#acquista">Acquista</a>
                        </li>
                        
                                                
                        <li class="nav-item">
                            <a class="nav-link" href="userPage/register.php">Registrati</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="backPage/controlSession.php" >Login</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Link Esterni
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://github.com/michaelMattanza">Github</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.facebook.com/michael.mattanza">Facebook</a>
                            <div class="dropdown-divider" style="padding-bottom: 2px;"></div>
                            <a class="dropdown-item" href="https://www.youtube.com/channel/UC5kgCp3QelYLPgbZ7kwU1wg">Youtube</a>
                          </div>
                        </li>
                      </ul>
                        
                    </div>
                  </nav>
                </div>                   
            </div>
            <div class="row">
                
                <div class="col-12">
                    
                    <div class="row" id="Home">
                        <div  class="row"  style="margin-bottom: 3%;">
                                
                                <div class="col-10">
                                    <img  src="immagini/logo.png" class="rounded mx-auto d-block">
                                </div>
                                <div class="col-2"></div>
                        </div>
                    </div>
                
                    <div id="Info_sistema" style="border-color: black;">
                    <div class="row">
                        <div class="col-6">
                            <img src="immagini/mainIcon.jpeg" height="90%" width="70%">
                        </div>
                        <div class="col-6">
                                                    <div class="row">
                            <h2 style="align: center;">Cos'è SecurityCam?</h2><br>
                        </div>
                            <p> <br>
                            Security Cam è un sistema di sicurezza economico ma efficiente progettato 
                            appositamente per l'ambiente domestico.
                            Grazie a questo sistema è possibile installare delle videocamere che riprendano la 
                            vostra casa quando voi non ci siete e che vi avvisino nel caso in cui un movimento venga rilevato!
                            <br><br>
                            Per informazioni contattare il gestore del servizio: <b>michael.mattanza@gmail.com</b> oppure
                            <a href="userPage/register.php">iscriviti</a> al sito e contatta gli amministratori attraverso la funzione predisposta a tale 
                            compito. 
                        </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                        <h2 style="position: center;">Come funziona?</h2><br>
                        <p>
                            E' un sistema che sfrutta un <a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/">Raspberry Pi3</a> 
                            come controllore delle videocamere installate. Esso interagisce, attraverso il software <a href="https://github.com/ccrisan/motioneye/wiki/Install-On-Raspbian">motioneye</a>, 
                            con le videocamere posizionate nei punti strategici della casa. Supporta videocamere collegate direttamente alla porta seriale,
                            videocamere USB e anche IPCam. Dopo aver rilevato un movimento, il vostro sistema registra il video, provvedendo a salvarlo nella vostra
                            galleria a cui potrete accedere attraverso il sito internet.
                        </p>
                    </div>
                      <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <img src="immagini/rasp.png" height="90%" width="80%">
                                </div>
                                <div class="col-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-6">
                                    <img src="immagini/motioneye_img.jpeg" height="90%" width="80%">
                                </div>
                            </div>
                        </div>
                </div>

                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                <div class="row" id="acquista" style="margin-top: 3%; margin-left: 8%">
                    <h2 style="margin-left: 15%">Acquista il servizio</h2><br>
                </div>
                    <div class="row" id="acquista" style="margin-top: 1%; margin-bottom: 2%; margin-left: 15%">    
                        <form method="POST">
                      
                            <div class="custom-control custom-radio custom-control-inline" style="margin-bottom:1% ">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="30">
                                <label class="custom-control-label" for="customRadioInline1">1 Mese / 30€</label>
                              </div>
                            
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="90">
                                <label class="custom-control-label" for="customRadioInline2">3 Mesi / 90€</label>
                              </div>
                            
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="180">
                                <label class="custom-control-label" for="customRadioInline3">6 Mesi / 180€</label>
                              </div>
                            <button type="submit" class="btn btn-outline-primary btn-block" onclick="activateFunction()">Select</button>
                   </form>
                    </div>
                            </div>
                            <div class="col-2"></div>
                    
                        </div>   
  </div>
                    </div>
                </div>                
            
            <script src="backPage/framework/jquery-3.3.1.min.js" 
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   
      crossorigin="anonymous"></script>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            
            <script type="text/javascript">
             function activateFunction(){
          var days = $('#customRadioInline1').val();
       
         $.ajax({
           method: "POST",
           url: "backPage/activateSubscription.php",
           data: { 
               "sub_selected": days 
           },
           success: function (){
               window.alert("Abbonamento rinnovato correttamente");
        }

        });
      }
            </script>
    </body>
</html>

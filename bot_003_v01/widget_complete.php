<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Chat Window</title>
</head>
<body>



    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Fido <em>0.2v</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="https://www.unsa.edu.pe/">UNSA</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
              <img class="image-container"src="assets/images/bot_t.png"> 
              <H2>Fido</H2>   
              <p>Fido es un bot encargado de administrar las consultas de los alumnos con una 
                  amplia seleccion de preguntas y repuestas para una comunicacion organica y didactica.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>¿Como usar el bot?</h2>
              <p>Este bot funciona gracias a una base de datos alojada gracias a MySQL, este trabaja mediante queries.</p>
              <p>El bot puede brindar una variedad de definiciones a traves de una pequeña base de datos sobre lo que es un chatbot. 
                  Su funcionamiento es relativamente sencillo, y consiste en presionar el boton de la esquina inferior derecha. Consecuentemente, se abrira una ventana del tamaño de un chat pequeño en el cual podremos hacer todas las preguntas que querramos. Hay que tener en cuenta que por el momento el bot no podra responder a absolutamente todas las preguntas dadas. Tambien puede usted seleccionar una de las preguntas predefinidas por el programa en la parte superior del chat. </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
          <div class="col-md-12">
            <div class="sub-footer">
              <p>Copyright &copy; 2021 UNSA
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                  
      if(! cleared[t.id]){                      
          cleared[t.id] = 1; 
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


        <button class="chat-btn"> 
            <i class="material-icons"> comment </i>
        </button>

        <div class="chat-popup">
            <div class="badge">1</div>
            <div class="chat-area">
             <div class="income-msg">
                 <img src="img/robot.jpg" class="avatar" alt="">
                 <p class="msg"> Hola, soy Doki, en que puedo ayudarte?</p>
             </div>   
            </div>
            <div class="container-bot">
                <div class="input-btn">
                     <button id="cronograma" class="btn_fs">Matrículas</button>
                     <button id="negligencia" class="btn_fs">Negligencia</button>
                     <button id="horario" class="btn_fs">Horario</button>
                     <button id="traslado" class="btn_fs">Traslado</button>
                     <button id="parciales" class="btn_fs">Parciales</button>
                     <button id="promedios" class="btn_fs">Promedios</button>
                </div>

            </div>

            <div class="input-data">
                <input id="data" type="text" placeholder=" Escriba algo..." required>
                <button id="emoji-btn"> &#127773;</button>
                <button id="send-btn" class="submit"> <i class="material-icons">send</i></button>
               
            </div>
            
        </div>

        <script>
            $(document).ready(function(){
                $("#send-btn").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ $value +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,

                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });
        //cronograma
        $(document).ready(function(){
                $("#cronograma").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'Cronograma de Matrículas' +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+'Quisiera saber el cronograma de matriculas de la Unsa',
                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });


        //negligencia
        $(document).ready(function(){
                $("#negligencia").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'Negligencia' +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+'deseo reportar una negligencia',
                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });

        //horario
        $(document).ready(function(){
                $("#horario").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'Horario' +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+'Horario?',
                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });


        //traslado
        $(document).ready(function(){
                $("#traslado").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'Traslado' +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+'traslado interno',
                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });

        //notas
        $(document).ready(function(){
                $("#parciales").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'Parciales' +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+'Como puedo ver mis notas parciales',
                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });

        //promedios
        $(document).ready(function(){
                $("#promedios").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'Promedios' +'</p><img src="img/persona.jpg" class="avatar"></div>';
                $(".chat-area").append($msg);
                $("#data").val('');
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+'Quisiera saber como promediar mi nota',
                    success: function(result){
                        var data = result.split(",");
                        if (data[1] == "1") {
                            $replay1 = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><button id="send-btn" class="submit" onclick="window.location.href='+ data[0] +'"> Haga click para redireccionarlo a la pagina del documento </button></div>';
                            $(".chat-area").append($replay1);
                        } else {
                            $replay = '<div class="income-msg"><img src="img/robot.jpg" class="avatar" alt=""><p class="msg">'+ data[0] +'</p></div>';
                            $(".chat-area").append($replay);
                        }
                    }
                });
            });
        });

        $(window).scroll(function() {
            if($(document).scrollTop() > 900){
                $(".chat-btn").css("display", "block");
            }
        });
    </script>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
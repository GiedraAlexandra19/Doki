<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Chat Window</title>
</head>
<body>
    

    <section>
        <h1>CHATBOT DOKI</h1>
        <p>Resuelve tus dudas con Doki</p>

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
            <div class="container">
                <div class="input-btn">
                     <button id="cronograma" class="btn_fs">matrículas</button>
                     <button id="negligencia" class="btn_fs">negligencia</button>
                     <button id="horario" class="btn_fs">horario</button>
                     <button id="traslado" class="btn_fs">traslado</button>
                     <button id="parciales" class="btn_fs">parciales</button>

                     
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
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'cronograma de matrículas' +'</p><img src="img/persona.jpg" class="avatar"></div>';
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
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'negligencia' +'</p><img src="img/persona.jpg" class="avatar"></div>';
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
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'horario' +'</p><img src="img/persona.jpg" class="avatar"></div>';
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
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'traslado' +'</p><img src="img/persona.jpg" class="avatar"></div>';
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
                    $msg = '<div class="out-msg"><p class="my-msg">'+ 'parciales' +'</p><img src="img/persona.jpg" class="avatar"></div>';
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

        //parciales
    </script>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
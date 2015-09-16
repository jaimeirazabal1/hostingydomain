<link rel="stylesheet" href="src/chat/public/css/estilos_chat.css">
<?php session_start(); ?>
<?php if (isset($_GET['cerrarsession']) and session_id()): ?>

    <?php if (isset($_SESSION['usuario'])): ?>
        <?php $_SESSION = array(); ?>
        <?php 
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        } 

        ?>
        <?php session_destroy() ?>
    <?php endif ?>
<?php endif ?>
<?php if (isset($_POST['usuario']) and isset($_POST['password'])): ?>
    <?php if (!empty($_POST['password']) and $_POST['password'] == "administrador"): ?>
        <?php $_SESSION['usuario'] = 'Administrador' ?>
    <?php elseif(empty($_POST['password'])): ?>
        <?php $_SESSION['usuario'] = ucfirst($_POST['usuario']) ?>
    <?php endif ?>
<?php endif ?>
    
<?php if (isset($_SESSION['usuario']) ): ?>
    <script>
    var conn = new WebSocket('ws://localhost:3333');
    conn.onopen = function(e) {
        console.log("Connection established!");
    };

    conn.onmessage = function(e) {
        console.log(e);
        console.log(e.data);
        ventana = document.getElementById('ventana').innerHTML + e.data;
        document.getElementById('ventana').innerHTML = ventana + "<br>";
        console.log(ventana + "<br>")
    };
    window.onload = function(){

        var button = document.getElementById("click");

        button.addEventListener('click',function(){
            var texto = document.getElementById('texto').value;
            conn.send("<?php echo $_SESSION['usuario'] ?>"+" : "+texto);
            document.getElementById('texto').value = '';
        },false);

    }
    </script>
<?php endif ?>
    <!-- Codigo por http://adan-2994.es.tl/Xat_flotante_Efecto.htm -->

    <script type="text/javascript" src="http://disemuchonet.blogcindario.com/ficheros/jquery-1-4-2-min.js">
    </script>

    <script type="text/javascript">
//<![CDATA[
var j = jQuery.noConflict();
j(function (){
    j(".esthela").hover(function(){
        j(".esthela").stop(true, false).animate({right:"0"},"medium");
    },function(){
        j(".esthela").stop(true, false).animate({right:"-400"},"medium");
    },500);
    return false;
});
//]]>
</script>
<?php if (isset($_SESSION['usuario']) and !empty($_SESSION['usuario'])): ?>

<div class="esthela" style="right: -400px;">
    <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;">
        <div class="disemucho.jimdo.com">
            <div id="ventana" style="background-color:white;padding:10px;border-radius:10px;height:270px;overflow:scroll;color:black">

            </div>
            <button id="click" style="float:left">Enviar</button>
            <input type="text" id="texto" style="width:300px;float:left;color:black !important;height:42px" placeholder="Escribe Aqui">
            <div style="clear:both"></div>
            <a href="index.php?cerrarsession=1">Cerrar Sesión</a>
           
        </div>
    </div>
</div>
<?php else: ?>
    <div class="esthela" style="right: -400px;">
        <div style="color: rgb(255, 255, 255); padding: 8px 5px 0pt 50px;">
            <div class="disemucho.jimdo.com">
                <form action="" method="POST" class="center">
                <br><br>
                    <p>
                        <label for="">Nombre de Usuario</label><br>
                        <input type="text" name="usuario" style='color:black !important'><br>
                    </p>
                    <p>
                        <label for="">Contraseña</label><br>
                        <input type="password" name="password" style='color:black !important'><br>
                                   
                    </p>
                    <p>
                        <input type="submit" value="Entrar">
                    </p>
                    <center>
                            Si no eres administrador, dejar la contraseña en blanco!
                        </center>
                </form>
            </div>
        </div>
    </div>
<?php endif ?>
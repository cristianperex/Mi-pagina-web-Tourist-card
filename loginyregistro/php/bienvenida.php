<?php

session_start();

if(!isset($_SESSION['usuario'])){
echo'
      <script>
            alert("Por favor debes iniciar session");
            window.location = "../phpjs/index.php"
       </script>
       ';
       session_destroy();
       die();
}

   session_destroy();
?>
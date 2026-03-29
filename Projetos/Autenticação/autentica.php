<?php
# php -S localhost:PORTA -> Para acessar na web
# Em produção / teste
$LOGIN = $_POST['lg'];
$SENHA = $_POST['se'];

if($LOGIN == "arthur" && $SENHA == "123"){
    header("location: chamado.html");
    exit();
}else{
    header("location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Pagina Principal";
        ?>
        <form action="index.php/controllerbiblioteca/procesar" method="POST">
            <br>
            Nombre<input type="text" name="name">
            <br>
            <input type="submit" name="enviar" value="enviar">
        </form>
    </body>
</html>

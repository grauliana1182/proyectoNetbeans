<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
juhgf
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Descarga ficheros</legend>
            <form action="descarga.php" method="POST" enctype="multipart/form-data">
                <!--<input type="hidden" name="MAX_FILE_SIZE" value="10M"/>-->
                Selecciona fichero<input type="file" name="fichero" />
                <br>
                <input type="submit" name="descarga" value="descarga" />
            </form>
        </fieldset>
    </body>
</html>

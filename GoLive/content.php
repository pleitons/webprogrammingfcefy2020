<?php
echo $_GET["id"];
echo $_GET["slug"];
?>
<form action="/content.php" method="get">
    <input type="number" name="id" id="">
    <input type="number" name="slug" id="">
    <button type="submit">Guardar</button>
</form>
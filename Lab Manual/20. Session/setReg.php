<?php
    session_start();
        $_SESSION["regName"] = $regValue;
?>
<html>
<body>
    <form method="get" action="getReg.php">
        <input type="text" name="regName" value="">
        <input type="submit">
    </form>
</body>
</html>
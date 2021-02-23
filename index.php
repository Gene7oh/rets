<?php
    $message = "Hello World is this thing working?" . "<br>" . "It would be nice if it were!" . "<br>" . "Onna side note we need to see if the auto view works in the browser." . "<br>" . "Yea! It does!";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rets home</title>
</head>
<body>
<div style="margin: auto; color: darkred;">
    <?php echo $message; ?>
</div>

</body>
</html>

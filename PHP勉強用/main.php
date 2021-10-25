<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Sample</title>
</head>
<body>
    
    <?php
    $myfile=fopen("save.txt","a") //fileを上書きモードで開く
    ?>

    <?php fwrite($myfile, $_POST['sendPHP']."\n"); ?>

    <?php
    fclose($myfile);
    ?>
    
</body>
</html>
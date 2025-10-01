<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = array('PHP','Python','Ruby','vinzkie','eellyaa');
    foreach($array as $key=> $value){
        echo $value.'<br>';
        echo $key.'Yaitu Bagian Dari'. $value.'<br>';
    }
    ?>
</body>
</html>
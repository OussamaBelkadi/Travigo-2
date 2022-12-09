<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <H1 style="text-align: center;">Modifier Product</H1>
    <!-- -->
 
    <form action="<?=BURL?>Product/mod" method="POST">
        <input type="text" name="yy" value="<?php $prod->name?>">
        <input type="text" name="zz" value="<?php $prod->price?>">
        <input type="text" name="tt" value="<?php $prod->description?>">
        <a href=""><button name="submit">Modifier</button></a>
        <!-- <a href="">Go back</a> -->
    </form>
        

       
    </body>
</html>
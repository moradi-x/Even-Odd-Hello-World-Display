<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.div{
 display: inline-block;
 background-color: red;
 height: 100px;
 margin: 5px;
 padding: 15px;
 width: 120px;
 color: blue;
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 font-size: 20px ;
}
.div1{
 display: inline-block;
 background-color: red;
 height: 100px;
 margin: 5px;
 padding: 15px;
 width: 120px;
 color: yellow;
 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 font-size: 20px ;
}
</style>
</head>
<body>

<?php for($i=1; $i<=50; $i++): ?>
    <?php if($i%2===0 ):  ?>
 <div class="div"><?=$i."-";?> hello world</div>
   <?php else: ?>
     <div class="div1"><?=$i."-";?> hello world</div>
    <?php endif  ?>
<?php endfor ?> 

</body>
</html>
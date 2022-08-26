<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "bootstrap.php";?>
    <title>Document</title>
</head>
<body class="mt-3">
    <div class="row">
        <div class="col"></div>
        <div class="col"><div class="row">
            <div class="col">
                <?php if(isset($_GET['erro']) && $_GET['erro'] == true){
            echo '<div class="bg-danger rounded mb-3 text-center text-bg-dark">Usuario ou senha inválida</div>';
            }
            ?>
            </div>
        </div><?php include "formulario.php";?></div>
        <div class="col"></div>
    </div>
</body>
</html>
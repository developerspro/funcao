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
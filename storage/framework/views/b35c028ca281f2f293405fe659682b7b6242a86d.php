<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <div >

        <div style="width: 35%; display: inline-block; position: relative;">
            <img class ="PokemonImage"  src="AssetProject/mascot.png" width="200px" height="230px">
        </div>

        <table class="Mobil" style="display: inline-block; position: relative; width: 60%;">
        <tr>
            <td>ID</td>
            <td>Car Name</td>
            <td>Rent Price</td>
            <td>Picture</td>
            <td>Description</td>
        </tr>
        <?php foreach($mobil_data as $m): ?>
                <tr>
                    <td><?php echo e($m->IdMobilData); ?></td>
                    <td><?php echo e($m->NameMobilData); ?></td>
                    <td><?php echo e($m->PriceMobilData); ?></td>
                    <td><img src="<?php echo e("/AssetProject/".$m->PhotosMobilData); ?>" class="Imageku"><br></td>
                <td><?php echo e($m->DescriptionMobilData); ?></td>
                </tr>
        <?php endforeach; ?>

        </table>



    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Tampilan_Login-AdminElement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
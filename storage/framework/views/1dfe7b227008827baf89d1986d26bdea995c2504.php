<!DOCTYPE html>
<html>
<head>
    <style>
        html{
            background:url('AssetProject/BackgroundCar.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body{

        }

        #MenuNavigator
        {
            background-color: black;
            width: 80%;
            height: 40px;
            margin: 20px auto;
            margin-bottom: 0px;
        }


        #JudulPokemart{
            color :#FBE122;
            font-family:arial, sans-serif;
            font-size: 20px;
            text-align: center;
        }

        .Navigator
        {
            width: 20%;
            float: left;
            color: white;
            text-align: center;
            line-height: 40px;

            transition: .5s;
        }

        .Navigator:hover
        {
            color: blue;
            background-color: red;
        }




        .PokemonImage{
            padding-right: 160px;
            padding-top: 30px;
            float: right;
            margin-right: 50px;
            margin-left: 10px;
            height: 400px;
        }

        .Inner{
            bottom:1px;
            position: absolute;
            width: 400px;
            height: 420px;
            border-radius: 20px;
            background-color: #5e5d5d;
        }

        .Inner-Judul{
            color :#FC4C02;
            font-size: 22px;
            text-align: center;

        }

        .Inner-Logo{
            width: 50px;
            height: 50px;

        }

        #AdminPokemonForm{
            margin-left: 110px;
        }


        #Footer{
            background-color: black;
            width: 80%;
            height: 90px;
            margin: 20px auto;
            bottom: 4%;
            text-align: center;
            left: 10%;
        }

        #SocialDescription{
            padding-top: 5px;
            color :white;
        }

        .Social
        {
            padding-top: 10px;
            width: 25px;
            height: 25px;
        }
    </style>

    <title>Belajar1</title>
</head>


<table>
    <tr>
        <td>
            <img class="Judul-Logo" src="AssetProject/logotire.jpg" width="22px" height="22px">
        </td>
        <td>
            <div id = "JudulPokemart">RentCar</div>

        </td>
    </tr>
</table>

<body>

<div id="MenuNavigator">
    <a href="<?php echo e(ROUTE('get.AdminPokemon')); ?>"><div class="Navigator">Search Car</div></a>
    <a href="<?php echo e(ROUTE('get.AdminElement')); ?>"><div class="Navigator">All Car</div></a>
    <a href="<?php echo e(ROUTE('get.AdminUser')); ?>"><div class="Navigator">User</div></a>
    <a href="<?php echo e(ROUTE('get.AdminTransaction')); ?>"><div class="Navigator">Transaction</div></a>
    <a href="<?php echo e(ROUTE('get.Guest')); ?>"><div class="Navigator">Logout<br>Antonysunggaki@gmail.com</div></a>
</div>

<?php echo $__env->yieldContent('content'); ?>
<div id = "Pokemon" style="width: 80%; display: table; margin: 0 auto;">
    <div style="width: 50%; display: inline-block; position: relative">
        <img class ="PokemonImage"  src="AssetProject/mascot.png" width="200px" height="230px">
    </div>
    <div style="width: 50%; display: inline-block; position: relative">

        <div class="Inner"><br><br>
            <div class="Inner-Judul">Update Transaction</div>


            <form method="POST" action="">
                <?php echo e(csrf_field()); ?>

                <div id="AdminTransactionForm">


                    <table border="1">
                        <tr>
                            <td>Name Car</td>
                            <td>Type Car</td>
                            <td>Color</td>
                            <td>How Many</td>
                            <td>Description</td>
                        </tr>
                        <?php foreach($data_adminpokemon as $d_adminpokemon): ?>
                            <tr>
                                <td><?php echo e($d_adminpokemon->NamePokemonData); ?></td>
                                <td><?php echo e($d_adminpokemon->ElementPokemonData); ?></td>
                                <td><?php echo e($d_adminpokemon->ColorPokemonData); ?></td>
                                <td><?php echo e($d_adminpokemon->GenderPokemonData); ?></td>
                                <td><?php echo e($d_adminpokemon->DescriptionPokemonData); ?></td>
                            </tr>
                            <img src="" alt="">


                        <?php endforeach; ?>
                    </table>



                </div>
            </form>
            <img class="Inner-Logo" src="AssetProject/GitHub-Mark.png">
            <tr>

                <a href="<?php echo e(ROUTE('get.AdminUser')); ?>"><button name="AdminTransactionsubmit">Make a Request</button></a>

            </tr>

        </div>

</div>





<div id="Footer">
    <div id="Contents">
        <div id="SocialDescription">
            <td>
                <tr>RentCar established 2018, powered by RentCar Company</tr>
                <br>
                <tr>Copyright &copy 2017 LL. All Rights Reserved.</tr>
            </td>
        </div>

        <div id="SocialMedia">
            <a href="#"></a><img class="Social" src="AssetProject/social-logo-facebook.jpg">
            <a href="#"></a><img class="Social" src="AssetProject/social-logo-google.jpg">
            <a href="#"></a><img class="Social" src="AssetProject/social-logo-twitter.jpg">
            <a href="#"></a><img class="Social" src="AssetProject/GitHub-Mark.png">
            <a href="#"></a><img class="Social" src="AssetProject/social-logo-instagram.jpg">
        </div>
    </div>
</div>
</body>





</html>
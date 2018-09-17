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

        .Imageku{
            width: 300px;
            height: 200px;
        }

        #MenuNavigator
        {
            background-color: black;
            width: 80%;
            height: 40px;
            margin: 20px auto;
            margin-bottom: 0px;
        }

        .Mobil{
            color: blue;
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

        .Judul-Logo{

        }


        .PokemonImage{
            padding-right: 160px;
            padding-top: 30px;
            float: right;
            margin-right: 50px;
            margin-left: 10px;
            height: 400px;
        }



        .Inner-Judul{
            color: #d43f3a;
            font-size: 22px;
            text-align: center;
            font-family: Algerian;
            font-style: oblique;
            padding-top: 5px;

        }

        .Inner-Logo{
            padding-left : 180px;
        }
        .Inner-Descriptions{
            Color: white;
            font-size: 40px;
            text-align: left;
            margin:15px;
            font-family: fantasy;
            font-style: italic;
        }


        .Inner-Description{
            padding-top: 260px;
            color: darkviolet;
            font-size: 22px;
            text-align: left;
            margin:px;
            font-family: Calibri;
            font-style: italic;


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
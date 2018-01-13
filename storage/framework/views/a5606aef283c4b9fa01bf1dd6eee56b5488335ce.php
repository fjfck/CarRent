<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-image : url('AssetProject/pokemonbackgroundimage.png');
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
            padding-bottom: 100px;
            padding-top: 60px;
            float: right;
            margin-right: 50px;
            margin-top:	40px;
            margin-left: 10px;
        }

        .Inner{
            Bottom:-10px;
            position: absolute;
            width: 440px;
            height: 430px;
            border-radius: 20px;
            background-color: #5e5d5d;
        }

        .Inner-Judul{
            color: #d43f3a;
            font-size: 17px;
            text-align: center;
        }

        .Inner-Logo{
            padding-left : 180px;
        }



        .Inner-Description{
            color: #c0a16b;
            font-size: 16px;
            text-align: left;
            margin:15px;
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
            <img class="Judul-Logo" src="AssetProject/icons8-valor-red-50.png" width="22px" height="22px">
        </td>
        <td>
            <div id = "JudulPokemart">PokeMart</div>

        </td>
    </tr>
</table>

<body>



<div id="MenuNavigator">
    <a href="<?php echo e(ROUTE('get.AdminPokemon')); ?>"><div class="Navigator">Pokemon</div></a>
    <a href="<?php echo e(ROUTE('get.AdminElement')); ?>"><div class="Navigator">Element</div></a>
    <a href="<?php echo e(ROUTE('get.AdminUser')); ?>"><div class="Navigator">User</div></a>
    <a href="<?php echo e(ROUTE('get.AdminTransaction')); ?>"><div class="Navigator">Transaction</div></a>
    <a href="<?php echo e(ROUTE('get.Guest')); ?>"><div class="Navigator">Logout</div></a>
</div>

<?php echo $__env->yieldContent('content'); ?>
<div id = "Pokemon" style="width: 80%; display: table; margin: 0 auto;">
    <div style="width: 50%; display: inline-block; position: relative">
        <img class ="PokemonImage"  src="AssetProject/pikachuimage.png" width="200px" height="230px">
    </div>
    <div style="width: 50%; display: inline-block; position: relative">

        <div class="Inner"><br><br>
            <div class="Inner-Judul">Welcome to Pokemart, Mon-04 Sep 2017</div>
            <img class="Inner-Logo" src="AssetProject/icons8-valor-red-100.png">
            <div class="Inner-Description">
                The PokéMart  International, a subsidiary of the PokéMart<br>
                Company in Japan, Manages the property outside of Asia and is<br>
                responsible for brand Management, licensing, marketing, the<br>
                PokéMart Trading Card Game, the Animated TV series, home<br>
                entertainment, and the official PokéMart website. PokéMart<br>
                was launched in Japan in 1996 and today is one of the most<br>
                popular Children’s entertainment properties in the<br>
                world &copy 2017 PokéMart. &copy 1995-2017 Nintendo/Creatures Inc./ GAME FREAK inc. PokéMart,<br>
                PokéMart character names, Nintendo 3DS, Nintendo DS, Wii, Wii U, and Wiiware are trademarks of Nintendo. The Youtube logo is a trademark of Google Inc. Other<br>
                trademarks are the property of their respective owners.<br>
            </div>
        </div>
    </div>

</div>
<div id="Footer">
    <div id="Contents">
        <div id="SocialDescription">
            <td>
                <tr>Pokemart established 2017, powered by Pokemon Company</tr>
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
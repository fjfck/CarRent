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
            padding-left :150px;
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
            <div class="Inner-Judul">Insert Pokemon</div>
            <img class="Inner-Logo" src="AssetProject/icons8-valor-red-100.png">

            <form method="POST" action="/doAddPokemonDataDB" enctype="multipart/form-data>
                <?php echo e(csrf_field()); ?>

                <div id="AdminPokemonForm">

                    <tr>
                        <td><input type="text" name="AdminPokemonName" placeholder="Your Pokemon Name"></td><br><br>
                    </tr>

                    <tr>
                        <select name="AdminPokemonElement">
                            <option value="fire">Fire</option>
                            <option value="water">Water</option>
                            <option value="Air">Air</option>
                            <option value="Grass">Grass</option>
                        </select>
                    </tr>
                    <br><br>

                    <tr>
                        <td>

                                Browse:
                                <input type="file" name="AdminPokemonPhotos" id="file">
                                <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">


                        </td>
                        <br>
                    </tr>

                    <tr>
                        <select name="AdminPokemonjk">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </tr>


                    <br>
                    <tr>
                        <td><input type="text" name="AdminPokemonDescription" placeholder="Description"></td><br><br>
                    </tr>

                    <tr>
                        <button name="AdminPokemonsubmit" >Insert</button>

                    </tr>
                </div>
            </form>


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
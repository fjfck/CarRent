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
    <a href="<?php echo e(ROUTE('get.Guest')); ?>"><div class="Navigator">Logout</div></a>
</div>

<?php echo $__env->yieldContent('content'); ?>
<div id = "Pokemon" style="width: 80%; display: table; margin: 0 auto;">
    <div style="width: 50%; display: inline-block; position: relative">
        <img class ="PokemonImage"  src="AssetProject/mascot.png" width="200px" height="230px">
    </div>
    <div style="width: 50%; display: inline-block; position: relative">

        <div class="Inner"><br><br>
            <div class="Inner-Judul">Search Car</div>
            <img class="Inner-Logo" src="AssetProject/icons8-valor-red-100.png">

            <form method="POST" action="/doAddPokemonDataDB" enctype="multipart/form-data>
                <?php echo e(csrf_field()); ?>

                    <div id="AdminPokemonForm">

            <tr>
                <td><input type="text" name="AdminPokemonName" placeholder="Input Car Name"></td><br><br>
            </tr>

            <tr>
                Car Type :<br>
                <select name="AdminPokemonElement">
                    <option value="Exotic">Exotic</option>
                    <option value="Classic">Classic</option>
                    <option value="Modern">Modern</option>
                </select>
            </tr>
            <br><br>

            <tr>
                Car Color :<br>
                <select name="AdminPokemonColor">
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Silver">Silver</option>
                    <option value="Black">Black</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                </select>
            </tr>
            <br><br>

            <tr>
                <select name="AdminPokemonjk">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </tr>


            <br>
            <tr>
                <td><input type="text" name="AdminPokemonDescription" placeholder="Description"></td><br><br>
            </tr>

            <tr>
                <td>

                    <input type="file" name="AdminPokemonPhotos">

                </td>

            </tr>


            <tr>
                <button type="submit" name="AdminPokemonsubmit" >Insert Data</button>
                <?php echo e(csrf_field()); ?>

            </tr>
        </div>
        </form>

    </div>
</div>
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
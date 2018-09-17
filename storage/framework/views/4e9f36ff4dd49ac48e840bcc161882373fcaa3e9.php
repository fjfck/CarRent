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



        #MemberPokemonForm{
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
    <a href="<?php echo e(ROUTE('get.MemberProfile')); ?>"><div class="Navigator">Profile</div></a>
    <a href="<?php echo e(ROUTE('get.MemberPokemon')); ?>"><div class="Navigator">Pokemon</div></a>
    <a href="<?php echo e(ROUTE('get.MemberYourCart')); ?>"><div class="Navigator">Your Cart</div></a>

    <a href="<?php echo e(ROUTE('get.Guest')); ?>"><div class="Navigator">Logout</div></a>
</div>

<?php echo $__env->yieldContent('content'); ?>
<div id = "Pokemon" style="width: 80%; display: table; margin: 0 auto;">
    <div style="width: 50%; display: inline-block; position: relative">
        <img class ="PokemonImage"  src="AssetProject/pikachuimage.png" width="200px" height="230px">
    </div>
    <div style="width: 50%; display: inline-block; position: relative">

        <div class="Inner"><br><br>
            <div class="Inner-Judul">Pokemon List</div>


            <form method="POST" action="/FileUser">
                <?php echo e(csrf_field()); ?>

                <div id="MemberPokemonForm">

                    <tr>
                        <td><input type="text" name="MemberPokemonSearch" placeholder="By Name, By Element"></td><br><br>
                    </tr>

                    <tr>
                        <td><input type="submit" name="MemberPokemonsubmitSearch" value="Search"></td>
                    </tr>

                    <tr>
                        <select name="MemberPokemonSortBy">
                            <option value="name">Name</option>
                            <option value="element">Element</option>
                            <option value="highDamage">High Damage</option>
                            <option value="highHP">High HP</option>
                        </select>
                    </tr>

                    <br><br>

                    <tr>
                        <img class="Pokemon-1" src="a">
                    </tr>

                    <tr>
                        <img class="Pokemon-2" src="b">
                    </tr>

                    <tr>
                        <img class="Pokemon-3" src="c">
                    </tr>

                    <tr>
                        <img class="Pokemon-4" src="d">
                    </tr>

                    <tr>
                        <img class="Pokemon-5" src="e">
                    </tr>

                    <tr>
                        <img class="Pokemon-6" src="f">
                    </tr>

                    <br>

                    <tr>
                        <img class="Pokemon-1" src="a">
                    </tr>

                    <tr>
                        <img class="Pokemon-2" src="b">
                    </tr>

                    <tr>
                        <img class="Pokemon-3" src="c">
                    </tr>

                    <tr>
                        <img class="Pokemon-4" src="d">
                    </tr>

                    <tr>
                        <img class="Pokemon-5" src="e">
                    </tr>

                    <tr>
                        <img class="Pokemon-6" src="f">
                    </tr>

                    <br>

                    <tr>
                        <img class="Pokemon-1" src="a">
                    </tr>

                    <tr>
                        <img class="Pokemon-2" src="b">
                    </tr>

                    <tr>
                        <img class="Pokemon-3" src="c">
                    </tr>

                    <tr>
                        <img class="Pokemon-4" src="d">
                    </tr>

                    <tr>
                        <img class="Pokemon-5" src="e">
                    </tr>

                    <tr>
                        <img class="Pokemon-6" src="f">
                    </tr>




                    <br>

                    <tr>
                        <img class="Pokemon-1" src="a">
                    </tr>

                    <tr>
                        <img class="Pokemon-2" src="b">
                    </tr>

                    <tr>
                        <img class="Pokemon-3" src="c">
                    </tr>

                    <tr>
                        <img class="Pokemon-4" src="d">
                    </tr>

                    <tr>
                        <img class="Pokemon-5" src="e">
                    </tr>

                    <tr>
                        <img class="Pokemon-6" src="f">
                    </tr>
                    <br><br><br>

                    <tr>
                        <td>Page :</td><br>
                        <td><< 1 2 3 >></td>
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
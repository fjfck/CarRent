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

        #JudulPokemart{
            color :#FBE122;
            font-family:arial, sans-serif;
            font-size: 20px;
        }

        #RegisterForm{
            margin-top: 5%;
            text-align: center;
        }

        #Footer{
            background-color: black;
            width: 80%;
            height: 90px;
            margin: 52px auto;
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

    <title>Website Antony</title>
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
    <a href="<?php echo e(ROUTE('get.Login')); ?>"><div class="Navigator">Login</div></a>
    <a href="<?php echo e(ROUTE('get.Registrasi')); ?>"><div class="Navigator">Register</div></a>
</div>


<form method="POST" action="/Login_Display"></form>
<div id="RegisterForm">
    <tr>
        <td>Email</td><br>
        <td><input type="text" name="Email" placeholder="InputEmail@gmail.com""></td><br><br>
    </tr>

    <tr>
        <td>Password</td><br>
        <td><input type="password" name="Password" placeholder="Input Your Password"></td><br><br>
    </tr>



    <tr>
        <td><input type="submit" name="loginSubmit" value="Login"></td>
    </tr>

    <td></td>
</div>

<div style="height: 200px; width: 20%"></div>

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
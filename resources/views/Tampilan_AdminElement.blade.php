@extends('Layout.Tampilan_Login-AdminElement')

@section('content')
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
        @foreach($mobil_data as $m)
                <tr>
                    <td>{{$m->IdMobilData}}</td>
                    <td>{{$m->NameMobilData}}</td>
                    <td>{{$m->PriceMobilData}}</td>
                    <td><img src="{{"/AssetProject/".$m->PhotosMobilData}}" class="Imageku"><br></td>
                <td>{{$m->DescriptionMobilData}}</td>
                </tr>
        @endforeach

        </table>



    </div>
@endsection
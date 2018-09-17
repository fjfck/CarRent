<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\tb_mobildata;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;
use App\tb_pokemonelement;
use App\tb_pokemondata;
use App\tb_profileuser;


use Illuminate\Support\Facades\Storage;
use Validator;


class ControllerBase extends Controller
{
    public function getIndex1(){
        return view('Layout.Tampilan_Home-Guest');
    }

    public function getIndex4(){
        return view( 'Layout.Tampilan_Login-Admin');
    }

    public function getIndex5(){
        return view( 'Layout.Tampilan_Login-AdminPokemon');
    }

    public function doAddPokemonDataDB(Request $request){
        dd($request->AdminPokemonPhotos);

        $validate = Validator::make($request->all(),[
            'AdminPokemonName' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $element = new tb_pokemondata();
            $element -> NamePokemonData = $request['AdminPokemonName'];
            $element -> ElementPokemonData= $request['AdminPokemonElement'];
            $element -> ColorPokemonData= $request['AdminPokemonColor'];
            $element -> GenderPokemonData= $request['AdminPokemonjk'];
            $element -> DescriptionPokemonData= $request['AdminPokemonDescription'];
//            $request['AdminPokemonDescription']->move('AssetProject')
            dd($request['AdminPokemonPhotos']->getCientOriginalName());


            $element->save();
            return redirect()->back()->withErrors($validate);
        }}


        public function upload(Request $request){
            $image = $request->file('image');
            $upload = 'upload/images';
            $filename = $image->getClientOriginalName();
            Storage::put('upload/images'.$filename,file_get_contents($request->file('images')->getRealPath()));
        }

//        public function viewData(){
//            $data_pokemon = tb_pokemondata::paginate(7);
//            return view('Tampilan_Login-AdminElement',compact('data_pokemon'));
//        }

        public function searchByName(Request $request){
            $search = $request->search;
            $data_pokemon = tb_pokemondata::where('NamePokemonData','like','%'.$search.'%')->paginate(7);
            return view('Tampilan_Login-AdminElement',compact('data','search'));
        }

    public function getIndex6(){
        return view( 'Layout.Tampilan_Login-AdminElement');
    }

    public function doAddPokemonElementDB(Request $request){
        $validate = Validator::make($request->all(),[
           'AdminElementNameElement' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $element = new tb_pokemonelement();
            $element -> NamePokemonElement = $request['AdminElementNameElement'];
            $element->save();
            return redirect()->back()->withErrors($validate);
        }
    }

    public function getIndex7(){
        return view( 'Layout.Tampilan_Login-AdminUser');
    }






    public function getIndex13(){
        return view('Layout.Tampilan_Login-AdminElement');
    }

    public function getIndex8(){
        $data_adminpokemon = tb_pokemondata::all();
        return view( 'Layout.Tampilan_Login-AdminTransaction')->with('data_adminpokemon',$data_adminpokemon);
    }

    public function getIndex9(){
        return view( 'Layout.Tampilan_Login-Member');
    }


    public function getIndex10(){
        return view( 'Layout.Tampilan_Login-MemberProfile');
    }

    public function getIndex11(){
        return view( 'Layout.Tampilan_Login-MemberPokemon');
    }

    public function getIndex12(){
        return view( 'Layout.Tampilan_Login-MemberYourCart');
    }

    public function viewDataMobil(){
        $mobil_data = tb_mobildata::all();
        return view('Tampilan_AdminElement',compact('mobil_data'));
    }

    public function viewData(){
        $mobil_data = tb_mobildata::paginate(7);
        return view('Tampilan_AdminElement',compact('mobil_data'));
    }




}

<?php

namespace App\Http\Controllers;


use Carbon\Carbon;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use App\tb_profileuser;

class ControllerUser extends Controller
{
    public function getIndex2()
    {
        return view('Layout.Tampilan_Home-Registrasi');
    }

    /////
    public function doAddProfileUserDB(Request $request){
        $validate = Validator::make($request->all(),[
            'RegistrasiEmail' => 'required',
            'RegistrasiPassword' => 'required',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate);
        }else{
            $element = new tb_profileuser();
            $element -> EmailProfileUser = $request['RegistrasiEmail'];
            $element -> PasswordProfileUser = $request['RegistrasiPassword'];
            $element -> PhotosProfileUser = $request['RegistrasiPhotos'];
            $element -> GenderProfileUser= $request['Registrasijk'];
            $element -> DOBProfileUser= $request['RegistrasiDateofBirth'];

            $element->save();
            return redirect()->back()->withErrors($validate);
        }
    }

    public function getIndex3()
    {
        return view('Layout.Tampilan_Home-Login');
    }


    public function postIndex2(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'Email' => 'required|Email|unique:User',
            'Password' => 'required|alpha_num|min:5|confirmed',
            'Photos' => 'required|Photos|max:5000',
            'Gender' => 'required',
            'DOB' => 'required|date',
            'Address' => 'required|min:10',
        ]);

        if (!$validate->fails()) {
            $file = $request['Photos'];
            $filename = "";

            if ($file) {
                $filename = $file->getClientOriginalName();
                Storage::disk('local')->put($filename, File::get($file));
            }


            $User = new User();
            $User->Email = $request->get('Email');
            $User->Password = bcrypt($request->get('Password'));
            $User->Gender = $request->get('Gender');
            $User->DateOfBirth = $request->get(DOB);
            $User->Address = $request->get('Address');
            $User->Photos = $filename;
            $User->Created_At = Carbon::now();
            $User->Updated_At = Carbon::now();
            $User->Remember_Toen = $request->get('_Token');
            $User->save();

            $credentials = ['Email' => $request->get('Email'), 'Password' => $request->get('Password')];

            if (Auth::guard('web')->attempt($credentials)) {
                return redirect('/');
            }
        } else {
            return redirect()->back()->withErrors($validate);
        }
    }


    public function postIndex3(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'Email' => 'required',
            'Password' => 'required'
        ]);

        if (!$validate->fails()) {
            $credentials = ['Email' => $request->get('Email'), 'password' => $request->get('Password')];
            if (Auth::guard('web')->attemp($credentials)) {
                return redirect('/');
            } else {
                return redirect()->back()->with('Status', 'Email or Password is Invalid');
            }
        } else {
            return redirect()->back()->withErrors($validate);
        }
    }
}
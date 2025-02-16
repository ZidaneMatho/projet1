<?php

namespace App\Http\Controllers;
//use\App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
class ClientController extends Controller
{
    public function connexion()
    {
        return view('connexion');
    }

    public function traitement_inscription(Request $request)
    {
        $validatedata=$request->validate([
            'email'=>'email|required|unique:clients',
            'password'=>'required|min:8',
            'pseudo'=>'required|unique:clients',
        ]);
        //$client = new Client();
        //$client->email =$request->input('email');
        //$client->password =bcrypt($request->input('password'));
        //$client->pseudo =$request->input('pseudo');
        //$client->save();

        Client::create([
            'email'=>$validatedata['email'],
            'password'=>bcrypt($validatedata['password']),
            'pseudo'=>$validatedata['pseudo'],
        ]);

        return redirect('/about');
    }

    public function traitement_login(Request $request)
   {

        $validatedata=$request->validate([
            'password'=>'required|min:8',
            'pseudo'=>'required',
        ]);

        $client = Client::where('pseudo', $request->input('pseudo'))->first();
        if($client){
            if(Hash::check($request->input('password'), $client->password)){
                $request->session()->put('client',$client);
                return redirect('/about');
            }else{
                return back()->with('status','pseudo ou mots de passe incorrect');
            }
        }else{
            return back()->with('status','desole ce pseudo n\'existe pas');
        }
   }

}

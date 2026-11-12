<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Person;
use App\Http\Requests\FormPersonRequest;



class FirstController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contact(){
        return view ('contact');
    }

    public function sent(Request $request){
        $name=$request->input('name1');
        $surname=$request->input('surname1');
        $email=$request->input('email1');
        $text=$request->input('text1');
        Mail::to($email)->send(new ContactEmail($name, $surname, $email, $text));
        return redirect()->route('homepage')->with('message', 'richiesta inviata corretamente');
    }

    public function all(){
        $persons = Person::all();
        return view ('allperson', ['persons' => $persons]);
    }

    public function create(){
        return view ('person');
    }

    public function store(FormPersonRequest $request){
        $img= null;
        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }

        $person = Person::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age,
            'img' => $img
        ]);


        return redirect()->route('allPerson');
    }

};

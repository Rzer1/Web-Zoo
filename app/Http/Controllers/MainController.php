<?php

namespace App\Http\Controllers;

use \App\Models\User;
use \App\Models\Animal;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(Request $request)
    {
        $animals = Animal::orderBy('created_at', 'desc')->get();
        if ($request->isMethod('post') && $request->has('addanimal')) {
            if ($request->hasFile('exampleInputImg')) {
                $filename = $request->file('exampleInputImg')->getClientOriginalName();
                $extension = $request->file('exampleInputImg')->getClientOriginalExtension();
                $filename2 = pathinfo($filename, PATHINFO_FILENAME);
                $filestore = "/animals/".$filename2.".".$extension;
                $file = $request->file('exampleInputImg')->storeAs('public', $filestore);
            }else{
                $filestore = null;
            }
            Animal::create([
                'kind' => $request->input('exampleInputKind'),
                'name' => $request->input('exampleInputName'),
                'age' => $request->input('exampleInputAge'),
                'description' => $request->input('exampleInputDescription'),
                'img' => $filestore,
            ]);
            return redirect()->back();
        }
        return view('home', ["animals"=>$animals]);
    }

    public function animal(Request $request, $id)
    {
        $animal = Animal::find($id);
        return view('animal', ["animal"=>$animal]);
    }

    public function deleteanimal(Request $request, $id)
    {
        Animal::find($id)->delete();
        return redirect('/');
    }

    public function info(){
        return view('info');
    }

    public function rules(){
        return view('rules');
    }
}

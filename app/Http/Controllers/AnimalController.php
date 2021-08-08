<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function  index () {
        $animals = Animal::all();
        return view("welcome", compact("animals"));
    }
    
    public function store (Request $request) {
        $store = new Animal();
        $store->nom  = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect("/");
    }

    public function destroy ($id) {
        $destroy = Animal::find($id);
        $destroy->delete();
        return redirect("/");
    }

    public function show ($id) {
        $animal = Animal::find($id);
        return view("pages.animal", compact("animal"));
    }

    public function edit ($id) {
        $animal = Animal::find($id);
        return view("pages.editAnimal", compact("animal"));
    }

    public function update ($id, Request $request) {
        $update = Animal::find($id);
        $update->nom  = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;
        $update->save();
        return redirect("/");
    }
}

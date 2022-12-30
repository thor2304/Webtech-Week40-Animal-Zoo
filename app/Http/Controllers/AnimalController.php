<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function serve(){
        return Animal::all();
    }


    public function show(Animal $animal){
        return $animal;
    }

    public function index(){
//        redirect('/zoo');

        $animals = Animal::all();
        return view('zoo/zoo')->with('animals', $animals);

    }

    public function create(){
        return view('/zoo/create');
    }

    public function store(){
        $name = request()->only('name')['name'];
        $type = request()->only('type')['type'];

        $animal = new Animal();
        $animal->name = $name;
        $animal->type = $type;

        $animal->save();

        return $this->index();
    }

    public function showEdit(Animal $animal){
//        dd($animal);
        return view('zoo/editAnimal')->with('name', $animal->name)->with('type', $animal->type)->with('id', $animal->id);
    }

    public function update(Animal $animal){
        $name = request()->only('name')['name'];
        $type = request()->only('type')['type'];

        $animal->name = $name;
        $animal->type = $type;

        $animal->save();

        return $this->index();
    }
}

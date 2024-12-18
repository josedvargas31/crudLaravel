<?php

namespace App\Http\Controllers;

use App\Models\User; /* Ruta del modelo para utilizarlo function sotre */
use Illuminate\Http\Request;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::paginate(4); 
        return view('modules/users/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $item = new User();
        $item->name = $request->name; /* 'name' En el lado izquierdo esta en el campo de la base de datos, y el derecho el nombre del input de nuestra aplicación */
        $item->save();
        // Una vez se guarde el item del nombre nos dirige a la vista del nombre
        return to_route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = User::find($id);
        return view('modules/users/show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::find($id);
        return view('modules/users/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = User::find($id);
        $item->name = $request->name;
        $item->save();
        return to_route('index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::find($id);
        $item->delete();
        return to_route('index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('/create');
    }

    
    public function store(Request $request)
    {
        $us=new crud;
        $us->name=$request->input('name');
        $us->save();

        return redirect()->route('show')
            ->with('warning',"Form submited");

    }

   
    public function show(Crud $crud)
    {
        return view('crud_show')
        ->with('crudArr',Crud::all());
    }

    
    public function edit(Crud $crud,$id)
    {
        return view('edit')->with('crudArr',Crud::find($id));
    }

   
    public function update(Request $request, Crud $crud)
    {

        $us=Crud::find($request->id);
        $us->name=$request->input('name');
        $us->save();

        return redirect()->route('show')
            ->with('warning',"Form submited");
 
    }

   
    public function destroy(Crud $crud,$id)
    {
        Crud::destroy(array('id',$id));

        return redirect('/home');
    }
}

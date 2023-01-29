<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    //
    public function index()
    {
        $cats =  Cat::all();
        return $cats;
    }

    public function show($id)
    {
        $cats = Cat::find($id);
        return $cats;
    }
    public function destroy($id)
    {
        Cat::find($id)->delete();
    }
    public function store(Request $request)
    {
        $cat = new Cat();
        $cat->tipus = $request->tipus;
        $cat->nev = $request->nev;
        $cat->suly = $request->suly;
        $cat->save();
    }

    public function update(Request $request, $id)
    {
        $cat = Cat::find($id);
        $cat->tipus = $request->tipus;
        $cat->nev = $request->nev;
        $cat->suly = $request->suly;
        $cat->save();
    }
}
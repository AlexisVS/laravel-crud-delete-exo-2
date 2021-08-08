<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{


    public function index()
    {
        $cars = Cars::all();
        return view('welcome', compact("cars"));
    }

    public function store(Request $request)
    {
        $store = new Cars;
        $store->marque = $request->marque;
        $store->annee = $request->annee;
        $store->couleur = $request->couleur;
        $store->prix = $request->prix;
        $store->reduction = $request->reduction;
        $store->save();
        return redirect("/");
    }

    public function destroy($id) {
        $destroy = Cars::find($id);
        $destroy->delete();
        return redirect("/");
    }
}

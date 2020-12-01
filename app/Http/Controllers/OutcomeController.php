<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcome;

class OutcomeController extends Controller
{
    public function index(){
        $outcomes = Outcome::all();
        return view('pages.outcome',[
            'outcomes' => $outcomes,
        ]);
    }

    public function update(Request $request, $id){
        $income= Income::findOrFail($id);
        $quantity_out = $request->quantity;
        $quantity = $income->quantity - $quantity_out;

        $income['quantity']->$quantity;
        $income->save();
        return redirect()->route('income.index');

    }

    public function create(){

    }
}

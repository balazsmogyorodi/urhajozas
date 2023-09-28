<?php

namespace App\Http\Controllers;

use App\Models\Kuldetes;
use App\Models\User;
use Illuminate\Http\Request;

class KuldetesController extends Controller
{
    public function index() {
        $kuldetes = response()->json(Kuldetes::all());
        return $kuldetes;
    }

    public function show($id) {
        $kuldetes = response()->json(Kuldetes::find($id));
        return $kuldetes;
    }
    public function destroy($id) {
        Kuldetes::find($id)->delete();
        return redirect('/Kuldetes/list');
    }

    public function store(Request $request) {
        $kuldetes = new Kuldetes();
        $kuldetes->kod_nev = $request->kod_nev;
        $kuldetes->nev = $request->nev;
        $kuldetes->cel = $request->cel;
        $kuldetes->kezdes = $request->kezdes;
        $kuldetes->befejezve = $request->befejezve;
        $kuldetes->save();
        return redirect('/Kuldetes/list');
    }
    public function update(Request $request, $id)  {
        $kuldetes = Kuldetes::find($id);
        $kuldetes->nev = $request->nev;
        $kuldetes->cel = $request->cel;
        $kuldetes->kezdes = $request->kezdes;
        $kuldetes->befejezve = $request->befejezve;
        $kuldetes->save();
    }

    public function listView() {
        $kuldetes = Kuldetes::all();
        return view('Kuldetes.list', ['kuldetes' =>$kuldetes]);
    }
    
    public function newView() {
        $users= User::all();
        return view('Kuldetes.new', ['users' => $users]);
    }
    public function editView($id) {
        $users = User::all();
        $kuldetes = Kuldetes::find($id);
        return view('Kuldetes.edit', ['users' => $users, 'kuldetes' => $kuldetes]);
    }
   

}

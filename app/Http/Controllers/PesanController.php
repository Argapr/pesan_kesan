<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    //
    public function index() {
        $pesan = Pesan::all();
        return view('pesan.index',compact(['pesan']));
    }
    public function create(){
        return view('pesan.create');
    }
    public function store(Request $request){
        Pesan::create($request->except(['_token','submit']));
        return redirect('/pesan');
    }
}

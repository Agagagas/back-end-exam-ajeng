<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function CreateUnit(Request $req){
        $createunit = new UnitRumah;
        $createunit->kavling = $req->input('kavling');
        $createunit->blok = $req->input('blok');
        $createunit->no_rumah = $req->input('no_rumah');
        $createunit->harga_rumah = $req->input('harga_rumah');
        $createunit->luas_tanah = $req->input('luas_tanah');
        $createunit->luas_bangunan = $req->input('luas_bangunan');
        $createunit->save();
        return response()->json($createunit, 200);
    }

    function DeleteUnit($id){
        DB::update('update unit set deleted = 1 where id = ?', [$id]);
        return redirect('deleteunit');
    }
}

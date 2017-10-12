<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function CreateUnit(){
        $createunit = new UnitRumah;
        $createunit->kavling = "New Kavling";
        $createunit->blok = "New Blok";
        $createunit->no_rumah = "New no Rumah";
        $createunit->harga_rumah = "New Harga Rumah";
        $createunit->luas_tanah = "New Luas Tanah";
        $createunit->luas_bangunan = "New Luas Bangunan";
        $createunit->save();
    }

    function DeleteUnit($id){
        DB::update('update unit set deleted = 1 where id = ?', [$id]);
        return redirect('deleteunit');
    }
}

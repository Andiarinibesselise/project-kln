<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\setup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class crudController extends Controller
{
    public function insertData(Request $request)
    {
        $manages = new setup;

        if ($request->logo == null) {
            $lokasifileskr = null;
        } else {
            $ext = $request->file('logo')->getClientOriginalExtension();
            $namafile = time() . '.' . $ext;
            $lokasifileskr = '/setups2/' . $namafile;
            //cek file sudah ada
            $destinasi = public_path('/setups2');
            $proses = $request->file('logo')->move($destinasi, $namafile);
        }

        $manages->meta_title   = $request->meta_title;
        $manages->address      = $request->address;
        $manages->contact      = $request->contact;
        $manages->email        = $request->email;
        $manages->social       = $request->social;
        $manages->logo         = $lokasifileskr;

        $manages->save();

        session::flash('message', 'Data inserted successfully!!!');
        return redirect('/setups');
    }
    private function slug($string)
    {
        $string = strtolower(trim($string));
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('/[^a-z0-9-]/', '-', $string);
        $string = preg_replace('/-+/', '-', $string);
        return rtrim($string, '-');
    }



    private function upload($image, $tbl)
    {
        $name = $image->getClientOriginalName();
        $newName = date('ymdgis') . $name;
        $image->move(public_path() . '/' . $tbl, $newName);
        return $newName;
    }
}

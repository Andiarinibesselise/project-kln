<?php

namespace App\Http\Controllers;
use Request;
use DB;
use Session;


class crudController extends Controller
{
    public function insertData(){
        $data = Request::except('_token','submit');
        $tbl= decrypt($data['tbl']);
        unset ($data['tbl']);

        if(Request::has('social')){
            $data['social']= implode(',',$data['social']);        
        }
        if(!empty($data['image'])){
            if(Input::hasFile('image')){
              $data['image'] = $this->upload($data['image'], $tbl);
            }
              }  
          
        $data['created_at'] = date('Y-m-d H:i:s');  
    	DB::table($tbl)->insert($data);
    	session::flash('message','Data inserted successfully!!!');
        return redirect()->back();
    }
    private function upload($image,$tbl){
        $name = $image->getClientOriginalName();
        $newName = date('ymdgis').$name;
        $image->move(public_path().'/'.$tbl,$newName);
        return $newName;
      } 
    }


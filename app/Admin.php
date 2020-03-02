<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public $table = 'uploads';

     public $fillable = [
        'imagename', 'imagedescription','status'
    ];

    public function getAllmages(){
    	$images = Admin::all();   
    	return $images;

    }
     public function getImagesbyId($id){
    	$images = Admin::find($id);   
    	return $images;

    }
}

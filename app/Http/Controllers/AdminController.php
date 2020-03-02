<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function viewImages(){
    	$admininstance  = new Admin();
    	$objct = $admininstance->getAllmages();
        	return view('admin.viewimages')->with('obj', $objct);
    

    }
    public function addImages(){
    	return view('admin\addimage');
    }

    public function addthumbnailImages(Request $request){
    	$adminaddimage = new Admin();
    	$validatedData  = $request->validate([
				'imagedescription' => 'required|min:20',
				'imagefile'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

    	]);   	
    		 $uploadOk = 1;
    	 
    	     $image = $request->file('imagefile');
    	     $imagename = $_FILES['imagefile']['name'];
    	     $imageext = $image->getClientOriginalExtension();
    	     $destinationPath = public_path('images\\');
    	     $check = getimagesize($_FILES["imagefile"]["tmp_name"]);
    	     $targetfile = $destinationPath ."\\". basename($_FILES["imagefile"]["name"]);
    	     $path = $image->getRealPath();
    	     // echo $targetfile;
    	     // echo $destinationPath;
    	     // print_r($check) ;
    	     // $wrapped = wordwrap($request->imagedescription, 10,"<br/>\n", false);
    	     // echo   $wrapped;
    	     if ($check !== false) {
    	     	# code...
    	     	$uploadOk = 1;
    	     }else{
    	     	$uploadOk = 0;
    	     }
    	     if (file_exists($targetfile)) {
    	     		$errors = "Sorry, the image already exists.";
   				 $uploadOk = 0;
   				 return back()->withErrors($errors);
    	     	}
    	     if ($_FILES["imagefile"]["size"] > 1000000) {
   				 $errors = "Sorry, your image is too large.";
   				 $uploadOk = 0;
   				 return back()->withErrors($errors);
			 }	
			 if ($uploadOk = 0) {
			 		# code...
			 		return back()->withErrors($errors);

			 	}else{
			 		if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $targetfile)) {
       					$adminaddimage->imagename = $imagename;
						$adminaddimage->imagedescription = $request->imagedescription;
                        $adminaddimage->category = $request->categoryoption;
						$adminaddimage->status =true;
						$adminaddimage->save();
						return back()->with('successmsg','Image was saved successfully');
					}

			 	}	
    	     
    }

    public function updatethumbnailImages(Request $request){
        $adminaddimage = new Admin();
        $validatedData  = $request->validate([
                'imagedescription' => 'required|min:20',
                'imagefile'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
               
        ]);     
             $uploadOk = 1;
             if ( $request->file('imagefile') != '') {
              $image = $request->file('imagefile');
             $imagename = $_FILES['imagefile']['name'];
             $imageext = $image->getClientOriginalExtension();
             $destinationPath = public_path('images\\');
             $check = getimagesize($_FILES["imagefile"]["tmp_name"]);
             $targetfile = $destinationPath ."\\". basename($_FILES["imagefile"]["name"]);
             $path = $image->getRealPath();
             
             if ($check !== false) {
                # code...
                $uploadOk = 1;
             }else{
                $uploadOk = 0;
             }
             if (file_exists($targetfile)) {
                    $errors = "Sorry, the image already exists.";
                 $uploadOk = 0;
                 return back()->withErrors($errors);
                }
             if ($_FILES["imagefile"]["size"] > 1000000) {
                 $errors = "Sorry, your image is too large.";
                 $uploadOk = 0;
                 return back()->withErrors($errors);
             }  
             if ($uploadOk = 0) {
                    # code...
                    return back()->withErrors($errors);

                }else{
                    if (move_uploaded_file($_FILES["imagefile"]["tmp_name"], $targetfile)) {
                        $id = $request->updateid;
                        $theimage = Admin::find($id);        
                        $imagenametodelete =  $theimage->imagename;
                        $destinationPath = public_path('images\\');
                        $path = $destinationPath.'/'. $imagenametodelete;
                        // $_SERVER['DOCUMENT_ROOT'].'items/item2.txt';
                         unlink($path);
                        $theimage->imagename = $imagename;
                        $theimage->imagedescription = $request->imagedescription;
                        $theimage->category = $theimage->category;
                        $theimage->status =true;
                        $theimage->save();
                    return back()->with('successmsg','record updated successfully');
                    }

                }   
             }else{
            $id = $request->updateid;
            $theimage = Admin::find($id);
            $theimage->imagedescription = $request->imagedescription;
            $theimage->save();
                return back()->with('successmsg','Information updated successfully');
             }
           
    }

    public function deleteupload($id){
        $imagetodelete = Admin::find($id);
        $imagename =  $imagetodelete->imagename;
        $destinationPath = public_path('images\\');
        $path = $destinationPath.'/'. $imagename;
        // $_SERVER['DOCUMENT_ROOT'].'items/item2.txt';
         unlink($path);
        $imagetodelete->delete();


        return back()->with('successmsg','Image deleted successfully');

    }
    public function editimage($id){
        $admininstance  = new Admin();
       $objct = $admininstance->getImagesbyId($id);
        return view('admin\edittheimage')->with('obj', $objct);

    }
}

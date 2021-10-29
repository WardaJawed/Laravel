<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PhotoController extends Controller
{
    
    public function index()
    {

        $photo = DB::table('photo_tbl')->get();
        return view('show', ['photo' =>$photo]);
    }

   
    public function create()
    {
        return view('Picture');
    }

    
    public function store(Request $request) //form data pass here
    {
        $file=$request->file('pic_upload');
        
        //Display filename
       /* echo 'File Name :'.$file->getClientOriginalName();
        echo '<br>';
        //Display File extension
        echo 'File extension :'.$file->getClientOriginalExtension();
        echo '<br>';
        //Display File size
         echo 'File size :'.$file->getSize();
         echo '<br>';
         //Display File Path
         echo 'File Path :'.$file->getRealPath();
         echo '<br>';
         //Display File Mime type
         echo 'File Mime type :'.$file->getMimeType();
         echo '<br>';*/
         //move to upload file procedure
         $destinationpath ='uploads';
         $file->move($destinationpath,$file->getClientOriginalName());

         $data = array();
         $data['image'] = $file->getClientOriginalName();
         DB::table('photo_tbl')->insert($data);
         return redirect()->action('PhotoController@index');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}

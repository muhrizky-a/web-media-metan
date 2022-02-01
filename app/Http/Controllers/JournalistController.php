<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journalist;

class JournalistController extends Controller
{
    public function create(Request $request){
        $name = $request->input('name');
        $status = $request->input('status');
        $file = $request->file('image');
        
        // nama file
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        // ukuran file
        echo 'File Size: ' . $file->getSize();
        echo '<br>';
    
        $tujuan_upload = 'journalist/images';
        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $new_data = new Journalist();
        $new_data->name = $name;
        $new_data->image_url = $file->getClientOriginalName();
        $new_data->status = $status;
        $new_data->link = (new Functions)->createLink($name);
        $new_data->save();

    
        return redirect()->route('admin.journalist.list');
    }

    public function getAll(){
        //Pagination yang menampilkan 10 artikel dalam 1 page
        $categories = Journalist::all();
        $data = array(
            'journalist_list' => $categories
        );
        return $data;
    }

    private function get($id){
        //Cari artikel dengan id = $id
        $detail = Journalist::find($id);
        if ($detail == NULL) {
            return;   
        }
        return $detail;
    }
}

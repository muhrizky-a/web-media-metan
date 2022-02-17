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
            
        $tujuan_upload = 'img/journalist';
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

    public static function getAll(){
        //Pagination yang menampilkan 10 artikel dalam 1 page
        return Journalist::all();;
    }

    private function get($id){
        //Cari artikel dengan id = $id
        $detail = Journalist::find($id);
        if ($detail == NULL) {
            return;   
        }
        return $detail;
    }

    public function admin_journalist_list()
    {
        return view('admin.journalist.list', [
            'journalists' =>$this->getAll()  
        ]);
    }
    public function journalist_insert()
    {
        return view('admin.journalist.insert');
    }
}

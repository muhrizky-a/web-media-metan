<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journalist;

class JournalistController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $status = $request->input('status');

        $file = $request->file('image');

        $tujuan_upload = 'img/journalist';
        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $new_data = new Journalist();
        $new_data->name = $name;
        $new_data->address = $address;
        $new_data->contact = $contact;
        $new_data->email = $email;
        $new_data->image_url = $file->getClientOriginalName();
        $new_data->status = $status;
        $new_data->link = (new Functions)->createLink($name);
        $new_data->save();


        return redirect()->route('admin.journalist.list');
    }

    public static function getAll()
    {
        //Pagination yang menampilkan 10 artikel dalam 1 page
        return Journalist::with(['article'])->get();
    }

    public function admin_journalist_list()
    {
        return view('admin.journalist.list', [
            'journalists' => $this->getAll()
        ]);
    }


    public function journalist_insert()
    {
        return view('admin.journalist.insert');
    }

    public function admin_journalist_update(Journalist $journalist)
    {
        return view('admin.journalist.update', [
            'journalist' => $journalist
        ]);
    }

    public function update(Request $request, Journalist $journalist)
    {

        $name = $request->input('name');
        $address = $request->input('address');
        $contact = $request->input('contact');
        $email = $request->input('email');
        $status = $request->input('status');

        $new_image = $request->file('image');
        if ($new_image) {
            $tujuan_upload = 'img/journalist';

            $new_file_name = time() . '-' . $new_image->getClientOriginalName();

            // upload file
            $new_image->move($tujuan_upload, $new_file_name);
            Functions::deleteFile($tujuan_upload, $journalist->image_url);

            $journalist->update([
                'image_url' => $new_file_name
            ]);
        }

        $journalist->update([
            'name' => $name,
            'address' => $address,
            'contact' => $contact,
            'email' => $email,
            'status' => $status
        ]);

        return redirect()->route('admin.journalist.list');
    }

    public function delete(Journalist $journalist)
    {
        $journalist->delete();

        echo "<script type='text/javascript'>
            alert('Hapus Data Berhasil');
        </script>";
        return redirect()->route('admin.journalist.list');
    }
}

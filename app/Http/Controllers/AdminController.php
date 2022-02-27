<?php

namespace App\Http\Controllers;

use App\Models\FooterPage;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function footer(FooterPage $page)
    {
        return view('admin.footer', [
            'page' => $page,
        ]);
    }

    public function update_footer(Request $request, FooterPage $page)
    {
        $content = $request->input('content');

        $page->update([
            'content' => $content
        ]);

        return back();
    }

    public function admin_settings()
    {
        return view('admin.settings');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        dd('Password change successfully.');
        // return view('admin.settings');
    }
}

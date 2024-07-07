<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        User::where('id', $id)->update(['name' => $request->name, 'email' => $request->email]);
        Alert::success('Exito', 'Success Message');
        alert('Title','Lorem Lorem Lorem', 'success');

        return redirect()->route('user.profile');
    }
}

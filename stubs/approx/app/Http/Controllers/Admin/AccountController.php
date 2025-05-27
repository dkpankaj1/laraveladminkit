<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Support\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class AccountController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', ['user' => Auth::user()]);
    }

    public function profile()
    {
        return view('admin.profile.edit', ['user' => Auth::user()]);
    }
    public function profileUpdate(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($request->user()->id)],
        ]);
        try {
            $request->user()->fill($validated);
            if ($request->user()->isDirty('email')) {
                $request->user()->email_verified_at = null;
            }
            $request->user()->save();
            Toastr::success(__('messages.success.default'));
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }

    }
    public function password()
    {
        return view('admin.profile.password');
    }
    public function passwordUpdate(Request $request)
    {
       $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        try {
            $request->user()->update(['password' => Hash::make($request->password)]);
            Toastr::success(__('messages.success.default'));
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }
}
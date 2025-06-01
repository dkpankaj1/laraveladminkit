<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\Toastr;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function toggle(Request $request)
    {
        try {
            // Check current theme in session, default to 'light' if not set
            $currentTheme = $request->session()->get('theme', 'light');

            // Toggle theme
            $newTheme = $currentTheme === 'light' ? 'dark' : 'light';

            // Store new theme in session
            $request->session()->put('theme', $newTheme);

            Toastr::success(trans('messages.success.default'), 'Success');
            return redirect()->back();

        } catch (\Exception $e) {
            Toastr::error($e->getMessage(), 'Error');
            return redirect()->back();
        }
    }
}

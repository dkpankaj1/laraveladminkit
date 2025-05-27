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
            $request->user()->theme == "light"
                ? $request->user()->update(['theme' => 'dark'])
                : $request->user()->update(['theme' => 'light']);

            Toastr::success(trans('messages.success.default'), 'Success');
            return redirect()->back();

        } catch (\Exception $e) {

            Toastr::error($e->getMessage(), 'Error');
            return redirect()->back();

        }

    }
}

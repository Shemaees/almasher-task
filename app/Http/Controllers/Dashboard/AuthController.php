<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DashboardLoginRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function login(DashboardLoginRequest $request)
    {
        $remember_me = $request->has('remember_me');

        if (auth()->guard('admin')
            ->attempt([
                'email'         => $request->email,
                'password'      => $request->password
            ], $remember_me)) {
            notify()->success(__('auth.success'));
            return redirect()->route('dashboard');
        }
        notify()->error(trans('auth.failed'));
        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
//        Auth::logout();
        notify()->error(__('auth.logout'));
        return redirect()
            ->route('dashboard.login');
    }
}

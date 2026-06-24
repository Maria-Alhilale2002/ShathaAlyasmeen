<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function loginForm()
    {
        return view('adminlogin');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ], [
        'email.required' => 'يرجى إدخال البريد الإلكتروني',
        'email.email' => 'صيغة البريد الإلكتروني غير صحيحة',
        'password.required' => 'يرجى إدخال كلمة المرور',
    ]);

    $admin = Admin::where('email', $request->email)->first();

    // البريد غير موجود
    if (!$admin) {
        return back()
            ->withInput()
            ->with('error', 'البريد الإلكتروني غير موجود');
    }

    // كلمة المرور خاطئة
    if (!Hash::check($request->password, $admin->password)) {
        return back()
            ->withInput()
            ->with('error', 'كلمة المرور غير صحيحة');
    }

    session([
        'admin_id' => $admin->id,
        'admin_logged' => true
    ]);

    return redirect('/admindashboard');
}

    public function logout()
    {
        session()->flush();

        return redirect('/secret-admin-login');
    }

    public function resetForm()
    {
        return view('resetadminpassword');
    }

    public function resetPassword(Request $request)
    {
        $admin = Admin::where(
            'email',
            $request->email
        )->first();

        if (!$admin) {
            return back()
                ->with('error', 'البريد غير موجود');
        }

        if (
            !Hash::check(
                $request->old_password,
                $admin->password
            )
        ) {
            return back()
                ->with('error', 'كلمة المرور الحالية غير صحيحة');
        }

        $admin->update([
            'password' => Hash::make(
                $request->new_password
            )
        ]);

        return redirect()
              ->back()
              ->with('success', 'تم تغيير كلمة المرور بنجاح');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

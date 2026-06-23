<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $home = Home::first();

    if (!$home) {
        $home = Home::create([]);
    }

    return view('index', compact('home'));
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
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
         $home = Home::first();

    if (!$home) {
        $home = Home::create([]);
    }

    return view('edithome', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    $home = Home::first();

    $data = $request->all();

    // 🛑 نحذف الحقول الفارغة حتى لا تمسح القديم
    foreach ($data as $key => $value) {
        if ($value === null) {
            unset($data[$key]);
        }
    }

    // 📌 معالجة الفيديو
    if ($request->hasFile('hero_video_file')) {

        $file = $request->file('hero_video_file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('videos'), $filename);

        $data['hero_video_file'] = 'videos/' . $filename;
    } else {
        // 🚨 لا تحذف القديم
        unset($data['hero_video_file']);
    }

    $home->update($data);

    return back()->with('success', 'تم الحفظ بنجاح');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}

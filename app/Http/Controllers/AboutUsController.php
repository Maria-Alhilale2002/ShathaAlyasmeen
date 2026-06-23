<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $about = AboutUs::first();

    if (!$about) {
        $about = AboutUs::create([]);
    }

    return view('about', compact('about'));
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
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        $about = AboutUs::first();

        if (!$about) {
            $about = AboutUs::create([]);
        }

        return view('editabout', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $aboutUs)
    {
         $about = AboutUs::first();

        $data = [];

        foreach ($request->except('_token') as $key => $value) {

            if ($value !== null && $value !== '') {
                $data[$key] = $value;
            }
        }

        $about->update($data);

        return back()->with('success', 'تم حفظ التعديلات بنجاح');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}

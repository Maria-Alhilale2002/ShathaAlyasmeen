<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function create()
    {
        $services = Service::all(); // إذا تحتاج عرض القائمة
         return view('admin.services.create', compact('services'));
    }

    public function store(Request $request)
    {
        Service::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return back()->with('success', 'تمت إضافة الخدمة بنجاح');
    }

    public function edit(Service $service)
    {
         $services = Service::all();
         return view('editservices', compact('services'));
    }

    public function update(Request $request, Service $service)
    {
         $service->update([
        'title' => $request->title ?? $service->title,
        'price' => $request->price ?? $service->price,
        'description' => $request->description ?? $service->description,
    ]);

    return back()->with('success', 'تم تحديث الخدمة بنجاح');
    }

    public function destroy(Service $service)
    {
        $service->delete();

       return back()->with('success', 'تم حذف الخدمة');
    }
}
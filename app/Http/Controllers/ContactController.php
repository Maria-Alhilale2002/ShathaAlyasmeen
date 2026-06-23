<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();

       return view('contact', compact('contact'));
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
         $contact = Contact::first();

        if (!$contact) {
            $contact = Contact::create([]);
        }

        return view('editcontact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact = Contact::first();

        if (!$contact) {
            $contact = Contact::create([]);
        }

        // فقط الحقول المرسلة (بدون null overwrite)
        $data = $request->only([
            'city',
            'address',
            'phone1',
            'phone2',
            'email1',
            'email2',
            'whatsapp',
        ]);

        // إزالة القيم الفارغة حتى لا تمسح القديم
        foreach ($data as $key => $value) {
            if ($value === null) {
                unset($data[$key]);
            }
        }

        $contact->update($data);

        return back()->with('success', 'تم تحديث بيانات التواصل بنجاح');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

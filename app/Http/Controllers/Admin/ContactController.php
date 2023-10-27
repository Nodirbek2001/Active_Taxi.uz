<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
{
    $contacts = Contact::all();
    return view('admin.contacts.index', compact('contacts'));
}
public function show(Contact $contact)
{
    return view('admin.contacts.show', compact('contact'));
}

    public function create()
{
    // Agar allaqachon contact mavjud bo'lsa, index sahifasiga qaytaring
    if (Contact::first()) {
        return redirect()->route('contacts.index');
    }

    return view('admin.contacts.create');
}
    public function store(Request $request)
{
    // Agar allaqachon contact mavjud bo'lsa, index sahifasiga qaytaring
    if (Contact::first()) {
        return redirect()->route('contacts.index');
    }
    $data = $request->validate([
        'phone_number_1' => 'required|string',
        'phone_number_2' => 'nullable|string',
        'email' => 'required|email',
        'geolocation' => 'required|string',
    ]);

    // Geolocationdan faqat src qiymatini olish
    preg_match('/src="([^"]+)"/', $data['geolocation'], $match);
    $data['geolocation'] = $match[1];

    Contact::create($data);

    return redirect()->route('contacts.index');
}
public function edit(Contact $contact)
{
    return view('admin.contacts.edit', compact('contact'));
}
public function update(Request $request, Contact $contact)
{
    $data = $request->validate([
        'phone_number_1' => 'required|string',
        'phone_number_2' => 'nullable|string',
        'email' => 'required|email',
        'geolocation' => 'required|string',
    ]);

    // Geolocationdan faqat src qiymatini olish
    preg_match('/src="([^"]+)"/', $data['geolocation'], $match);

    // Agar embed link topilsa yoki tashqi linkda "https" mavjud bo'lsa, uni saqlash
    if (isset($match[1])) {
        $data['geolocation'] = $match[1];
    } elseif (strpos($data['geolocation'], 'https://') === 0) {
        // geolocation maydonida https bilan boshlanadigan satri o'zgartirmaslik
    } else {
        // Boshqa xolatlarda xatolikni qaytarish
        return redirect()->back()->with('error', 'Invalid geolocation format.');
    }   

    $contact->update($data);

    return redirect()->route('contacts.index')->with('success', 'Contact updated successfully');
}

public function destroy(Contact $contact)
{
    $contact->delete();
    return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully');
}

}

<?php

namespace Modules\ContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Modules\ContactForm\Models\ContactForm;

class ContactFormController extends Controller
{

    public function index()
    {
        $data['contacts'] = ContactForm::latest()->get();
        return view('contactform::index', $data);
    }

    public function store(Request $request)
    {
        // dd('hello');    
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'title' => 'required',
            'message' => 'required',
        ]);


        $contact = ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'title' => $request->title,
            'message' => $request->message,
        ]);

        notify()->success('Contact has been successfully submitted.');
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $contact = ContactForm::findOrFail($id);

        try {
            if ($contact) {
                $contact->delete();
            }
            notify()->success('Contact deleted successfully...');
            return redirect()->back();
        } catch (QueryException $err) {
            if ($err->getCode() === '23000') {
                notify()->error('Contact could not be deleted');
                return redirect()->back();
            }
            throw $err;
        }
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companymodel;
use Session;
use Redirect;
use validate;
use Illuminate\Auth\Events\Validated;


class companycontroller extends Controller
{
    public function index()
    {
        $company = Companymodel::orderBy('id', 'desc')->simplePaginate(10);
        return view('company.company', compact('company'));
    }
    public function save(request $request)
    {
        $validateData = $request->validate([
            'company_name' => 'required',
            'email' => 'required',

        ]);

        $company = new companymodel;
        $company->company_name = $request->company_name;
        $company->email = $request->email;


        if ($request->hasFile('image')) {
            $validateData = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);

            $image = $request->file('image');
            $new_image_name = date('y-md-d') . time() . "." . $image->extension();
            $destination_path = public_path('/images');
            $image->move($destination_path, $new_image_name);

            $company->logo = "images/" . $new_image_name;
        }

        $company->save();
        $error_message = new login();
        $error_message->setSession(true, 'Post successfully saved.');
        return redirect()->action([companycontroller::class, 'index']);
    }

    public function edit($id)
    {
        $company =  companymodel::find($id);
        return view('company.company_edit', compact('company'));
    }

    public function update(request $request)
    {
        $company = companymodel::find($request->id);
        $company->company_name = $request->company_name;
        $company->email = $request->email;
        $company->logo = $request->logo;

        $company->save();
        return redirect()->action([companycontroller::class, 'index']);
    }

    public function delete($id)
    {

        $companies =  companymodel::find($id);
        $companies->delete();
        return back();
    }
}
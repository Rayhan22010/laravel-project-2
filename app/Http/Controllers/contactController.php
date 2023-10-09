<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function backend_contact()
    {
        try{
            $value = contact::all();
            return view("backend.pages.contact.backend_contact",compact('value'));

        }catch(\Throwable $th){
            return $th;
        }
    }
    public function backend_contact_delete($id)
    {
        try{
            $data = contact::find($id);
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        }catch(\Throwable $th){
            return $th;
        }
    }

}

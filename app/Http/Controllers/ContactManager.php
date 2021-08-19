<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_ContactManager;
use Illuminate\Support\Facades\DB;


class ContactManager extends Controller
{
    public function ContactManagerIndex(){
        $get_contact = DB::table('model_contact_managers')->get();
        return view('ContactManager',compact('get_contact'));
    }
    
    public function CreateContact(Request $request){
        $request->validate([
            'account_name'=>'required',
            'email_or_phone'=>'required',
            'acc_password'=>'required',
            'account_id'=>'required'
        ],[
            'account_name.required'=>'Please fill in Account Name',
            'email_or_phone.required'=>'Please fill in Email/Phone',
            'acc_password.required'=>'Please fill in Account Password',
            'account_id.required'=>'Please fill in Account ID'
        ]);
        $contact = new Model_ContactManager();
        $contact->account_name=$request->account_name;
        $contact->email_or_phone=$request->email_or_phone;
        $contact->acc_password=$request->acc_password;
        $contact->account_id=$request->account_id;
        $contact->acc_create_date=$request->acc_create_date;
        $contact->token=$request->_token;
        $contact->save();
        return response()->json($contact);
    }
  
    public function ContactManagerGetId($id){
        $ContactManager = Model_ContactManager::find($id);
        return response()->json($ContactManager);
    }
    public function ContactUpdate(Request $request){
        $request->validate([
            'account_name'=>'required',
            'email_or_phone'=>'required',
            'acc_password'=>'required',
            'account_id'=>'required'
        ],[
            'account_name.required'=>'Please fill in Account Name',
            'email_or_phone.required'=>'Please fill in Email/Phone',
            'acc_password.required'=>'Please fill in Account Password',
            'account_id.required'=>'Please fill in Account ID'
        ]);
        $contact = Model_ContactManager::find($request->id);
        $contact->account_name=$request->account_name;
        $contact->email_or_phone=$request->email_or_phone;
        $contact->acc_password=$request->acc_password;
        $contact->account_id=$request->account_id;
        $contact->acc_create_date=$request->acc_create_date;
        $contact->save();
        return response()->json($contact);
    }
   
}

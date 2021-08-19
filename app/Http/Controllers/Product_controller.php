<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class Product_controller extends Controller
{
    public function Index(){
        $product_list = DB::table('products')->get();
        return view('Products',compact('product_list'));
    }
    
    public function Create(Request $request){
        $request->validate([
            'name'=>'required'
        ],[
            'name.required'=>'Please fill in product name'
        ]);
        $product = new Product();
        $product->name=$request->name;
        $product->sku=$request->sku;
        $product->price=$request->price;
        $product->qty=$request->qty;
        $product->image=$request->image;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $product->store_id=implode('',$request->store_id);
        $product->availability=$request->availability;
        $product->token=$request->_token;
        $product->save();
        return response()->json($product);
    }
    
    // public function ContactManagerGetId($id){
    //     $ContactManager = Model_ContactManager::find($id);
    //     return response()->json($ContactManager);
    // }
    // public function ContactUpdate(Request $request){
    //     $request->validate([
    //         'account_name'=>'required',
    //         'email_or_phone'=>'required',
    //         'acc_password'=>'required',
    //         'account_id'=>'required'
    //     ],[
    //         'account_name.required'=>'Please fill in Account Name',
    //         'email_or_phone.required'=>'Please fill in Email/Phone',
    //         'acc_password.required'=>'Please fill in Account Password',
    //         'account_id.required'=>'Please fill in Account ID'
    //     ]);
    //     $contact = Model_ContactManager::find($request->id);
    //     $contact->account_name=$request->account_name;
    //     $contact->email_or_phone=$request->email_or_phone;
    //     $contact->acc_password=$request->acc_password;
    //     $contact->account_id=$request->account_id;
    //     $contact->acc_create_date=$request->acc_create_date;
    //     $contact->save();
      
    //     return response()->json($contact);
    // }
}

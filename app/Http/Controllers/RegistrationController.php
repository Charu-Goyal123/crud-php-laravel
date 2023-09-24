<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class RegistrationController extends Controller
{
    public function index()
    {      
        return view('add');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
            'name' => 'required',
            'email'=>'required|email',
            'password'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'hobby' =>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required'
        ]
     );
        echo "<pre>";
        print_r($request->all());

        $customers = new Customer();
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->password = md5($request['password']);
        $customers->gender = $request['gender'];
        $customers->dob = $request['dob'];
        $customers->hobby = implode(',', $request['hobby']);
        $customers->address = $request['address'];
        $customers->city = $request['city'];
        $customers->state = $request['state'];
        $customers->save();

        return redirect('/customer/view');

    }
    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $custom = Customer::where('name','LIKE', "%$search")->get();

        }else{
            $custom = Customer::all();
        }
       
        $data = compact('custom','search');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
            $custom=Customer::find($id);
            if(!is_null($custom)){
                $custom->delete();
            }
            return redirect('/customer/view');

    }

    public function edit($id)
    {
        $custom=Customer::find($id);
        if(is_null($custom)){
            return redirect('/customer/view');
        
        }else{
            $url = url('/customer/update')."/".$id;
            return view('edit', compact('custom','url'));
        }

    }
    public function update($id, Request $request)
    {
        $customers=Customer::find($id);
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->gender = $request['gender'];
        $customers->dob = $request['dob'];
        //$custom->hobby = implode(',', $request['hobby']);
        $customers->address = $request['address'];
        $customers->city = $request['city'];
        $customers->state = $request['state'];
        $customers->save();

        return redirect('/customer/view');

    }


}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use hash;

class CustomerController extends Controller
{

    public function create(){
        return view('customer.create');

    }   
    public function store(Request $request){  
        $request->validate([
            'name' => 'required',
            'number' =>'required|unique:customer',
            'password'  => 'required|min:8|max:12',              
            'email'=>'required|unique:customer',
        ]);
            $customer = new Customer();
            $customer->name= $request->name;
            $customer->email= $request->email;
            $customer->number= $request->number;
            $customer->status= 1;
            $customer->password=  \Hash::make($request->password);
            $customer->save();
        return redirect('/customer/index')->with('success',"Customer create successfully");
    }
    public function index(){
        $data = Customer::paginate(3);
        return view('customer.index',compact('data'));
    }  
    public function status($id){
        $data = Customer::where('id',$id)->first();
        if ($data->status==1) 
        {
            $data->status=0;
            $data->save();
        }
        else
        {
             $data->status=1;
            $data->save();
        }
        return redirect('/customer/index')->with('success',"customer status Updated");
    }
    public function delete($id){
        Customer::where('id', $id)->delete();
        return redirect('/customer/index')->with('success',"customer data deleted successfully");
    } 
    public function edit($id){
        $data = Customer::where('id',$id)->first();
        return view('customer.edit',compact('data'));
    }
    public function update(Request $request,$id){  
        $request->validate([
            'name' => 'required',
            'number' =>'required|unique:customer,number,'.$id,
            'email'=>'required|unique:customer,email,'.$id,
        ]); 
           $customer_update = Customer::find($id);
            $customer_update->name= $request->name;
            $customer_update->email= $request->email;
            $customer_update->number= $request->number;
            $customer_update->save();
        return redirect('/customer/index')->with('success',"Customer create successfully");
    } 
}
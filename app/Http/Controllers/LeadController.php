<?php
namespace App\Http\Controllers;
use App\Models\Lead;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
class LeadController extends Controller
{
    public function index(){
        $data = Lead::get();
        return view('lead.index',compact('data'));
    }
    public function create(){
        $category = Category::get();
        $customer = Customer::get();
        return view('lead.create',compact('category','customer'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:lead',
            'description'  => 'required',
            'image'  => 'required',              
            'category_id'  => 'required',              
            'customer_id'  => 'required',              
            'start'  => 'required',
            'end'  => 'required',              
        ]);

         
           
        
        $lead = new Lead();
        $lead->name= $request->name;
        $lead->description= $request->description;
        $lead->category_id= $request->category_id;
        $lead->customer_id= $request->customer_id;
        $lead->start= $request->start;
        $lead->end= $request->end;
        if($request->image)
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $name = time().'.'.$extenstion;
            $file->move('public/lead/', $name);
        }
        $lead->image= $name;
        $lead->save();
        return redirect('/lead/index')->with('success',"lead data created successfully");
    }
    public function delete($id){
        Lead::where('id', $id)->delete();
        return redirect('/lead/index')->with('success',"lead data deleted successfully");
    }
    public function edit($id){
        $data = Lead::where('id',$id)->first();
        $category = Category::get();
        $customer = Customer::get();
        return view('lead.edit',compact('data','category','customer'));
    } 
    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|unique:lead,name,'.$id,
            'description'  => 'required',
            'category_id'  => 'required',              
            'customer_id'  => 'required',              
            'start'  => 'required',
            'end'  => 'required',              
        ]);
       
        $lead_update = Lead::find($id);
        $lead_update->name= $request->name;
        $lead_update->description= $request->description;
        $lead_update->category_id= $request->category_id;
        $lead_update->customer_id= $request->customer_id;
        $lead_update->start= $request->start;
        $lead_update->end= $request->end;
        $lead_update->update();
        return redirect('/lead/index')->with('success',"lead data created successfully");
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
class contactController extends Controller
{
    public function saveData(Request $val)
    {
        $val->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'mobile'=>'required|max:10|min:10',
        ]);

        $newdata = new Contact;
        $newdata->name=$val->name;
        $newdata->email=$val->email;
        $newdata->address=$val->address;
        $newdata->mobile=$val->mobile;
        $newdata->comments=$val->comments;
        $newdata->save();
        return back()->with('success','Contact Saved Successfully');
    }

    public function getData()
    {
        // $data=Contact::paginate(5);
        $data=Contact::all();
        return view('data-list',['datas'=>$data]);
    }

    public function deleteData($id)
    {
        $data=Contact::find($id);
        $data->delete();
        return back()->with('success','Contact Deleted Successfully');
    }

    public function showData($id)
    {
        $data=Contact::find($id);
        return view('edit-data',['item'=>$data]);
    }

    public function updateData(Request $val)
    {
        $val->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'mobile'=>'required|max:10|min:10'
        ]);

        $updata = [
            'name' => $val->name,
            'email' => $val->email,
            'address' => $val->address,
            'mobile' => $val->mobile,
            'comments' => $val->comments
        ];

        $affected = Contact::where('id', $val->id)->update($updata);
        return redirect('/data-list')->with('success','Contact Updated Successfully');

    }
}

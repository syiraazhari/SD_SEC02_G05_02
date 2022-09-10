<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    public function add()
    {
        return view('admin.service.add');
    }

    public function insert(Request $request)
    {
        $service = new Service();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/service',$filename);
            $service->image = $filename;
        }

        $service->name = $request->input('name');
        $service->slug = $request->input('slug');
        $service->description = $request->input('description');
        $service->status = $request->input('status') == TRUE?'1':'0';
        $service->popular = $request->input('popular') == TRUE?'1':'0';
        $service->meta_title = $request->input('meta_title');
        $service->meta_keywords = $request->input('meta_keywords');
        $service->meta_descrip = $request->input('meta_descrip');
        $service->save();
        return redirect('/dashboard')->with('status',"Service Added Successfully");
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/service/'.$service->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/service',$filename);
            $service->image = $filename;
        }
        $service->name = $request->input('name');
        $service->slug = $request->input('slug');
        $service->description = $request->input('description');
        $service->status = $request->input('status') == TRUE?'1':'0';
        $service->popular = $request->input('popular') == TRUE?'1':'0';
        $service->meta_title = $request->input('meta_title');
        $service->meta_keywords = $request->input('meta_keywords');
        $service->meta_descrip = $request->input('meta_descrip');
        $service->update();
        return redirect('dashboard')->with('status',"Category updated successfully");

    }
}

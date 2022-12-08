<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class ServiceController extends Controller
{
    //
    public function index()
    {

        return view('Service.index');
    }

    public function add(Request $request)
    {
        
      
        $request->validate(
            [
                'service_name' => 'required|unique:service|max:255',
                'service_image' => 'required|mimes:jpg,jpeg,png'

            ],
            [
                'service_name.required' => 'กรุณาป้อนชื่อบริการ',
                'service_name.unique' => 'มีข้อมูลนี้อยู่ในระบบอยู่แล้ว',
                'service_name.max' => 'ห้ามป้อนเกิน 255 ตัวอักษร',
                'service_image.required' => 'กรุณาป้อนรูปภาพ',
                'service_image.mimes' => 'ต้องเป็นไฟล์รูปภาพเท่านั้น',
                
            ],
            
        );
        $service_image = $request->file('service_image');
        // dd($service_image);

        //Generate ชื่อภาพ
        $name_get = hexdec(uniqid());

        // นามสกุลไฟล์
        $img_ext = strtolower($service_image->getClientOriginalExtension());
        $img_name = $name_get.'.'.$img_ext;


        //อัพโหลดข้อมูล
        $upload_location = 'image/services/';
        $fullpath = $upload_location.$img_name; 

        //test upload
        Service::insert([
            'service_name'=> $request->service_name,
            'service_image' => $fullpath,
            'created_at' => Carbon::now()
        ]);
        $service_image->move($upload_location,$img_name);

        return redirect('/manage/viewservice')->with('success','บันทึกข้อมูลเรียบร้อย');
        
    }

    public function view(){

        $service = Service::paginate(3);
        return view('Service.view',compact('service')) ;
    }

    public function edit(Request $request , $id){
        $service = Service::find($id);
        return view('Service.edit',compact('service'));
    }
}

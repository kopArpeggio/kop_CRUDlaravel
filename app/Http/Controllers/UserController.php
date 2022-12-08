<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Student::paginate(3);
        return view('User.index', compact('user'));
    }
    public function add()
    {
        return view('User.add');
    }

    public function insert(Request $request)
    {
        $request->validate(
            [
                'firstname' => 'required|unique:student|max:255',
                'lastname' => 'required|unique:student|max:50',
                'email' => 'required|unique:student|max:50',
                'image' => 'required|mimes:jpg,png,jpeg'
            ]

        );


        // dd($request->image, $request->firstname, $request->lastname, $request->email);
        // จัดการกับรูปก่อน
        $raw_img = $request->file('image');
        $gen_name  = hexdec(uniqid());

        $img_ext = strtolower($raw_img->getClientOriginalExtension());
        $img_name = $gen_name . $img_ext;

        //img path
        $upload_location = 'image/services/';
        $fullpatch = $upload_location . $img_name;

        // $student = new Student;
        // $student->firstname = $request->firstname;
        // $student->lastname = $request->lastname;
        // $student->email = $request->email;
        // $student->image = $fullpatch;

        Student::insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'image' => $fullpatch

        ]);
        $raw_img->move($upload_location, $img_name);

        return redirect('/manage');
    }
    public function edit($id)
    {
        $user = Student::find($id);
        return view('User.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        $request->validate(
            [
                'image' => 'mimes:jpg,jpeg,png',
                'firstname' => 'max:255',
                'lastname' => 'max:50',
                'email' => 'max:50'
            ]
        );
        
        $raw_img = $request->file('image');
        $gen_name  = hexdec(uniqid());

        $img_ext = strtolower($raw_img->getClientOriginalExtension());
        $img_name = $gen_name . $img_ext;

        //img path
        $upload_location = 'image/services/';
        $fullpatch = $upload_location . $img_name;

       

        if ($raw_img) {
            dd('อัพเดตภาพและชื่อ');
        } else {
            dd('อัพเดตชื่ออย่างเดียว');
        }


        $user = Student::find($id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email
        ]);
        
        $old_image = $request->old_image;
        // return redirect('/manage');
    }
    public function delete($id)
    {
        Student::find($id)->delete();
        return redirect('/manage');
    }
}

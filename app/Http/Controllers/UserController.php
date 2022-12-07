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
                'email' => 'required|unique:student|max:50'
            ]
        );

        $student = new Student;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->save();
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
                'firstname' => 'max:255',
                'lastname' => 'max:50',
                'email' => 'max:50'
            ]
        );

        $user = Student::find($id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email
        ]);
        return redirect('/manage');
    }
    public function delete($id){
        Student::find($id)->delete();
        return redirect('/manage');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{

    public function index()
    {
       $students =  DB::table('students')->get();
       return view('student.index',compact('students'));
    }
    public function show($id)
    {
        $student = DB::table('students')->find($id);
        return view('student.show',compact('student'));
    }

    public function store(Request $r)
    {
        DB::table('students')->insert([
            'username' => $r->username,
            'password' => $r->password,
        ]);
        return redirect('student');
    }

    public function create()
    {
           return view('student.create');
    }

    public function edit($id)
    {
        $student = DB::table('students')->find($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $r,$id)
    {

        DB::table('students')->where('id',$id)->update([
            'username' => $r->username,
            'password' => $r->password,

        ]);
        return redirect('student');
    }

    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return back();
    }


}

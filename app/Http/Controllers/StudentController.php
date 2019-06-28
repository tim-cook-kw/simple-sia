<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $student = \App\Student::paginate(5);
        $filterKeyword = $request->get('keyword');

        if($filterKeyword){
            $student = \App\Student::where('email', 'LIKE', "%$filterKeyword%")->paginate(5);
        }

        return view('admin.student.index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $student = new \App\Student;

        $student->full_name = $request->get('full_name');
        $student->gender = $request->get('gender');
        $student->place_of_birth = $request->get('place_of_birth');
        $student->birth = $request->get('birth');
        $student->phone = $request->get('phone');
        $student->email = $request->get('email');
        $student->religion = $request->get('religion');
        $student->nasionality = $request->get('nasionality');
        $student->address = $request->get('address');
        $student->country = $request->get('country');
        $student->zip = $request->get('zip');
        $student->save();


        return redirect()->route('student.create')->with('status', 'Student successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = \App\Student::findOrFail($id);

        return view('admin.student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = \App\Student::findOrFail($id);

        return view('admin.student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = \App\Student::findOrFail($id);

        $student->full_name = $request->get('full_name');
        $student->gender = $request->get('gender');
        $student->place_of_birth = $request->get('place_of_birth');
        $student->birth = $request->get('birth');
        $student->phone = $request->get('phone');
        $student->email = $request->get('email');
        $student->religion = $request->get('religion');
        $student->nasionality = $request->get('nasionality');
        $student->address = $request->get('address');
        $student->country = $request->get('country');
        $student->zip = $request->get('zip');
        $student->save();

        return redirect()->route('student.index')->with('status', 'Student succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = \App\Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('status', 'User student successfully delete');
    }
}

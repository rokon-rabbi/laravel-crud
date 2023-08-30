<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public function dashboard() {
        $student_data = Student::get();
        return view( 'backend.students.dashboard', compact( 'student_data' ) );
    }

    public function create() {
        return view( 'backend.students.create' );
    }

    public function store( Request $request ) {
        Student::create( [
            'name'    => $request->studentName,
            'gender'  => $request->studentGender,
            'address' => $request->studentAddress,
            'phone'   => $request->studentPhone,
            'dob'     => $request->dob,
        ] );
        return redirect()->route( 'students.dashboard' );
    }

    public function show() {
        return view( 'backend.students.show' );
    }

    public function edit( Student $studentData ) {

        return view( 'backend.students.edit', compact( 'studentData' ) );
    }
    public function update( Request $request, Student $studentData ) {
        $studentData->update( [
            'name'    => $request->studentName,
            'gender'  => $request->studentGender,
            'address' => $request->studentAddress,
            'phone'   => $request->studentPhone,
            'dob'     => $request->dob,
        ] );
        return redirect()->route( 'students.dashboard' );
    }
}

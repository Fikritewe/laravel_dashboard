<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $totalStudents = Student::count();
        $jurusanStats = Student::select('jurusan', DB::raw('count(*) as total'))
            ->groupBy('jurusan')
            ->get();

        return view('students.index', compact('students', 'totalStudents', 'jurusanStats'));
    }
}


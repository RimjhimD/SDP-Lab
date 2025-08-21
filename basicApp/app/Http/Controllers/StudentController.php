<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // public function index()
    // {
    //     // Count total students
    //     $totalStudents = DB::table('students')->count();

    //     // Get average semester
    //     $averageSemester = DB::table('students')->avg('semester');

    //     // Get max semester
    //     $maxSemester = DB::table('students')->max('semester');

    //     // Get min semester
    //     $minSemester = DB::table('students')->min('semester');

    //     dd([
    //         'total_students' => $totalStudents,
    //         'average_semester' => $averageSemester,
    //         'max_semester' => $maxSemester,
    //         'min_semester' => $minSemester,
    //     ]);
    //  }

    //  public function index()
    // {
    //     // Count total students
    //     $totalStudents = DB::table('students')->count();

    //     // Count students in 8th semester
    //     $studentsIn8thSemester = DB::table('students')
    //         ->where('semester', 8)
    //         ->count();

    //     dd([
    //         'total_students' => $totalStudents,
    //         'students_in_8th_semester' => $studentsIn8thSemester,
    //     ]);
    // }

 public function index()
    {
        $students = DB::table('students')->select(['student_name','email','semester'])->get();
        //$student = DB::table('students')->where('semester', 8)->count();
        dd($students);
    }

   public function getcourse()
     {
        $result = DB::table('students')
            ->join('courses', 'students.id', '=', 'courses.student_id')
            ->select('students.student_name','students.email', 'courses.course_name', 'courses.course_code')
            ->get();
        dd($result);
    }
}


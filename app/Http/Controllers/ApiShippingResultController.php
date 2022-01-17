<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// ---------------------------------------------------------------------
// DECLARE MODELS
// ---------------------------------------------------------------------
use App\Models\Student;

// ---------------------------------------------------------------------
// CONTROLLER CLASSES
// ---------------------------------------------------------------------
class ApiShippingResultController extends Controller
{

// ---------------------------------------------------------------------
// SEARCH SHIPPING RESULT
// ---------------------------------------------------------------------
     public function search($search) {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT);
        return response($students,200);
      }

// ---------------------------------------------------------------------
// GET SHIPPING DETAIL
// ---------------------------------------------------------------------
      public function get($id) {
        if(Student::where('id',$id)->exists()){
                $student = Student::where('id',$id)->get()->toJson(JSON_PRETTY_PRINT);
                return response($student,200);
            } else{
                return response()->json([
                    "message" => "Student not found"
                ],404);
            }
            }




}

<?php 

namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller {
 
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function index()
    {
        $students = Student::all();
        return view('index', ['students'=> $students]);
    }
    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->StudentID = $request->StudentID;
        $student->Name = $request->Name;
        $student->Gender = $request->Gender;
        $student->IC = $request->IC;
        $student->save();
        return redirect('/');
    }
    /**
     * Show the profile for the given user.
     * @param int  $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', ['student' => $student]);
    }

    /**
     * Show the profile for the given user.
     * @param int  $id
     * @return Response
     */
    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $student = Student::find($request->id);
        $student->StudentID = $request->StudentID;
        $student->Name = $request->Name;
        $student->Gender = $request->Gender;
        $student->IC = $request->IC;
        $student->save();
        return redirect('/');
    }    
    /**
     * Show the profile for the given user.
     * @param int  $id
     * @return Response
     */
    public function result($id)
    {
        $results = Result::where('student_id', $id)->get();
        $student = Student::find($id);
        $mark = DB::table('result')
        ->select('student_id', DB::raw('AVG(Mark) as average'))
        ->where('student_id', $id)
        ->groupBy('student_id')
        ->first();
        $average = 0;
        if ($mark != null){
            $average = $mark->average;
        }
        

        return view('result', ['results'=>$results , 'student'=> $student, 'average'=> $average]);

    }
    /**
     * Show the profile for the given user.
     * @param int  $id
     * @return Response
     */
    public function resultAdd($id)

    {
        $student = Student::find($id);
        return view('result_add', ['student'=> $student]);
    }

    public function resultInsert(Request $request)
    {
        $result = new Result();
        $result->student_id = $request->student_id;
        $result->Course = $request->Course;
        $result->Mark = floatval($request->Mark);
        $result->save();
        return redirect()->route('result', ['id'=> $request->student_id]);
    }

    /**
     * Show the profile for the given user.
     * @param int  $id
     * @return Response
     */
    public function resultEdit($id)
    {
        $result = Result::find($id);
        $student = Student::find($result->student_id);
        return view('result_edit', ['result'=> $result, 'student'=> $student]);
    }

    public function resultUpdate(Request $request)

    {
        $result = Result::find($request->result_id);
        $result->Course = $request->Course;
        $result->Mark = floatval($request->Mark);
        $result->save();

        return redirect()->route('result', ['id'=> $request->student_id]);
    }
    /**
     * Show the profile for the given user.
     * @param int  $id
     * @return Response
     */
    public function resultDelete($id)
    {
        $result = Result::find($id);
        $student = Student::find($result->student_id);
        $result->delete();

        return redirect()->route('result', ['id'=> $student->id]);

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function site(){
        $exam=Exam::all();
        $question=Question::all();
        return view('public_site.welcome',compact('exam','question'));

    }

    public function index()
    {
        $exam=Exam::all();
        return view('admin.exam',compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_exam');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'exam_title' => 'required',
            'exam_desc' => 'required',
            'exam_img' => 'required',
        ]);

        $input = $request->all();
        if($request->file("exam_img")) {
           $newImageName = time() . '-' . $request->exam_img->getClientOriginalName();
           $request->exam_img->move(public_path('uploads'), $newImageName);
           $input['exam_img'] = $newImageName;
        }
           Exam::create($input);
           return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $Exam)
    {
         return view('admin.edit_exam',compact('Exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $Exam)
    {
        $request->validate([
            'exam_title' => 'required',
            'exam_desc' => 'required',
            'exam_img' => 'required',
        ]);

        $input = $request->all();
        if($request->file("exam_img")) {
           $newImageName = time() . '-' . $request->exam_img->getClientOriginalName();
           $request->exam_img->move(public_path('uploads'), $newImageName);
           $input['exam_img'] = $newImageName;
        }
           $Exam->update($input);
           return redirect()->route('exam.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam  $Exam)
    {
        $Exam->delete();
        return back();
    }
}

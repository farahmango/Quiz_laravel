<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $choice=Choice::all();
    return view('admin.choice',compact('choice'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_choice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'question_id' => 'required',
            'choice' => 'required',
            'answer_status' => 'required',

        ]);
        Choice::create($data);
        return redirect()->route('choice.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $choice = DB::table('exams')
            ->join('questions', 'exams.id', '=', 'questions.exam_id')
            ->join('choices', 'questions.id', '=', 'choices.question_id')
            ->where('exams.id','=',$id)
            ->get();

           
        return view('public_site.question',compact('choice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Choice $choice)
    {
        return view('admin.edit_choice',compact('choice'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choice $choice)
    {
       $choice->delete();
       return back();
    }
}

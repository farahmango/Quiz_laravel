@extends('public_site.layout.master')
@section('content')
<div  style="margin: 100px auto; width:80%">

<h2 style="font-weight: bold;margin-bottom:20px;color:lightslategrey"> Your Answers :</h2>




<table class="table table-Info table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </th>
                                <th>Exam_Name</th>
                                <th>Q1: Answer</th>
                                <th>Q2: Answer</th>
                                <th>Q3: Answer</th>
                                <th>Q4: Answer</th>
                                <th>Q5: Answer</th>
                                <th>Result</th>
                                <!-- <th>Result</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($result as $val)
                            <tr class="tr-shadow">
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>
                                <td> {{ $val->exam_name}}</td>
                                <td> {{ $val->answer1 }}  </td>
                                <td > {{ $val->answer2  }} </td>
                                <td > {{ $val->answer3}}</td>
                                <td > {{ $val->answer4}}</td>
                                <td > {{ $val->answer5}}</td>
                                <td > {{ $val->result}}</td>
                             </tr>
                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
@endsection







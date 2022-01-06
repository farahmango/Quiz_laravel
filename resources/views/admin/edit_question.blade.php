@extends('admin.layout.master')
@section('content')

                                <div class="col-lg-12" style="margin: auto;">
                                <div class="card">
                                    <div class="card-header">Edit Question</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Questions</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('question.update',$question->id)}}" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            @method('put')
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Exam_id</label>
                                                <input  name="exam_id" type="text" class="form-control cc-name valid" value="{{ $question->exam_id }}" >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Question</label>
                                                <input name="question" type="text" class="form-control cc-number identified visa"  value="{{ $question->question }}">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Submit</span>

                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>



@endsection







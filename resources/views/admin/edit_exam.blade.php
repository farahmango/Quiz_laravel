@extends('admin.layout.master')
@section('content')

                                <div class="col-lg-12" style="margin: auto;">
                                <div class="card">
                                    <div class="card-header">Edit Exams</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Exams</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('exam.update',$Exam->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Exam Image</label>
                                                <input  name="exam_img" type="file" class="form-control" value="{{ $Exam->exam_img}}" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Exam Title</label>
                                                <input  name="exam_title" type="text" class="form-control cc-name valid" value="{{ $Exam->exam_title}}"  >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Exam Description</label>
                                                <input name="exam_desc" type="text" class="form-control cc-number identified visa" value="{{ $Exam->exam_desc}}" >
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







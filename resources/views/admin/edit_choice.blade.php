@extends('admin.layout.master')
@section('content')

                                <div class="col-lg-12" style="margin: auto;">
                                <div class="card">
                                    <div class="card-header">Edit Choices</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Choices</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('choice.update',$choice->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label  class="control-label mb-1">question_id</label>
                                                <input  name="question_id" type="text" class="form-control" value="{{ $choice->question_id}}"  >
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Choice</label>
                                                <input  name="coice" type="text" class="form-control cc-name valid" value="{{ $choice->choice}}"  >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1"> Answer_status</label>
                                                <input name="answer_status" type="text" class="form-control cc-number identified visa" value="{{ $choice->answer_status}}" >
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







@extends('admin.layout.master')
@section('content')
                         <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Choices</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">

                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">

                                            <div class="dropDownSelect2"></div>
                                        </div>

                                    </div>
                                    <div class="table-data__tool-right">
                                    <div class="table-data__tool-right">
                                    <a href="{{ route('choice.create') }}"  style="float: right;"class="au-btn au-btn-icon au-btn--blue au-btn--small">Add Choice</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>

                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>question_id</th>
                                                <th>choice</th>
                                                <th>Answer_status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($choice as $val)
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td> {{ $val->question_id}}</td>
                                                <td>
                                                    {{ $val->choice }}
                                                </td>
                                                <td > {{ $val->answer_status}}</td>

                                                <td>
                                                    <div class="table-data-feature">

                                                    <a href="{{route('choice.edit',$val->id)}}">
                                                    <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    </a>

                                                      <form action="{{route('choice.destroy',$val->id)}}" method="POST">
                                                        @csrf
                                                        @method("delete")
                                                        <button type="submit" class="item mr-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

@endsection







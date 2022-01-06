<!-- @extends('admin.layout.master')
@section('content')

                                <div class="col-lg-12" style="margin: auto;">
                                <div class="card">
                                    <div class="card-header">Edit Users</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Users</h3>
                                        </div>
                                        <hr>
                                        <form action="{{ route('user.update',$User->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <label  class="control-label mb-1">User Name</label>
                                                <input  name="name" type="text" class="form-control" value="{{ $User->name}}" >
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">User Email</label>
                                                <input  name="email" type="email" class="form-control cc-name valid" value="{{ $User->email}}"  >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">User Password</label>
                                                <input name="password" type="password" class="form-control cc-number identified visa" value="{{ $User->password}}" >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label mb-1">Role Type</label>
                                                <input  name="role_type" type="text" class="form-control" value="{{ $User->role_type}}" >
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





 -->

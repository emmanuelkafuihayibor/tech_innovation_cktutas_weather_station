@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            {{--        stats start here --}}
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">{{ __('SET PROFILE') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                      <div class="row">
                          <form action="" method="post">

                              <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" id="username" value="{{ Auth::User()->name }}" class="form-control" name="username">
                              </div>

                              <div class="form-group mt-1">
                                  <label for="phone">Phone number</label>
                                  <input type="text" id="phone" value="{{ Auth::User()->phone }}" class="form-control" name="phone">
                              </div>

                              <div class="form-group mt-1">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" value="{{ Auth::User()->email }}" class="form-control" name="email">
                              </div>



                              <div class="form-group mt-1">
                                  <label for="password">Password</label>
                                  <input type="password" id="password" class="form-control" name="password">
                              </div>


                              <div class="form-group mt-5">

                                  <input type="submit" id="update_profile" value="update" class="btn btn-success form-control" name="submit">
                              </div>

                          </form>
                      </div>

                    </div>
                </div>


{{--                change password starts here--}}


                <div class="card">
                    <div class="card-header">{{ __('CHANGE PASSWORD') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="row">
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="old_password">Enter Old Password</label>
                                    <input type="password" id="old_password" class="form-control" name="old_password">
                                </div>

                                <div class="form-group mt-1">
                                    <label for="new_password">Enter New Password</label>
                                    <input type="password" id="new_password" class="form-control" name="new_password">
                                </div>



                                <div class="form-group mt-1">
                                    <label for="corfirm_new_password">Confirm New Password</label>
                                    <input type="password" id="corfirm_new_password" class="form-control" name="confirm_new_password">
                                </div>


                                <div class="form-group mt-5">

                                    <input type="submit" id="update_password" value="change password" class="btn btn-success form-control" name="submit">
                                </div>

                            </form>
                        </div>

                    </div>
                </div>



                {{--                change password ends here--}}





            </div>
            {{--     stats ends here   --}}

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('PROFILE SUMMARY') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" id="role" disabled value="{{ Auth::User()->role }}" class="form-control" name="role">
                                </div>

                                <div class="form-group mt-1">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" disabled value="{{ Auth::User()->name }}" class="form-control" name="username">
                                </div>

                                <div class="form-group mt-1">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" disabled value="{{ Auth::User()->phone }}" class="form-control" name="phone">
                                </div>

                                <div class="form-group mt-1">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" disabled value="{{ Auth::User()->email }}" class="form-control" name="email">
                                </div>

                            </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







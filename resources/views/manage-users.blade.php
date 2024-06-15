@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-4">


                 <div class="card p-2">
                     <div class="card-header">{{ __('CREATE USER ACCOUNT') }}</div>
                     <form action="{{ route('create_user') }}" method="post">

                         @csrf

                         <div class="form-group">
                             <label for="username">Username</label>
                             <input type="text" id="username" name="name" placeholder="Enter Username" class="form-control">
                         </div>

                         <div class="form-group mt-2">
                             <label for="role">Access Role</label>

                             <select name="role" id="role" class="form-control">
                                 <option disabled class="text-danger" value="root_admin">Admin Root [1]</option>
                                 <option value="admin_low">Admin Assist [2]</option>
                                 <option value="observer">Observer [3]</option>
                             </select>
                         </div>

                         <div class="form-group mt-2">
                             <label for="Phone">Phone</label>
                             <input type="text" id="username" name="phone" placeholder="Enter Username" class="form-control">
                         </div>

                         <div class="form-group mt-2">
                             <label for="email">Email</label>
                             <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                         </div>



                         <div class="form-group mt-5">
                             <input type="submit" name="add_user" value="Add User" class="btn btn-success form-control">
                         </div>


                     </form>
                 </div>

            </div>


            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ALL USERS') }}</div>



                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Role</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $a_user)
                                <tr>
                                    <th scope="row">{{ $a_user->id }}</th>
                                    <td>{{ $a_user->name }}</td>
                                    <td> <a link disabled="" rel="#" class="btn btn-danger">{{ $a_user->role }}</a></td>
                                    <td>{{ $a_user->created_at }}</td>
                                    <td>{{ $a_user->updated_at }}</td>
                                    <td>{{ "Active" }} </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-primary">view</button>
                                            <button type="button" class="btn btn-success">edit</button>
                                            <button type="button" class="btn btn-danger"> {{ "archive" }}</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







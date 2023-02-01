@extends('pages.admin_master')

@section('main')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Register User</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">

                        <form method="POST" action="{{ route('store.user') }}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="1234 Main St">
                                    @error('name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    @error('email')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    @error('password')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password">
                                    @error('password_confirmation')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

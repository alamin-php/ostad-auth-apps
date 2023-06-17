@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <form action="{{route('update.profile')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Gender</label>
                                <input type="text" name="gender" class="form-control" value="{{$user->gender}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" value="{{$user->address}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Photo</label>
                                <input type="text" name="photo" class="form-control" value="{{$user->photo}}">
                            </div>
                            <div class="form-group mb-3 float-end">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

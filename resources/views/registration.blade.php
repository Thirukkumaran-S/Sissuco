@extends('header')

@section('content')



<div class="container mt-5">
    <div class="row d-flex justify-content-center">
    <div class="col-md-6">
   
        <div class="card">
            <div class="card-header">Registration</div>
            <div class="card-body">
                <form action="{{route('user.validate_registration')}}" method="POST">
                    @csrf
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username">
                             @if($errors->has('name'))
                             <span class="text-danger">{{$errors->first('name')}}</span>
                             @endif
                             </div><br>
                              <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div><br>
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                @if($errors->has('password'))
                                <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Signup</button>
                            </div>
                        </form>
                    </div>
               
            </div>
        </div>
    </div>
</div>

      
     
        
        
@endsection('content')
@extends('header')

@section('content')

<link rel="stylesheet" href="/css/loginstyle.css"/>

<div class="wrapper1">
    
            <h2>Registration</h2>
            <div class="">
                <form action="{{route('user.validate_registration')}}" method="POST">
                    @csrf
                    <form class="">
                        <div class="">
                            
                            <input type="text" class="inputRegistraion" id="name" name="name" placeholder="Enter Username">
                             @if($errors->has('name'))
                             <span class="text-danger">{{$errors->first('name')}}</span>
                             @endif
                             </div><br>
                              <div class="">
                                
                                <input type="text" class="inputRegistraion" id="email" name="email" placeholder="Enter Email">
                                @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div><br>
                            <div class="">
                                
                                <input type="password" class="inputRegistraion" name="password" id="password" placeholder="Password">
                                @if($errors->has('password'))
                                <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <br>
                            <div class="">
                                <button type="submit" class="signupbtn">Signup</button>
                            </div>
                        </form>
                    </div>
               
            
        
    
</div>

      
     
        
        
@endsection('content')
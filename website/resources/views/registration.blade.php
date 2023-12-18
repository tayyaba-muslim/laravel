@extends('layouts.app')
 

@section('content')

    {{-- @php
       print_r($errors);

    @endphp --}}
    <div class="container">
        <form action="{{url('/')}}/register" method="POST">
            @csrf
            <h1>Registration Form</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" placeholder="enter your name" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                         {{$message}}
                    @enderror
                </span>
                <br>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="enter your email" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                         {{$message}}
                    @enderror
                </span>
                <br>
                <label for="pass" class="form-label">Password</label>
                <input type="pass" class="form-control" name="pass" placeholder="enter your password" value="{{old('pass')}}">
                <span class="text-danger">
                    @error('pass')
                         {{$message}}
                    @enderror
                </span>
                <br>
                <input type="submit" name="register" value="register" class="btn btn-primary">
            </div>
        </form>
    </div>
     
  
</body>
</html>
@endsection

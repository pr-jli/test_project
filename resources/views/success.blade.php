@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You have successfully saved the student!</div>

                <div class="card-body">
                    The student {{$student->name}} has been successfully registered.
                    <br><br><br>
                    <h2>Here are the details:</h2>
                    <br>
                    <br>
                    <label>Name:</label>
                    {{$student->name}}
                    <br>
                    <label>Email:</label>
                    {{$student->email}}
                    <br>
                    <label>Roll number:</label>
                    {{$student->roll_number}}
                    <br>
                    <label>Mobile:</label>
                    {{$student->mobile_number}}
                    <br>
                    <br>
                    <form method="GET" action="/register">
                    <div class="form-group row mb-0">
                        <div >
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register a new Student') }}
                            </button>
                        </div>
                    </div>
                    <br>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
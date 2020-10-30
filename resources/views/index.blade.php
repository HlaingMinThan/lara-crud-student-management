@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <img src="{{asset('images/main.png')}}" alt="">
    </div><br><br>
    <h1 class="text-center text-primary">Student Management System</h1><hr>
    <table class="table table-stripped">
        <thead>
            <tr class="text-center text-primary">
                <th>ID</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Age</th>
                <th>Speciality</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stuTableDatas as $student)
            <tr class="text-center">
                <td>{{$student->id}}</td>
                <td>{{$student->first_name}}</td>
                <td>{{$student->second_name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->speciality}}</td>
                <td><a href="{{url('/update/'.$student->id)}}" class="btn btn-warning btn-lg">edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
  


                
            
@extends('layouts.layout')

@section('content')
<br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <img src="{{asset('images/main.png')}}" alt="">
                    </div><br><br>
                    <h1 class="text-center text-primary">Student Management System</h1><hr>
                    <table class="table table-stripped">
                        <thead>
                            <tr class="text-primary text-center">
                                <th>ID Number</th>
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
            </div>
                            

            <!-- insert form -->
            <div class="col-md-6">
                <form action="{{route('insert')}}" method="post" class="form text-primary">
                    @csrf
                    <img src="{{asset('images/formImage.jpg')}}" alt=""><br><br>
                    <h3 class="text-dark">Enter the information of the new student</h3>
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
                    </div><br>
                    <div class="form-group">
                        <label for="" >Second Name</label>
                        <input type="text" name="second_name" class="form-control" placeholder="Enter Second Name">
                    </div><br>
                    <div class="form-group">
                        <label for="" >Age</label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Age">
                    </div><br>
                    <div class="form-group">
                        <label for="" >Speciality</label>
                        <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                    </div><br>
                    <div class="form-group text-center">
                       <input type="submit" value="Save" class="btn btn-primary btn-lg ">
                    </div>
                </form>
            </div>
        </div>
    </div>
  
@endsection
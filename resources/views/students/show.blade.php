@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">NameID : {{ $students->nameid }}</h5>

        <h5 class="card-title">Name : {{ $students->name }}</h5>
        
        <h5 class="card-title">Email : {{ $students->email }}</h5>
  </div>
    </hr>
  </div>
</div>
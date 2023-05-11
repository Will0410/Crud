@extends('students.frame')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">DEscrição dos estudantes</div>
  <div class="card-body">
        <div class="card-body">
        <h3 class="card-title">Name : {{ $students->name }}</h3>
        <p class="card-text">Endereço : {{ $students->email }}</p>
        <p class="card-text">Phone : {{ $students->phone }}</p>
  </div>
    </hr>
  </div>
</div>
@extends('usertask.layout')
@section('content')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="#"><strong>Task Management System</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Task</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="card mt-5">
  <h2>Task Details</h2>
  @if (session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
  @endif
  <div>
    <a href="{{url('usertask/create')}}" class="btn btn-primary">Add Task</a>
  </div>
  <br>
  <table class="table table-hover table-striped">
    <thead>
      <tr class="table-info">
       <th>Task</th>
        <th>Description</th> 
        <th>DueDate</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
      @forelse($usertasks as $em)
      <tr>
        <td>{{$em->task}}</td>
        <td>{{$em->description}}</td>
        <td>{{$em->duedate}}</td>
        <td>{{$em->status}}</td>
        
          
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="4">There are no data</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>


@endsection
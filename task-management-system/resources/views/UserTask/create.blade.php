@extends('usertask.layout')

@section('content')
<div class="card mt-5">
  <h2 class="card-header">Add New Task</h2>
  <div class="card-body">
  <form action="{{url('usertask/store')}}" method="post">
    @csrf
    <div>
      <label for="task" class="form-lablel">Task</label>
      <input type="text" name="task" class="form-control" id="task" placeholder="Enter task">
    </div>

    <div>
      <label for="description" class="form-lablel">Description</label>
      <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
    </div>

    <div>
      <label for="duedate" class="form-lablel">DueDate</label>
      <input type="date" name="duedate" class="form-control" id="duedate" placeholder="Enter your duedate">
    </div>

    <div>
      <label for="status" class="form-lablel">Status</label>
      <input type="text" name="status" class="form-control" id="status" placeholder="Enter status">
    </div>

    <button type="submit" class="mt-2 btn btn-success">Add</button>
  </form>
  </div>
</div>
@endsection
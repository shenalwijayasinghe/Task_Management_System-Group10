@extends('usertask.layout')
@section('content')

<div class="card mt-5">
  <h2 class="card-header text-primary">Edit Task</h2>
  <div class="card-body">
  <form action="{{url('usertask/update/' . $usertask->id) }}" method="POST">

  @csrf


  <div>
      <label for="task" class="form-lablel">Task</label>
      <input type="text" name="task" class="form-control" id="task" value="{{ $usertask->task}}" required>
    </div>

    <div>
      <label for="description" class="form-lablel">Description</label>
      <input type="text" name="description" class="form-control" id="description" value="{{ $usertask->description}}" required>
    </div>

    <div>
      <label for="duedate" class="form-lablel">DueDate</label>
      <input type="date" name="duedate" class="form-control" id="duedate" value="{{ $usertask->duedate}}" required>
    </div>

    <div>
      <label for="status" class="form-lablel">Status</label>
      <input type="text" name="status" class="form-control" id="status" value="{{ $usertask->status}}" required>
    </div>

    <button type="submit" class="mt-2 btn btn-primary">Update Task</button>
  </form>
  </div>
</div>

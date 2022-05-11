@extends('layouts/layout')
@section('task')

<div class="task-list">
  <div class="card">
    <div class="card-content">
      <div class="content">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <h6><em>Created in :
          <?php echo Carbon\Carbon::parse($task->created_at)->format('d M Y') ?>
          </em></h6>
        <div class="button">
          <a href="/task/delete/{{ $task->id }}">Delete Task</a>
        </div>

      </div>
      </div>
      </div>
      </div>

@endsection

@extends('layouts.app')
    @section('content')
        @include('tasks.latest')
        <div class="all_tasks">
            @foreach ($tasks as $task)
                {{$task->description}}
            @endforeach
        </div>
    @endsection
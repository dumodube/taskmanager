@extends('layouts.app')
    @section('content')
    
        <div class="tasks">
            
            <form action="{{route('tasks.create')}}" method="post" role='form' class="side form">
                @csrf
                <h3 class="lg-heading">Add Tasks</h3>
                        <div class="form-group {{$errors->has('title') ? ' has-error' : ''}}">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{Request::old('title') ?: ''}}">
                            @if($errors->has('title'))
                                <span class="lead text-danger">{{$errors->first('title')}}</span>
                            @endif
                        </div> 

                        <div class="form-group {{$errors->has('description') ? ' has-error' : ''}}">
                            <label>Task</label>
                            <textarea type="text" name="description" id="description" class="form-control"></textarea>
                            @if($errors->has('description'))
                                <span class="lead text-danger">{{$errors->first('description')}}</span>
                            @endif
                        </div>
                        <select name="sub_category_id">
                            @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>
                            @endforeach
                        </select>
                        <button class="btn-submit" type='submit'>
                            Add Task
                        </button>
                    
                        
        
            </form>
        </div>
    @endsection()
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Assignment</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/student/submissions') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">    
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" value="{{$assignment->title}}" required autocomplete="title" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row justify-content-center">
                            <label for="course">Course</label>
                            <div class="col-md-6">
                                <select name="course" type="text" class="form-control">
                                    @foreach ($courses as $course)
                                        <option value="{{$course->name}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">Content</label>
                            <div class="col-md-6">
                                <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{$assignment->content}}" required autocomplete="content"></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="solution" class="col-md-4 col-form-label text-md-right">Solution</label>
                            <div class="col-md-6">
                                <textarea id="solution" type="file" class="form-control @error('solution') is-invalid @enderror" name="solution" value="{{$assignment->content}}" required autocomplete="content"></textarea>
                                @error('solution')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Assignment
                                </button>
                                {{ csrf_field() }}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

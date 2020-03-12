@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Course</div>

                <div class="card-body">
                    {{-- admin/courses/{course} --}}
                <form method="POST" action="{{ url('/admin/courses')}}/{{$course->id}}">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group row">    
                            <label for="name" class="col-md-4 col-form-label text-md-right">Course Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$course->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea name="description"  id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$course->description}}" required autocomplete="description">{{$course->description}}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $course->content }}" required autocomplete="content">

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$course->price}}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Edit Course
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- {!! Form::open(['url' => 'foo/bar', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('title')}}
                        </div>
                    {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

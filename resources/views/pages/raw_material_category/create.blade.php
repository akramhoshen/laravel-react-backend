@extends('layouts.app')

@section('page')

{!! Page::body_open() !!}
{!! Page::content_open(["title"=>"Create Raw Material Category","button"=>"Manage Raw Material Category","route"=>url("rmcategories")]) !!}
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>
@endif

{!! Form::open_laravel(["route"=>"rmcategories"]) !!}

{!! Page::content_body() !!}

{!! Form::text(["name"=>"name","label"=>"Name","value"=>old('name')]) !!}

@if($errors->has('name'))
    <span class='text-danger'>{{$errors->first('name')}}</span>
@endif

{!! Page::content_body_close() !!}

{!! Page::content_footer() !!}

{!! Form::button(["name"=>"btnSubmit","type"=>"submit","value"=>"Create"]) !!}

{!! Page::content_footer_close() !!}

{!! Form::close() !!}

{!! Page::content_close() !!}
{!! Page::body_close() !!}

@endsection
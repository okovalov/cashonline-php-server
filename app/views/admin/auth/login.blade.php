@extends('admin._layouts.admin')

@section('content')

<h1>Please Login</h1>
    {{ Form::open(array('route' => 'admin.login.post', 'method' => 'post')) }}
        <ul>
            <li>
                {{ Form::label('email', 'Login' )}}
                {{ Form::email('email') }}
                {{ $errors->first('email', '<p class="error">:message</p>') }}
            </li>
            <li>
                {{ Form::label('password', 'Password' )}}
                {{ Form::password('password') }}
                {{ $errors->first('password', '<p class="error">:message</p>') }}
            </li>
            <li>
                {{ Form::submit() }}
            </li>
        </ul>
    {{ Form::close() }}

@stop

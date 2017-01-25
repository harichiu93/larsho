@extends('user.includes.layout')
@section('content')
    <div class="panel panel-body login-form">
        @if(isset($success))
            {{$success}}
        @endif
    </div>
    <script>
        setTimeout(function () {
            window.location = '{{url('/')}}';
        },3000)
    </script>
@endsection

@extends('layouts.app') {{-- extends app.blade.php --}}
 
@section('title', 'Page Title') {{-- from @yield --}}
 
@section('sidebar')
    {{-- @parent --}}
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection
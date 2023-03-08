@extends('layouts.hotel')

@section('title', 'Fourth')

@section('construction')
    @parent
    <span>floor 4</span>
@endsection

@section('elevator')
    <a href="{{ route('f2') }}">floor 2</a>
    <a href="{{ route('f3') }}">floor 3</a>
    @parent
@endsection

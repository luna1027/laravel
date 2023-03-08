@extends('layouts.hotel')

@section('title', 'Third')

@section('construction')
    @parent
    <span>floor 3</span>
@endsection

@section('elevator')
    <a href="{{ route('f2') }}">floor 2</a>
    <a href="{{ route('f4') }}">floor 4</a>
    @parent
@endsection
@extends('layouts.hotel')

@section('title', 'Second')

@section('construction')
    @parent
    <span>floor 2</span>
@endsection

@section('elevator')
    <a href="{{ route('f3') }}">floor 3</a>
    <a href="{{ route('f4') }}">floor 4</a>
    @parent
@endsection
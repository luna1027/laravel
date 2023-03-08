@extends('layouts.hotel')

@section('title', 'Index')

@section('construction')
    @parent
    <span>Lobby</span>
@endsection

@section('elevator')
    <a href="{{ route('f2') }}">floor 2</a>
    <a href="{{ route('f3') }}">floor 3</a>
    <a href="{{ route('f4') }}">floor 4</a>
    @parent
@endsection

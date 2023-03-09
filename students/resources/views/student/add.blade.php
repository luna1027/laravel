@extends('layouts.students')

@section('title', 'Add Student')

@section('header', 'Add Student')

@section('container')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div>
            <div>Name</div>
            <div><input type="text" name="name" class="name"></div>
        </div>
        <div>
            <div>Age</div>
            <div><input type="text" name="age" class="age"></div>
        </div>
        <div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection

@section('a')
    @parent
@endsection

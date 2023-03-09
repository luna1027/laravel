@extends('layouts.students')

@section('title', 'Index')

@section('header', 'Index')

@section('container')
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Age</th>
            <th>Operate</th>
        </tr>
        @foreach ($data as $key => $student)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['age'] }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">Show</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('a')
    <a href="{{ route('students.create') }}">Add Student</a>
@endsection

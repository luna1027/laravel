@extends('layouts.students')

@section('title', 'Show Student')

@section('header', 'Show Student')

@section('container')
    <table>
        @csrf
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['age'] }}</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="{{ route('students.edit', $data->id) }}">Edit</a>
                <button type="button">back</button>
            </td>
        </tr>
    </table>
@endsection

@section('a')
    @parent
@endsection

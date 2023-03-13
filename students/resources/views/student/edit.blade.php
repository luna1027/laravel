@extends('layouts.students')

@section('title', 'Show Student')

@section('header', 'Show Student')

@section('container')
    <form action="{{ route('students.update', $data->id) }}" method="post">
        <table>
            @method('PUT')
            @csrf
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" value="{{ $data['name'] }}"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" name="age" value="{{ $data['age'] }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
@endsection

@section('a')
    @parent
@endsection

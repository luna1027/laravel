@extends('layouts.students')

@section('title', 'Show Student')

@section('header', 'Show Student')

@section('container')
    <form action="" method="post">
        <table>

            @csrf
            <tr>
                <th>Name</th>
                <td><input type="text" value="{{ $data['name'] }}"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="text" value="{{ $data['age'] }}"></td>
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

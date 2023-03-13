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
                    <button type="button" onclick="del({{ $student->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('a')
    <a href="{{ route('students.create') }}">Add Student</a>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    function del(id) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: `students/${id}`,
            type: 'DELETE',
            success: function() {
                location.reload();
            }
        })
    }
</script>

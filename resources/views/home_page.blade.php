@extends('master_page')
@section('content')
    <table class="table table-hover table-dark align-middle" style="table-layout: fixed">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Profile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $stu)
                <tr>
                    <td>{{ $stu->id }}</td>
                    <td>{{ $stu->name }}</td>
                    <td>{{ $stu->gender }}</td>
                    <td>
                        <img src="images/{{ $stu->profile }}" width="120" height="120" style="object-fit: cover"
                            alt="{{ $stu->profile }}">
                    </td>
                    <td>
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

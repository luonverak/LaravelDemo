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
            <tr>
                <td>1</td>
                <td>name</td>
                <td>gender</td>
                <td>
                    <img src="/images/user-account.jpeg" width="100" height="100" style="object-fit: cover" alt="">
                </td>
                <td>
                    <button class="btn btn-warning">Update</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

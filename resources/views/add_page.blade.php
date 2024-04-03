@extends('master_page')
@section('content')
    <form class="p-5" action="/add-student" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="txt_name" class="form-control mb-3">
        <label for="">Gender</label>
        <select name="gender" class="form-select mb-3">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        <label for="">Profile</label>
        <input type="file" name="profile" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary float-end" value="Save Student" name="btnSave">Save
            Student
        </button>
    </form>
@endsection

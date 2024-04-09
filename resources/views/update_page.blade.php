@extends('master_page')
@section('content')
    <form class="p-5" action="/update-submit" method="post" enctype="multipart/form-data">
        @csrf
        {{-- Hidden Id --}}
        <input type="hidden" name="hidden_id" value="{{ $student->id }}">
        <label for="">Name</label>
        <input type="text" name="txt_name" value="{{ $student->name }}" class="form-control mb-3">
        <label for="">Gender</label>
        <select name="gender" class="form-select mb-3">
            @if ($student->gender === 'Female')
                <option value="Female">Female</option>
                <option value="Male">Male</option>
            @else
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            @endif
        </select>
        <label for="">Profile</label>
        {{-- Hidden profile --}}
        <input type="hidden" name="old_profile" value="{{ $student->profile }}">
        <input type="file" name="profile" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary float-end" value="Update Student" name="btnUpdate">Update
            Student
        </button>
    </form>
@endsection

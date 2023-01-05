@extends('layout.form_tambah')
@section('title')
    Tambah Member
@endsection
@section('conten')
<form action="{{url('simpan_member')}}" method="post">
    @csrf
    <div class="mb-3">
        <select name="user_id">
            @foreach ($users as  $users)
            <option value="{{$users->id}}">{{$users->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Member</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="mb-3">
       <label class="form-label">Member Level</label>
          <select name="level" id="" class="form-control">
            <option value="Gold Premium">Gold Premium</option>
            <option value="Standar Premium">Standar Premium</option>
            <option value="Bronze Premim">Bronze Premium</option>
            <option value="Premium">Premium</option>
         </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
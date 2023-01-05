@extends('layout.form_tambah')
@section('title')
    Edit Member
@endsection
@section('conten')
<form action="{{url('update_member')."/".$members->id}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Member</label>
      <input type="text" class="form-control" name="nama" value="{{$members->nama}}" >
    </div>


    <div class="mb-3">
       <label class="form-label">Member Level</label>
          <select name="level" id="" class="form-control">
            <option value="{{$members->level}}">{{$members->level}}</option>
            <option value="Gold Premium">Gold Premium</option>
            <option value="Standar Premium">Standar Premium</option>
            <option value="Bronze Premium">Bronze Premium</option>
            <option value="Premium">Premium</option>
         </select>
    </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
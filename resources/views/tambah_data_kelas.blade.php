@extends('home')
@section('homes')
<div class="card">
    <h5 class="card-header">Tambah Data</h5>
    <div class="card-body">
          <form form action="{{url('tambah_kelas')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
          <div class="form-group" style="width: 50%;">
            <label for="Jurusan">Jurusan</label>
            <select  id="country-dropdown" class="form-control"  name="jurusan_id">
                <option value="">-- Pilih Jurusan --</option>
                @foreach ($jurusans as $data)
                <option value="{{$data->id}}">
                    {{$data->Nama_Jurusan}}
                </option>
                @endforeach
            </select>
        </div>
        <br>
          <div class="form-group" style="width: 50%;">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" aria-describedby="Nama" placeholder="Masukan Nama">
            @error('Nama')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <br>
          
          <br>
          <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          
        </form>
       
    </div>
  </div>

  
@endsection
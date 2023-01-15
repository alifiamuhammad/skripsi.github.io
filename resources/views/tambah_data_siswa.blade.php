@extends('home')
@section('homes')
<div class="card">
    <h5 class="card-header">Tambah Data</h5>
    <div class="card-body">
          <form form action="{{url('simpan-data-siswa')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="width: 50%;">
              <label for="NIS">NIS</label>
              <input type="number" class="form-control" maxlength="10" id="NIS" name="NIS" aria-describedby="NIS" placeholder="Masukan NIS" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;">
            </div>
          <br>
        <div class="form-group" style="width: 50%;">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama" ariJa-describedby="Nama" placeholder="Masukan Nama">
            @error('Nama')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <br>
          <div class="form-group" style="width: 50%;">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" aria-describedby="Alamat" placeholder="Masukan Alamat">
            @error('Alamat')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <br>
          <div class="form-group" style="width: 50%;">
            <label for="Email">Jurusan</label>
            <select  id="country-dropdown" class="form-control"  name="Jurusan_id">
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
          <label for="Kelas">Kelas</label>
          <select id="state-dropdown" class="form-control" name="Kelas_id" aria-describedby="Kelas" placeholder="Pilihan Kelas">
          </select>
      </div>
          <br>
          <div class="form-group" style="width: 50%;">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" aria-describedby="Email" placeholder="Masukan Email">
            @error('Nama')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <br>
          <div class="form-group" style="width: 50%;">
            <label for="NoHP">NoHP</label>
            <input type="text" class="form-control" id="NoHP" aria-describedby="NoHP" name="NoHP" placeholder="Masukan NoHP">
            @error('Nama')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <br>
            <div class="form-group" style="width: 50%;">
              <label for="NoHP">password</label>
          <input type="password" class="form-control" id="password" placeholder="password" name="password" aria-describedby="password">
    </div>
    <br>
    <div class="form-group" style="width: 50%;">
      <label for="Foto" >Upload Foto Siswa</label>
      <input class="form-control" type="file" id="Foto" placeholder="foto" name="Foto" aria-describedby="password">
    </div>
          <br>
          <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          
        </form>
       
    </div>
  </div>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
          $('#country-dropdown').on('change', function () {
              var idJurusan = this.value;
              $("#state-dropdown").html('');
              $.ajax({
                  url: "{{url('kelas')}}",
                  type: "POST",
                  data: {
                      jurusan_id: idJurusan,
                      _token: '{{csrf_token()}}'
                  },
                  dataType: 'json',
                    success: function (result) {
                        $('#state-dropdown').html('<option value="">-- Pilih Kelas --</option>');
                        $.each(result.kelas, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value.id + '">' + value.Nama + '</option>');
                        });
                       
                    }
                });
            });

          
                    
  
        });
    </script>
@endsection
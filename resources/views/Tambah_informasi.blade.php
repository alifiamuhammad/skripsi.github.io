@extends('home')
@section('homes')
<div class="card">
    <h5 class="card-header">Tambah Data</h5>
    <div class="card-body">
          <form form action="{{url('tambah_data_informasi')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <br>
          <div class="form-group" style="width: 50%;">
            <label for="Judul">Judul</label>
            <input type="text" class="form-control" id="Judul" aria-describedby="Judul" name="Judul" placeholder="Masukan Judul">
            @error('Nama')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <br>
    <div class="form-group" style="width: 50%;">
      <label for="file" >Upload File</label>
      <input class="form-control" type="file" id="file" placeholder="file" name="file" aria-describedby="file">
    </div>
          <br>
          <button type="submit" class="btn btn-md btn-primary">Tambah</button>
          
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
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
            <input type="text" class="form-control" id="Nama" name="Nama" aria-describedby="Nama" placeholder="Masukan Nama">
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
            <label for="Kelas">Kelas</label>
            <input type="text" class="form-control" id="Kelas" aria-describedby="Kelas" name="Kelas"placeholder="Masukan Kelas">
            @error('Nama')
            <div class="text-danger alert-danger">{{ $message }}</div>
        @enderror
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

            <div class="form-group" style="width: 50%;">
              <label for="NoHP">password</label>
          <input type="password" class="form-control" id="password" placeholder="password" name="password" aria-describedby="password">
     <span class="input-group-btn" id="eyeSlash">
       <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
     </span>
    </div>
          <br>
          <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          
        </form>
       
    </div>
  </div>
  <script>
    
    function visibility3() {
var x = document.getElementById('password');
if (x.type === 'password') {
  x.type = "text";
  $('#eyeShow').show();
  $('#eyeSlash').hide();
}else {
  x.type = "password";
  $('#eyeShow').hide();
  $('#eyeSlash').show();
}
}
</script>
@endsection
@extends('template')
@section('homes')
    

            <div class="card align-self-center gx-5  border-dark">
                <div class="card-header  border-dark ">
                 <h4>Data Siswa</h4> 
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col align-self-start">
                            <a class="btn btn-primary" href="tambah_data_siswa" role="button">Tambah data</a>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="input-group" style="width: 350px;">
                            <input type="search" class="form-control rounded"  placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">search</button>
                                </div>
                          </div>
                          
                </div>
                    
                    <br>
                  <table class="table table-bordered  ">
                    <thead class="thead-dark">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">@sortablelink('NIS','NIS')</th>
                              <th scope="col">@sortablelink('Nama')</th>
                              <th scope="col">@sortablelink('Kelas_id','kelas')</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1;?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$no++}}</td>
                              <td >{{$item->NIS}}</td>
                              <td >{{$item->Nama}}</td>
                              <td >{{$item->kelas->Nama}}</td>
                              <td> <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                  <a href="detailsiswa{{$item->id}}" class="btn btn-primary btn-sm rounded-circle" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-info"></i></button>
                                </li></a>
                                <li class="list-inline-item">
                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                </li>
                            </ul></td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
              </div>
        </div>
  
  
    </div>
</div>
    
@endsection
          
@include('sweetalert::alert')  

</body>
</html>
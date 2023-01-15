@extends('template')
@section('homes')
    

            <div class="card align-self-center gx-5">
                <div class="card-header ">
                 <h4>Featured</h4> 
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col align-self-start">
                            <a class="btn btn-primary" href="tambah_Informasi" role="button">Tambah Informasi</a>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="input-group" style="width: 350px;">
                            <input type="search" class="form-control rounded"  placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">search</button>
                                </div>
                          </div>
                          
                </div>
                    
                    <br>
                  <table class="table table-bordered">
                    <thead class="bg-dark text-white text-center">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Judul</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1;?>
                         
                            <tr>
                                <td class="text-center">{{$no++}}</td>
                              <td >
                                
                              </td>
                              <td class="text-center"> 
                                <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                  <a href="" class="btn btn-primary btn-sm rounded-circle " type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-info"></i></button>
                                </li></a>
                                <li class="list-inline-item ">
                                    <button class="btn btn-danger btn-sm rounded-0 " type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                </li>
                            </ul></td>
                            
                            </tr>
                            
                        </tbody>
                        </table>
                </div>
              </div>
        </div>
  
  
    </div>
</div>
    
@endsection
          
        

</body>
</html>
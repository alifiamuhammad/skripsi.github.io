@extends('home')

@section('homes')
<div class="card">
    <h5 class="card-header">Featured</h5>
    <br>
    <div class="card-body">
               <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                </div>
              
                <div class="mb-3 col">
                 
                    <label for="formGroupExampleInput" class="form-label">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                    <br>
                    <label for="formGroupExampleInput" class="form-label">Example label</label>
                    <input type="text" class="form-control" value="{{$post->NIS}}" id="formGroupExampleInput" placeholder="Example input placeholder">
                    <br>
                    <label for="formGroupExampleInput" class="form-label">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                    <br>
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                 
            
                  </div>
    </div>
  </div>
@endsection

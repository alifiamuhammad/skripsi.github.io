<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAKAD</title>
    <style>
        .center {
          margin: auto;
          padding: 2px;
        }
        </style>
</head>

<nav class="navbar navbar-dark bg-secondary ">
    <div class="container-fluid">
        <div class="center">
            <img src="{{URL::asset('/images/logo.png')}}" width="40" 
            height="40" class="rounded " alt="...">
            <a class="navbar-brand" href="home1">SISTEM INFROMASI AKADEMIK SMA KARTIKA XIX-1 BANDUNG</a>
        </div>
     
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">  <span class="navbar-toggler-icon"></span></button>
    </div>
    <div class="offcanvas offcanvas-end bg-dark" style="width: 250px;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white h4" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Dropdown button
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="logout">KELUAR</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
 
<body><div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
              
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                   
                   
                   
                    <li>
                        <a href="" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-clipboard2-check "></i></i> <span class="ms-1 d-none d-sm-inline">Nilai Siswa</span></a>
                    </li>
                   
        
                    <li>
                        <a href="" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-file-earmark-text"></i></i> <span class="ms-1 d-none d-sm-inline">Informasi</span></a>
                            
                    </li>
                    <li>
                        <a href="" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi bi-calendar3"></i></i> <span class="ms-1 d-none d-sm-inline">Jadwal</span></a>
                            
                    </li>
                    <li>
                        <a href="" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-person-circle"></i></i> <span class="ms-1 d-none d-sm-inline">Profile</span></a>
                            
                    </li>

                
            </div>
        </div>
      
         <div class="col py-3">
          @yield('homeguru')
                </div>
              </div>
        </div>
  
  
    </div>
</div>
    
    
          
        

</body>
</html>
@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="pagetitle">
    <h1>Employee</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active">Emplyee</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row justify-content-center">
      <div class="filter">
              <a class="icon start-end" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>
      <div class="card-body">
          <h5 class="card-title">Add Employee</h5>
          @if($errors->any())
          <ul class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
                  <li>- {{ $error }}</li>
              @endforeach
          </ul>
          @endif
          <!-- Horizontal Form -->
          <form method="POST" action="{{ route('admin.employee.add') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">ID Employee</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText" value="{{old('MANV')}}" name="MANV">
                </div>
              </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText" value="{{old('HOTEN')}}" name="HOTEN">
              </div>
            </div>
            <div class="row mb-3">
              <label for="phone" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="phone" value="{{old('SDT')}}" name="SDT">
              </div>
            </div>
            <div class="row mb-3">
              <label for="position" class="col-sm-2 col-form-label">Position</label>
              <div class="col-sm-10">
                <select  class="form-select"  name="CHUCVU" id="position">
                  <option value="Sales">{{old('CHUCVU')}}Sales</option>
                  <option value="Serve">Serve</option>
                </select>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>


        <div class="col-auto"style="width: 100%;">
          <div class="card recent-sales overflow-auto">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Employee List <span>| Today</span></h5>

              <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" style="width: 12.5%;">Id Employee</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Full Name</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Phone</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Begin date</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Position</th>  
                    <th class="text-center" scope="col" style="width: 12.5%;">Status</th>
                    <th style="width: 2%;"></th>
                    <th style="width: 2%;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($viewData['nhanviens'] as $nhanvien)
                  <tr>
                    <th scope="row" class="text-center"><a href="#">{{$nhanvien -> getMANV()}}</a></th>
                    <td  class="text-center">{{$nhanvien -> getHOTEN()}}</td>
                    <td  class="text-center">{{$nhanvien -> getSDT()}}</td>
                    <td  class="text-center">{{$nhanvien -> getCreatedAt()}}</td>
                    <td  class="text-center">{{$nhanvien -> getCHUCVU()}}</td>
                    <td  class="text-center"><span class="badge bg-success">on</span></td>
                    <td>
                        <button type="button" class="border border-2 border-black text-center" data-bs-toggle="modal" data-bs-target="#modalupdate{{$nhanvien->getMANV()}}">
                            <i class="bi bi-pencil-square fs-5" style="color: blue;"></i>
                        </button>
                        
                    <!-- Modal update-->
                    <div style="width:90%" class="modal fade" id="modalupdate{{ $nhanvien->getMANV() }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateModalLabel{{ $nhanvien->getMANV() }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 150%">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabelUpdate">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.employee.update', ['MANV' => $nhanvien->getMANV()]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
    <label for="inputText{{ $nhanvien->getMANV() }}" class="col-sm-2 col-form-label">ID Employee</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputText{{ $nhanvien->getMANV() }}" value="{{ $nhanvien->getMANV() }}" name="MANV">
    </div>
</div>
<div class="row mb-3">
    <label for="inputText{{ $nhanvien->getMANV() }}" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputText{{ $nhanvien->getMANV() }}" value="{{ $nhanvien->getHOTEN() }}" name="HOTEN">
    </div>
</div>
<div class="row mb-3">
    <label for="phone{{ $nhanvien->getMANV() }}" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="phone{{ $nhanvien->getMANV() }}" value="{{ $nhanvien->getSDT() }}" name="SDT">
    </div>
</div>
<div class="row mb-3">
    <label for="position{{ $nhanvien->getMANV() }}" class="col-sm-2 col-form-label">Position</label>
    <div class="col-sm-10">
        <select class="form-select" name="CHUCVU" id="position{{ $nhanvien->getMANV() }}">
            <option value="Sales" {{ $nhanvien->getCHUCVU() == 'Sales' ? 'selected' : '' }}>Sales</option>
            <option value="Serve" {{ $nhanvien->getCHUCVU() == 'Serve' ? 'selected' : '' }}>Serve</option>
        </select>
    </div>
</div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

                    </td>
                    <td>
                        
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modaldelete{{$nhanvien->getMANV()}}">
                                <i class="bi bi-trash fs-5" style="color: red;"></i>
                            </button>
                            <!-- Modal delete -->
                            <div class="modal fade" id="modaldelete{{$nhanvien->getMANV()}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$nhanvien->getMANV()}}" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure you want to delete ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                    <form action="{{ route('admin.employee.delete', $nhanvien -> getMANV()) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>

            </div>

          </div>

        </div>
    </div>
  </section>


@endsection

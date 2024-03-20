@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="pagetitle">
    <h1>Type Product</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('Admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active">Type Product</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section Home">
    <div class="row justify-content-center">
      <div class="card-body">
          <h5 class="card-title">Add Type Product</h5>
  
            <!-- Horizontal Form -->
            <form method="POST" action="{{ route('admin.typeproduct.add') }}" enctype="multipart/form-data">
                @csrf
              <div class="row mb-3">
                
              <div class="row mb-3">
                <label for="Type" class="col-sm-2 col-form-label">Name Type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  id="inputTENLOAI" 
                  value="{{ old('TENLOAISP') }}" name="TENLOAISP" required>
                  <div id="tenloaiError" class="text-danger"></div>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form><!-- End Horizontal Form -->
  
      </div>

      <div class="col-auto"style="width: 100%;">
          <div class="card recent-sales overflow-auto">
            
            <div class="card-body">
              <div class="filter">
                <a class="icon float-end m-3" href="#" data-bs-toggle="dropdown" style=" "><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
              <h5 class="card-title">Type List <span>| Today</span></h5>

              <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" style="width: 12%;">ID Type</th>
                    <th class="text-center" scope="col" style="width: 40%;">Name Type</th>
                    <th style="width: 2%;"></th>
                    <th style="width: 2%;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($viewData['loaisps'] as $loaisp)
                  <tr>
                    <th scope="row" class="text-center">{{ $loaisp->getMALOAISP() }}</th>
                    <td  class="text-center">{{ $loaisp->getTENLOAISP() }}</td>
                    <td>
                      <button type="button" class="border border-2 border-black text-center"
                          data-bs-toggle="modal"
                          data-bs-target="#modalupdate{{ $loaisp->getMALOAISP() }}">
                          <i class="bi bi-pencil-square fs-5" style="color: blue;"></i>
                      </button>
                  </td>
                  <td>
                      <button type="button" data-bs-toggle="modal"
                          data-bs-target="#modaldelete{{ $loaisp->getMALOAISP() }}">
                          <i class="bi bi-trash fs-5" style="color: red;"></i>
                      </button>
                  </td>
              </tr>

              <!-- Modal update-->
              <div class="modal fade" id="modalupdate{{ $loaisp->getMALOAISP() }}"
                  data-bs-backdrop="static" data-bs-keyboard="false"
                  aria-labelledby="updateModalLabel{{ $loaisp->getMALOAISP() }}" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title fs-5" id="staticBackdropLabelUpdate">Cập nhật
                                  thông tin</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form method="POST"
                                  action="{{ route('admin.typeproduct.update', ['MALOAISP' => $loaisp->getMALOAISP()]) }}"
                                  enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <div class="mb-3">
                                      <label for="inputText{{ $loaisp->getMALOAISP() }}" class="form-label">Name Type</label>
                                      <input type="text" class="form-control" id="inputText{{ $loaisp->getMALOAISP() }}"
                                          value="{{ $loaisp->getTENLOAISP() }}" name="TENLOAISP" required>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Đóng</button>
                                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                              </div>
                              </form>
                          </div>
                          
                      </div>
                  </div>
              </div>

              <!-- Modal delete -->
              <div class="modal fade" id="modaldelete{{ $loaisp->getMALOAISP() }}" tabindex="-1"
                  aria-labelledby="deleteModalLabel{{ $loaisp->getMALOAISP() }}"
                  data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title fs-5" id="deleteModalLabel">Xóa Loại</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <p>Bạn có chắc chắn muốn xóa Loại này?</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Đóng</button>
                              <form
                                  action="{{ route('admin.typeproduct.delete', $loaisp->getMALOAISP()) }}"
                                  method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Xóa</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
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
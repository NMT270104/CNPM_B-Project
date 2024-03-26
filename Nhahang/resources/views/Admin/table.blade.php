@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="pagetitle">
    <h1>Table</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('Admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active">Table</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section Home">
    <div class="row justify-content-center">
      <div class="card-body">
          <h5 class="card-title">Add Table</h5>
          @if ($errors->any())
          <ul class="alert alert-danger list-unstyled">
              @foreach ($errors->all() as $error)
                  <li>- {{ $error }}</li>
              @endforeach
          </ul>
      @endif
      <!-- Horizontal Form -->
      <form method="POST" action="{{ route('admin.table.add') }}" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
              <div class="row mb-3">
                <label for="Table" class="col-sm-2 col-form-label">Number Table</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="Table" value="{{ old('SOBAN') }}"
                  name="SOBAN" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="Quantity" min="0" value="{{ old('SONGUOI') }}"
                  name="SONGUOI" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="position" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select  class="form-select"  name="TRANGTHAI" id="position">
                    <option value="Order">order</option>
                    <option value="Empty">empty</option>
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
              <h5 class="card-title">Table List <span>| Today</span></h5>

              <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" style="width: 20%;">Id Table</th>
                    <th class="text-center" scope="col" style="width: 20%;">Number Table</th>
                    <th class="text-center" scope="col" style="width: 20%;">Quantity</th>
                    <th class="text-center" scope="col" style="width: 20%;">Status</th>
                    <th style="width: 2%;"></th>
                    <th style="width: 2%;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($viewData['banans'] as $banan)
                  <tr>
                    <th scope="row" class="text-center">{{$banan -> getMABAN()}}</th>
                    <td  class="text-center">{{$banan -> getSOBAN()}}</td>
                    <td  class="text-center">{{$banan -> getSONGUOI()}}</td>
                    <td  class="text-center"><span class="badge bg-success">{{$banan -> getTRANGTHAI()}}</span></td>
                    <td>
                      <button type="button" class="border border-2 border-black text-center"
                          data-bs-toggle="modal"
                          data-bs-target="#modalupdate{{ $banan->getMABAN() }}">
                          <i class="bi bi-pencil-square fs-5" style="color: blue;"></i>
                      </button>
                  </td>
                  <td>
                      <button type="button" data-bs-toggle="modal"
                          data-bs-target="#modaldelete{{ $banan->getMABAN() }}">
                          <i class="bi bi-trash fs-5" style="color: red;"></i>
                      </button>
                  </td>
              </tr>

              <!-- Modal update-->
              <div class="modal fade" id="modalupdate{{ $banan->getMABAN() }}"
                  data-bs-backdrop="static" data-bs-keyboard="false"
                  aria-labelledby="updateModalLabel{{ $banan->getMABAN() }}" aria-hidden="true">
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
                                  action="{{ route('admin.table.update', ['MABAN' => $banan->getMABAN()]) }}"
                                  enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <div class="mb-3">
                                      <label for="inputMANVUpdate" class="form-label">Number Table</label>
                                      <input type="text" class="form-control" id="inputMANVUpdate"
                                          value="{{ $banan->getSOBAN() }}" name="SOBAN" required>
                                          <div id="manvUpdateError" class="text-danger"></div>
                                  </div>
                                  <div class="mb-3">
                                      <label for="inputText{{ $banan->getMABAN() }}" class="form-label">Quantity</label>
                                      <input type="text" class="form-control" id="inputText{{ $banan->getMABAN() }}"
                                          value="{{ $banan->getSONGUOI() }}" name="SONGUOI" required>
                                  </div>
                                  <div class="mb-3">
                                      <label for="position{{ $banan->getMABAN() }}" class="form-label">Status</label>
                                      <select class="form-select" name="TRANGTHAI" id="position{{ $banan->getMABAN() }}">
                                          <option value="Order" {{ $banan->getTRANGTHAI() == 'Order' ? 'selected' : '' }}>Order</option>
                                          <option value="Empty" {{ $banan->getTRANGTHAI() == 'Empty' ? 'selected' : '' }}>Empty</option>
                                      </select>
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
              <div class="modal fade" id="modaldelete{{ $banan->getMABAN() }}" tabindex="-1"
                  aria-labelledby="deleteModalLabel{{ $banan->getMABAN() }}"
                  data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title fs-5" id="deleteModalLabel">Xóa ban an</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <p>Bạn có chắc chắn muốn xóa ban an này?</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Đóng</button>
                              <form
                                  action="{{ route('admin.table.delete', $banan->getMABAN()) }}"
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
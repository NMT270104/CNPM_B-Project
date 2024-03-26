@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="pagetitle">
    <h1>Product</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('Admin.index') }}">Home</a></li>
        <li class="breadcrumb-item active">Product</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row justify-content-center">

      <div class="card-body">
          <h5 class="card-title">Add Product</h5>
          @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
          <!-- Horizontal Form -->
          <form method="POST" action="{{ route('admin.product.add') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name Product</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" value="{{ old('TENSP') }}" name="TENSP" required>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="position" class="col-sm-2 col-form-label">Name type</label>
                <div class="col-sm-10">
                    <select class="form-select" name="MALOAISP" id="position">

                        @foreach($viewData['loaisps'] as $loaisp)
                            <option value="{{ $loaisp->MALOAISP }}">{{ $loaisp->TENLOAISP }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="DVT" class="col-sm-2 col-form-label">DVT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="DVT" value="{{ old('DVT') }}" name="DVT" required>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="Price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="Price" value="{{ old('GIA') }}" name="GIA" required>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="Description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="Description" name="MOTA" rows="3" required>{{ old('MOTA') }}</textarea>
                </div>
            </div>
        
            <div class="row mb-3">
                <label for="Image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="Image" name="IMAGE">
                </div>
            </div>
        
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <!-- End Horizontal Form -->

        </div>

        <!-- Recent Sales -->
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
              <h5 class="card-title">Product List <span>| Today</span></h5>

              <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" style="width: 5%;">Id Product</th>
                    <th class="text-center" scope="col" style="width: 15%;">Name Product</th>
                    <th class="text-center" scope="col" style="width: 10%;">ID type</th>
                    <th class="text-center" scope="col" style="width: 5%;">DVT</th>
                    <th class="text-center" scope="col" style="width: 10%;">Price</th>
                    <th class="text-center" scope="col" style="width: 10%;">Description</th>  
                    <th class="text-center" scope="col" style="width: 20%;">Image</th>  
                    <th style="width: 2%;"></th>
                    <th style="width: 2%;"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($viewData['sanphams'] as $sanpham)
      
                  <tr>
                    <th scope="row" class="text-center">{{ $sanpham->getMASP() }}</th>
                    <td  class="text-center">{{ $sanpham->getTENSP() }}</td>
                    <td  class="text-center">{{$sanpham->getMALOAISP()}}
                      {{-- @if($sanpham->loaisp)
                          {{ $sanpham->loaisp->getTENLOAISP() }}
                      @else
                          N/A
                      @endif --}}

                    </td>
                    <td  class="text-center">{{ $sanpham->getDVT() }}</td>
                    <td  class="text-center">{{ $sanpham->getGIA() }}</td>
                    <td  class="text-center">{{ $sanpham->getMOTA() }}</td>
                    <td  class="text-center">{{ $sanpham->getImage() }}</td>
                    <td>
                      <button type="button" class="border border-2 border-black text-center"
                          data-bs-toggle="modal"
                          data-bs-target="#modalupdate{{ $sanpham->getMASP() }}">
                          <i class="bi bi-pencil-square fs-5" style="color: blue;"></i>
                      </button>
                  </td>
                  <td>
                      <button type="button" data-bs-toggle="modal"
                          data-bs-target="#modaldelete{{ $sanpham->getMASP() }}">
                          <i class="bi bi-trash fs-5" style="color: red;"></i>
                      </button>
                  </td>
              </tr>

              <!-- Modal update-->
              <div class="modal fade" id="modalupdate{{ $sanpham->getMASP() }}"
                  data-bs-backdrop="static" data-bs-keyboard="false"
                  aria-labelledby="updateModalLabel{{ $sanpham->getMASP() }}" aria-hidden="true">
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
                                  action="{{ route('admin.product.update', ['MASP' => $sanpham->getMASP()]) }}"
                                  enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

    
                                  <div class="mb-3">
                                      <label for="inputText{{ $sanpham->getMASP() }}" class="form-label">Name Product</label>
                                      <input type="text" class="form-control" id="inputText{{ $sanpham->getMASP() }}"
                                          value="{{ $sanpham->getTENSP() }}" name="TENSP" required>
                                  </div>
                                  <div class="mb-3">
                                      <label for="phone{{ $sanpham->getMASP() }}" class="form-label">Name Type</label>
                                      <div class="col-sm-10">
                                        <select class="form-select" name="MALOAISP" id="position">
                    
                                            @foreach($viewData['loaisps'] as $loaisp)
                                                <option value="{{ $loaisp->MALOAISP }}">{{ $loaisp->TENLOAISP }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                      <label for="DVT{{ $sanpham->getMASP() }}" class="form-label">DVT</label>
                                      <input type="text" class="form-control" id="inputText{{ $sanpham->getMASP() }}"
                                          value="{{ $sanpham->getDVT() }}" name="DVT" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="price{{ $sanpham->getMASP() }}" class="form-label">GIA</label>
                                    <input type="number" class="form-control" id="inputText{{ $sanpham->getMASP() }}"
                                        value="{{ $sanpham->getGIA() }}" name="GIA" required>
                                </div>
                                <div class="mb-3">
                                  <label for="Description{{ $sanpham->getMASP() }}" class="form-label">Description</label>
                                  <textarea type="number" class="form-control" id="inputText{{ $sanpham->getMASP() }}"
                                       name="MOTA" required>{{ $sanpham->getMOTA() }}</textarea>
                              </div>
                              <div class="mb-3">
                                <label for="img{{ $sanpham->getMASP() }}" class="form-label">Image</label>
                                <input type="file" class="form-control" id="inputText{{ $sanpham->getMASP() }}"
                                     name="IMAGE" required>
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
              <div class="modal fade" id="modaldelete{{ $sanpham->getMASP() }}" tabindex="-1"
                  aria-labelledby="deleteModalLabel{{ $sanpham->getMASP() }}"
                  data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title fs-5" id="deleteModalLabel">Xóa sản phẩm</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <p>Bạn có chắc chắn muốn xóa sản phẩm này?</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"
                                  data-bs-dismiss="modal">Đóng</button>
                              <form
                                  action="{{ route('admin.product.delete', $sanpham->getMASP()) }}"
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


@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')


    <div class="pagetitle">
        <h1>Material</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Material</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row justify-content-center">

            <div class="card-body">
                <h5 class="card-title">Add Material</h5>
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <!-- Horizontal Form -->
                <form method="POST" action="{{ route('admin.material.add') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name material</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" value="{{ old('TENNL') }}" name="TENNL" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="DVT" class="col-sm-2 col-form-label">DVT</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="DVT" value="{{ old('DVT') }}" name="DVT" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="LOAI" id="position">
                                <option value="Cu">cu</option>
                                <option value="Bo">bo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea type="number" class="form-control" id="Description" min="0"  name="MOTA" required>{{ old('MOTA') }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="form-control" id="Price" value="{{ old('GIA') }}" name="GIA" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- End Horizontal Form -->

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
                        <h5 class="card-title">Material List <span>| Today</span></h5>

                        <table class="table table-bordered table-striped table-hover datatable">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col" style="width: 12.5%;">Id Material</th>
                                    <th class="text-center" scope="col" style="width: 12.5%;">Name material</th>
                                    <th class="text-center" scope="col" style="width: 12.5%;">DVT</th>
                                    <th class="text-center" scope="col" style="width: 12.5%;">type</th>
                                    <th class="text-center" scope="col" style="width: 12.5%;">Description</th>
                                    <th class="text-center" scope="col" style="width: 12.5%;">Price</th>
                                    <th style="width: 2%;"></th>
                                    <th style="width: 2%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($viewData['nguyenlieus'] as $nguyenlieu)
                                
                              
                                <tr>
                                    <th scope="row" class="text-center">{{$nguyenlieu -> getMANL()}}</th>
                                    <td class="text-center">{{$nguyenlieu -> getTENNL()}}</td>
                                    <td class="text-center">{{$nguyenlieu -> getDVT()}}</td>
                                    <td class="text-center">{{$nguyenlieu -> getLOAI()}}</td>
                                    <td class="text-center">{{$nguyenlieu -> getMOTA()}}</td>
                                    <td class="text-center">{{$nguyenlieu -> getGIA()}}</td>
                                    <td>
                                      <button type="button" class="border border-2 border-black text-center"
                                          data-bs-toggle="modal"
                                          data-bs-target="#modalupdate{{ $nguyenlieu->getMANL() }}">
                                          <i class="bi bi-pencil-square fs-5" style="color: blue;"></i>
                                      </button>
                                  </td>
                                  <td>
                                      <button type="button" data-bs-toggle="modal"
                                          data-bs-target="#modaldelete{{ $nguyenlieu->getMANL() }}">
                                          <i class="bi bi-trash fs-5" style="color: red;"></i>
                                      </button>
                                  </td>
                              </tr>
                
                              <!-- Modal update-->
                              <div class="modal fade" id="modalupdate{{ $nguyenlieu->getMANL() }}"
                                  data-bs-backdrop="static" data-bs-keyboard="false"
                                  aria-labelledby="updateModalLabel{{ $nguyenlieu->getMANL() }}" aria-hidden="true">
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
                                                  action="{{ route('admin.material.update', ['MANL' => $nguyenlieu->getMANL()]) }}"
                                                  enctype="multipart/form-data">
                                                  @csrf
                                                  @method('PUT')
                
                    
                                                  <div class="mb-3">
                                                      <label for="inputText{{ $nguyenlieu->getMANL() }}" class="form-label">Name Material</label>
                                                      <input type="text" class="form-control" id="inputText{{ $nguyenlieu->getMANL() }}"
                                                          value="{{ $nguyenlieu->getTENNL() }}" name="TENNL" required>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="DVT{{ $nguyenlieu->getMANL() }}" class="form-label">DVT</label>
                                                    <input type="text" class="form-control" id="inputText{{ $nguyenlieu->getMANL() }}"
                                                    value="{{ $nguyenlieu->getDVT() }}" name="DVT" required>
                                                  </div>
                                                  <div class="mb-3">
                                                      <label for="phone{{ $nguyenlieu->getMANL() }}" class="form-label">Type</label>
                                                      <div class="col-sm-10">
                                                        <select class="form-select" name="LOAI" id="position">
                                                          <option value="Cu">cu</option>
                                                          <option value="Bo">bo</option>
                                                        </select>
                                                    </div>
                                                  </div>
                                                  <div class="mb-3">
                                                  <label for="Description{{ $nguyenlieu->getMANL() }}" class="form-label">Description</label>
                                                  <textarea type="number" class="form-control" id="inputText{{ $nguyenlieu->getMANL() }}"
                                                       name="MOTA" required>{{ $nguyenlieu->getMOTA() }}</textarea>
                                              </div>
                                                  <div class="mb-3">
                                                    <label for="price{{ $nguyenlieu->getMANL() }}" class="form-label">GIA</label>
                                                    <input type="number" class="form-control" id="inputText{{ $nguyenlieu->getMANL() }}"
                                                        value="{{ $nguyenlieu->getGIA() }}" name="GIA" required>
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
                              <div class="modal fade" id="modaldelete{{ $nguyenlieu->getMANL() }}" tabindex="-1"
                                  aria-labelledby="deleteModalLabel{{ $nguyenlieu->getMANL() }}"
                                  data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title fs-5" id="deleteModalLabel">Xóa nguyen lieu</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                  aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              <p>Bạn có chắc chắn muốn xóa nguyen lieu này?</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary"
                                                  data-bs-dismiss="modal">Đóng</button>
                                              <form
                                                  action="{{ route('admin.material.delete', $nguyenlieu->getMANL()) }}"
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

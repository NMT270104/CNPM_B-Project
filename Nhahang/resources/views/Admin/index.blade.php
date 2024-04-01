@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="pagetitle">
    <h1>Home</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('Admin.index') }}">Trang chủ</a></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section Home">
    <div class="row justify-content-center">
        <div class="card-body">
            <h5 class="card-title">Thêm hóa đơn</h5>
        </div>

        <!-- Horizontal Form -->
        <form method="POST" action="{{ route('admin.index.add') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="position" class="col-sm-2 col-form-label">Mã nhân viên:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="MANV" id="inputMANV">
                        @foreach ($viewData['employees'] as $employee)
                        <option value="{{ $employee->MANV }}">{{ $employee->MANV }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <label for="position" class="col-sm-2 col-form-label">Mã bàn:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="MABAN" id="inputMABAN">
                        @foreach ($viewData['tables'] as $table)
                        <option value="{{ $table->MABAN }}">{{ $table->MABAN }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <label for="position" class="col-sm-2 col-form-label">Mã sản phẩm:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="MASP" id="inputMASP">
                        @foreach ($viewData['products'] as $product)
                        <option value="{{ $product->MASP }}">{{ $product->MASP }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 mt-3">
                <label for="position" class="col-sm-2 col-form-label">Số lượng:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="quantity" value="{{ old('SDT') }}" name="SDT" required maxlength="10" min="0">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form><!-- End Horizontal Form -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm:</th>
                    <th scope="col">Giá tiền:</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng cộng:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['cthds'] as $index => $cthd)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $cthd->nhanvien->MANV }}</td>
                    <td>{{ $cthd->banan->MABAN }}</td>
                    <td>{{ $cthd->sanpham->MASP }}</td>
                    <td>{{ $cthd->SL }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="col-auto" style="width: 100%;">
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
<<<<<<< HEAD
                    <h5 class="card-title">Revenue <span>| Today</span></h5>
=======
                  </div>
              <div class="row mb-3">
                <label for="Table" class="col-sm-2 col-form-label">Table</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="Table">
                </div>
              </div>
              <div class="row mb-3">
                <label for="Id Dish" class="col-sm-2 col-form-label">Id Dish</label>
                <div class="col-sm-10">
                  <select name="countries" id="monans" multiple>
                    <option value="1">Afghanistan</option>
                    <option value="2">Australia</option>
                    <option value="3">Germany</option>
                    <option value="4">Canada</option>
                    <option value="5">Russia</option>
                </select>
                <input type="number" class="form-control" name="quantities[]" placeholder="Số lượng" min="1">
                <script>
                  // Lắng nghe sự kiện khi select thay đổi
document.querySelectorAll('select[name="dish_quantities[]"]').forEach(select => {
    select.addEventListener('change', function() {
        // Lấy input số lượng cùng vị trí với select
        const quantityInput = this.parentNode.querySelector('input[type="number"]');
        // Đặt giá trị mặc định cho input số lượng là 1 nếu không có món nào được chọn
        quantityInput.value = this.value === '' ? 1 : '';
    });
});

                </script>
                </div>
              </div>
              <div class="row mb-3">
                <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="Quantity">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form><!-- End Horizontal Form -->
  
      </div>
>>>>>>> 9c39038855890c2affa95ec3302ea1070e59cbe8

                    <table class="table table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col" style="width: 12.5%;">Invoice Numer</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Date</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Id Employee</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Table</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Id Dish</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Quantity</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Total</th>
                                <th class="text-center" scope="col" style="width: 12.5%;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center"><a href="#">0011</a></th>
                                <td class="text-center">20-2-2004</td>
                                <td class="text-center"><a href="#" class="text-primary">NV0001</a></td>
                                <td class="text-center">001</td>
                                <td class="text-center"><a href="#" class="text-primary">mon001</a></td>
                                <td class="text-center"><span>20</span></td>
                                <td class="text-center"><span>100,000,000</span></td>
                                <td class="text-center"><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center"><a href="#">0011</a></th>
                                <td class="text-center">20-2-2004</td>
                                <td class="text-center"><a href="#" class="text-primary">NV0001</a></td>
                                <td class="text-center">001</td>
                                <td class="text-center"><a href="#" class="text-primary">mon001</a></td>
                                <td class="text-center"><span>20</span></td>
                                <td class="text-center"><span>100,000,000</span></td>
                                <td class="text-center"><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center"><a href="#">0011</a></th>
                                <td class="text-center">20-2-2004</td>
                                <td class="text-center"><a href="#" class="text-primary">NV0001</a></td>
                                <td class="text-center">001</td>
                                <td class="text-center"><a href="#" class="text-primary">mon001</a></td>
                                <td class="text-center"><span>20</span></td>
                                <td class="text-center"><span>100,000,000</span></td>
                                <td class="text-center"><span class="badge bg-success">Paid</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection

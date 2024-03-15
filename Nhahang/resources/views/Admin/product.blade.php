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

          <!-- Horizontal Form -->
          <form>
            @csrf
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name Product</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>

            <div class="row mb-3">
              <label for="position" class="col-sm-2 col-form-label">ID type</label>
              <div class="col-sm-10">
                <select  class="form-select"  name="position" id="position">
                  <option value="Sales">001</option>
                  <option value="Serve">002</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
                <label for="DVT" class="col-sm-2 col-form-label">DVT</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="DVT">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Price">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Description">
                </div>
              </div>

              <div class="row mb-3">
                <label for="Image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="Image">
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
              <h5 class="card-title">Product List <span>| Today</span></h5>

              <table class="table table-bordered table-striped table-hover datatable">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" style="width: 5%;">Id Product</th>
                    <th class="text-center" scope="col" style="width: 15%;">Name Product</th>
                    <th class="text-center" scope="col" style="width: 5%;">ID type</th>
                    <th class="text-center" scope="col" style="width: 5%;">DVT</th>
                    <th class="text-center" scope="col" style="width: 10%;">Price</th>
                    <th class="text-center" scope="col" style="width: 10%;">Description</th>  
                    <th class="text-center" scope="col" style="width: 20%;">Image</th>  
                    <th style="width: 6%;"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">SP001</a></th>
                    <td  class="text-center">Tom hum</td>
                    <td  class="text-center">0011</td>
                    <td  class="text-center">con</td>
                    <td  class="text-center">1.000.000</td>
                    <td  class="text-center">Tom hum chau au</td>
                    <td  class="text-center">img</td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">SP001</a></th>
                    <td  class="text-center">Tom hum</td>
                    <td  class="text-center">0011</td>
                    <td  class="text-center">con</td>
                    <td  class="text-center">1.000.000</td>
                    <td  class="text-center">Tom hum chau au</td>
                    <td  class="text-center">img</td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">SP001</a></th>
                    <td  class="text-center">Tom hum</td>
                    <td  class="text-center">0011</td>
                    <td  class="text-center">con</td>
                    <td  class="text-center">1.000.000</td>
                    <td  class="text-center">Tom hum chau au</td>
                    <td  class="text-center">img</td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>

        </div>
    </div>
  </section>


@endsection


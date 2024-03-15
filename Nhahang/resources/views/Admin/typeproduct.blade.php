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
            <form>
                @csrf
              <div class="row mb-3">
                
              <div class="row mb-3">
                <label for="Type" class="col-sm-2 col-form-label">Name Type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Type">
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
                    <th class="text-center" scope="col" style="width: 12.5%;">ID Type</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Name Type</th>
                    <th style="width: 6%;"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">0011</a></th>
                    <td  class="text-center">Name Type</td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">0011</a></th>
                    <td  class="text-center">Name Type</td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">0011</a></th>
                    <td  class="text-center">Name Type</td>
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
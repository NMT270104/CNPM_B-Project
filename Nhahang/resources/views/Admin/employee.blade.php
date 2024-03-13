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

          <!-- Horizontal Form -->
          <form>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="phone" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="phone">
              </div>
            </div>
            <div class="row mb-3">
              <label for="position" class="col-sm-2 col-form-label">Position</label>
              <div class="col-sm-10">
                <select  class="form-select"  name="position" id="position">
                  <option value="Sales">Sales</option>
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

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th class="text-center" scope="col" style="width: 12.5%;">Id Employee</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Full Name</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Phone</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Begin date</th>
                    <th class="text-center" scope="col" style="width: 12.5%;">Position</th>  
                    <th class="text-center" scope="col" style="width: 12.5%;">Status</th>
                    <th style="width: 6%;"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">NV0001</a></th>
                    <td  class="text-center">Nguyen Van A</td>
                    <td  class="text-center">0123456789</td>
                    <td  class="text-center">20-1-2000</td>
                    <td  class="text-center">Sales</td>
                    <td  class="text-center"><span class="badge bg-success">on</span></td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">NV0001</a></th>
                    <td  class="text-center">Nguyen Van A</td>
                    <td  class="text-center">0123456789</td>
                    <td  class="text-center">20-1-2000</td>
                    <td  class="text-center">Sales</td>
                    <td  class="text-center"><span class="badge bg-success">on</span></td>
                    <td><a href="#"><i class="bi bi-pencil-square fs-5" style="color: blue;"></i></a> &nbsp; <a href="#"><i class="bi bi-trash fs-5" style="color: red;"></i></a></td>

                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">NV0001</a></th>
                    <td  class="text-center">Nguyen Van A</td>
                    <td  class="text-center">0123456789</td>
                    <td  class="text-center">20-1-2000</td>
                    <td  class="text-center">Sales</td>
                    <td  class="text-center"><span class="badge bg-success">on</span></td>
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
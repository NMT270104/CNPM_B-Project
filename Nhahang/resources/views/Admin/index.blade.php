@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')

<div class="pagetitle">
    <h1>Home</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('Admin.index') }}">Home</a></li>
        
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section Home">
    <div class="row justify-content-center">
      <div class="card-body">
          <h5 class="card-title">Add Employee</h5>
  
            <!-- Horizontal Form -->
            <form>
              @csrf
              <div class="row mb-3">
                <div class="row mb-3">
                    <label for="Id Employee" class="col-sm-2 col-form-label">Id Employee</label>
                    <div class="col-sm-10">
                      <select  class="form-select"  name="position" id="Id Employee">
                        <option value="Sales">NV0001</option>
                        <option value="Serve">NV0002</option>
                      </select>
                    </div>
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
                  <select  class="form-select"  name="position" id="Id Dish">
                    <option value="Sales">mon001</option>
                    <option value="Serve">mon002</option>
                  </select>
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
              <h5 class="card-title">Revenue <span>| Today</span></h5>

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
                    <td  class="text-center">20-2-2004</td>
                    <td  class="text-center"><a href="#" class="text-primary">NV0001</a></td>
                    <td  class="text-center">001</td>
                    <td  class="text-center"><a href="#" class="text-primary">mon001</a></td>
                    <td  class="text-center"><span>20</span></td>
                    <td  class="text-center"><span>100,000,000</span></td>
                    <td  class="text-center"><span class="badge bg-success">Paid</span></td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center"><a href="#">0011</a></th>
                    <td  class="text-center">20-2-2004</td>
                    <td  class="text-center"><a href="#" class="text-primary">NV0001</a></td>
                    <td  class="text-center">001</td>
                    <td  class="text-center"><a href="#" class="text-primary">mon001</a></td>
                    <td  class="text-center"><span>20</span></td>
                    <td  class="text-center"><span>100,000,000</span></td>
                    <td  class="text-center"><span class="badge bg-success">Paid</span></td>
                  </tr><tr>
                    <th scope="row" class="text-center"><a href="#">0011</a></th>
                    <td  class="text-center">20-2-2004</td>
                    <td  class="text-center"><a href="#" class="text-primary">NV0001</a></td>
                    <td  class="text-center">001</td>
                    <td  class="text-center"><a href="#" class="text-primary">mon001</a></td>
                    <td  class="text-center"><span>20</span></td>
                    <td  class="text-center"><span>100,000,000</span></td>
                    <td  class="text-center"><span class="badge bg-success">Paid</span></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
          
      </div>
    </div>
  </section>



@endsection
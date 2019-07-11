@extends('layouts.app')

@section('content')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Generate Report</a>
          </div>
          <div class="row">
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number Of Student</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">12,345+</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number Of Course</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12+</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <a href="student" class=" col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Search Student</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              
          </div>
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Number of Student</h6>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
                <hr>
              </div>
            </div>

  @endsection
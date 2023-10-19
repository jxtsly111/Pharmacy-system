<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  @include('includes.sidebar')
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    @include('includes.navbar')
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Patient Information
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Adding patient information is the process of gathering, storing, and maintaining essential details about individuals in a healthcare system.
              </p>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Patient Profile</p>
                <button class="btn btn-primary btn-sm ms-auto">Add Patient</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Personal Information:</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Full Name</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Date of Birth</label>
                    <input class="form-control" type="date" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact Number</label>
                    <input class="form-control" type="number" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Emergency Contact Information</label>
                    <input class="form-control" type="number" >
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Medical History</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Allergies</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Previous and existing medical conditions</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Medications and dosages</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Data</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Height</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Weight</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Blood Pressure</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Physician notes</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Physician notes</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      @include('includes.plugins')
    </div>
  </div>
  @include('includes.plugins')
  @include('includes.script')
</body>

</html>
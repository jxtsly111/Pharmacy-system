
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

          @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif


      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               Update Patient Information
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Updating patient information is a vital aspect of maintaining accurate and current medical records.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <form class="card" method="POST" action="{{ route('patients.update', $patient->id) }}"> @csrf @method('PATCH')
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Update Patient Profile</p>
                <button class="btn btn-primary btn-sm ms-auto" type="submit">Update Patient Profile</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Personal Information:</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Full Name</label>
                    <input class="form-control" type="text" name="name"  value="{{ $patient->name }}" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Date of Birth</label>
                    <input class="form-control" type="date" name="DOB" value="{{ $patient->DOB }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact Number</label>
                    <input class="form-control" type="number" name="contact_number" value="{{ $patient->contact_number }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Emergency Contact Number</label>
                    <input class="form-control" type="number" name="emergency_contact_number"value="{{ $patient->emergency_contact_number }}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Medical History</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Allergies</label>
                    <input class="form-control" type="text"  name="allergies" value="{{ $patient->allergies }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Previous and existing medical conditions</label>
                    <input class="form-control" type="text" name="medical_conditions" value="{{ $patient->medical_conditions }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Medications and dosages</label>
                    <input class="form-control" type="text" name="medications" value="{{ $patient->medications }}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Data</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Height</label>
                    <input class="form-control" type="text" name="height" value="{{ $patient->height }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Weight</label>
                    <input class="form-control" type="text" name="weight"  value="{{ $patient->weight }}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Blood Pressure</label>
                    <input class="form-control" type="text" name="blood_pressure" value="{{ $patient->blood_pressure }}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Physician notes</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Physician notes</label>
                    <input class="form-control" type="text" name="physician_notes" value="{{ $patient->physician_notes }}">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
       
      </div>
      @include('includes.footer')
    </div>
  </div>
  @include('includes.plugins')
  @include('includes.script')
</body>

</html>
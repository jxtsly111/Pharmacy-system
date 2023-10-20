<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Information</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('information')}}">Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->name }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Date of Birth</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->DOB }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Contact Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->contact_number }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Emergency Contact Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->emergency_contact_number }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Allergies</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->allergies }}
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Previous and existing medical conditions</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->medical_conditions }}
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Medications and dosages</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->medications }}
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Height</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->height }}
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Weight</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->weight }}
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Blood Pressure</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->blood_pressure }}
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Physician notes</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $patient->physician_notes }}
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-info" id="printButton">Print</a>
                        </div>
                    </div>
                    </div>
                  </div>
    
    
    
    
                </div>
              </div>
    
            </div>
        </div>

        <script>
            // Add an event listener to the Print button
            document.getElementById('printButton').addEventListener('click', function() {
                window.print(); // Trigger the browser's print dialog
            });
        </script>
</body>
</html>
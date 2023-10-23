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
                  <li class="breadcrumb-item"><a href="{{route('product_information')}}">Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Profile</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Product Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->product_name }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Quantity</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->quantity }}
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Tax(percentage)</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->tax }}
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Discount(percentage)</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->discount }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Price</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->price }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->status }}
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Product Image</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" width="100">
                            @endif
                        </div>
                      </div>
                      
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $product->description }}
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
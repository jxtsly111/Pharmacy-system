
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
                Product Management
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Adding product information is the process of gathering, storing, and maintaining essential details about products in a healthcare system.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a href="{{route('information')}}" class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " >View All Product Informations</a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <form class="card" method="POST" action="{{route('addPatient')}}">@csrf
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button class="btn btn-primary btn-sm ms-auto" type="submit">Add Product</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Product Information:</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Product Name</label>
                    <input class="form-control" type="text" name="product_name" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Quantity</label>
                    <input class="form-control" type="text" name="Quantity" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tax(percentage)</label>
                    <input class="form-control" type="text" name="tax" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Discount(percentage)</label>
                    <input class="form-control" type="text" name="discount">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Price</label>
                    <input class="form-control" type="text"  name="price">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Status</label>
                    <input class="form-control" type="text" name="status">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Product Image</label>
                    <input class="form-control" type="file" name="image" >
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Description</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Description</label>
                    <input class="form-control" type="text" name="description" >
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

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


    </div>
  </div>
  @include('includes.plugins')
  @include('includes.script')
</body>

</html>
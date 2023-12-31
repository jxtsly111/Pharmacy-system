
<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('includes.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('includes.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
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
            <div class="card-header pb-0">
              <h6>Product Information Table</h6>
            </div>
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Search for products...">
                </div>
            </div>
            <div id="search-results"></div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $product->product_name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" style="width: 50px" />
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{ $product->status}}</h6>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $product->price }}</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('products.destroy', $product->id) }}"  onclick="event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit();"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                         <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('products.edit', ['product' => $product->id]) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

                        <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('products.display', ['product' => $product->id]) }}"><i class="ni ni-collection text-dark me-2" aria-hidden="true"></i>Display</a> 
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('includes.footer')
    </div>
  </main>
  @include('includes.plugins')
  <!--   Core JS Files   -->
  @include('includes.script')
  <!-- ... Your previous HTML code ... -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
    $('#search').on('input', function () {
        let search = $(this).val();
        if (search.length >= 3) {
            $.ajax({
                url: '/search',
                type: 'GET',
                data: { search: search },
                success: function (response) {
                    let results = '';

                    // Loop through the search results and build HTML for each product
                    $.each(response, function (index, product) {
                        results += '<tr>';
                        results += '<td>';
                        results += '<div class="d-flex px-2 py-1">';
                        results += '<div class="d-flex flex-column justify-content-center">';
                        results += '<h6 class="mb-0 text-sm">' + product.product_name + '</h6>';
                        results += '</div>';
                        results += '</div>';
                        results += '</td>';
                        results += '<td>';
                        results += '<img src="' + product.image_url + '" alt="' + product.product_name + '" style="width: 50px" />';
                        results += '</td>';
                        results += '<td class="align-middle text-center text-sm">';
                        results += '<h6 class="mb-0 text-sm">' + product.status + '</h6>';
                        results += '</td>';
                        results += '<td class="align-middle text-center">';
                        results += '<span class="text-secondary text-xs font-weight-bold">' + product.price + '</span>';
                        results += '</td>';
                        results += '<td class="align-middle">';
                        results += '<a class="btn btn-link text-danger text-gradient px-3 mb-0" href="' + product.delete_url + '"  onclick="event.preventDefault(); document.getElementById(\'delete-form-' + product.id + '\').submit();"><i class="far fa-trash-alt me-2"></i>Delete</a>';
                        results += '<form id="delete-form-' + product.id + '" action="' + product.delete_url + '" method="POST" style="display: none;">' +
                            '<input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
                            '<input type="hidden" name="_method" value="DELETE" />' +
                        '</form>';
                        results += '<a class="btn btn-link text-dark px-3 mb-0" href="' + product.edit_url + '"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>';
                        results += '<a class="btn btn-link text-dark px-3 mb-0" href="' + product.display_url + '"><i class="ni ni-collection text-dark me-2" aria-hidden="true"></i>Display</a>';
                        results += '</td>';
                        results += '</tr>';
                    });

                    // Update the HTML of the search-results div with the results
                    $('#search-results').html('<table class="table align-items-center mb-0">' + results + '</table>');
                }
            });
        } else {
            // Clear the search results if the search input is less than 3 characters
            $('#search-results').html('');
        }
    });
});

  </script>
  



  
  
</html>

</body>

</html>
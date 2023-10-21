
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
              <h6>Patient Information Table</h6>
            </div>
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="search" name="search" placeholder="Search for patients...">
                </div>
            </div>
            <div id="search-results"></div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date of Birth</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Emergency Contact Number</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($patients as $patient)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $patient->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $patient->DOB }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{ $patient->contact_number}}</h6>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $patient->emergency_contact_number }}</span>
                      </td>
                      <td class="align-middle">
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('patients.destroy', $patient->id) }}"  onclick="event.preventDefault(); document.getElementById('delete-form-{{ $patient->id }}').submit();"><i class="far fa-trash-alt me-2"></i>Delete</a>
                        <form id="delete-form-{{ $patient->id }}" action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('patients.edit', ['patient' => $patient->id]) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>

                        <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('patients.display', ['patient' => $patient->id]) }}"><i class="ni ni-collection text-dark me-2" aria-hidden="true"></i>Display</a>
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
  {{-- <script>
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
                        $.each(response, function (index, patient) {
                            results += '<tr>';
                            results += '<td>';
                            results += '<div class="d-flex px-2 py-1">';
                            results += '<div class="d-flex flex-column justify-content-center">';
                            results += '<h6 class="mb-0 text-sm">' + patient.name + '</h6>';
                            results += '</div>';
                            results += '</div>';
                            results += '</td>';
                            results += '<td>';
                            results += '<p class="text-xs font-weight-bold mb-0">' + patient.DOB + '</p>';
                            results += '</td>';
                            results += '<td class="align-middle text-center text-sm">';
                            results += '<h6 class="mb-0 text-sm">' + patient.contact_number + '</h6>';
                            results += '</td>';
                            results += '<td class="align-middle text-center">';
                            results += '<span class="text-secondary text-xs font-weight-bold">' + patient.emergency_contact_number + '</span>';
                            results += '</td>';
                            results += '<td class="align-middle">';
                            results += '<form id="delete-form-' + patient.id + '" action="/patients/' + patient.id + '" method="POST" style="display: none;">' +
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
                                '<input type="hidden" name="_method" value="DELETE" />' +
                            '</form>' +
                            '<a href="#" onclick="event.preventDefault(); document.getElementById(\'delete-form-' + patient.id + '\').submit();">' +
                                '<i class="far fa-trash-alt me-2"></i>Delete' +
                            '</a>';
                            results += '<a class="btn btn-link text-dark px-3 mb-0" href="' + patient.edit_url + '"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>';
                            results += '<a class="btn btn-link text-dark px-3 mb-0" href="' + patient.display_url + '"><i class="ni ni-collection text-dark me-2" aria-hidden="true"></i>Display</a>';
                            results += '</td>';
                            results += '</tr>';
                        });
                        $('#search-results').html('<table class="table align-items-center mb-0">' + results + '</table>');
                    }
                });
            } else {
                $('#search-results').html('');
            }
        });
    });
</script> --}}

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
                        $.each(response, function (index, patient) {
                            results += '<tr>';
                            results += '<td>';
                            results += '<div class="d-flex px-2 py-1">';
                            results += '<div class="d-flex flex-column justify-content-center">';
                            results += '<h6 class="mb-0 text-sm">' + patient.name + '</h6>';
                            results += '</div>';
                            results += '</div>';
                            results += '</td>';
                            results += '<td>';
                            results += '<p class="text-xs font-weight-bold mb-0">' + patient.DOB + '</p>';
                            results += '</td>';
                            results += '<td class="align-middle text-center text-sm">';
                            results += '<h6 class="mb-0 text-sm">' + patient.contact_number + '</h6>';
                            results += '</td>';
                            results += '<td class="align-middle text-center">';
                            results += '<span class="text-secondary text-xs font-weight-bold">' + patient.emergency_contact_number + '</span>';
                            results += '</td>';
                            results += '<td class="align-middle">';
                            results += '<form id="delete-form-' + patient.id + '" action="/patients/' + patient.id + '" method="POST" style="display: none;">' +
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}" />' +
                                '<input type="hidden" name="_method" value="DELETE" />' +
                            '</form>' +
                            '<a href="#" onclick="event.preventDefault(); document.getElementById(\'delete-form-' + patient.id + '\').submit();">' +
                                '<i class="far fa-trash-alt me-2"></i>Delete' +
                            '</a>';
                            results += '<a class="btn btn-link text-dark px-3 mb-0" href="' + patient.edit_url + '"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>';
                            results += '<a class="btn btn-link text-dark px-3 mb-0" href="' + patient.display_url + '"><i class="ni ni-collection text-dark me-2" aria-hidden="true"></i>Display</a>';
                            results += '</td>';
                            results += '</tr>';
                        });
                        $('#search-results').html('<table class="table align-items-center mb-0">' + results + '</table>');
                    }
                });
            } else {
                $('#search-results').html('');
            }
        });
    });
</script>



  
  
</html>

</body>

</html>
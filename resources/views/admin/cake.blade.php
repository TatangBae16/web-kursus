<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard Admin KursusKita</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

    <link
      href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet" />
  </head>

  <body id="page-top">
    <div id="wrapper">
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
        >
          <div class="sidebar-brand-text mx-3">Web Kursus</div>
        </a>

        <hr class="sidebar-divider my-0" />

        <li class="nav-item active">
          <a class="nav-link" href="{{ route(Auth::user()->role) }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <hr class="sidebar-divider" />

        <div class="sidebar-heading">Kontrol</div>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fas fa-fw fa-cog"></i>
            <span>Kursus</span>
          </a>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kontrol Data Kursus:</h6>
              <a class="collapse-item" href="{{ route('sewadmin') }}">Menjahit</a>
              <a class="collapse-item" href="{{ route('cakeadmin') }}">Membuat Kue</a>
              <a class="collapse-item" href="{{ route('laporanadmin') }}">Laporan Pengajuan</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseUtilities"
            aria-expanded="true"
            aria-controls="collapseUtilities"
          >
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengguna</span>
          </a>
          <div
            id="collapseUtilities"
            class="collapse"
            aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kontrol Data Pengguna:</h6>
              <a class="collapse-item" href="">Pengguna</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseThree"
            aria-expanded="true"
            aria-controls="collapseThree"
          >
            <i class="fas fa-fw fa-cog"></i>
            <span>Jadwal</span>
          </a>
          <div
            id="collapseThree"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Kontrol Jadwal Kursus:</h6>
              <a class="collapse-item" href="{{ route('jadwalsew') }}">Menjahit</a>
              <a class="collapse-item" href="{{ route('jadwalcake') }}">Membuat Kue</a>
            </div>
          </div>
        </li>

        <hr class="sidebar-divider" />

        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Cari untuk..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >User</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="assets/images/undraw_profile_2.svg"
                  />
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>

          <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Data Pengajuan</h1>
        
            <p class="mb-4">Daftar pengajuan user yang ingin mengikuti kursus Cake</p>
            
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan Kursus Cake</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Alasan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Alasan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($dataCake as $cake)
                                <tr>
                                    <td>{{ $cake['name'] }}</td>
                                    <td>{{ $cake['email'] }}</td>
                                    <td>{{ $cake['phone'] }}</td>
                                    <td>{{ $cake['alamat'] }}</td>
                                    <td>{{ $cake['alasan'] }}</td>
                                    <td>{{ $cake['status'] }}</td>
                                    @if($cake->status == 'disetujui')
                                    <td>
                                        <span class="badge badge-success">Diterima</span>
                                    </td>
                                    @elseif($cake->status == 'ditolak')
                                    <td>
                                        <span class="badge badge-danger">Ditolak</span>
                                    </td>
                                    @endif
                                    @if($cake->status == 'ditinjau')
                                        <td>
                                            <form action="{{ route('admin.approve', $cake->id) }}" method="POST" style="display:inline;" onsubmit="return confirmAction('setujui', this);">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                            </form>
                                            <form action="{{ route('admin.reject', $cake->id) }}" method="POST" style="display:inline;" onsubmit="return confirmAction('tolak', this);">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <p>&copy; 2025. <b>KursusKita</b> Hak Cipta Dilindungi.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <form action="{{ route('logout') }}" method="POST" style="display: inline">
              @csrf
              <button type="submit" class="btn btn-primary">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="assets/js/sb-admin-2.min.js"></script>

    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <script>
        function confirmAction(action, form) {
            let message = '';
            if (action === 'setujui') {
                message = 'Anda yakin ingin menyetujui pengajuan ini?';
            } else if (action === 'tolak') {
                message = 'Anda yakin ingin menolak pengajuan ini?';
            }
            return confirm(message);
        }
    </script>
  </body>
</html>
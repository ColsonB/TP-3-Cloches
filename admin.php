<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Cloche en redstone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="Style/admin.css" media="screen" />
</head>

<body>
  <div class="adminx-container">
    <!-- Main Content -->
    <div class="adminx-content">
      <div class="adminx-main-content">
        <div class="container-fluid">
          <!-- BreadCrumb -->

          <div class="pb-3">
            <h1>Admin User</h1>
          </div>
          <div class="row">
            <div class="col">
              <div class="card mb-grid">
                <div class="table-responsive-md">
                  <table class="table table-actions table-striped table-hover mb-0" data-table>
                    <thead>
                      <tr>
                        <th scope="col">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-all">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <th scope="col">Identifiant</th>
                        <th scope="col">Mots De Passe</th>
                        <th scope="col">Status</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-row">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                          <span class="badge badge-pill badge-primary">Admin</span>
                        </td>
                        <td>
                          <button onclick="window.location.href=''" class="btn btn-sm btn-primary">Edit</button>
                          <button onclick="window.location.href=''" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-row">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                          <span class="badge badge-pill badge-primary">Author</span>
                          <span class="badge badge-pill badge-primary">Developer</span>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-primary">Edit</button>
                          <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <label class="custom-control custom-checkbox m-0 p-0">
                            <input type="checkbox" class="custom-control-input table-select-row">
                            <span class="custom-control-indicator"></span>
                          </label>
                        </th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>
                          <span class="badge badge-pill badge-danger">Inactive</span>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-primary">Edit</button>
                          <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Main Content -->
  </div>

  <!-- If you prefer jQuery these are the required scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="js/vendor.js"></script>
  <script src="js/adminx.js"></script>

  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
    STY
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
       <?php  
      include('sidebar.php');
      ?>
      <!-- End Sidebar -->

      <div class="main-panel">
      <?php
        include('mainnav.php');
        ?>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">DataTables.Net</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Tables</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Datatables</a>
                </li>
              </ul>
            </div>
            <div class="row">

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Multi Filter Select</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="multi-filter-select"
                        class="display table table-striped table-hover table-sm"
                      >
                        <thead>
                          <tr>
                          <th>User</th>
                              <th>Department</th>
                              <th>Device Name</th>
                              <th>Processor</th>
                              <th>Motherboard</th>
                              <th>Memory</th>
                              <th>Gpu</th>
                              <th>Storage</th>
                              <th>Monitor</th>
                              <th>Operating System</th>
                              <th>Actions</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                          <th>User</th>
                              <th>Department</th>
                              <th>Device Name</th>
                              <th>Processor</th>
                              <th>Motherboard</th>
                              <th>Memory</th>
                              <th>Gpu</th>
                              <th>Storage</th>
                              <th>Monitor</th>
                              <th>Operating System</th>
                              <th>Actions</th>
                          </tr>
                        </tfoot>
                        <tbody>
                        <?php
                              // Include your database configuration
                              include('dbconfig.php');
                              
                              // Query the hardware_inventory table
                              $sql = "SELECT * FROM hardware_inventory ORDER BY department";
                              $result = $conn->query($sql);
                              
                              // Check if there are any results
                              if ($result->num_rows > 0) {
                                  // Loop through the results and create table rows
                                  while ($row = $result->fetch_assoc()) {
                                      echo "<tr>";
                                      echo "<td>" . htmlspecialchars($row['user']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['department']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['device_name']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['processor']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['motherboard']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['memory']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['gpu']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['storage']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['monitor']) . "</td>";
                                      echo "<td>" . htmlspecialchars($row['operating_system']) . "</td>";
                                      echo '<td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                              <button type="button" class="btn btn-outline-success edit-btn" data-id="' . $row['id'] . '" data-bs-toggle="modal" data-bs-target="#editModal"><img width="24" height="24" src="https://img.icons8.com/material-sharp/24/edit--v1.png" alt="edit--v1"/></button>
                                              <button type="button" class="btn btn-outline-warning delete-btn" data-id="' . $row['id'] . '" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                          <img width="24" height="24" src="https://img.icons8.com/material-sharp/24/filled-trash.png" alt="filled-trash"/>
                                      </button>
                                            </div>
                                           </td>';
                                      echo "</tr>";
                                  }
                              } else {
                                  echo "<tr><td colspan='11'>No data available</td></tr>";
                              }
                              
                              // Close the connection
                              $conn->close();
                              ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="http://www.themekita.com">
                    ThemeKita
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="http://www.themekita.com">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
            </div>
          </div>
        </footer>
      </div>

      
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <form action="edit_computer.php" method="POST">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="editModalLabel">Edit Computer</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <input type="hidden" name="id" id="edit-id"> <!-- Hidden field to store the computer ID -->
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">User</span>
                        <input type="text" name="user" class="form-control" id="edit-user" placeholder="User" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Department</span>
                        <input type="text" name="department" class="form-control" id="edit-department" placeholder="Department" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Device Name</span>
                        <input type="text" name="device_name" class="form-control" id="edit-device_name" placeholder="Device Name" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Processor</span>
                        <input type="text" name="processor" class="form-control" id="edit-processor" placeholder="Processor" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Motherboard</span>
                        <input type="text" name="motherboard" class="form-control" id="edit-motherboard" placeholder="Motherboard" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Memory</span>
                        <input type="text" name="memory" class="form-control" id="edit-memory" placeholder="Memory" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">GPU</span>
                        <input type="text" name="gpu" class="form-control" id="edit-gpu" placeholder="GPU">
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Storage</span>
                        <input type="text" name="storage" class="form-control" id="edit-storage" placeholder="Storage" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Monitor</span>
                        <input type="text" name="monitor" class="form-control" id="edit-monitor" placeholder="Monitor">
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Operating System</span>
                        <input type="text" name="os" class="form-control" id="edit-os" placeholder="Operating System" >
                     </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">IP Address</span>
                        <input type="text" name="ip" class="form-control" id="edit-ip" placeholder=" IP Address" >
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Delete Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <form action="delete_computer.php" method="POST">
                  <div class="modal-header">
                     <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     Are you sure you want to delete this computer?
                     <input type="hidden" name="id" id="delete-id">
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                     <button type="submit" class="btn btn-danger">Delete</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         document.querySelectorAll('.delete-btn').forEach(button => {
           button.addEventListener('click', function () {
               const computerId = this.getAttribute('data-id');
               document.getElementById('delete-id').value = computerId;
           });
         });
         
      </script>
      <script>
         // Populate edit modal
         document.querySelectorAll('.edit-btn').forEach(button => {
           button.addEventListener('click', () => {
             const id = button.getAttribute('data-id');
             fetch(`get_computer.php?id=${id}`)
               .then(response => response.json())
               .then(data => {
                 document.getElementById('edit-id').value = data.id;
                 document.getElementById('edit-user').value = data.user;
                 document.getElementById('edit-department').value = data.department;
                 // Populate other fields as needed
               });
           });
         });
         
         // Handle delete
         // Populate edit modal with existing data
         document.querySelectorAll('.edit-btn').forEach(button => {
           button.addEventListener('click', () => {
               const id = button.getAttribute('data-id');
               fetch(`get_computer.php?id=${id}`)
                   .then(response => response.json())
                   .then(data => {
                       document.getElementById('edit-id').value = data.id;
                       document.getElementById('edit-user').value = data.user;
                       document.getElementById('edit-department').value = data.department;
                       document.getElementById('edit-device_name').value = data.device_name;
                       document.getElementById('edit-processor').value = data.processor;
                       document.getElementById('edit-motherboard').value = data.motherboard;
                       document.getElementById('edit-memory').value = data.memory;
                       document.getElementById('edit-gpu').value = data.gpu;
                       document.getElementById('edit-storage').value = data.storage;
                       document.getElementById('edit-monitor').value = data.monitor;
                       document.getElementById('edit-os').value = data.operating_system;
                       document.getElementById('edit-ip').value = data.ip;
                   });
           });
         });
         
      </script>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>
    <script>
  $(document).ready(function () {
    $("#basic-datatables").DataTable({});

    $("#multi-filter-select").DataTable({
      pageLength: 10,
      initComplete: function () {
        this.api()
          .columns([1, 9]) // Adjust indexes for Department & OS columns
          .every(function () {
            var column = this;
            var select = $('<select class="form-select"><option value="">All</option></select>')
              .appendTo($(column.footer()).empty())
              .on("change", function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column
                  .search(val ? "^" + val + "$" : "", true, false)
                  .draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + d + '">' + d + "</option>");
              });
          });
      },
    });
  });
</script>


  </body>
</html>

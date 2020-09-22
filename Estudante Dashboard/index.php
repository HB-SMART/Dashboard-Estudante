<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Estudante</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">





<?php include("menu.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabela Aluno</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabela Aluno</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


              
                </section>
                <!-- Minimal red style -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de todos cursos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover ">
                  <thead>
                  <tr>
                    <th  class="bg-dark">Disciplina</th>
                    <th class="bg-primary">P1</th>
                    <th class="bg-success">PR2</th>
                    <th class="bg-warning">P2</th>
                    <th class="bg-success">PVR2</th>
                    <th class="bg-success">PV1</th>
                    <th class="bg-success">PV2</th>
                    <th class="bg-danger">E1</th>
                    <th class="bg-danger">E2</th>
                    <th class="bg-danger">E3</th>
                    <th class="bg-danger">E4</th>

                         <th class="bg-dark">Media Final</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Tecnologia em Analise e Desenvolvimento de Sistemas</td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                    <td>4
                    </td>
                  
                  </tr>
                 
                  </tbody>
                
                </table>

                <div >
                <button class="btn btn-warning">E</button> 
                <span style="font-size:11pt;">Notas de Exercicios</span>
         
                <button class="btn btn-success">P</button> <span style="font-size:11pt;">Nota de prova</span>

                <button class="btn btn-success">PR</button> <span style="font-size:11pt;">Nota de Recuperação</span>

                <button class="btn btn-success">PV</button> <span style="font-size:11pt;">Prova Virtual</span>

                <button class="btn btn-success">PVR</button> <span style="font-size:11pt;">Prova Virtual (Recuperação)</span>
                </div>
              </div>
              <!-- /.card-body -->


            </div>
            <!-- /.card -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      <div class="container">
          <center> <h1 style="text-align:center;" class="text-center">Informativos</h1></center><HR>
          </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
      </div>

      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy;2020 <a href="https://www.hbsmart.co.ao">HBSMART</a>.</strong>
    Todos Direitos reservados.
   
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

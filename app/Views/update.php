<div class="content-wrapper">
  
            <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Fakultas dan Program Studi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Prodi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Fakultas -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fakultas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
<!-- tabel --->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode</th>
                      <th>Nama Fakultas</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tbody>
				                    <tr>
                      <td>1.</td>
					  <td>...</td>
                      <td>.....</td>
                      <td>
						<a href="#" class="link-black text-sm">
							<i class="fa fa-pencil-square-o mr-1"></i>
						</a>
						<a href="#" class="link-black text-sm">
							<i class="fa fa-times mr-1"></i>
						</a>
                      </td>
                    </tr>
				                  </tbody>
                </table>
              </div>
              <!-- akhir tabel -->
				<span class="float-right">
                    <a href=<?php echo base_url() . "/mahasiswa2"; ?> class="link-black text-sm" data-toggle="modal" data-target="#modal-tambahfakultas">
                       <i class="fa fa-plus mr-1"></i>
                    </a>
                </span>
				<br>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<!-- MODAL AWAL -->

      <div class="modal fade" id="modal-tambahfakultas">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Fakultas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<!-- isi -->
			<form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="exampleInputEmail1">Kode</label>
							<input type="text" name="kdfakul[]" class="form-control" placeholder="Kode">
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Fakultas</label>
							<input type="text" name="namfakul[]" class="form-control" placeholder="Nama Fakultas">
						</div>
					</div>
				</div>
				<div id="insert-form"></div>
				<span class="float-right">
                    <a href="#" class="link-black text-sm" id="btn-reset-form">
                       <i class="fa fa-undo mr-1"></i>
                    </a>
                    <a href="#" class="link-black text-sm" id="btn-tambah-form">
                       <i class="fa fa-plus mr-1"></i>
                    </a>
                </span>
			
  <!-- Kita buat textbox untuk menampung jumlah data form -->
  <input type="hidden" id="jumlah-form" value="1">
  
  <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append
				("<div class='row'>" +
					"<div class='col-md-4'>" +
						"<div class='form-group'>" +
							"<input type='text' name='kdfakul[]' class='form-control' placeholder='Kode'>" +
						"</div>" +
					"</div>" +
					"<div class='col-md-8'>" +
						"<div class='form-group'>" +
							"<input type='text' name='namfakul[]' class='form-control' placeholder='Nama Fakultas'>" +
						"</div>" +
					"</div>" +
				"</div>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>

<!-- akhir isi -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
		</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- MODAL AKHIR -->
	  
      <!-- /.modal -->
          <!-- /.col -->
          <div class="col-md-8">
            <!-- Fakultas -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Program Studi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
<!-- tabel --->
			  
<!-- akhir tabel -->

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
		  </div>
  <!-- /.content-wrapper -->
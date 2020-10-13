
    <div class="container-fluid">
        <div class="card mr-3 ml-3">
            <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Management</li>
                    </ol>
                </nav>
            </div>
            </div>
                <div class="row">
                    <div class="col-12 ml-2 mb-2">
                        <h3>User Management</h3>
                    </div>
                </div>
                <div class="col-md-12">
                <div class="d-flex">
                    <a class="p-2" href="#">All User</a>
                    <a class="p-2" href="#">Active User</a>
                    <a class="p-2" href="#">Inactive User</a>
                    <a class="mr-auto p-2" href="#">Archieved</a>
                    <a data-toggle="modal" role="button" href="#form_modal3" class="btn btn-info">+&nbsp;&nbsp;Add New User</a>
                </div>
            </div>
        <br>
    </div>
        <br>
    
        <div class="card mr-3 ml-3">
          <div class="datatable">
			<table id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Customer</th>
						<th>User ID</th>
						<th>Nomor Telepon</th>
						<th>Divisi</th>
						<th>Role</th>
						<th>Data Update</th>
						<th>Action</th>
					</tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Andi</td>
                        <td>D-2020-0046</td>
                        <td>081342466798</td>
                        <td>Produksi</td>
                        <td>Administrasi</td>
                        <td>March 4, 2018</td>
                        <td><a href="#" style="color: #17a2b8;">View</a> <span style="color: #17a2b8;">|</span> 
                        <a href="#" style="color: #17a2b8;">Edit</a></td></td>
                    </tr>
                </tbody>
            </table>    
            </div>
    </div>
</div>
</div>

<div id="form_modal3" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
						</div>	
						<form role="form" method="post" action="#" enctype="multipart/form-data">
							<div class="modal-body with-padding">
                                    <div class="form-group">
                                        <div class="row">	
                                            <div class="col-sm-12">                                       
                                                <label>Nama *</label>
                                                <input type="text" name="nama" class="required form-control" placeholder="Masukkan nama user" required>
                                            </div>
									</div>
								</div>
									
								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Username *</label>
										<input type="text" name="username" class="required form-control" placeholder="Masukkan username" required>
									</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Password *</label>
										<input type="password" name="password" class="required form-control" placeholder="Masukkan password" required>
									</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Nomor Telepon *</label>
										<input type="number" name="no_telp" class="required form-control" placeholder="Masukkan nomor telepon" required>
									</div>
									</div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <div class="col-sm-12">
                                    <label>Role</label>
                                    <select class="required form-control" name="status" required>
                                        <option value="">Pilih Role</option>
                                        <option value="1">Administrasi</option>
                                        <option value="2">Packaging</option>
                                    </select>
                                </div>
                                </div>
                                </div>
                           <!-- <div class="modal-footer"> -->
						   <div class="row">
                                <div class="col-sm-12" style="padding-right: 0; padding-left: 10px;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-info">Tambah</button>
								</div>

							<!-- </div> -->
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
<script>
// Script datatable
    $(document).ready(function() {
    $('#example').DataTable();
} );

// Script active
// $('.navbar-nav .nav-link').click(function(){
//     $('.d.flex .nav-link').removeClass('active');
//     $(this).addClass('active');
// })
</script>
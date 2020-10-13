
<div class="container-fluid">
    <div class="card mr-3 ml-3">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Primary Production</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ml-2 mb-2">
                <h3>Primary Production</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-flex">
                    <a class="p-2" href="#">All Production</a>
                    <a class="p-2" href="#">Active Production</a>
                    <a class="p-2" href="#">Inactive Production</a>
                    <a class="mr-auto p-2" href="#">Archieved</a>
                <a data-toggle="modal" role="button" href="#form_modal3" class="btn btn-info">+&nbsp;&nbsp;Add New Production</a>
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
                        <th>Production Code</th>
                        <th>Principle</th>
                        <th>Merk</th>
                        <th>Production Date</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>AP-JSB-9328</td>
                    <td>HDP Care</td>
                    <td>ABC Vaccine</td>
                    <td>21-04-2020 12:13:12</td>
                    <td>128 Vial</td>
                    <td><a href="#" style="color: #17a2b8;">View</a> <span style="color: #17a2b8;">|</span> 
                        <a href="#" style="color: #17a2b8;">Edit</a> <span>&nbsp;&nbsp;</span>
                        <a href="#" style="color: #17a2b8;">Print</a> <span style="color: #17a2b8;">|</span> 
                        <a href="#" style="color: #17a2b8;">Export</a>
                    </td>
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
                            <h5 class="modal-title">Add New Production</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
						</div>	
						<form role="form" method="post" action="#" enctype="multipart/form-data">
							<div class="modal-body with-padding">
                                <div class="form-group">
                                    <div class="row">	
                                        <div class="col-sm-12">                                       
                                            <label>Production Code *</label>
                                            <input type="text" name="code" class="required form-control" placeholder="Input production code" required>
                                        </div>
									</div>
								</div>
                                
                                <div class="form-group">
                                <div class="row">
                                <div class="col-sm-12">
                                    <label>Principal *</label>
                                    <select class="required form-control" name="principal" required>
                                        <option value="">Pilih..</option>
                                        <option value="1">tes</option>
                                        <option value="2">tes</option>
                                        <option value="3">tes</option>
                                    </select>
                                </div>
                                </div>
                                </div>

								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Merk *</label>
										<input type="text" name="merk" class="required form-control" placeholder="" required>
									</div>
									</div>
                                </div>
                                
								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Manufacturing Date *</label>
										<input type="date" name="date" class="required form-control" placeholder="" required>
									</div>
									</div>
                                </div>
                                
								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Expiration Date *</label>
										<input type="date" name="date" class="required form-control" placeholder="" required>
									</div>
									</div>
                                </div>
                                
								<div class="form-group">
									<div class="row">	
									<div class="col-sm-12">
										<label>Quantity *</label>
										<input type="number" name="quantity" class="required form-control" placeholder="" required>
									</div>
									</div>
        
						   <div class="row">
                                <div class="col-sm-12" style="padding-right: 0; padding-left: 10px; margin-top: 10px;">
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
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="container-fluid">
    <div class="card mr-3 ml-3">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Principle Management</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ml-2 mb-2">
                <h3>Principle Management</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-flex">
                    <a class="p-2" href="#">All Principle</a>
                    <a class="p-2" href="#">Active Principle</a>
                    <a class="p-2" href="#">Inactive Principle</a>
                    <a class="mr-auto p-2" href="#">Archieved</a>
                <a data-toggle="modal" role="button" href="#form_modal3" class="btn btn-info">+&nbsp;&nbsp;Add New Principle</a>
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
                        <th>Principle Name</th>
                        <th>PIC Principle</th>
                        <th>Principle Contact</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Mark</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Dov Principal 1</td>
                    <td>Risman Firmansyah</td>
                    <td>+1 206-300-4561</td>
                    <td>2366 Eastake Ave E UNIT 312</td>
                    <td>United States</td>
                    <td>Digital Messenger Service</td>
                    <td><a href="#" style="color: #17a2b8;">View</a> <span style="color: #17a2b8;">|</span> 
                        <a href="#" style="color: #17a2b8;">Edit</a></td>
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
            <h5 class="modal-title">Add New Principle</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>	
        <form role="form" method="post" action="#" enctype="multipart/form-data">
            <div class="modal-body with-padding">
                    <div class="form-group">
                        <div class="row">	
                            <div class="col-sm-12">                                       
                                <label>Principle Name *</label>
                                <input type="text" name="nama" class="required form-control" placeholder="Input principle name" required>
                            </div>
                    </div>
                </div>
                    
                <div class="form-group">
                    <div class="row">	
                    <div class="col-sm-12">
                        <label>Address *</label>
                        <input type="text" name="address" class="required form-control" placeholder="Input address" required>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                <div class="row">
                <div class="col-sm-12">
                    <label>Country</label>
                    <select class="required form-control" name="country" required>
                        <option value="">Choose Country</option>
                        <option value="1">Indonesia</option>
                        <option value="2">United States</option>
                        <option value="3">Brazil</option>
                    </select>
                </div>
                </div>
                </div>
                <div class="form-group">
                    <div class="row">	
                    <div class="col-sm-12">
                        <label>Phone *</label>
                        <input type="number" name="phone" class="required form-control" placeholder="Input phone number" required>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                <div class="row">
                <div class="col-sm-12">
                    <label>PIC Principle</label>
                    <select class="required form-control" name="pic" required>
                        <option value="">Choose PIC</option>
                        <option value="1">Risman Firmansyah</option>
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
                        <input type="text" name="merk" class="required form-control" placeholder="Input merk" required>
                    </div>
                    </div>
                </div>
            <!-- <div class="modal-footer"> -->
            <div class="row">
                <div class="col-sm-12" style="padding-right: 0; padding-left: 10px;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info">Tambah</button>
                </div>
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
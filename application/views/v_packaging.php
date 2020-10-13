
<div class="container-fluid">
    <div class="card mr-3 ml-3">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Packaging</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-flex">
                <h3>Packaging Kemasan Secondary</h3>
                    <div class="mr-auto p-2"></div>
                    <a data-toggle="modal" role="button" href="#form_modal3" class="btn btn-info">+&nbsp;&nbsp;Add New Package</a>
                </div>
            </div>
            <br>
        </div>
<br>

<div class="container-fluid">
<div class="card">
        <div class="row justify-content-md-center">
            <img src="image/QR.PNG" style="width: 150px;">
        </div>

        <br>

        <div class="row justify-content-md-center">
            <h4>Packaging Kemasan<br>Secondary</h4>
        </div>

        <br>

        <div class="row justify-content-md-center">
            <input type="text" class="form-control" id="password-field" placeholder="QR Code" aria-label="QR Code" aria-describedby="basic-addon1" style="width: 300px;">
            <span toggle="#password-field" class="icon-password"></span>
        </div>

        <br>

        <div class="row justify-content-md-center">
            <input class="btn btn-info" type="submit" value="Submit" style= "width: 300px; margin-top: -10px;">
        </div>

        <br>

        <hr>
        
   
    <div class="datatable"> 
        <h5 class="table-title">Scan Result</h5>
        <br>
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Delivery Order Code</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Date Issued</th>
                    <th>Action</th>
                    <th>QR Code</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>1</td>
                    <td>adw-023921931-ads</td>
                    <td>D-2020-0046</td>
                    <td>ASA DSA</td>
                    <td>12 Vial</td>
                    <td>04-05-20:03-30</td>
                    <td><a href="#" style="color: #17a2b8;">View</a> <span style="color: #17a2b8;">|</span> 
                        <a href="#" style="color: #17a2b8;">Edit</a></td>
                    <td><a href="#" style="color: #17a2b8;">Print</a> <span style="color: #17a2b8;">|</span> 
                        <a href="#" style="color: #17a2b8;">Export</a></td>
                </tr>
            </tbody>
        </table>    
    </div>
    </div>
</div>
</div>
<br>

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
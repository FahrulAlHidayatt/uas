<div class="row">
  	<div class="col-lg-12">
    	<div class="box box-success">
    		<div class="box-header">
              	<h3 class="box-title">Kontak</h3>
            </div>
      		<div class="box-body">
      			<a href="<?= base_url('index.php/admin/kontak/form/'.$row->id) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>
              	<table id="tables" class="table table-bordered table-striped">
	                <thead>
		                <tr>
		                  	<th><center>No HP</center></th>
		                  	<th><center>Alamat</center></th>
		                </tr>
	                </thead>
	                <tbody>
	                	<tr>
	                  		<td><?= $row->no_hp ?></td>
	                  		<td><?= $row->alamat ?></td>
	              		</tr>
	                </tbody>
              </table>          
      		</div>
  		</div>
	</div>
</div>
<script>
  $(function () {
    $('#tables').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
  });
</script>
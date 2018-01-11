
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('organisasi');?>">Urusan</a></li> 
        <li><a href="<?php echo site_url('organisasi/bidang');?>" >Bidang</a></li>
        <li class="active"><a href="<?php echo site_url('organisasi/unit');?>" >Unit</a></li>
        <li><a href="<?php echo site_url('organisasi/sub_unit');?>">Sub Unit</a></li>
       </ul>
         <div class="box-header">
              <h3 class="box-title">Unit Organisasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div id="alertBlock" class="alert alert-success <?php echo empty($message) ? 'hidden' : '';?>"><?php echo $message;?></div>
                <div class="align-right">
         	<button class="btn btn-success" onclick="add()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
                </div><br>
                <div class="row">
                        <div class="col-sm-12">                            
              <table id="example1" class="table table-bordered table-striped" role="grid" aria-describedby="example1">
                 <thead>
                <tr>
                  <th>No </th>
                  <th>Urusan</th>
                  <th>Bidang</th>
                  <th>unit</th>
                  <th>Nama Unit</th>
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
               <?php $no=1; foreach ($unit as $row){ ?>
			<tr>
					<td><?php echo $no; ?></td>
                    <td><?php echo $row->dien002_02; ?></td>
                    <td><?php echo $row->dien003_02; ?></td>
                    <td><?php echo $row->dien004_01; ?></td>
                    <td><?php echo $row->dien004_02; ?></td>
					<td>
					<button class="btn btn-info" title="Edit" onclick="edit_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" title="Delete" onclick="delete_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>&nbsp;&nbsp;
			        <a class="btn btn-success" title="Halaman Selanjutnya" href="<?php echo site_url('organisasi/sub_unit/'.$row->id);?>">Next</a>
			         </td>
               </tr>
              <?php $no++; } ?>
               </tbody>
              </table>
             </div>
            </div>
           </div>
          </div>
         </section>  
         
 <script type="text/javascript"> 
    var save_method; //for save method string
    var table;
    
    $(document).ready( function () {
      $('#example1').DataTable();  } );


    function add()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form').modal('show'); // show bootstrap modal
    
    }

    function edit_bid(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('organisasi/edit_unit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="urus"]').val(data.dien002_01);
            $('[name="bida"]').val(data.dien003_01);
            $('[name="unit"]').val(data.dien004_01);           
            $('[name="nama"]').val(data.dien004_02);            

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Kelola Unit'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('organisasi/tambah_unit/')?>";
      }
      else
      {
        url = "<?php echo site_url('organisasi/update_unit/')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('update data');
            }
        });
    }

    function delete_bid(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('organisasi/delete_unit/')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
            	if (data.status == false)
            	{
            		$('#alertBlock').removeClass('alert-success').removeClass('hidden').addClass('alert-danger').html(data.message);
            	}
            	else
            	{
	               location.reload();
            	}
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

  </script>
  
  <div class="example-modal" >
        <div class="modal modal-info" id="modal_form" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Kelola Unit</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
           <div class="form-group">
              <label class="control-label col-md-3">Nama Urusan </label>
              <div class="col-md-9">
                <?php
					$style_urusan='class="form-control input-sm" id="urusan_id"  onChange="tampilbidang()"';
					echo form_dropdown('urus',$urusan,'',$style_urusan);
					?>
                  <span class="help-block"></span>
              </div>
            </div>
          <div class="form-group">
              <label class="control-label col-md-3">Nama Bidang </label>
              <div class="col-md-9">
                <?php
				$style_bidang='class="form-control input-sm" id="bidang_id" onChange="tampilunit()"';
				echo form_dropdown("bida",array('Pilih bidang'=>'-- Pilih Bidang --'),'',$style_bidang);
				?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Unit </label>
              <div class="col-md-9">
                <input name="unit"  readonly="" value=<?=$kodeunik;?>  placeholder="Input Unit" class="form-control " type="text" >
             	<span class="help-block"></span>
              </div>
            </div>            
            <div class="form-group">
              <label class="control-label col-md-3">Nama Unit </label>
              <div class="col-md-9">
                <input name="nama" required="" placeholder="Input Nama bidang" class="form-control" type="text" >
               <span class="help-block"></span>
              </div>
            </div>                
       		</div>      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary">Save changes</button>
              </div>
            </div>
           </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      
<script>
function tampilbidang() {
	 kdprop = document.getElementById("urusan_id").value;
	 $.ajax({
		 url:"<?php echo base_url();?>organisasi/pilih_bidang/"+kdprop+"",
		 success: function(response){
		 $("#bidang_id").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilunit()
 {
	 kdkab = document.getElementById("bidang_id").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>organisasi/pilih_unit/"+kdkab+"",
		 success: function(response){
		 $("#unit_id").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilKelurahan()
 {
	 kdkec = document.getElementById("unit_id").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>mahasiswa/pilih_kelurahan/"+kdkec+"",
		 success: function(response){
		 $("#kelurahan_id").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }

</script>

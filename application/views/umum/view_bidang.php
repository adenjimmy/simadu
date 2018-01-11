<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('umum');?>">Data Umum</a></li> 
        <li class="active"><a href="<?php echo site_url('umum/bidang');?>" >Bidang Sub Unit</a></li>               
       </ul>
          <div class="box-header">
              <h3 class="box-title">Unit Data Organisasi</h3>
            </div>
            <!-- /.box-header -->
         <div class="box-body">
              <div class="align-right">
            <button class="btn btn-success" onclick="add_bid()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
                </div><br>
            <div class="row">
             <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped" role="grid" aria-describedby="example1">               
                <thead>
                <tr>
                  <th>No </th>
                  <th>Tahun</th>                  
                  <th>Unit</th>
                  <th>Sub Unit</th>                
                  <th>Bidang</th>
                  <th>Nm Bid</th>
                  <th>Kep Bid</th>
                  <th>NIP</th>
                  <th>Jabatan</th>
                  <th>Action</th>
               </tr>
                </thead>
               <tbody>
                    <?php $no=1; foreach($bid as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien001_01; ?></td>                    
                    <td><?php echo $row->dien004_01; ?></td>
                    <td><?php echo $row->dien005_01; ?></td>
                    <td><?php echo $row->dien018_01; ?></td>
                    <td><?php echo $row->dien018_02; ?></td>
                    <td><?php echo $row->dien018_03; ?></td>
                    <td><?php echo $row->dien018_04; ?></td>
                    <td><?php echo $row->dien018_05; ?></td>
                    <td>
					<button class="btn btn-primary" title="Edit Data" onclick="edit_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" title="Delete Data" onclick="delete_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
			         </td>
               </tr>
              <?php $no++; } ?>
               </tbody>
               </table>
              </div>
             </div>
         </div>
    </section><!-- /.content -->
    
<script type="text/javascript">  
    var save_method; //for save method string
    var table;
    
	(document).ready( function () {
    $('#example1').DataTable();  } );

    function add_bid()
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
        url : "<?php echo site_url('umum/edit_bid/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="th"]').val(data.dien001_01);
            $('[name="kd"]').val(data.dien002_01);           
            $('[name="kd1"]').val(data.dien003_01);
            $('[name="kd2"]').val(data.dien004_01);
            $('[name="kd3"]').val(data.dien005_01);
            $('[name="kd4"]').val(data.dien018_01);
            $('[name="kd5"]').val(data.dien018_02);
            $('[name="kd6"]').val(data.dien018_03);
            $('[name="kd7"]').val(data.dien018_04);
            $('[name="kd8"]').val(data.dien018_05);  
                      
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('umum/tambah_bid/')?>";
      }
      else
      {
        url = "<?php echo site_url('umum/update_bid/')?>";
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
            url : "<?php echo site_url('umum/delete_bid')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
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
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Data Organisasi</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
          <input type="hidden" value="<?php echo $this->session->userdata('tahun'); ?>" name="thn"/>
           
            <div class="form-group">
              <label class="control-label col-md-3">Nama Urusan </label>
              <div class="col-md-9">
                <?php
					$style_urusan='class="form-control input-sm" id="urusan_id"  onChange="tampilbidang()"';
					echo form_dropdown('kd',$urusan,'',$style_urusan);
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Bidang </label>
              <div class="col-md-9">
                 <?php
				$style_bidang='class="form-control input-sm" id="bidang_id" onChange="tampilunit()"';
				echo form_dropdown("kd1",array('Pilih bidang'=>'-- Pilih Bidang --'),'',$style_bidang);
				?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Unit </label>
              <div class="col-md-9">
                <?php
					$style_unit='class="form-control input-sm" id="unit_id" onChange="tampilsubunit()"';
					echo form_dropdown("kd2",array('Pilih Unit'=>'-- Pilih Unit --'),'',$style_unit);
				?>
                  <span class="help-block"></span>
              </div>
            </div>    
            <div class="form-group">
              <label class="control-label col-md-3">Nama Sub Unit </label>
              <div class="col-md-9">
                <?php
					$style_subunit='class="form-control input-sm" id="sub_id" onChange="tampilsubunit()"';
					echo form_dropdown("kd3",array('Pilih Sub Unit'=>'-- Pilih Sub Unit --'),'',$style_subunit);
				?>
                  <span class="help-block"></span>
              </div>
            </div>   
            <div class="form-group">
              <label class="control-label col-md-3">Kode Bidang</label>
              <div class="col-md-9">
                <input name="kd4" readonly="" value=<?=$kodeunik;?> class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Nama Bidang </label>
              <div class="col-md-9">
                <input name="kd5" required="" placeholder="Input Nama Bidang" class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div>                       
            <div class="form-group">
              <label class="control-label col-md-3">Nama Kepala Bidang </label>
              <div class="col-md-9">
                <input name="kd6" required="" placeholder="Input Nama Kepala Bidang" class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">NIP </label>
              <div class="col-md-9">
                <input name="kd7" required="" placeholder="Input NIP" class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Jabatan </label>
              <div class="col-md-9">
                <input name="kd8" required="" placeholder="Input Data Jabatan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>                                     
       		</div>      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
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
		 url:"<?php echo base_url();?>umum/pilih_bidang/"+kdprop+"",
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
		 url:"<?php echo  base_url();?>umum/pilih_unit/"+kdkab+"",
		 success: function(response){
		 $("#unit_id").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilsubunit()
 {
	 kdkec = document.getElementById("unit_id").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>umum/pilih_subunit/"+kdkec+"",
		 success: function(response){
		 $("#sub_id").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }

</script>
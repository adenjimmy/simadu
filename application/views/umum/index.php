<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo site_url('umum');?>">Data Umum</a></li> 
        <li><a href="<?php echo site_url('umum/bidang');?>" >Bidang Sub Unit</a></li>                
       </ul>
          <div class="box-header">
              <h3 class="box-title">Unit Data Organisasi</h3>
            </div>
            <!-- /.box-header -->
         <div class="box-body">
              <div class="align-right">
            <button class="btn btn-success" onclick="add()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
                </div><br>
            <div class="row">
             <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped" role="grid" aria-describedby="example1">               
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tahun</th>                  
                  <th>Unit</th>
                  <th>Sub Unit</th>
                  <th> Pimpinan</th>
                  <th>NIP</th>                  
                  <th>Jabatan</th>
                  <th>Alamat Unit</th>
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($data as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien001_01; ?></td>                    
                    <td><?php echo $row->dien004_02; ?></td>
                    <td><?php echo $row->dien005_02; ?></td>
                    <td><?php echo $row->dien017_01; ?></td>
                    <td><?php echo $row->dien017_02; ?></td>
                    <td><?php echo $row->dien017_03; ?></td>
                    <td><?php echo $row->dien017_04; ?></td>
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
    
    $(document).ready( function () {
      $('#example1').DataTable();  
  } );


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
        url : "<?php echo site_url('umum/edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="thn"]').val(data.dien001_01);
            $('[name="ko"]').val(data.dien002_01);           
            $('[name="kod"]').val(data.dien003_01);
            $('[name="kode"]').val(data.dien004_01);
            $('[name="kode1"]').val(data.dien005_01);
            $('[name="nm"]').val(data.dien017_01);
            $('[name="nip"]').val(data.dien017_02);
            $('[name="jab"]').val(data.dien017_03);
            $('[name="alm"]').val(data.dien017_04);            

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
          url = "<?php echo site_url('umum/tambah/')?>";
      }
      else
      {
        url = "<?php echo site_url('umum/update/')?>";
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
            url : "<?php echo site_url('umum/delete')?>/"+id,
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
	$(document).ready( function () {
		var site = '<?php echo base_url();?>';
		$('#unit_id').autocomplete({
			serviceUrl: site+'/umum/search/',
			onSelect: function (suggestion) {
				$('#urusan_id').val(suggestion.urusan);
				$('#bidang_id').val(suggestion.bidang);
				$('#sub_id').val(suggestion.subunit);
                // $('#no').val(''+suggestion.kode); // membuat id 'v_nim' untuk ditampilkan
                // $('#nm').val(''+suggestion.nama); // membuat id 'v_jurusan' untuk ditampilkan
                // $("#bidang_id").val(suggestion.urusan_id);
            }
		});
	});
	
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
              	<input type="text" class="form-control input-sm autocomplete" id="urusan_id" name="ko">
                <?php
                
					// $style_urusan='class="form-control input-sm" id="urusan_id"  onChange="tampilbidang()"';
					// echo form_dropdown('ko',$urusan,'',$style_urusan);
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Bidang </label>
              <div class="col-md-9">
              	<input type="text" class="form-control input-sm autocomplete" id="bidang_id" name="kod">
                 <?php
				// $style_bidang='class="form-control input-sm" id="bidang_id" onChange="tampilunit()"';
				// echo form_dropdown("kod",array('Pilih bidang'=>'-- Pilih Bidang --'),'',$style_bidang);
				?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Unit </label>
              <div class="col-md-9">
              	<input type="text" class="form-control input-sm autocomplete" id="unit_id" name="kode">
                <?php
					// $style_unit='class="form-control input-sm" id="unit_id" onChange="tampilsubunit()"';
					// echo form_dropdown("kode",array('Pilih Unit'=>'-- Pilih Unit --'),'',$style_unit);
				?>
                  <span class="help-block"></span>
              </div>
            </div>    
            <div class="form-group">
              <label class="control-label col-md-3">Nama Sub Unit </label>
              <div class="col-md-9">
              	<input type="text" name="kode1" value="" class="form-control input-sm autocomplete" id="sub_id">
                <?php
					// $style_subunit='class="form-control input-sm" id="sub_id" onChange="tampilsubunit()"';
					// echo form_dropdown("kode1",array('Pilih Sub Unit'=>'-- Pilih Sub Unit --'),'',$style_subunit);
				?>
                  <span class="help-block"></span>
              </div>
            </div>                    
            <div class="form-group">
              <label class="control-label col-md-3">Nama Pimpinan </label>
              <div class="col-md-9">
                <input name="nm" required="" placeholder="Input Nama Pimpinan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">NIP Pimpinan </label>
              <div class="col-md-9">
                <input name="nip" required="" placeholder="Input Nip Pimpinan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Jabatan </label>
              <div class="col-md-9">
                <input name="jab" required="" placeholder="Input Data Jabatan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Alamat Unit</label>
              <div class="col-md-9">
                <textarea class="form-control" rows="2" name="alm"></textarea>
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

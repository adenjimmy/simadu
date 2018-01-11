<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('rekening');?>" >Rekening 1</a></li> 
        <li><a href="<?php echo site_url('rekening/rek2');?>" >Rekening 2</a></li>
        <li><a href="<?php echo site_url('rekening/rek3');?>" >Rekening 3</a></li>
        <li><a href="<?php echo site_url('rekening/rek4');?>">Rekening 4</a></li>
        <li><a href="<?php echo site_url('rekening/rek5');?>">Rekening 5</a></li>
        <li><a href="<?php echo site_url('rekening/rek6');?>">Rekening 6</a></li>
        <li><a href="<?php echo site_url('rekening/rek7');?>">Rekening 7</a></li>
        <li class="active"><a href="<?php echo site_url('rekening/rek8');?>">Rekening 8</a></li>
       </ul>
          <div class="box-header">
              <h3 class="box-title">Data Table Rekening</h3>
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
                  <th>No </th>
                  <th>Kode Rekening</th>
                  <th>Nama Rekening</th>
                  <th>Uraian</th>
                  <th>Merk</th>
                  <th>Type</th>
                  <th>Ukuran</th>
                  <th>Tgl Kadaluarsa</th>
                  <th>Kondisi</th>                                    
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($rek8 as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien006_01; ?>. <?php echo $row->dien007_01; ?>. <?php echo $row->dien008_01; ?>. <?php echo $row->dien009_01; ?>. <?php echo $row->dien010_01; ?>.
                    	 <?php echo $row->dien011_01; ?>. <?php echo $row->dien012_01; ?>. <?php echo $row->dien013_01; ?></td>
                    <td><?php echo $row->dien013_02; ?></td>
                    <td><?php echo $row->dien013_03; ?></td>
                    <td><?php echo $row->dien013_04; ?></td>
                    <td><?php echo $row->dien013_05; ?></td>
                    <td><?php echo $row->dien013_06; ?></td>
                    <td><?php echo tgl_indo($row->dien013_07); ?></td>
                    <td><?php echo $row->dien013_08; ?></td>
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
        url : "<?php echo site_url('rekening/edit_rek8/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="kd"]').val(data.dien006_01);
            $('[name="kd1"]').val(data.dien007_01);
            $('[name="kd2"]').val(data.dien008_01);           
            $('[name="kd3"]').val(data.dien009_01);
            $('[name="kd4"]').val(data.dien010_01);
            $('[name="kd5"]').val(data.dien011_01);
            $('[name="kd6"]').val(data.dien012_01);
            $('[name="kd7"]').val(data.dien013_01);
            $('[name="kd8"]').val(data.dien013_02);
            $('[name="kd9"]').val(data.dien013_03);
            $('[name="merk"]').val(data.dien013_04);
            $('[name="type"]').val(data.dien013_05);
            $('[name="ukuran"]').val(data.dien013_06);
            $('[name="tgl"]').val(data.dien013_07);
            $('[name="kond"]').val(data.dien013_08);            

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Rekening'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('rekening/tambah_rek8/')?>";
      }
      else
      {
        url = "<?php echo site_url('rekening/update_rek8/')?>";
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
                alert(' update data');
            }
        });
    }

    function delete_bid(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('rekening/delete_rek8/')?>/"+id,
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
                <h4 class="modal-title">Form Kelola Rekening</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 1</label>
              <div class="col-md-9">
                <?php
					$style_rek1='class="form-control input-sm" id="rek1"  onChange="tampilrek1()"';
					echo form_dropdown('kd',$reke1,'',$style_rek1);
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 2</label>
              <div class="col-md-9">
                <?php
					$style_rek2='class="form-control input-sm" id="rek2"  onChange="tampilrek2()"';
					echo form_dropdown("kd1",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek2);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 3</label>
              <div class="col-md-9">
                <?php
					$style_rek3='class="form-control input-sm" id="rek3"  onChange="tampilrek3()"';
					echo form_dropdown("kd2",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek3);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 4</label>
              <div class="col-md-9">
                <?php
					$style_rek4='class="form-control input-sm" id="rek4"  onChange="tampilrek4()"';
					echo form_dropdown("kd3",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek4);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 5</label>
              <div class="col-md-9">
                <?php
					$style_rek5='class="form-control input-sm" id="rek5"  onChange="tampilrek5()"';
					echo form_dropdown("kd4",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek5);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 6</label>
              <div class="col-md-9">
                <?php
					$style_rek6='class="form-control input-sm" id="rek6"  onChange="tampilrek6()"';
					echo form_dropdown("kd5",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek6);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 7</label>
              <div class="col-md-9">
                <?php
					$style_rek7='class="form-control input-sm" id="rek7"  onChange="tampilrek7()"';
					echo form_dropdown("kd6",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek7);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>               
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 8</label>
              <div class="col-md-9">
                <input name="kd7" readonly="" value=<?=$kodeunik;?> class="form-control " type="number" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Level 8</label>
              <div class="col-md-9">
                <input name="kd8" required="" placeholder="Input Nama Rekening" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Deskrpsi Level 8</label>
              <div class="col-md-9">
                <input name="kd9" required="" placeholder="Input Desk Rekening" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Merk</label>
              <div class="col-md-9">
                <input name="merk" required="" placeholder="Input Merk" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>  
            <div class="form-group">
              <label class="control-label col-md-3">Type </label>
              <div class="col-md-9">
                <input name="type" required="" placeholder="Input Type" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>  
            <div class="form-group">
              <label class="control-label col-md-3">Ukuran</label>
              <div class="col-md-9">
                <input name="ukuran" required="" placeholder="Input Ukuran" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Tanggal</label>
              <div class="col-md-9">
                <input name="tgl" type="text" required="" placeholder="Input Tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control datepicker" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kondisi</label>
              <div class="col-md-9">
                <input name="kond"  required="" placeholder="Input Kondisi" class="form-control" type="text" >
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
function tampilrek1() {
	 kdprop = document.getElementById("rek1").value;
	 $.ajax({
		 url:"<?php echo base_url();?>rekening/pilih_rek1/"+kdprop+"",
		 success: function(response){
		 $("#rek2").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilrek2()
 {
	 kdkab = document.getElementById("rek2").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>rekening/pilih_rek2/"+kdkab+"",
		 success: function(response){
		 $("#rek3").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilrek3()
 {
	 kdkec = document.getElementById("rek3").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>rekening/pilih_rek3/"+kdkec+"",
		 success: function(response){
		 $("#rek4").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilrek4()
 {
	 kdkec = document.getElementById("rek4").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>rekening/pilih_rek4/"+kdkec+"",
		 success: function(response){
		 $("#rek5").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilrek5()
 {
	 kdkec = document.getElementById("rek5").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>rekening/pilih_rek5/"+kdkec+"",
		 success: function(response){
		 $("#rek6").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
 
 function tampilrek6()
 {
	 kdkec = document.getElementById("rek6").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>rekening/pilih_rek6/"+kdkec+"",
		 success: function(response){
		 $("#rek7").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }

function tampilrek7()
 {
	 kdkec = document.getElementById("rek7").value;
	 $.ajax({
		 url:"<?php echo  base_url();?>rekening/pilih_rek7/"+kdkec+"",
		 success: function(response){
		 $("#rek8").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }
</script>
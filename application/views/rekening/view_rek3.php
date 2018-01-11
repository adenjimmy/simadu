<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('rekening');?>" >Rekening 1</a></li> 
        <li><a href="<?php echo site_url('rekening/rek2');?>" >Rekening 2</a></li>
        <li class="active"><a href="<?php echo site_url('rekening/rek3');?>" >Rekening 3</a></li>
        <li><a href="<?php echo site_url('rekening/rek4');?>">Rekening 4</a></li>
        <li><a href="<?php echo site_url('rekening/rek5');?>">Rekening 5</a></li>
        <li><a href="<?php echo site_url('rekening/rek6');?>">Rekening 6</a></li>
        <li><a href="<?php echo site_url('rekening/rek7');?>">Rekening 7</a></li>
        <li><a href="<?php echo site_url('rekening/rek8');?>">Rekening 8</a></li>
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
                  <th>Kode Rekening </th>                  
                  <th>Nama Rekening Level3</th>
                  <th>Saldo Normal</th>
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($rek3 as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien006_01; ?>. <?php echo $row->dien007_01; ?>. <?php echo $row->dien008_01; ?></td>                    
                    <td><?php echo $row->dien008_02; ?></td>
                    <td><?php echo $row->dien008_03; ?></td>
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
        url : "<?php echo site_url('rekening/edit_rek3/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="kode"]').val(data.dien006_01);
            $('[name="kd"]').val(data.dien007_01);
            $('[name="kodi"]').val(data.dien008_01);           
            $('[name="nama"]').val(data.dien008_02);
            $('[name="saldo"]').val(data.dien008_03);            

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
          url = "<?php echo site_url('rekening/tambah_rek3/')?>";
      }
      else
      {
        url = "<?php echo site_url('rekening/update_rek3/')?>";
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
            url : "<?php echo site_url('rekening/delete_rek3/')?>/"+id,
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
					echo form_dropdown('kode',$reke1,'',$style_rek1);
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 2</label>
              <div class="col-md-9">              	
                <?php
					$style_rek2='class="form-control input-sm" id="rek2"  onChange="tampilrek2()"';
					echo form_dropdown("kd",array('Pilih Rek'=>'-- Pilih Rekening --'),'',$style_rek2);					
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Level 3</label>
              <div class="col-md-9">
                <input name="kodi" readonly="" value=<?=$kodeunik;?> class="form-control " type="number" >
                <span class="help-block"></span>
              </div>
            </div>              
            <div class="form-group">
              <label class="control-label col-md-3">Nama Rekening Level 3</label>
              <div class="col-md-9">
                <input name="nama" required="" placeholder="Input Nama Rekening" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Saldo Normal</label>
              <div class="col-md-9">
                <select name="saldo" class="form-control">
		          <option value="">-- Pilih --</option>
		          <?php
				  $pilihan	= array("D", "K");
		          foreach ($pilihan as $nilai) {
		            if ($dataLevel==$nilai) {
		                $cek=" selected";
		            } else { $cek = ""; }
		            echo "<option value='$nilai' $cek>$nilai</option>";
		          }  ?>			    
		        </select>
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
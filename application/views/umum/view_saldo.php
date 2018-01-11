<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        
     <div class="tab-content">
       <div class="tab-pane active" id="tab_1">
          <div class="box-header">
              <h3 class="box-title">Data Saldo Awal</h3>
            </div>
            <!-- /.box-header -->
         <div class="box-body">
              <div class="align-right">
            <button class="btn btn-success" onclick="add1()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
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
                  <th>Gudang</th>
                  <th>Progam</th>
                  <th>Kegiatan</th>                  
                  <th>Rekening</th>
                  <th>Nilai</th>
                  <th>Satuan</th>                  
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($saldo as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien001_01; ?></td>                    
                    <td><?php echo $row->dien002_01; ?>. <?php echo $row->dien003_01; ?>. <?php echo $row->dien004_02; ?></td>
                    <td><?php echo $row->dien005_02; ?></td>
                    <td><?php echo $row->dien019_02; ?></td>
                    <td><?php echo $row->dien035_01; ?></td>
                    <td><?php echo $row->dien035_02; ?></td>
                    <td><?php echo $row->dien035_03; ?></td>                    
                    <td><?php echo $row->dien035_04; ?></td>
                    <td><?php echo $row->dien014_02; ?></td>
                                        
                    <td>
					<button class="btn btn-primary" title="Edit Data" onclick="edit_1(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" title="Delete Data" onclick="delete_1(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
			         </td>
               </tr>
              <?php $no++; } ?>
               </tbody>
               </table>
              </div>
             </div>
         </div>   
      </div>
   </div>    
   
  <script type="text/javascript">
  var save_method; //for save method string
    var table;
    
 	(document).ready( function () {
      $('#example1').DataTable();  } );    


    function add1()
    {
      save_method = 'add';
      $('#form1')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form1').modal('show'); // show bootstrap modal
    
    }

    function edit_1(id)
    {
      save_method = 'update';
      $('#form1')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('saldo/edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="thn"]').val(data.dien034_01);
            $('[name="ko"]').val(data.dien034_02);           
            $('[name="kd"]').val(data.dien034_03);
            $('[name="kd1"]').val(data.dien034_04);
            $('[name="kd2"]').val(data.dien034_05);
            $('[name="kd3"]').val(data.dien034_06);
            $('[name="kd4"]').val(data.dien034_07);
            $('[name="kd5"]').val(data.dien034_08);
            $('[name="kd6"]').val(data.dien034_09);
            $('[name="kd7"]').val(data.dien034_10);
            $('[name="kd7"]').val(data.dien034_11);                        

            $('#modal_form1').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title1').text('Edit Data'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('saldo/tambah')?>";
      }
      else
      {
        url = "<?php echo site_url('saldo/update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form1').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form1').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_1(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('saldo/delete')?>/"+id,
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
        <div class="modal modal-info" id="modal_form1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title1">Form Data Petugas</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form1" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
          <input type="hidden" value="<?php echo $this->session->userdata('tahun'); ?>" name="thn"/>
          
            <div class="form-group">
              <label class="control-label col-md-3">Nama Urusan </label>
              <div class="col-md-9">
                <?php
					$style_urusan='class="form-control input-sm" id="urusan_id"  onChange="tampilbidang()"';
					echo form_dropdown('ko',$urusan,'',$style_urusan);
					?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Bidang </label>
              <div class="col-md-9">
                <?php
					$style_bidang='class="form-control input-sm" id="bidang_id" onChange="tampilunit()"';
					echo form_dropdown("kd",array('Pilih bidang'=>'-- Pilih Bidang --'),'',$style_bidang);
				?>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Unit </label>
              <div class="col-md-9">
                <?php
					$style_unit='class="form-control input-sm" id="unit_id" onChange="tampilsubunit()"';
					echo form_dropdown("kd1",array('Pilih Unit'=>'-- Pilih Unit --'),'',$style_unit);
				?>
                  <span class="help-block"></span>
              </div>
            </div>    
            <div class="form-group">
              <label class="control-label col-md-3">Nama Sub Unit </label>
              <div class="col-md-9">
                <?php
					$style_sub='class="form-control input-sm" id="sub_id" onChange="tampilsubunit()"';
					echo form_dropdown("kd2",array('Pilih Unit'=>'-- Pilih Unit --'),'',$style_sub);
				?>
                  <span class="help-block"></span>
              </div>
            </div>                    
            <div class="form-group">
              <label class="control-label col-md-3">Kode Gudang</label>
              <div class="col-md-9">
                <select class="form-control" name="kd3">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien019');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien019_01; ?>"><?php echo $row->dien019_02; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Program</label>
              <div class="col-md-9">
                <input name="kd4" placeholder="Input Kode" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Kegiatan</label>
              <div class="col-md-9">
                <input name="kd5" id="kd5" required="" placeholder="Input Kode Kegiatan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Rek 1 s/d 8</label>
              <div class="col-md-9">
                <input name="kd6" id="kd6" required="" placeholder="Input Rek" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Nilai</label>
              <div class="col-md-9">
                <input name="kd7" id="kd7" required="" placeholder="Input Nilai" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Satuan</label>
              <div class="col-md-9">
                <select class="form-control" name="kd8">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien014');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien014_01; ?>"><?php echo $row->dien014_02; ?></option>
                      <?php } ?>
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
         </div>
        </div>
       </div> 
       
<script>
function tampilbidang() {
	 kdprop = document.getElementById("urusan_id").value;
	 $.ajax({
		 url:"<?php echo base_url();?>saldo/pilih_bidang/"+kdprop+"",
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
		 url:"<?php echo  base_url();?>saldo/pilih_unit/"+kdkab+"",
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
		 url:"<?php echo  base_url();?>saldo/pilih_subunit/"+kdkec+"",
		 success: function(response){
		 $("#sub_id").html(response);
		 },
		 dataType:"html"
	 });
	 return false;
 }

</script> 
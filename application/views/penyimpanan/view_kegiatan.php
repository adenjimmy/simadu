<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">       
        <li class="active"><a href="<?php echo site_url('kegiatan');?>">Program Kegiatan</a></li> 
        <li><a href="<?php echo site_url('kegiatan/data');?>" >Data Kegiatan</a></li>                
       </ul>
     <div class="tab-content">
       <div class="tab-pane active" id="tab_1">
          <div class="box-header">
              <h3 class="box-title">Program Kegiatan</h3>
            </div>
            <!-- /.box-header -->
         <div class="box-body">
              <div class="align-right">
            <button class="btn btn-success" onclick="add_pro()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
                </div><br>
            <div class="row">
             <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped" role="grid" aria-describedby="example1">               
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Urusan</th>
                  <th>Bidang</th>
                  <th>Unit</th>
                  <th>Sub Unit</th>
                  <th>kode</th>
                  <th>Id Pro</th>
                  <th>Keterangan</th>
                  <th>Urusan</th>
                  <th>Bidang</th>                  
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($kegiatan as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien001_01; ?></td>
                    <td><?php echo $row->dien002_01; ?></td>
                    <td><?php echo $row->dien003_01; ?></td>
                    <td><?php echo $row->dien004_01; ?></td>
                    <td><?php echo $row->dien005_01; ?></td>
                    <td><?php echo $row->dien015_01; ?></td>
                    <td><?php echo $row->dien021_01; ?></td>
                    <td><?php echo $row->dien015_02; ?></td>
                    <td><?php echo $row->dien002_01_a; ?></td>
                    <td><?php echo $row->dien003_01_a; ?></td>                    
                    <td>
					<button class="btn btn-warning" onclick="edit_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" onclick="delete_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
			         </td>
               </tr>
              <?php $no++; } ?>
               </tbody>
               </table>
              </div>
             </div>
         </div>
        </div> 
      
    </section><!-- /.content -->
    
<script type="text/javascript">
 (document).ready( function () {
      $('#progra').DataTable();
  } );
    var save_method; //for save method string
    var table;


    function add_pro()
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
        url : "<?php echo site_url('kegiatan/edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="thn"]').val(data.dien001_01);
            $('[name="kd"]').val(data.dien002_01);           
            $('[name="kd1"]').val(data.dien003_01);
            $('[name="kd2"]').val(data.dien004_01);
            $('[name="kd3"]').val(data.dien005_01);
            $('[name="kd4"]').val(data.dien015_01);
            $('[name="kd5"]').val(data.dien021_01);
            $('[name="kd6"]').val(data.dien015_02);
            $('[name="kd7"]').val(data.dien002_01_a);
            $('[name="kd8"]').val(data.dien003_01_a);
                                    

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function saved()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('kegiatan/tambah/')?>";
      }
      else
      {
        url = "<?php echo site_url('kegiatan/update/')?>";
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
            url : "<?php echo site_url('kegiatan/delete')?>/"+id,
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
                <h4 class="modal-title">Program Kegiatan</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="saved()">
          <input type="hidden" value="" name="id"/>
          <div class="form-group">
              <label class="control-label col-md-3">Tahun Anggaran</label>
              <div class="col-md-9">
                <select class="form-control" name="thn">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien001');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien001_01; ?>"><?php echo $row->dien001_01; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>
              </div>
            </div>    
            <div class="form-group">
              <label class="control-label col-md-3">Nama Urusan </label>
              <div class="col-md-9">
                <select class="form-control" name="kd">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien002');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien002_01; ?>"><?php echo $row->dien002_02; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Bidang </label>
              <div class="col-md-9">
                <select class="form-control" name="kd1">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien003');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien003_01; ?>"><?php echo $row->dien003_02; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nama Unit </label>
              <div class="col-md-9">
                <select class="form-control" name="kd2">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien004');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien004_01; ?>"><?php echo $row->dien004_02; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>
              </div>
            </div>    
            <div class="form-group">
              <label class="control-label col-md-3">Nama Sub Unit </label>
              <div class="col-md-9">
                <select class="form-control" name="kd3">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien005');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien005_01; ?>"><?php echo $row->dien005_02; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>
              </div>
            </div>  
            <div class="form-group">
              <label class="control-label col-md-3">Kode Program </label>
              <div class="col-md-9">
               <input name="kd4" required="" placeholder="Input Kode Program" class="form-control" type="text" >
              </div>
            </div>                    
            <div class="form-group">
              <label class="control-label col-md-3">Id Program</label>
              <div class="col-md-9">
                <input name="kd5" required="" placeholder="Input Id Program" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Keterangan</label>
              <div class="col-md-9">
                <input name="kd6" required="" placeholder="Input Keterangan Program" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Kode Urusan</label>
              <div class="col-md-9">
                <input name="kd7" required="" placeholder="Input Kode Urusan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Bidang</label>
              <div class="col-md-9">
                <input name="kd8" required="" placeholder="Input Kode Bidang" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>                                    
       		</div>      
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-outline">Save changes</button>
              </div>
            </div>
           </form>
          </div>
         </div>
        </div>
       </div>
 
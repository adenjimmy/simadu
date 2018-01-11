<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
       <li><a href="<?php echo site_url('kegiatan');?>">Program Kegiatan</a></li> 
        <li class="active"><a href="<?php echo site_url('kegiatan/data');?>" >Data Kegiatan</a></li>                
       </ul>
     <div class="tab-content">    
      <div class="box-header">
              <h3 class="box-title">Data Kegiatan</h3>
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
                  <th>Urusan</th>
                  <th>Bidang</th>
                  <th>Unit</th>
                  <th>Sub Unit</th>
                  <th>Program</th>
                  <th>Id Pro</th>
                  <th>kode</th>
                  <th>Keterangan</th>
                  <th>Bidang</th>                  
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($data as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien001_01; ?></td>
                    <td><?php echo $row->dien002_01; ?></td>
                    <td><?php echo $row->dien003_01; ?></td>
                    <td><?php echo $row->dien004_01; ?></td>
                    <td><?php echo $row->dien005_01; ?></td>
                    <td><?php echo $row->dien015_01; ?></td>
                    <td><?php echo $row->dien021_01; ?></td>
                    <td><?php echo $row->dien016_01; ?></td>
                    <td><?php echo $row->dien016_02; ?></td>
                    <td><?php echo $row->dien018_01; ?></td>                    
                    <td>
					<button class="btn btn-warning" onclick="edit_dat(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" onclick="delete_dat(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
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
    var save_method; //for save method string
    var table;
    
    $(document).ready( function () {
    $('#example1').DataTable();  } );


    function add()
    {
      save_method = 'add';
      $('#form1')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form1').modal('show'); // show bootstrap modal
    
    }

    function edit_dat(id)
    {
      save_method = 'update';
      $('#form1')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('kegiatan/edit1/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	
            $('[name="id"]').val(data.id);
            $('[name="thn1"]').val(data.dien001_01);
            $('[name="ko"]').val(data.dien002_01);           
            $('[name="kod"]').val(data.dien003_01);
            $('[name="kode"]').val(data.dien004_01);
            $('[name="kode1"]').val(data.dien005_01);
            $('[name="kode2"]').val(data.dien015_01);
            $('[name="kode3"]').val(data.dien021_01);
            $('[name="kode4"]').val(data.dien016_01);
            $('[name="kode5"]').val(data.dien016_02);
            $('[name="kode6"]').val(data.dien018_01);                        

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
          url = "<?php echo site_url('kegiatan/tambah1/')?>";
      }
      else
      {
        url = "<?php echo site_url('kegiatan/update1/')?>";
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

    function delete_dat(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('kegiatan/delete1')?>/"+id,
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
                <h4 class="modal-title1">Form Data Kegiatan</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form1" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
          <div class="form-group">
              <label class="control-label col-md-3">Tahun Anggaran</label>
              <div class="col-md-9">
                <select class="form-control" name="thn1">
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
                <select class="form-control" name="ko">
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
                <select class="form-control" name="kod">
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
                <select class="form-control" name="kode">
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
                <select class="form-control" name="kode1">
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
              <label class="control-label col-md-3">Kode Program</label>
              <div class="col-md-9">
                <input name="kode2" required="" placeholder="Input Kode Program" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Id Program</label>
              <div class="col-md-9">
                <input name="kode3" required="" placeholder="Input Id Program" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode Kegiatan</label>
              <div class="col-md-9">
                <input name="kode4" required="" placeholder="Input Kode Kegiatan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Keterangan</label>
              <div class="col-md-9">
                <input name="kode5" required="" placeholder="Input Keterangan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Kode Bidang</label>
              <div class="col-md-9">
                <input name="kode6" required="" placeholder="Input Bidang" class="form-control" type="text" >
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
<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('pengaturan');?>" >Satuan</a></li> 
        <li class="active"><a href="<?php echo site_url('pengaturan/konversi');?>" >Konversi Satuan</a></li>
        <li><a href="<?php echo site_url('pengaturan/perhitungan');?>" >Perhitungan</a></li>
        
       </ul>
          <div class="box-header">
              <h3 class="box-title">Data Table Satuan</h3>
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
                  <th>Kode </th>
                  <th>Jumlah Satuan</th>
                  <th>Satuan</th>
                  <th>Per Satuan</th>
                  <th>Satuan</th>
                  <th>Status Default</th>
                  <th>Keterangan</th>
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($kon as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien033_01; ?></td>
                    <td><?php echo $row->dien033_02; ?></td>
                    <td><?php echo $row->dien014_02; ?></td>
                    <td><?php echo $row->dien033_03; ?></td>
                    <td><?php echo $row->dien014_01_1; ?></td>
                    <td><?php echo $row->dien033_04; ?></td>
                    <td><?php echo $row->dien033_05; ?></td>
                    <td>
					<button class="btn btn-warning" title="Edit Data" onclick="edit_bid(<?php echo $row->dien033_01;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" title="Delete Data" onclick="delete_bid(<?php echo $row->dien033_01;?>)"><i class="glyphicon glyphicon-remove"></i></button>
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
        url : "<?php echo site_url('pengaturan/edit_kon/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {  
        	$('[name="id"]').val(data.id);                    
            $('[name="sa"]').val(data.dien033_01);
            $('[name="sa1"]').val(data.dien033_02);
            $('[name="sa2"]').val(data.dien014_01);
            $('[name="sa3"]').val(data.dien033_03);
            $('[name="sa4"]').val(data.dien014_01_1);
            $('[name="sa5"]').val(data.dien033_04);
            $('[name="sa6"]').val(data.dien033_05);            

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Konversi'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('pengaturan/tambah_kon/')?>";
      }
      else
      {
        url = "<?php echo site_url('pengaturan/update_kon/')?>";
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
            url : "<?php echo site_url('pengaturan/delete_kon/')?>/"+id,
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
                <h4 class="modal-title">Form Satuan Konversi</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
            <div class="form-group">
              <label class="control-label col-md-3">Kode </label>
              <div class="col-md-9">
                <input name="sa" readonly="" value=<?=$kodeunik;?> class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div>            
            <div class="form-group">
              <label class="control-label col-md-3">Jumlah Satuan </label>
              <div class="col-md-9">
                <input name="sa1" required="" placeholder="Input Jumlah Satuan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Satuan </label>
              <div class="col-md-9">
                <select class="form-control" name="sa2">
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
            <div class="form-group">
              <label class="control-label col-md-3">Jumlah Per Satuan </label>
              <div class="col-md-9">
                <input name="sa3" required="" placeholder="Input Jumlah Per Satuan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3"> Satuan </label>
              <div class="col-md-9">
                <input name="sa4" required="" placeholder="Input Nama Satuan" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Status Default </label>
              <div class="col-md-9">
                <input name="sa5" required="" placeholder="Input Status" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Keterangan </label>
              <div class="col-md-9">
                <input name="sa6" required="" placeholder="Input Keterangan" class="form-control" type="text" >
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
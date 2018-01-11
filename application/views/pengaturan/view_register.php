<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('koreksi');?>" >Referensi Koreksi</a></li> 
        <li><a href="<?php echo site_url('koreksi/rinci');?>" >Koreksi Rinci</a></li>
        <li class="active"><a href="<?php echo site_url('koreksi/user');?>" >Registrasi Pengguna</a></li>          
       </ul>
          <div class="box-header">
              <h3 class="box-title">Data Register Pengguna</h3>
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
                  <th>Nomer MB</th>                  
                  <th>Nama Pemda</th>
                  <th>No Registrasi</th>
                  <th>No PIN</th>
                  <th>Nama Unit</th>
                  <th>Tgl Terdaftar</th>
                  <th>Tgl Aktifasi</th>
                  <th>Kode</th>                  
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($reg as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>                    
                    <td><?php echo $row->dien031_01; ?></td>
                    <td><?php echo $row->dien032_01; ?></td>
                    <td><?php echo $row->dien032_02; ?></td>
                    <td><?php echo $row->dien032_03; ?></td>
                    <td><?php echo $row->dien032_04; ?></td>
                    <td><?php echo $row->dien032_05; ?></td>
                    <td><?php echo $row->dien032_06; ?></td>
                    <td><?php echo $row->dien032_07; ?></td>                    
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
        url : "<?php echo site_url('koreksi/edit_user/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);            
            $('[name="kd1"]').val(data.dien031_01);
            $('[name="kd2"]').val(data.dien032_01);
            $('[name="kd3"]').val(data.dien032_02);
            $('[name="kd3"]').val(data.dien032_03);
            $('[name="kd3"]').val(data.dien032_04);
            $('[name="kd3"]').val(data.dien032_05);
            $('[name="kd3"]').val(data.dien032_06);
            $('[name="kd3"]').val(data.dien032_07);                       

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Koreksi user'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('koreksi/tambah_user/')?>";
      }
      else
      {
        url = "<?php echo site_url('koreksi/update_user/')?>";
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
            url : "<?php echo site_url('koreksi/delete_user/')?>/"+id,
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
                <h4 class="modal-title">Form Koreksi Registrasi Pengguna</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
                     
            <div class="form-group">
              <label class="control-label col-md-3">Nomer MB </label>
              <div class="col-md-9">
                <select class="form-control" name="kd1">
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien031');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien031_01; ?>"><?php echo $row->dien031_03; ?></option>
                      <?php } ?>
                  </select>
                <span class="help-block"></span>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-md-3">Nama Pemda </label>
              <div class="col-md-9">
                <input name="kd2"  required="" placeholder="Input Nama Pemda" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nomer Registrasi</label>
              <div class="col-md-9">
                <input name="kd3"  required="" placeholder="Input Nomer Registrasi" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Nomer PIN Aktifasi</label>
              <div class="col-md-9">
                <input name="kd4"  required="" placeholder="Input PIN Aktifasi" class="form-control" type="password" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Nama Unit</label>
              <div class="col-md-9">
                <input name="kd5"  required="" placeholder="Input Nama Unit" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-md-3">Tanggal Terdaftar</label>
              <div class="col-md-9">
                <input name="kd6" type="date" value="<?php echo date('Y-m-d'); ?>" required="" class="form-control" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Tanggal Aktifasi</label>
              <div class="col-md-9">
                <input name="kd7" type="date" value="<?php echo date('Y-m-d'); ?>" required=""  class="form-control" >
                <span class="help-block"></span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Kode</label>
              <div class="col-md-9">
                <input name="kd8"  required="" placeholder="Input Uraian Koreksi" class="form-control" type="text" >
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
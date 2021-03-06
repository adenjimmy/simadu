<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('users');?>" >Data User</a></li> 
        <li><a href="<?php echo site_url('users/group');?>" >Group User</a></li>
        <li class="active"><a href="<?php echo site_url('users/otto');?>" >Otoritas Group</a></li>
 		<li><a href="<?php echo site_url('users/oto');?>" >Otoritas User</a></li>
        <li><a href="<?php echo site_url('users/sub_unit');?>" >User Sub Unit</a></li>        
       </ul>
          <div class="box-header">
              <h3 class="box-title">Data Group User</h3>
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
                  <th>Tahun Anggaran</th>
                  <th>ID Group</th>                  
                  <th>ID Menu</th>
                  <th>Otoritas</th>                  
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($otto as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien027_01; ?></td>
                    <td><?php echo $row->dien027_02; ?></td>
                    <td><?php echo $row->dien027_03; ?></td>
                    <td><?php echo $row->dien027_04; ?></td>                    
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
        url : "<?php echo site_url('users/edit_otto/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="kod"]').val(data.dien027_01);
            $('[name="kod1"]').val(data.dien027_02);
            $('[name="kod2"]').val(data.dien027_03); 
            $('[name="kod3"]').val(data.dien027_04);                       

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Kelola Otoritas'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('users/tambah_otto/')?>";
      }
      else
      {
        url = "<?php echo site_url('users/update_otto/')?>";
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
            url : "<?php echo site_url('users/delete_otto/')?>/"+id,
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
                <h4 class="modal-title">Form Kelola Group User</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
          <div class="form-group">
              <label class="control-label col-md-3">Tahun Anggaran</label>
              <div class="col-md-9">
                <input name="kod" required="" placeholder="Input Tahun Anggaran" class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div>   
            <div class="form-group">
              <label class="control-label col-md-3">ID Group</label>
              <div class="col-md-9">
                <input name="kod1" required="" placeholder="Input Group ID" class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div>            
            <div class="form-group">
              <label class="control-label col-md-3">ID Menu </label>
              <div class="col-md-9">
                <input name="kod2"  required="" placeholder="Input ID Menu group" class="form-control" type="text" >
                <span class="help-block"></span>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-md-3">Otoritas Group </label>
              <div class="col-md-9">
                <input name="kod3"  required="" placeholder="Input Otoritas group" class="form-control" type="text" >
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
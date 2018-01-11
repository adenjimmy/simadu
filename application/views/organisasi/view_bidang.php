
<!-- Main content -->
    <section class="content">
       <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('organisasi');?>">Urusan</a></li> 
        <li class="active"><a href="<?php echo site_url('organisasi/bidang');?>" >Bidang</a></li>
        <li><a href="<?php echo site_url('organisasi/unit');?>" >Unit</a></li>
        <li><a href="<?php echo site_url('organisasi/sub_unit');?>">Sub Unit</a></li>
       </ul>
         <div class="box-header">
              <h3 class="box-title">Bidang Pemerintahan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div id="alertBlock" class="alert alert-success <?php echo empty($message) ? 'hidden' : '';?>"><?php echo $message;?></div>
                <div class="align-right">
         	<button class="btn btn-success" onclick="add()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
                </div><br>
                <div class="row">
                   <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped" role="grid" aria-describedby="example1">
                 <thead>
                <tr>
                  <th>No </th>
                  <th>Urusan</th>
                  <th>Bidang</th>
                  <th>Nama Bidang</th>
                  <th>Action</th>
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($urus as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien002_02; ?></td>
                    <td><?php echo $row->dien003_01; ?></td>
                    <td><?php echo $row->dien003_02; ?></td>
                    <td>
					<button class="btn btn-info" title="Edit Data" onclick="edit_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" title="Delete Data" onclick="delete_bid(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>&nbsp;&nbsp;
			        <a class="btn btn-success" title="Halaman Selanjutnya" href="<?php echo site_url('organisasi/unit/'.$row->id);?>">Next</a>
			         </td>
               </tr>
              <?php $no++; } ?>
               </tbody>
              </table>
             </div>
            </div>
           </div>
          </div>
         </section>   
         
 <script type="text/javascript"> 
 var save_method; //for save method string
    var table;
    
 	(document).ready( function () {
      $('#bid').DataTable();  } );    


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
        url : "<?php echo site_url('organisasi/edit_bid')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
        	$('[name="id"]').val(data.id);
            $('[name="urus"]').val(data.dien002_01);
            $('[name="bida"]').val(data.dien003_01);           
            $('[name="nama"]').val(data.dien003_02);            

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Kelola Bidang'); // Set title to Bootstrap modal title

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
          url = "<?php echo site_url('organisasi/tambah_bid')?>";
      }
      else
      {
        url = "<?php echo site_url('organisasi/update_bid')?>";
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
            url : "<?php echo site_url('organisasi/delete_bid')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
            	if (data.status == false)
            	{
            		$('#alertBlock').removeClass('alert-success').removeClass('hidden').addClass('alert-danger').html(data.message);
            	}
            	else
            	{
	               location.reload();
            	}
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
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Kelola Bidang</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onsubmit="save()">
          <input type="hidden" value="" name="id"/>
          <div class="form-group">
              <label class="control-label col-md-3">Nama Urusan </label>
              <div class="col-md-9">
                <select class="form-control" name="urus" id="urus" >
                      <option value="">-- Pilih --</option>
                      <?php $cab = $this->db->get('dien002');
                        foreach ($cab->result()as $row){
                      ?>
                      <option class="form-control" value="<?php echo $row->dien002_01 ?>"><?php echo $row->dien002_02; ?></option>
                      <?php } ?>
                  </select>
                  <span class="help-block"></span>                 
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Bidang </label>
              <div class="col-md-9">
                <input name="bida" readonly="" value=<?=$kodeunik;?> class="form-control " type="text" >
                <span class="help-block"></span>
              </div>
            </div>            
            <div class="form-group">
              <label class="control-label col-md-3">Nama bidang </label>
              <div class="col-md-9">
                <input name="nama" required="" placeholder="Input Nama bidang" class="form-control" type="text" >
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
    


<!-- Main content -->
    <section class="content">
       <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li><a href="<?php echo site_url('organisasi');?>">Urusan</a></li> 
        <li class="active"><a href="<?php echo site_url('bidang');?>" >Bidang</a></li>
        <li><a href="<?php echo site_url('organisasi/unit');?>" >Unit</a></li>
        <li><a href="<?php echo site_url('organisasi/sub_unit');?>">Sub Unit</a></li>
       </ul>
         <div class="box-header">
              <h3 class="box-title">Data Table Bidang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="align-right">
         	<button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i>Add Data</button>
                </div><br>
                <div class="row">
                   <div class="col-sm-12">
              <table id="table" class="table table-bordered table-striped" >
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

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('bidang/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });    

});



function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('bidang/edit_bid/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id"]').val(data.id);
            $('[name="urus"]').val(data.dien002_01);
            $('[name="bida"]').val(data.dien003_01);           
            $('[name="nama"]').val(data.dien003_02); 
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('bidang/tambah_bid')?>";
    } else {
        url = "<?php echo site_url('bidang/update_bid')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }

            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
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
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Kelola Bidang</h4>
              </div>
              <div class="modal-body form">           
          <div class="form-body">
          <form action="#" id="form" class="form-horizontal" onclick="save()">
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
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button id="btnSave" class="btn btn-outline">Save changes</button>
              </div>
            </div>
           </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
    
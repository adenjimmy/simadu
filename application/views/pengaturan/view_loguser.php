<!-- Main content -->
<section class="content">
     <div class="box">
         <!-- Nav tabs, ini tombol tab di atas -->
        <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo site_url('user');?>" >Data User</a></li>                
       </ul>
          <div class="box-header">
              <h3 class="box-title">Data Log Aktifitas User</h3>
            </div>
            <!-- /.box-header -->
         <div class="box-body">              
            <div class="row">
             <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped" role="grid" aria-describedby="example1">               
                <thead>
                <tr>
                  <th>No </th>
                  <th>Tgl Login</th>
                  <th>Nama Komputer</th>
                  <th>User ID</th>
                  <th>Tahun Login</th>
                  <th>App Version</th>
                  <th>DB Version</th>                  
               </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($log as $row){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row->dien024_01; ?></td>
                    <td><?php echo $row->dien024_02; ?></td>
                    <td><?php echo $row->dien024_03; ?></td>
                    <td><?php echo $row->dien024_04; ?></td>
                    <td><?php echo $row->dien024_05; ?></td>
                    <td><?php echo $row->dien024_06; ?></td>                   
               </tr>
              <?php $no++; } ?>
               </tbody>
               </table>
              </div>
             </div>
         </div>
    </section><!-- /.content -->
    

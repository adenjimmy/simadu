
 <section class="content"> 
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Pemerintah Kabupaten Tangsel</h3>
            </div>
             <?php
                        foreach($profil as $row){ 
                            
                     ?> 
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url('assets/img/'.$row->dien001_07);?>" class="img-circle img-responsive"> </div>
                             
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        
                      <tr>
                          <td><strong>Data Pemerintahan</stong></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Tahun  </td>
                        <td><?php echo $row->dien001_01; ?></td>
                      </tr>
                      <tr>
                        <td>Nama PemDa</td>
                        <td><?php echo $row->dien001_09; ?></td>
                      </tr>
                      <tr>
                        <td>Ibu Kota</td>
                        <td><?php echo $row->dien001_03; ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?php echo $row->dien001_04; ?></td>
                      </tr>  
                      <?php } ?>
                    </tbody>
                  </table>
                  
                  <a href="<?php echo site_url('pemda/edit/'.$row->dien001_01);?>" class="btn btn-primary">Edit</a>
                 </div>
              </div>
            </div>
          </div>   

 </section>
     
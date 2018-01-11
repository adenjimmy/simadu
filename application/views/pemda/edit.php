
 <section class="content"> 
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Pemerintah Kabupaten Tangsel</h3>
            </div>
            <div class="panel-body">
              <div class="row">
    
                <form class="form-horizontal" action="<?php echo site_url(); ?>/pemda/update" method="post" enctype="multipart/form-data">            
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                          <td><strong>Edit Data Pemerintahan</stong></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Tahun  </td>
                        <input type="hidden" name="id" value="<?php echo $pemda['dien001_01']?>"> 
                        <td><input type="text" name="tahun" class="form-control" value="<?php echo $pemda['dien001_01'];?>" >
                        </td>
                      </tr>
                      <tr>
                        <td>Nama Pemerintah Daerah</td>
                        <td><input type="text" name="nama" class="form-control" value="<?php echo $pemda['dien001_09'];?>" >
                        </td>
                      </tr>
                      <tr>
                        <td>Ibu Kota</td>
                        <td><input type="text" name="ibukota" class="form-control" value="<?php echo $pemda['dien001_03'];?>" >
                        </td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" class="form-control" value="<?php echo $pemda['dien001_04'];?>" >
                        </td>
                      </tr>
                     <tr>
                        <td>Gambar</td>
                        <td><input type="file" name="gambar" class="form-control" >
                        </td>
                      </tr> 
                    </tbody>
                  </table>
                  
                 <button type="submit" class="btn btn-primary" name="submit">Update</button>
                  <a href="<?php echo site_url('pemda');?>" class="btn btn-primary">Kembali</a>
                </div>
              </div>
            </div>
            </form>
                 <div class="panel-footer">
                        
                        <span class="pull-right">
                            
                        </span>
                    </div>
          </div>
 
 </section>
          
<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">                
				<li>
                  <a href="<?php echo site_url(); ?>/Dashboard">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Kamus <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="<?php echo site_url(); ?>/pemda"><i class="fa fa-circle-o"></i>Pemerintah Daerah</a></li>
			        <li><a href="<?php echo site_url(); ?>/organisasi"><i class="fa fa-circle-o"></i>Struktur Organisasi</a></li>
			        <li><a href="<?php echo site_url(); ?>/umum"><i class="fa fa-circle-o"></i>Data Umum Organisasi</a></li>
			        <li><a href="<?php echo site_url(); ?>/program"><i class="fa fa-circle-o"></i>Program Kegiatan</a></li>
			        <li><a href="<?php echo site_url(); ?>/rekening"><i class="fa fa-circle-o"></i>Rekening</a></li>
			        <li><a href="<?php echo site_url(); ?>/pengaturan"><i class="fa fa-circle-o"></i>Pengaturan</a></li>                    
                </ul>				

                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Input Data <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="<?php echo site_url(); ?>/penyimpanan"><i class="fa fa-circle-o"></i>Penyimpanan</a></li>
				  <li><a href="<?php echo site_url(); ?>/kegiatan"><i class="fa fa-circle-o"></i>Program Kegiatan </a></li>
				  <li><a href="<?php echo site_url(); ?>/saldo"><i class="fa fa-circle-o"></i>Saldo Awal</a></li>            
				  <li><a href="<?php echo site_url(); ?>/koreksi"><i class="fa fa-circle-o"></i>Data Koreksi</a></li> 
                </ul>

                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-bell-o fa-lg"></i> Laporan <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="<?php echo site_url(); ?>/penyimpanan"><i class="fa fa-circle-o"></i>Laporan Penyimpanan</a></li>
				  <li><a href="<?php echo site_url(); ?>/kegiatan"><i class="fa fa-circle-o"></i>Laporan Kegiatan </a></li>
                </ul>
				<li data-toggle="collapse" data-target="#baru" class="collapsed">
                  <a href="#"><i class="fa fa-gear fa-lg"></i> Tool <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="baru">
                  <li><a href="<?php echo site_url(); ?>/users"><i class="fa fa-circle-o"></i>Managemen User</a></li>
          		  <li><a href="<?php echo site_url(); ?>/users/log"><i class="fa fa-edit"></i> <span>Log Aktifitas User</span></a></li>
                </ul>
				<li>
                  <a href="<?php echo site_url(); ?>/Auth/logout">
                  <i class="fa fa-user fa-lg"></i> Log Out
                  </a>
                </li>
            </ul>
     </div>
</div>

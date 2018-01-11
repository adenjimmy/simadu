<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img width="70" height="60" src="<?php echo base_url(); ?>assets/img/sibangun.png" />
                    </a>
                </div>
              	<div class="logout-spn">
              		<li class="dropdown">
              			<a href="#" class="btn btn-default" data-toggle="dropdown"><?php echo $this->session->userdata('nama_lengkap'); ?> <span class="caret"></span></a>
              			<ul class="dropdown-menu">
              				<li><a href="<?php echo site_url(); ?>/Auth/logout">Log Out</a></li>
              			</ul>
              		</li>
                 
                </div>
            </div>
        </div>


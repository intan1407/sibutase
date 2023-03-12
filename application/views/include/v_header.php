<?php
    $controller = $this->router->fetch_class();
    $method = $this->router->fetch_method();
?>
<!--Counter Inbox-->
<header class="main-header">
	<!-- Logo -->
	<a href="<?php echo base_url()?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">BK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Buku tamu</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo "0";?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Anda memiliki <?php echo "0";?> pesan</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url().'inbox'?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url()?>assets/images/user_blank.png" class="img-circle" alt="User Image">
                      </div>
                      <h4>nama inbox
                        <small><i class="fa fa-clock-o"></i> <?php echo "tgl_inbox";?></small>
                      </h4>
                      <p><?php echo "pesan inbox";?></p>
                    </a>
                  </li>
                  <!-- end message -->
                
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url().'inbox'?>">Lihat Semua Pesan <?php echo $this->session->userdata('foto')?></a></li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php
                if (!empty($this->session->userdata('foto'))){ 
                  echo "<img src=".base_url()."assets/images/".$this->session->userdata('foto')." class='user-image' alt=''>";
                }
                else {
                  echo "<img src='".base_url()."assets/images/user_blank.png' class='user-image' alt=''>";
                }
              ?>
              <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php
                  if(!empty($this->session->userdata('foto'))){ 
                    echo "<img src=".base_url()."assets/images/".$this->session->userdata('foto')." onclick='modalimage(this.src)' class='img-circle' alt=''>";
                  }
                  else {
                    echo "<img src='".base_url()."assets/images/user_blank.png' class='img-circle' alt=''>";
                  }
                ?>
                <p>
                  <?php echo $this->session->userdata('nama');?>
                  <?php if($this->session->userdata('level')=='1'):?>
                    <small>Administrator</small>
                  <?php else:?>
                    <small>Petugas</small>
                  <?php endif;?>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url().'login/logout'?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url().''?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

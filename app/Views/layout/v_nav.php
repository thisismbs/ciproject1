  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
           
          <?php if (session()->get('level') == 1) { ?>
              <li><a href="<?= base_url('arsip') ?>">Home</a></li>
          <?php } ?>
          <?php if (session()->get('level') == 2) { ?>
            <li><a href="<?= base_url('home') ?>">Home</a></li>
          <?php } ?>
          <?php if (session()->get('level') == 2) { ?>
            <li><a href="<?= base_url('home/history') ?>">History</a></li>
          <?php } ?>
            
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
             
              <ul class="dropdown-menu">
                
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                         
                        </div>
                        <!-- Message title and timestamp -->
                       
                        <!-- The message -->
                       
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
         
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              
              
              
              <ul class="dropdown-menu">
     
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
             
              
              </a>
              <ul class="dropdown-menu">
                
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                         <!-- Task title and progress text -->
                        
                        <!-- The progress bar -->
                        
            
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
               
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
               <b><span class="hidden-xs"><?= session()->get('nama_user') ?></span></b> 
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <p>
                   <?= session()->get('nama_user') ?> - <?php if (session()->get('level') == 1) {
                    echo 'Finance';
                   } else {
                    echo 'Procurement';
                   } ?>
                    <small><?= date('Y-m-d') ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
               
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        <?= $title ?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> E-Arsip</a></li>
          <li class="active"><?= $title ?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
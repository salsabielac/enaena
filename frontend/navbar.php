<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
          <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
          <img class="profile-img" src="./assets/images/profile.png">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Enaena.id</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown messages-dropdown">
            <a href="#"><i class="fa fa-calendar"></i>
            <?php
                $Today=date('y:m:d');
                $new=date('l, F d, Y',strtotime($Today));
                echo $new; ?>
            </a>        
        </li>

        <li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
            <div class="title">New Orders</div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Ordering</li>
              <li class="dropdown-empty">No New Ordered</li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
       
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
            <div class="title">System Notifications</div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Notification</li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">8</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">New Order</div>
                      <div class="description">$400 total</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">14</span>
                  Inbox
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Issues Report
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <a href="#" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="../assets/images/profile.png">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username"><!-- <?php echo $_SESSION['username']; var_dump($_SESSION); ?> -->
              </h4>
            </div>
            <ul class="action">
              <li>
                <a href="#">
                  Profile
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  My Inbox
                </a>
              </li>
              <li>
                <a href="#">
                  Setting
                </a>
              </li>
              <li>
                <a href="../config/Logout.php">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
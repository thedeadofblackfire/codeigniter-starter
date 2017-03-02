<?php
    $c = $this->router->fetch_class();
    $m = $this->router->fetch_method();
?>
    <div class="page-aside email">
      <div class="">
        <div class="content">
          <button class="navbar-toggle" data-target=".mail-nav" data-toggle="collapse" type="button">
            <span class="fa fa-chevron-down"></span>
          </button>          
          <h2 class="page-title">My account</h2>
          <!--<p class="description">Service description</p>-->
        </div>        
        <div class="mail-nav collapse">
          <ul class="nav nav-pills nav-stacked ">
			<li <?php if ($c == 'account_controller' && $m == 'billing') {?>class="active"<?php } ?>><a href="/account/billing"><!--<span class="label label-primary pull-right">6</span>--><i class="fa fa-credit-card"></i> Billing</a></li>
            <!--<li <?php if ($c == 'account_controller' && $m == 'users') {?>class="active"<?php } ?>><a href="javascript:alert('Available Soon');"><i class="fa fa-users"></i> Users</a></li>-->
            <!--<li <?php if ($c == 'account_controller' && $m == 'api') {?>class="active"<?php } ?>><a href="/account/api"><i class="fa fa-code"></i> Developer API</a></li>-->
            <!--<li><a href="javascript:alert('Available Soon');"><span class="label label-default pull-right">3</span><i class="fa fa-file-o"></i> Message Templates</a></li>-->
			<li <?php if ($c == 'account_controller' && $m == 'join') {?>class="active"<?php } ?>><a href="/account/join"><i class="fa fa-plus-square-o"></i> Signup Widget</a></li>
            
          </ul>
          
          <p class="title"><?php echo $current_user['name']; ?></p>
          <ul class="nav nav-pills nav-stacked ">
		    <li <?php if ($c == 'account_controller' && $m == 'info') {?>class="active"<?php } ?>><a href="/account/info"><i class="fa fa-user"></i> Profile</a></li>
			<li <?php if ($c == 'account_controller' && $m == 'password') {?>class="active"<?php } ?>><a href="/account/password"><i class="fa fa-lock"></i> Change Password</a></li>
			<!--<li><a href="#"><i class="fa fa-cogs"></i> Personal Settings</a></li>-->
          </ul>
          <div class="compose">
            <!--<a class="btn btn-flat btn-primary">Compose Email</a>-->
          </div>
        </div>
      </div>
</div>

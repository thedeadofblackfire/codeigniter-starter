
<div class="row row_breadcrumb">
       <div class="col-sm-6 col-md-7" stylexxx="margin:0;padding:0">
           <div class="page-head">     
            <ol class="breadcrumb">
                  <li><a href="/" data-ajaxxxx="true"><i class="fa fa-home"></i><!--Accueil--></a></li>
				  <li><a href="/users">Users</a></li>		        
                  <li class="active">Edit User</li>		                                                                                           
            </ol>
          </div>
       </div>
       <div class="col-sm-6 col-md-5" stylexxx="margin:0;padding:0">
			
            <div class="pull-right hidden-xs">
								<?php if ($current_user['is_super_admin'] == 1): ?>
                                    <?php if ($user_info->is_super_admin == "3"): ?>
                                        <a href="<?php echo site_url('account/login_as_reseller_pro/' . $user_info->user_id); ?>" target=_new title="login as <?php echo $user_info->username; ?>" class="btn btn-default loginas"><i class="fa fa-lock"></i> Login as</a>                         
                                    <?php elseif ($user_info->is_super_admin == "2"): ?>
                                        <a href="<?php echo site_url('account/login_as_reseller/' . $user_info->user_id); ?>" target=_new title="login as <?php echo $user_info->username; ?>" class="btn btn-default loginas"><i class="fa fa-lock"></i> Login as</a>                         
                                    <?php else: ?>
                                        <a href="<?php echo site_url('account/login_as_client/' . $user_info->user_id); ?>" target=_new title="login as <?php echo $user_info->username; ?>" class="btn btn-default loginas"><i class="fa fa-lock"></i> Login as</a>                         
                                    <?php
                                    endif;

                                endif;
                                ?> 
                                <?php if ($current_user['is_super_admin'] == 3): ?>
                                    <?php if ($user_info->is_super_admin == "2"): ?>
                                        <a href="<?php echo site_url('account/login_as_reseller/' . $user_info->user_id); ?>" target=_new title="login as <?php echo $user_info->username; ?>" class="btn btn-default loginas"><i class="fa fa-lock"></i> Login as</a>                         

                                    <?php else: ?>
                                        <a href="<?php echo site_url('account/login_as_client/' . $user_info->user_id); ?>" target=_new title="login as <?php echo $user_info->username; ?>" class="btn btn-default loginas"><i class="fa fa-lock"></i> Login as</a>                         
                                    <?php
                                    endif;

                                endif;
                                ?> 

                                <?php if ($current_user['is_super_admin'] == 2): ?>
                                    <a href="<?php echo site_url('account/login_as_client/' . $user_info->user_id); ?>" target=_new title="login as <?php echo $user_info->username; ?>" class="btn btn-default loginas"><i class="fa fa-lock"></i> Login as</a> 
                                   
                                <?php endif; ?> 
		   	
				<a href="/users/delete/<?php echo $user_info->company_id; ?>" title="Delete" disabled onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger pull-right" data-ajax="true"><i class="fa fa-trash-o"></i> <span>Delete user</span></a>					 
            				 		
            </div>	
                              
				
       </div>
</div>
		
		
<div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="block-flat">
          <div class="header">							
            <h3>Edit #<?php echo $user_info->company_id; ?></h3>
          </div>
          <div class="content">

 
    <form id="form-edit-user" action="/users/edit/<?php echo $user_info->company_id; ?>" method="POST" class="form-horizontal" role="form" data-ajax="true" data-ajax-route="users">
        

                <div class="control-group <?php echo (form_error('company') != '') ? 'has-error' : ''; ?>" >
                    <label for="company" class="control-label">Company name:</label>
                    <div class="controls">
                        <input type="text" id="company" name="company" value="<?php echo (isset($user_info->company) AND !empty($user_info->company)) ? $user_info->company : ''; ?>" />
                        <p class="help-block"><?php echo form_error('company'); ?></p>
                    </div>
                </div>

                <div class="control-group <?php echo (form_error('firstname') != '') ? 'has-error' : ''; ?>">
                    <label for="firstname" class="control-label">Contact Person:</label>
                    <div class="controls">
                        <input type="text" id="firstname" name="firstname" value="<?php echo $user_info->firstname; ?>" />
                        <p class="help-block"><?php echo form_error('firstname'); ?></p>
                    </div>
                </div>

                <div class="control-group <?php echo (form_error('phone') != '') ? 'has-error' : ''; ?>" >
                    <label for="phone" class="control-label">Phone:</label>
                    <div class="controls">
                        <input type="text" id="phone" name="phone" value="<?php echo $user_info->phone; ?>" />
                        <p class="help-block"><?php echo form_error('phone'); ?></p>
                    </div>
                </div>

                <div class="control-group <?php echo (form_error('email') != '') ? 'has-error' : ''; ?>">
                    <label for="email" class="control-label">Email</label>
                    <div class="controls">
                        <input type="text" id="email" name="email" value="<?php echo $user_info->email; ?>" />     
                        <p class="help-block"><?php echo form_error('email'); ?></p>
                    </div>              
                </div>             



<!--
                <?php if ($current_user['is_super_admin'] != 0): ?>   

                    <?php if ($user_info->is_super_admin == 0): ?>
                        <div class="control-group just_user <?php echo (form_error('sender_id') != '') ? 'has-error' : ''; ?>">
                            <label for="sender_id" class="control-label">Virtual number:</label>
                            <div class="controls">

                                <select id="sender_id" name="sender_id">
                                    <option value="<?php echo ($user_info->Sender_id != '') ? $user_info->Sender_id : ''; ?>"><?php echo ($user_info->Sender_id != '') ? $user_info->Sender_id : 'Select'; ?></option>  
                                    <?php foreach ($virtual_numbers as $virtual_number): ?>
                                        <option <?php echo (set_value('sender_id') == $virtual_number->virtual_number) ? 'selected="selected"' : ''; ?> value="<?php echo $virtual_number->virtual_number; ?>"><?php echo $virtual_number->virtual_number; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <p class="help-block"><?php echo form_error('sender_id'); ?></p>
                            </div>
                        </div> 
                    <?php endif; ?> 
                <?php endif; ?>
-->				

<!--
                <?php if ($user_info->is_super_admin == 0): ?>    
                    <div class="control-group just_user <?php echo (form_error('domain') != '') ? 'has-error' : ''; ?>">
                        <label for="domain" class="control-label">Domain URL:</label>
                        <div class="controls">
                            <input type="text" id="domain" name="domain"  placeholder="http://" value="<?php echo (isset($user_info->domain) AND !empty($user_info->domain)) ? $user_info->domain : ''; ?>" />
                            <p class="help-block"><?php echo form_error('domain'); ?></p>
                        </div>
                    </div>
                <?php endif; ?> 

-->

                <div class="control-group  <?php echo (form_error('username') != '') ? 'has-error' : ''; ?>" >
                    <label for="username" class="control-label">Username:</label>
                    <div class="controls">
                        <input type="text" id="username" name="username" value="<?php echo $user_info->username; ?>"  />
                        <p class="help-block"><?php echo form_error('username'); ?></p>
                    </div>
                </div>


        

				<!--
                <div class="control-group <?php echo (form_error('status') != '') ? 'has-error' : ''; ?>" >
                    <label class="control-label">Account Status:</label>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" <?php if ($user_info->status == '1') echo 'checked="checked"' ?>  value="1"  name="status"/>
                            Activate 
                        </label>
                        <label class="radio">
                            <input type="radio" <?php if ($user_info->status == '0') echo 'checked="checked"' ?>  value="0" name="status"/>
                            Suspend
                        </label>     
                        <label class="radio">
                            <input type="radio" <?php if ($user_info->status == '2') echo 'checked="checked"' ?>  value="2" name="status"/>
                            De-activate(not activated by email)
                        </label>  
                    </div>
                </div>
				-->
         


                <div class="form-actions">
                    <button class="btn btn-primary" type="submit" disabled>Save changes</button>
                    <!--<a class="btn" href="/users">Cancel</a>-->
                </div>
			
				
			</form>

          </div>
        </div>				
      </div>
	</div>
	
	<div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="block-flat">
          <div class="header">							
            <h3>Change password</h3>
          </div>
			<div class="content">
		    <form id="form-edit-password" action="/users/edit/<?php echo $user_info->company_id; ?>" method="POST" class="form-horizontal" role="form" data-ajax="true" data-ajax-route="users">
				<input type="hidden" name="action" id="action" value="changepassword" />
			
			    <div class="control-group <?php echo (form_error('password') != '') ? 'has-error' : ''; ?>" >
                    <label for="password" class="control-label">Password:</label>
                    <div class="controls">
                        <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                        <p class="help-block"><?php echo form_error('password'); ?></p>
                    </div>
                </div>

                <div class="control-group <?php echo (form_error('passwordcf') != '') ? 'has-error' : ''; ?>" >
                    <label for="passwordcf" class="control-label">Confirm Password:</label>
                    <div class="controls">
                        <input type="password" id="passwordcf" name="passwordcf"  value="<?php echo set_value('passwordcf'); ?>" />
                        <p class="help-block"><?php echo form_error('passwordcf'); ?></p>
                    </div>
                </div>
				
			    <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Reset password</button>
                    <!--<a class="btn" href="/users">Cancel</a>-->
                </div>
			</form>
			</div>
		</div>				
      </div>
	</div>
	
	
	<?php if ($user_info->is_super_admin == 0) { ?>
	<div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="block-flat">
          <div class="header">							
			<div class="actions">
				<a href="/users/addproduct" class="new-user btn btn-success pull-right btnAssign" data-ajax="true" disabled><i class="fa fa-plus"></i> <span>Add product</span></a>					 
            	
            </div>
            <h3>Products</h3>
          </div>
          <div class="content">
		  <?php /*var_dump($user_products);*/ ?>
		  		  
					<table class="table-bordered no-border">
						<thead>
							<tr style="background-color:#3D566D;color:white;">
								<td>Product</td>
								<td>Licence</td>
								<td>Regist Date</td>
								<td>Status</td>
								<td>Plan</td>
							</tr>
						</thead>
						<tbody>
						<?php foreach($user_products as $p) { ?>
							<tr>
								<td><?php echo $p['product_name']; ?></td>
								<td><?php echo $p['license']; ?></td>
								<td><?php echo change_date_format('m-d-Y g:i A', $p['date_of_registration']); ?></td>
								<td><?php if ($p['trial']) echo 'Trial'; else if ($p['status'] == 1) echo 'Active'; else if ($p['status'] == 0) echo 'Disable'; ?></td>
								<td><?php echo ucfirst($p['plan']); ?></td>
							</tr>
						<?php } ?>	
						</tbody>
					</table>
					
					
		  <!--
		         <?php if ($user_info->is_super_admin == 0): ?>
                    <div class="control-group <?php echo (form_error('trial') != '') ? 'error' : ''; ?>" >
                        <label for="trial" class="control-label">Trial:</label>
                        <div class="controls">
                            <input type="checkbox" id="trial" name="trial" value="1"  <?php if ($user_info->trial == '1') echo 'checked="checked"' ?> />
                            <p class="help-block"><?php echo form_error('trial'); ?></p>
                        </div>
                    </div>

                    <div class="control-group <?php echo (form_error('used_sms') != '') ? 'error' : ''; ?>" >
                        <label for="used_sms" class="control-label">Used SMS:</label>
                        <div class="controls">
                            <input type="text" id="used_sms" name="used_sms"  value="<?php echo (isset($user_total_sms->used_sms) && $user_total_sms->used_sms != '') ? $user_total_sms->used_sms : '' ?>" />
                            <p class="help-block"><?php echo form_error('used_sms'); ?></p>
                        </div>
                    </div>

                    <div class="control-group <?php echo (form_error('allowed_sms') != '') ? 'error' : ''; ?>" >
                        <label for="allowed_sms" class="control-label">Allowed SMS:</label>
                        <div class="controls">
                            <input type="text" id="allowed_sms" name="allowed_sms" value="<?php echo (isset($user_total_sms->allowed_sms) && $user_total_sms->allowed_sms != '') ? $user_total_sms->allowed_sms : '' ?>" />
                            <p class="help-block"><?php echo form_error('allowed_sms'); ?></p>
                        </div>
                    </div>
                <?php endif; ?>

				-->
		  </div>
        </div>				
      </div>
	</div>
	<?php } ?>
	
   
	<div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="block-flat">
          <div class="header">							
            <h3>Billing info</h3>
          </div>
          <div class="content">
		  
        <?php if ($user_info->is_super_admin == 0): ?>

            <?php
            $value = false;
            $this->db->order_by('id', "DESC");
            $this->db->where('company_id', $user_info->user_id);
            $payment_info = $this->db->get('sso_company_payment')->row();

            if ($payment_info) {
                ?>
                <form class="form-horizontal well" action="<?php echo site_url('purchase/upgrade_insert/' . $user_info->user_id . "/" .$payment_info->package_id)?>" method="post">
                    <fieldset>
                        <legend>Billing Information </legend>
                        <div class="control-group" >
                            <label class="control-label">Total SMS :</label>
                            <div class="controls">

                                <label><?php echo isset($user_total_sms->allowed_sms) ? $user_total_sms->allowed_sms : ''; ?></label>

                            </div>
                        </div>

                        <div class="control-group" >
                            <label class="control-label">Remaining SMS :</label>
                            <div class="controls">

                                <label ><?php echo isset($user_total_sms->used_sms) ? $user_total_sms->allowed_sms - $user_total_sms->used_sms : ''; ?></label>

                            </div>
                        </div>

                        <?php
                       // $current_package = $this->db->where(array('user_id' => $user_info->user_id, 'parent_id' => $user_info->parent_user))->order_by('id', 'DESC')->get('sms_user_package')->row();

//		$this->db->query("SELECT * FROM sms_user_package AS a WHERE package_date = (SELECT MAX(package_date) FROM sms_user_package WHERE user_id ='".$profile->user_id."'AND parent_id ='".$profile->parent_user."')")->row();
//echo "<pre>";print_r($current_package);die();
//echo $this->db->last_query();die();
                        if ($current_package) {
                            //$current_package_duratiom = $current_package->duration;

                            $this->db->where('id', $current_package->package_id);
                            $packet_info = $this->db->get('sms_package')->row();

                            if ($packet_info) {
                                //for duration 6 month*6,1 year * 12 price
                                if ($payment_info->package_duration == 0) {
                                    $time = " month";
                                    $price_index = 1;
                                } elseif ($payment_info->package_duration == 1) {
                                    $time = " 6 month";
                                    $price_index = 6;
                                } else {
                                    $time = " year";
                                    $price_index = 12;
                                }
                                //echo "<pre>";print_r($packet_info);die();
                                echo "<li>This user is on the <strong> " . $packet_info->package_name . " </strong> since " . date('F d, Y', strtotime($current_package->package_date)) . "</li><br / >";
                                echo "<b>Last Payment Amount: $" . $packet_info->package_price * $price_index . "- Payment Date : " . date('F d, Y', strtotime($current_package->package_date)) . "</li><br / ></b>";
                                if ($payment_info->package_id == $current_package->package_id) {
                                    $value = true;
                                }
                            }
                        }
                        ?>
                    </fieldset>

                    <?php //if($value=="true"){  ?>
                    <fieldset>
                        <legend>Package Details</legend>
                    </fieldset>


                    <?php $package_row = $this->db->where('id', $payment_info->package_id)->get('sms_package')->row();
                    ?>
                    <div style="margin:10px">
                        <div class="pull-left package-div">

                            <div class="package-title"><?php echo $package_row->package_name ?></div>
                            <div class="line"></div>
                            <div class="package-price">$ <?php echo $package_row->package_price; ?></div>

                            <div class="package-description" ><?php echo "Up to " . $package_row->package_sms . " Text or Chat Message per" . $time; ?></div>
                            <div class="package-sms"><?php echo $package_row->package_sms ?> SMS</div>
                        </div>
                    </div>
                    </fieldset> 

                    <fieldset>
                        <legend>Payment By Credit Card</legend>

                        <div class="control-group">
                            <label for="name_card" class="control-label">Name on Card:</label>
                            <div class="controls">
                                <input type="text" id="name_card" readonly name="name_card" value="<?php echo $payment_info->card_name ?>" />

                            </div>
                        </div>
                        <div class="control-group">
                            <label  class="control-label">Card Type</label>
                            <div class="controls">
                                <input type="text" id="card_type" readonly name="card_type"  value="<?php echo $payment_info->card_type ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="card_number" class="control-label">Card Number</label>
                            <div class="controls">
                                <input type="text" id="card_number"  readonly name="card_number" value="<?php echo $payment_info->card_number; ?>" />

                            </div>
                        </div>
                        <div class="control-group">
                            <label for="cvv2" class="control-label">CVV2</label>
                            <div class="controls">
                                <input type="text" id="cvv2" readonly style="width:100px" maxlength="3" name="cvv2" value="<?php echo $payment_info->cw2; ?>" />

                            </div>
                        </div>
                        <div class="control-group">
                            <label for="expitation_date" class="control-label">Expiration Date</label>
                            <div class="controls">

                                <input type="text" readonly id="expiration_date" style="width:100px" maxlength="3" name="cvv2" value="<?php echo $payment_info->expiration_date; ?>" />
							</div>
						</div>
                        </fieldset>
                                <!--<div class="form-actions">
                                    <button class="btn btn-primary" id="submit" type="submit">Activate</button>
                                    <a class="btn" href="<?php echo site_url('user'); ?>">Cancel</a>
                                    </div>-->

                                </form>

                                <?php
                                //}
                                //else{
                                //echo "User hasn't requested for package upgrade ";   
                                //}
                            } else {
                                echo "User hasn't requested for package upgrade ";
                            }
                            ?>

                        <?php endif; ?>
					
	   
	   		  </div>
        </div>				
      </div>
	</div>
	
                <style>
                    .well{
                        margin-left: 25px;	
                    }
                    .package-div{
                        width:40%;
                        margin: 0 auto ;
                        text-align: center;
                        background: none repeat scroll 0 0 #FFFFFF;
                        border: 1px solid #D9D9D9;
                        box-shadow: 0 0 10px #D1D1D1;

                        padding: 10px 10px 10px;

                    }

                    .package-title{
                        font-size:1.7em !important;

                    }
                    .package-description{
                        margin:20px;

                    }
                    .package-price{
                        font-size:18px;
                        margin:20px;
                        color : #2F2F2F;
                    }
                    .package-sms{
                        margin:18px;
                        font-size:20px;
                    }
                </style>


<!--
<script>
    
    
    jQuery(function($){
        $("#phone_one").mask("(999) 999-9999");
    });

</script>
-->

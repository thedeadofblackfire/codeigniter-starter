
<div class="row row_breadcrumb">
       <div class="col-sm-6 col-md-7" stylexxx="margin:0;padding:0">
           <div class="page-head">     
            <ol class="breadcrumb">
                  <li><a href="/" data-ajaxxxx="true"><i class="fa fa-home"></i><!--Accueil--></a></li>
				  <li><a href="/users">Users</a></li>		        
                  <li class="active">Add a new user</li>		                                                                                           
            </ol>
          </div>
       </div>
       <div class="col-sm-6 col-md-5" stylexxx="margin:0;padding:0">
			<!--
            <div class="pull-right hidden-xs">
        
				<a href="/users/add" class="new-user btn btn-success pull-right btnAssign" data-ajax="true"><i class="fa fa-plus"></i> <span>Add user</span></a>					 
            				 		
            </div>	
				-->
       </div>
</div>
		
		
<div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="block-flat">
          <div class="header">							
            <h3>Add a new user</h3>
          </div>
          <div class="content">

 
    <form id="form-new-user" action="/users/add" method="POST" class="form-horizontal" role="form" data-ajax="true" data-ajax-route="users">
                        

<!--        <div class="control-group <?php echo (form_error('company') != '') ? 'error' : ''; ?>">
            <label for="company" class="control-label">Company name:</label>
            <div class="controls">
                <input type="text" id="company" name="company" class="input-xlarge" value="<?php echo set_value('company'); ?>" />
                <p class="help-block"><?php echo form_error('company'); ?></p>
            </div>
        </div>-->

        <div class="form-group <?php echo (form_error('country') != '') ? 'has-error' : ''; ?>">
		    <label for="country" class="col-sm-2 col-md-2 control-label">Country</label>
		    <div class="col-sm-10 col-md-8">
               <select id="country" name="country" data-smart-select class="form-control" required>
                        <option <?php echo (set_value('country') == 'USA') ? 'selected="selected"' : ''; ?> value="USA">USA</option>
                        <!--<option <?php echo (set_value('country') == 'MEX') ? 'selected="selected"' : ''; ?> value="MEX">Mexico</option> -->
                        <option <?php echo (set_value('country') == 'FR') ? 'selected="selected"' : ''; ?> value="FR">France</option>
                                        
               </select>
               <span class="help-block"><?php echo form_error('country'); ?></span> 
		    </div>
	  	</div>
        
        <div class="form-group <?php echo (form_error('firstname') != '') ? 'has-error' : ''; ?>">
		    <label for="firstname" class="col-sm-2 col-md-2 control-label">Contact Person</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="text" class="form-control" id="firstname" name="firstname" minlength="2" required placeholder="Contact Person" value="<?php echo set_value('firstname'); ?>" />
              <span class="help-block"><?php echo form_error('firstname'); ?></span>
		    </div>
	  	</div>  

        <div class="form-group <?php echo (form_error('phone_one') != '') ? 'has-error' : ''; ?>">
		    <label for="phone_one" class="col-sm-2 col-md-2 control-label">Phone</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="text" class="form-control" id="phone_one" name="phone_one" minlength="2" placeholder="(xxx)xxx-xxxx" value="<?php echo set_value('phone_one'); ?>" />
              <span class="help-block"><?php echo form_error('phone_one'); ?></span>
		    </div>
	  	</div>                    
     
        <div class="form-group <?php echo (form_error('email') != '') ? 'has-error' : ''; ?>">
		    <label for="email" class="col-sm-2 col-md-2 control-label">Email</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="text" class="form-control" id="email" name="email" required placeholder="Email" value="<?php echo set_value('email'); ?>" />
              <span class="help-block"><?php echo form_error('email'); ?></span>
		    </div>
	  	</div>  
        
        <div class="form-group <?php echo (form_error('username') != '') ? 'has-error' : ''; ?>">
		    <label for="username" class="col-sm-2 col-md-2 control-label">Username</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="text" class="form-control" id="username" name="username" required placeholder="Username" value="<?php echo set_value('username'); ?>" />
              <span class="help-block"><?php echo form_error('username'); ?></span>
		    </div>
	  	</div>  

        <div class="form-group <?php echo (form_error('password') != '') ? 'has-error' : ''; ?>">
		    <label for="password" class="col-sm-2 col-md-2 control-label">Password</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="password" class="form-control" id="password" name="password" required placeholder="Password" value="<?php echo set_value('password'); ?>" />
              <span class="help-block"><?php echo form_error('password'); ?></span>
		    </div>
	  	</div>  

        <div class="form-group <?php echo (form_error('passwordcf') != '') ? 'has-error' : ''; ?>">
		    <label for="passwordcf" class="col-sm-2 col-md-2 control-label">Confirm Password</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="password" class="form-control" id="passwordcf" name="passwordcf" required placeholder="Confirm Password" value="<?php echo set_value('passwordcf'); ?>" />
              <span class="help-block"><?php echo form_error('passwordcf'); ?></span>
		    </div>
	  	</div>  
        	
                        
        <?php
        if ($current_user['is_super_admin'] == 1):
            $bit_super = TRUE;
            $bit_reseller_pro = FALSE;
            $bit_admin = FALSE;
        elseif ($current_user['is_super_admin'] == 3):
            $bit_reseller_pro = TRUE;
            $bit_super = FALSE;
            $bit_admin = FALSE;

        endif;
        ?>
        <?php if ($current_user['is_super_admin'] == 1 OR $current_user['is_super_admin'] == 3): ?>  
            <div class="form-group <?php echo (form_error('is_super_admin') != '') ? 'has-error' : ''; ?>" >
                <label class="col-sm-2 col-md-2 control-label">User Role</label>
                <div class="col-sm-10 col-md-8">
                    <?php if ($current_user['is_super_admin'] == '1'): ?>
                        <label class="label-radio" style="margin-right:10px">
                            <input type="radio" class="account_role" <?php echo set_radio('is_super_admin', '3', $bit_super); ?> value="3"  name="is_super_admin" <?php echo (@$reseller_pro_valid_false == "reseller_pro" ) ? "checked='checked'" : ""; ?>/>
                            <span class="custom-radio"></span>
                            Reseller Pro  
                        </label>
                    <?php endif ?>
                    <label class="label-radio" style="margin-right:10px">
                        <input type="radio" class="account_role" <?php echo set_radio('is_super_admin', '2', $bit_reseller_pro); ?> value="2"  name="is_super_admin" <?php echo (@$reseller_valid_false == "reseller" ) ? "checked='checked'" : ""; ?>/>
                        <span class="custom-radio"></span>
                        Reseller   
                    </label>
                    <label class="label-radio">
                        <input type="radio" class="account_role" <?php echo set_radio('is_super_admin', '0'); ?> value="0" name="is_super_admin" <?php echo (@$client_valid_false == "client" ) ? "checked='checked'" : ""; ?>/>
                        <span class="custom-radio"></span>
                        Client
                    </label>                 
                </div>
            </div>
        <?php endif; ?>
        <?php if ($current_user['is_super_admin'] == 1): ?>
            <div class="form-group reseller_pro_select  <?php echo (form_error('reseller_pro') != '') ? 'has-error' : ''; ?>"  <?php
        if (empty($reseller_valid_false) AND empty($client_valid_false)):
            echo "style='display:none;'";
        endif;
            ?>>
                <label for="reseller_pro" class="col-sm-2 col-md-2 control-label">Reseller Pro</label>
                <div class="col-sm-10 col-md-8">
                    <select id="reseller_pro" name="reseller_pro" data-smart-select class="form-control">
                        <option value="">select reseller pro</option>
                        <?php foreach ($reseller_pros as $ind_reseller_pro => $val_reseller_pro): ?>
                            <option <?php echo (set_value('reseller_pro') == $val_reseller_pro->company_id) ? 'selected="selected"' : ''; ?> value="<?php echo $val_reseller_pro->company_id; ?>"><?php echo $val_reseller_pro->name . " (" . $val_reseller_pro->username . ")"; ?></option>
                        <?php endforeach; ?>
                    </select>  
                    <span class="help-block"><?php echo form_error('reseller_pro'); ?></span> 
                </div>
            </div> 
        
        <?php endif; ?>

        <?php if ($current_user['is_super_admin'] == "1" || $current_user['is_super_admin'] == 3) : ?>

            <div class="form-group reseller_select  <?php echo (form_error('reseller_default_package') != '') ? 'has-error' : ''; ?>"  <?php
        if (empty($client_valid_false)):
            echo "style='display:none;'";
        endif;
            ?>>
                <label for="reseller_default_package" class="col-sm-2 col-md-2 control-label">Reseller</label>
                <div class="col-sm-10 col-md-8">
                    <select id="reseller_default_package" name="reseller_default_package" data-smart-select class="form-control">
                        <option value="">select reseller</option>
                        <?php if(isset($resellers) AND !empty($resellers)):?>
                        <?php foreach ($resellers as $ind_reseller => $val_reseller): ?>
                            <option <?php echo (set_value('reseller_default_package') == $val_reseller->company_id) ? 'selected="selected"' : ''; ?> value="<?php echo $val_reseller->company_id; ?>"><?php echo $val_reseller->name . " (" . $val_reseller->username . ")"; ?></option>
                        <?php endforeach; ?>
                            <?php endif; ?>
                    </select>   
                    <span class="help-block"><?php echo form_error('reseller_default_package'); ?></span> 
                </div>

            </div>

        <?php endif; ?>

        <?php if ($current_user['is_super_admin'] == "2"): ?>
            <input type="hidden" name="default_package" value="1">
        <?php endif; ?>

		<div class="form-group product_select <?php echo (form_error('product_id') != '') ? 'has-error' : ''; ?>" <?php if (empty($client_valid_false)) echo "style='display:none;'";?>>
		    <label for="product_id" class="col-sm-2 col-md-2 control-label">Initial Product</label>
		    <div class="col-sm-10 col-md-8">
               <select id="product_id" name="product_id" data-smart-select class="form-control" required>
                        <option <?php echo (set_value('product_id') == '1') ? 'selected="selected"' : ''; ?> value="1">Live Chat</option>
                        <option <?php echo (set_value('product_id') == '2') ? 'selected="selected"' : ''; ?> value="2">Text Marketing</option>
                                        
               </select>
               <span class="help-block"><?php echo form_error('product_id'); ?></span> 
		    </div>
	  	</div>

        <div class="form-group <?php echo (form_error('status') != '') ? 'has-error' : ''; ?>" >
            <label class="col-sm-2 col-md-2 control-label">Account Status:</label>
            <div class="col-sm-10 col-md-8">
                <label class="label-radio">
                    <input type="radio" <?php echo set_radio('status', '1', TRUE); ?> value="1"  name="status"/>
                    <span class="custom-radio"></span>
                    Activate 
                </label>
                <br>  
                <label class="label-radio">
                    <input type="radio" <?php echo set_radio('status', '2'); ?> value="2" name="status"/>
                    <span class="custom-radio"></span>
                    De-activate(not activated by email)
                </label>
<br>                
                <label class="label-radio">
                    <input type="radio" <?php echo set_radio('status', '0'); ?> value="0" name="status"/>
                    <span class="custom-radio"></span>
                    Suspend
                </label>              
            </div>
        </div>
		
		
        <!--
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-primary" type="submit" style="margin-right:10px">Save</button>
            <a class="btn" href="<?php echo site_url('users'); ?>">Cancel</a>
            </div>
        </div>
        -->        
        <div class="form-group form-actions">
	    	<div class="col-sm-offset-2 col-sm-10">
	    		<a href="/users" class="btn btn-default" style="margin-right:10px">Cancel</a>
	      		<button type="submit" class="btn btn-success">Add user</button>
    		</div>
	  	</div>

      </form>

          </div>
        </div>				
      </div>
	</div>

	
<script>

<?php if (set_value('reseller_default_package')) { ?>
var reseller_id="<?php echo set_value('reseller_default_package'); ?>";
<?php } ?>
     
</script>
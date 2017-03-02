	
    <div class="row">      
      <div class="col-md-12">
        <div class="block-flat">
				<div class="header">							
					<h4 class="uppercase">Billing Info</h4>
				</div>
				<div class="content">

				 <div class="info text-center">
				 Invoices will be issued from the following billing address:
				 </div>
		<br/><br/>
		
		<form method="post" action="/withdrawals/edit" class="form-horizontal" role="form">
		
			<div class="form-group">
                <label for="billing_company" class="col-sm-3 control-label">Full name/Company name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="billing_company" name="company" value="petimelo">
				  <span class="error"><?php echo form_error('company'); ?></span> 
                </div>
            </div>
			
			<div class="form-group">
                <label for="billing_type" class="col-sm-3 control-label">Account type</label>
                <div class="col-sm-6">
                 <select id="billing_type" name="type">
					<option value="individual">Individual</option>	
					<option value="business" selected="selected">Business</option>			
				 </select>
				  <span class="error"><?php echo form_error('billing_type'); ?></span> 
                </div>
            </div>
			
			<div class="form-group">
                <label for="billing_vat_id" class="col-sm-3 control-label">VAT ID</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="billing_vat_id" name="vat_id" value="">
				  <span class="error"><?php echo form_error('billing_vat_id'); ?></span> 
                </div>
            </div>
			
			<div class="form-group">
                <label for="billing_address" class="col-sm-3 control-label">Address</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="billing_address" name="address" value="">
				  <span class="error"><?php echo form_error('billing_address'); ?></span> 
                </div>
            </div>
			
			<div class="form-group">
                <label for="billing_city" class="col-sm-3 control-label">City</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="billing_city" name="city" value="">
				  <span class="error"><?php echo form_error('billing_city'); ?></span> 
                </div>
            </div>
			
			<div class="form-group">
                <label for="billing_zipcode" class="col-sm-3 control-label">ZIP code/Postal code</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="billing_zipcode" name="zip_code" value="">
				  <span class="error"><?php echo form_error('billing_zipcode'); ?></span> 
                </div>
            </div>
	
			<div class="form-group">
                <label for="billing_country" class="col-sm-3 control-label">Country</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="billing_country" name="country" value="">
				  <span class="error"><?php echo form_error('billing_country'); ?></span> 
                </div>
            </div>

			<div class="form-group">
                <label for="billing_paypal" class="col-sm-3 control-label">PayPal account</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="billing_paypal" name="paypal" value="">
				  <span class="error"><?php echo form_error('billing_paypal'); ?></span> 
                </div>
            </div>
		
			<br/>
			
			<div class="form-group">
              <div class="text-center xxxcol-sm-offset-3 xxxcol-sm-9">
                <button type="submit" class="btn btn-primary uppercase">Save changes</button>
                <a href="/withdrawals" class="btn btn-default">Cancel</a>
              </div>
              </div>
			  
		</form>
		
				</div>
		</div>          
      </div>
    </div>
	
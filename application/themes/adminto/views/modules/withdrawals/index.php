							
    <div class="row">
      <div class="col-md-6">
        <div class="card-box">
			<div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
            </div>
          						
            <h4 class="header-title m-t-0 m-b-30 uppercase">Account Balance</h4>
         
          <div class="content full-widthxxx affiliates">
	
			<div class="summary">
				<!--<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="Balance - Your current balance."></i>-->
				<span class="value"><i class="price">$</i><?php echo $reseller_info['affiliates_licences']['balance']['balance']; ?></span>
				<!--<span class="desc uppercase">account balance</span>-->
				<br/><br/>
					<a <?php if ($reseller_info['affiliates_licences']['balance']['canWithdraw']) { ?>href="/withdrawals/confirm"<?php } ?> class="uppercase btn btn-success btn-lg btn-blockxxx grass cash-withdrawal" style="width:250px;" <?php if ($reseller_info['affiliates_licences']['balance']['canWithdraw'] === false) { ?>disabled="disabled"<?php } ?>>Withdraw</a>
					<span class="minimum">(Minimum $<?php echo $reseller_info['affiliates_licences']['balance']['minWithdraw']; ?>)</span>
						
			</div>
	
			<?php if ($reseller_info['affiliates_licences']['balance']['pendingPayoff']) { ?>
			<p class="blocked-info">Your withdrawal (<strong>$<?php echo $reseller_info['affiliates_licences']['balance']['blocked']; ?></strong>) is being processed. As soon as it is processed, you will be able to make another one.
			<?php } ?>
			
			<!--
			<?php if ($reseller_info['affiliates_licences']['commissions_sum'] == 0) { ?>			
			<div class="no-commission">You haven't earned any commission recently. Read our <a href="/guide">Partner Guide</a> to get ideas on how to start.</div>	
			<?php } ?>
			-->
			
          </div>
        </div>
   
      </div>
      <div class="col-md-6">
          <div class="card-box">
											
				<h4 class="header-title m-t-0 m-b-30 uppercase">Billing Info <span class="incomplete uppercase">(incomplete)</span></h4>
				
				<div class="content full-widthxxx" style="min-height:350px;">

					<div class="details">
						<p><strong><?php echo $current_user['company']; ?></strong></p>
						<p></p>
						<p class="info uppercase" style="margin-top:30px;">
							vat id
						</p>
						<p>–</p>
						<p class="info uppercase">
							paypal
						</p>
						<p><?php if (!empty($reseller_info['details']['paypal'])) echo $reseller_info['details']['paypal']; else echo '–'; ?></p>
						<div class="text-center">
						<a href="/withdrawals/edit" class="btn btn-default btn-bordred waves-effect w-md m-b-5 uppercase edit">Update your details</a>
						</div>
					</div>
		
				</div>
			</div>
          
      </div>
    </div>
	
	<div class="row">
      <div class="col-md-12">
	  
	        <div class="card-box">
				<div class="actions pull-right">
                   	<span class="total uppercase">Total approved: <span style="color:green;">$<?php echo $withdrawal_approved['total_amount']; ?></span></span>				   
				</div>
          									
				<h4 class="header-title m-t-0 m-b-30 header_underline uppercase">Withdrawal history</h4>
				
				<div class="table-responsive">
			
					<table class="table table-bordered table-reverse table-hover m-0">
						<thead>
							<tr>
								<th>Date</th>
								<th>Invoice Number</th>
								<th>Status</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($withdrawal_history as $item) { ?>
							<tr>
								<td><?php echo date($custom_settings['date_format_ts'], $item['invoice_date']); ?></td>
								<td><?php echo $item['invoice_id']; ?></td>
								<td><?php echo ucfirst($item['withdrawal_status']); ?></td>
								<td>$<?php echo number_format($item['withdrawal_amount'] / 100,2); ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
	  </div>	 
	</div>
	
	<script>
	var blastisReseller = <?php echo json_encode($reseller_info, JSON_FORCE_OBJECT); ?>;
	</script>
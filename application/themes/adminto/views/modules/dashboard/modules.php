<div id="section-dashboard" style="display: block;">

	 
</div>
	
    <div class="row">
      <div class="col-md-6">
        <div class="block-flat">
          <div class="header">							
            <h4 class="uppercase">Affiliates</h4>
          </div>
          <div class="content full-widthxxx affiliates">
			<div class="box three">
				<div>
					<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="The number of unique users that clicked on your referral link and visited our website."></i>
					<span id="affiliates_total_clicks" class="value"><?php echo $reseller_info['affiliates_licences']['count']['clicks']; ?></span>
					<span class="desc uppercase">clicks</span>
				</div>
				<div>
					<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="The number of users you referred that are currently trialing the product."></i>
					<span id="affiliates_total_trialsTotal" class="value"><?php echo ($reseller_info['affiliates_licences']['count']['trial'] + $reseller_info['affiliates_licences']['count']['trial_cc_added']); ?></span>
					<span class="desc uppercase">trials</span>
				</div>	
				<div>
					<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="The number of paying clients you referred."></i>
					<span id="affiliates_total_paid" class="value"><?php echo $reseller_info['affiliates_licences']['count']['paid']; ?></span>
					<span class="desc uppercase">subscriptions</span>
				</div>	
			</div>
			<div class="summary">
				<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="Balance - Your current balance."></i>
				<span class="value"><i class="price">$</i><?php echo $reseller_info['affiliates_licences']['balance']['balance']; ?></span>
				<span class="desc uppercase">account balance</span>
				
					<a <?php if ($reseller_info['affiliates_licences']['balance']['canWithdraw']) { ?>href="/withdrawals/confirm"<?php } ?> class="uppercase btn btn-success btn-lg btn-blockxxx grass cash-withdrawal" style="width:250px;" <?php if ($reseller_info['affiliates_licences']['balance']['canWithdraw'] === false) { ?>disabled="disabled"<?php } ?>>Withdraw</a>
					<span class="minimum">(Minimum $<?php echo $reseller_info['affiliates_licences']['balance']['minWithdraw']; ?>)</span>
						
			</div>
			
			<?php if ($reseller_info['affiliates_licences']['balance']['pendingPayoff']) { ?>
			<p class="blocked-info">Your withdrawal (<strong>$<?php echo $reseller_info['affiliates_licences']['balance']['blocked']; ?></strong>) is being processed. As soon as it is processed, you will be able to make another one.
			<?php } ?>
			
			<?php if ($reseller_info['affiliates_licences']['commissions_sum'] == 0) { ?>
			<div class="no-commission">You haven't earned any commission recently. Read our <a href="/guide">Partner Guide</a> to get ideas on how to start.</div>	
			<?php } ?>
			
			<div id="cash" class="chart"></div>
			
			<p class="commission-desc">COMMISSION (LAST 12 MONTHS)</p>
		
			<!--
            <div id="chart3-legend" class="legend-container"></div>
            <div id="chart3" style="height: 180px;"></div>
            <div class="counter-detail">
              <div class="counter"><div class="spk1"></div><p>New Contacts</p><h5>146</h5></div>
              <div class="counter"><div class="spk2"></div><p>Old Contacts</p><h5>109</h5></div>
            </div>
			-->
          </div>
        </div>
   
      </div>
	  <?/*
      <div class="col-md-6">
          <div class="block-flat">
				<div class="header">							
					<h4 class="uppercase">Resellers</h4>
				</div>
				<div class="content full-widthxxx">

            <div class="box two ">
				<div>
					<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="The number of active trial licenses tied to your partner account."></i>
					<span class="value">1</span>
					<span class="desc uppercase">trials</span>
				</div>	
				<div>
					<i class="help fa fa-question-circle" data-placement="top" data-toggle="tooltip" data-original-title="The number of active paid licenses tied to your account."></i>
					<span class="value">0</span>
					<span class="desc uppercase">subscriptions</span>
				</div>	
			</div>
		
		<br/><br/>
				  <div class="text-center">
					<a href="/" class="btn btn-prusia btn-flat btn-rad uppercase manage-licences">Manage licences</a>
				  </div>
        <br/><br/>
		<!--<span class="no-commission">You haven't created any licenses yet. <a href="/add-licenses">Add</a> a licence now!</span> -->
		<!-- google chart -->
		<div id="licenses-chart" class="chart"></div>
					<!--<div id="licenses-chart" class="chart"><div style="position: relative;"><div dir="ltr" style="position: relative; width: 769px; height: 250px;"><div aria-label="Un graphique." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="769" height="250" aria-label="Un graphique." style="overflow: hidden;"><defs id="defs"><clipPath id="_ABSTRACT_RENDERER_ID_1"><rect x="101" y="48" width="568" height="155"></rect></clipPath></defs><rect x="0" y="0" width="769" height="250" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><rect x="101" y="48" width="568" height="155" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(#_ABSTRACT_RENDERER_ID_1)"><g><rect x="101" y="202" width="568" height="1" stroke="none" stroke-width="0" fill="#d9d9d9"></rect><rect x="101" y="151" width="568" height="1" stroke="none" stroke-width="0" fill="#d9d9d9"></rect><rect x="101" y="99" width="568" height="1" stroke="none" stroke-width="0" fill="#d9d9d9"></rect><rect x="101" y="48" width="568" height="1" stroke="none" stroke-width="0" fill="#d9d9d9"></rect></g><g><rect x="110" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="153" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="197" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="241" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="284" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="328" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="372" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="415" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="459" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="502" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="546" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="590" y="202" width="26" height="0.5" stroke="none" stroke-width="0" fill="#675bb5"></rect><rect x="633" y="100" width="26" height="102" stroke="none" stroke-width="0" fill="#675bb5"></rect></g><g><rect x="101" y="202" width="568" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="123.3076923076923" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Dec</text></g><g><text text-anchor="middle" x="166.9230769230769" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Jan</text></g><g><text text-anchor="middle" x="210.53846153846155" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Feb</text></g><g><text text-anchor="middle" x="254.15384615384613" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Mar</text></g><g><text text-anchor="middle" x="297.7692307692308" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Apr</text></g><g><text text-anchor="middle" x="341.38461538461536" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">May</text></g><g><text text-anchor="middle" x="385" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Jun</text></g><g><text text-anchor="middle" x="428.6153846153846" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Jul</text></g><g><text text-anchor="middle" x="472.2307692307692" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Aug</text></g><g><text text-anchor="middle" x="515.8461538461538" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Sep</text></g><g><text text-anchor="middle" x="559.4615384615385" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Oct</text></g><g><text text-anchor="middle" x="603.0769230769231" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Nov</text></g><g><text text-anchor="middle" x="646.6923076923076" y="222.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#222222">Dec</text></g><g><text text-anchor="end" x="88" y="207.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#d9d9d9">0</text></g><g><text text-anchor="end" x="88" y="155.71666666666667" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#d9d9d9">1</text></g><g><text text-anchor="end" x="88" y="104.38333333333333" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#d9d9d9">1</text></g><g><text text-anchor="end" x="88" y="53.05" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#d9d9d9">2</text></g></g></g><g></g></svg><div aria-label="Une représentation tabulaire des données dans le graphique." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Month</th><th>Licences</th></tr></thead><tbody><tr><td>Dec</td><td>0</td></tr><tr><td>Jan</td><td>0</td></tr><tr><td>Feb</td><td>0</td></tr><tr><td>Mar</td><td>0</td></tr><tr><td>Apr</td><td>0</td></tr><tr><td>May</td><td>0</td></tr><tr><td>Jun</td><td>0</td></tr><tr><td>Jul</td><td>0</td></tr><tr><td>Aug</td><td>0</td></tr><tr><td>Sep</td><td>0</td></tr><tr><td>Oct</td><td>0</td></tr><tr><td>Nov</td><td>0</td></tr><tr><td>Dec</td><td>1</td></tr></tbody></table></div></div></div><div aria-hidden="true" style="display: none; position: absolute; top: 260px; left: 779px; white-space: nowrap; font-family: Arial; font-size: 13px;">...</div><div></div></div></div>-->
					<p class="text-center commission-desc">NEW LICENCES (LAST 12 MONTHS)</p>
				
				</div>
			</div>
          
      </div>
	  */
	  ?>
    </div>
	
	<script>
	var blastisReseller = <?php echo json_encode($reseller_info, JSON_FORCE_OBJECT); ?>;
	</script>
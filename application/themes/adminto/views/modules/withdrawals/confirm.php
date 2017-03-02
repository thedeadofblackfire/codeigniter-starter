	
    <div class="row">      
      <div class="col-md-12">
        <div class="block-flat">
				<div class="header">							
					<h4 class="uppercase">Invoice</h4>
				</div>
				<div class="content">

<div class="row">      
	<div class="col-md-6">
	<p class="info uppercase">From:</p>
	<p><strong><?php echo $current_user['company']; ?></strong></p>
	<p>&nbsp;</p>
	<p class="info uppercase">Vat ID:</p>
	<p class="info uppercase">Paypal:</p>
	</div>
	<div class="col-md-6">	
	<p class="info uppercase">To:</p>
	<p><strong>BLASTIS, Inc.</strong></p>	
	<p>&nbsp;</p>
	<p>El dorado</p>
	<p>United States of America</p>
	</div>
</div>
				
				
		
		<br/><br/>
		<table class="table-bordered no-border">
						<thead>
							<tr style="background-color:#3D566D;color:white;">
								<td>Description</td>
								<td width="265" align="right" style="text-align: right; ">Amount</td>
							</tr>							
						</thead>
						<tbody>
							<tr>
								<td>Affiliate Account Withdrawal</td>
								<td align="right">$<?php echo $reseller_info['affiliates_licences']['balance']['balance']; ?></td>								
							</tr>
						</tbody>				
		</table>
		<br/>
		<div class="pull-right" style="margin-right:5px;">
		<strong>TOTAL:</strong> &nbsp; <span style="font-size: 18px; color: #54ab73;">$<?php echo $reseller_info['affiliates_licences']['balance']['balance']; ?></span>
		</div>
		<br/>

		<br clear="both" />	

			
		<?php if ($reseller_info['affiliates_licences']['balance']['canWithdraw'] === false) { ?>
	    <p style="text-align:center; margin-bottom:100px;">Your balance is <span class="incomplete">not enough</span> to continue (Minimum $<?php echo $reseller_info['affiliates_licences']['balance']['minWithdraw']; ?>).</p>
		<?php } else if (empty($reseller_info['details']['paypal'])) { ?>
		<p style="text-align:center; margin-bottom:100px;">Please update your <a class="billing uppercase incomplete" href="/withdrawals/edit">billing details</a> to continue.</p>
		<?php } else if ($reseller_info['affiliates_licences']['balance']['pendingPayoff']){ ?>
		<p style="text-align:center; margin-bottom:100px;">Your withdrawal (<strong>$<?php echo $reseller_info['affiliates_licences']['balance']['blocked']; ?></strong>) is being processed. As soon as it is processed, you will be able to make another one.</p>
		<?php } else { ?>
		
		<form method="post" action="" role="form">		
		<input type="hidden" name="confirm" value="1" />
		<p style="text-align:center;">Please review the invoice for this withdrawal</p>		
		<p style="text-align:center;"> <button type="submit" style="margin:auto; display:table" class="issue uppercase btn btn-success btn-lg grass"><span>confirm</span></button>  or <a class="cancel uppercase" data-behavior="cancel" href="/dashboard">cancel</a></p>
		</form>	
		
		<?php } ?>
	

				</div>
		</div>          
      </div>
    </div>
	
	
	<?
	/*
	<div id="section-billing-invoice" style="display: block;">
<div style="margin:30px;">
<table class="main-table no-border" cellspacing="0" cellpadding="0" border="0" width="600">
<tbody>
<tr>
<td>
<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%">
<tbody>
<tr>
<td>
<div bgcolor="#FFFFFF" style="background: #FFFFFF; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; border:1px solid #FFFFFF;">
<table cellspacing="0" cellpadding="0" border="0" width="600">
<tbody><tr>
<td width="12">

</td>
<td>

<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%">
<tbody><tr>
<td height="20" style="height: 20px;">

</td>
</tr>
<tr>
<td>
<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%" style="color: #272524;font-weight: normal; font-size: 10px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
<tbody>
<tr>
	<td style="width: 33%;text-align: left;" width="33%">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INVOICE
	</td>
	<td style="width: 33%;text-align: center;" width="34%">
		&nbsp;
	</td>
	<td style="width: 33%;text-align: right" width="33%">
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height="20" style="height: 20px;">

</td>
</tr>
<tr>
<td height="1" style="height: 1px;font-size: 1px;line-height: 1px;" bgcolor="#e0e0e0">

</td>
</tr>
<tr>
<td height="20" style="height: 20px;">

</td>
</tr>
<tr>
<td>
<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%">
<tbody><tr>
<td width="35">

</td>
<td width="300">
	<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%">
		<tbody><tr>
			<td style="color: #9d9d9d;font-weight: normal; font-size: 10px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				FROM:
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="20">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: bold; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				petimelo
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="40">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				 
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; " class="uppercase">
				
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="40">
			</td>
		</tr>
		<tr>
			<td style="color: #9d9d9d;font-weight: normal; font-size: 10px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				VAT ID:
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>	
		</tr>
		<tr>
			<td style="color: #9d9d9d;font-weight: normal; font-size: 10px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				PAYPAL
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				
			</td>
		</tr>
	</tbody></table>
</td>
<td align="top" style="vertical-align:top">
	<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%">
		<tbody><tr>
			<td style="color: #9d9d9d;font-weight: normal; font-size: 10px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				TO:
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="20">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: bold; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				LiveChat, Inc.
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: bold; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="40">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				One International Place, Suite 1400
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				Boston, MA, 02110
			</td>
		</tr>
		<tr>
			<td style="font-size: 1px; line-height: 1px;" height="5">
			</td>
		</tr>
		<tr>
			<td style="color: #272524;font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif'; ">
				United States of America
			</td>
		</tr>
	</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="50" style="height: 50px;">

</td>
</tr>
<tr>
<td>
<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="@5878a3" style="background-color: #5878a3;color: #FFFFFF;font-weight: 300; font-size: 12px; font-family: 'Helvetica', 'Arial', 'sans-serif';" height="35">
<tbody><tr>
<td width="23">
	
</td>
<td width="265">
	Description
</td>
<td width="265" align="right" style="text-align: right; ">
	Amount
</td>
<td width="23">
	
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%" style="color: #000000; font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif';" height="50">
<tbody><tr>
<td width="23">
	
</td>
<td width="265">
	Affiliate Account Withdrawal
</td>
<td width="265" align="right" style="text-align: right; ">
	$0.00
</td>
<td width="23">
	
</td>	
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="1" style="height: 1px;font-size: 1px;line-height: 1px;" bgcolor="#e0e0e0">

</td>
</tr>
<tr>
<td height="20" style="height: 20px;">

</td>
</tr>
<tr>
<td>
<table class="no-border" cellspacing="0" cellpadding="0" border="0" width="100%" style="color: #000000; font-weight: 300; font-size: 14px; font-family: 'Helvetica', 'Arial', 'sans-serif';" height="50">
<tbody><tr>
<td width="553" align="right" style="text-align: right;">
	TOTAL: &nbsp; <span style="font-size: 18px; color: #54ab73;">$0.00</span>
</td>
<td width="23">
	
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td height="20" style="height: 20px;">

</td>
</tr>
</tbody></table>

</td>
<td width="12">

</td>
</tr>
</tbody></table>
	
	
	<p style="text-align:center;">Please review the invoice for this withdrawal</p>	
	<button style="margin:auto; display:table" class="issue button grass"><span>issue</span></button> <p style="text-align:center;"> or <a class="cancel uppercase" data-behavior="cancel" href="/dashboard">cancel</a></p>
	
		<p style="text-align:center; margin-bottom:100px;">Please update your <a class="billing uppercase" href="/withdrawals/edit">billing details</a> to continue.</p><p>
	
</p></div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height="50">

</td>
</tr>
</tbody>
</table>

</div>
</div>
*/
?>
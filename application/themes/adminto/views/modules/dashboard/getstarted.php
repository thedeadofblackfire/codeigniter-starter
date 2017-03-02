<div id="steps" class="row" style="margin:0;padding:0">
      <div id="content" class="col-md-12 col-sm-12">

<style>
#steps #content{padding:0;margin:0}
#steps #content .content-wrapper{margin-top:0}
#steps .header{padding:28px;background:#5A6474;font-family:"Helvetica Neue", Arial;text-shadow:1px 1px rgba(0,0,0,0.45);color:#fff;text-align:center;font-size:19px;box-shadow:0px 1px 1px rgba(0,0,0,0.15)}
@media (max-width: 767px){
	#steps .header{font-size:16px}
}
@media (max-width: 991px){
	#steps .steps{padding-bottom:30px}
}
#steps .steps .step{margin:0px 55px;padding:35px 20px;border-bottom:1px solid #eee}
@media (max-width: 991px){
	#steps .steps .step{text-align:center;padding-top:30px !important}
	}
#steps .steps .step.done{margin:0;background:#F8F8FA;padding:35px 75px}
#steps .steps .step.done .info{top:-6px}
#steps .steps .step .info{float:left;position:relative}
@media (max-width: 991px){
	#steps .steps .step .info{float:none;margin-bottom:15px}
}
#steps .steps .step .info .number{font-size:26px;margin-right:20px;position:relative;top:2px}
@media (max-width: 991px){
	#steps .steps .step .info .number{display:block;margin:0;margin-bottom:10px}
}
#steps .steps .step .info .number .ion-checkmark-circled{font-size:38px;color:#44B83F;position:relative;top:6px;left:-6px;margin-right:-8px}
#steps .steps .step .button{position:relative;top:2px;float:right;width:200px}
@media (max-width: 991px){
	#steps .steps .step .button{float:none}
}
#steps .steps .step .button span{font-size:13px;min-width:150px;text-align:center;}
.step-text {
	position:absolute;
	/*
	transform: rotate(270deg);
	transform-origin: left top 0;
	*/
	left:-45px;
	top:5px;
	/*float: left;*/
}
</style>

	<div class="content-wrapper">
	<div class="header">
		<?/*Your account is almost ready!*/?>
		Getting Started! 		
	</div>

	<div class="steps">
		<div class="step clearfix <?php if ($totalContacts > 0) echo 'done'; ?>">
			<div class="info">
				<span class="step-text">STEP</span>
				<span class="number">
					<?php if ($totalContacts > 0) { ?><i class="fa fa-check-circle" style="color:green"></i><?php } else echo '1'; ?>
				</span>
				Lets create a contact
				<!--First step is to load your contacts you want to communicate with. You have two options. Add users manually or upload contacts.-->
				<!--Add contacts to your database. On the left side of your screen, click on “Contacts”. Now, there are two ways you can load contacts.-->
			</div>

			<a href="/contacts?guide=1" class="btn btn-primary <?php if ($totalContacts > 0) echo 'disabled'; ?> button">
				<span>Add Contacts</span>
			</a>
		</div>
		<div class="step clearfix <?php if ($totalCampaignsExpress > 0) echo 'done'; ?>">
			<div class="info">
				<span class="step-text">STEP</span>
				<span class="number"><?php if ($totalCampaignsExpress > 0) { ?><i class="fa fa-check-circle" style="color:green"></i><?php } else echo '2'; ?></span> 
				Lets send an express text
			</div>

			<a href="/campaigns?guide=1" class="btn btn-primary <?php if ($totalCampaignsExpress > 0) echo 'disabled'; ?> button">
				<span>Send message</span>
			</a>
		</div>
		<div class="step clearfix <?php if ($totalCampaigns > 0) echo 'done'; ?>">
			<div class="info">
				<span class="step-text">STEP</span>
				<span class="number">
					<?php if ($totalCampaigns > 0) { ?><i class="fa fa-check-circle" style="color:green"></i><?php } else echo '3'; ?>
				</span> 
				<!--A New Campaign allows you to send a text message to multiple contacts or groups of contacts-->
				Lets create a campaign
			</div>

			<a href="/campaigns?guide=1" class="btn btn-primary <?php if ($totalCampaigns > 0) echo 'disabled'; ?> button">
				<span>Create campaign</span>
			</a>
		</div>
		<div class="step clearfix <?php if ($totalInbox > 0) echo 'done'; ?>">
			<div class="info">
				<span class="step-text">STEP</span>
				<span class="number"><?php if ($totalInbox > 0) { ?><i class="fa fa-check-circle" style="color:green"></i><?php } else echo '4'; ?></span> 
				Lets reply to the text
			</div>

			<a href="/inbox?guide=1" class="btn btn-primary <?php if ($totalInbox > 0) echo 'disabled'; ?> button">
				<span>Reply text</span>
			</a>
		</div>		
		<div class="step clearfix">
			<div class="info">
				<span class="step-text">STEP</span>
				<span class="number">5</span> 
				Subscribe to a paid plan
			</div>

			<a href="/billing/plan?guide=1" class="btn btn-primary button">
				<span>Billing!</span>
			</a>
		</div>
	</div>
</div>

      </div>
</div>
	
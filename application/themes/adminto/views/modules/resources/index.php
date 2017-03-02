
<div id="section-link" style="display: block;">

<div class="row" id="resources">

<div class="col-md-8">
					<div class="card-box">
						<div class="actions pull-right">			  		
								<a class="uppercase <?php if ($type_resource == 'banners') echo 'active'; ?>" data-value="banners" href="?status=banners">banners</a>
								<a class="uppercase <?php if ($type_resource == 'tweets') echo 'active'; ?>" data-value="tweets" href="?status=tweets">tweets</a>
								<a class="uppercase <?php if ($type_resource == 'text') echo 'active'; ?>" data-value="text" href="?status=text">text</a>
								<a class="uppercase <?php if ($type_resource == 'screenshots') echo 'active'; ?>" data-value="screenshots" href="?status=screenshots">screenshots</a>
								<a class="uppercase <?php if ($type_resource == 'all') echo 'active'; ?>" data-value="all" href="?status=all">all</a>
							</div>						
						<h4 class="header-title m-t-0 m-b-30 header_underline uppercase">resources</h4>
						
				
							<div class="row">
								<div class="col-md-12">
								  
									<?php if ($type_resource == 'all' || $type_resource == 'tweets') { ?>
									<div id="tweets" class="resource">
										<?php
										foreach($resources as $item) {
											if ($item['category'] == 'tweets') {
										?>
										<div class="embeddable">
											<div class="embed_resource w_16">
											<p><?php echo $item['content_demo']; ?></p>
											<a href="<?php echo $item['content_action_url']; ?>" target=_new class="twitter-share-button" data-lang="en" data-size="large" data-count="none" data-text="<?php echo $item['content_action']; ?>" data-url="<?php echo $item['content_affiliate_url']; ?>">Tweet</a>
											</div>
										</div>
										<?php							
											}
										}
										?>
										<?/*
										<div class="embeddable">
											<div class="embed_resource w_16">
											<p>Connect with your customers through @LiveChat! #cust_exp</p>
											<a href="https://twitter.com/share?text=Connect%20with%20your%20customers%20through%20%40LiveChat!%20%23cust_exp%20%20http%3A%2F%2Fwww.livechatinc.com%2Fcustomer-service-software%2F%3Fa%3DeeEPMYbGzq&amp;url=/" class="twitter-share-button" data-lang="en" data-size="large" data-count="none" data-text="Connect with your customers through @LiveChat! #cust_exp " data-url="http://www.livechatinc.com/customer-service-software/?a=eeEPMYbGzq">Tweet</a>
											</div>
										</div>
										<div class="embeddable">
											<div class="embed_resource w_16">
											<p>Enhance visitor experience on your website with @LiveChat! #cust_serv</p>
											<a href="https://twitter.com/share?text=Enhance%20visitor%20experience%20on%20your%20website%20with%20%40LiveChat!%20%23cust_serv%20http%3A%2F%2Fwww.livechatinc.com%2Fhelp-desk-software%2F%3Fa%3DeeEPMYbGzq&amp;url=/" class="twitter-share-button" data-lang="en" data-size="large" data-count="none" data-text="Enhance visitor experience on your website with @LiveChat! #cust_serv" data-url="http://www.livechatinc.com/help-desk-software/?a=eeEPMYbGzq">Tweet</a>
											</div>
										</div>
										*/
										?>
									</div>
									<?php } ?>

									<?php if ($type_resource == 'all' || $type_resource == 'banners') { ?>
									<div id="banners" class="resource">
										<p>If you can't see banners below, please disable AdBlock-like plugin in your browser.</p>
		<div class="embeddable">
			<div class="embed_resource w_728">
				<div class="label">728×90</div>
				<img class="no-retina" src="http://partners.textsol.com/assets/static/img/graphics/livechat_728x90_v1.png" width="728" height="90" alt="livechat banner 728x90">
				<button class="small grey show-code" data-type="banner"><span>Use this</span></button>
				<a target="_blank" href="http://partners.textsol.com/assets/static/img/graphics/livechat_728x90_v1.png" class="button small grey preview"><span>Preview</span></a>
			</div>
			<div class="embed_code w_728">
				<div class="label">Embed code:</div>
				<textarea class="pre" readonly="readonly">&lt;a href="http://www.livechatinc.com/customer-service/?a=eeEPMYbGzq"&gt; &lt;img src="https://cdn.livechatinc.com/partners/production/img/graphics/livechat_728x90_v1.png" alt="Live Chat Software"&gt;&lt;/a&gt;</textarea>
			</div>
		</div>

									</div>
									<?php } ?>
									
									<?php if ($type_resource == 'all' || $type_resource == 'text') { ?>
									<div class="resource" id="text">
										<?php
										foreach($resources as $item) {
											if ($item['category'] == 'text') {
										?>
										<div class="embeddable">
											<div class="embed_resource w_16">
											<p> <?php echo $item['content_demo']; ?></p>
											<button class="small grey show-code" data-type="text"><span class="use">Use this</span></button>
											</div>
											<div class="embed_code">
												<div class="label">Text asset:</div>
												<textarea class="pre" rows="3" style="width:100%;min-height:90px;" readonly="readonly"><?php echo $item['content_action']; ?></textarea>
												<button class="cancel btn btn-default">Cancel</button>
											</div>
										</div>
										<?php							
											}
										}
										?>
										
<!--
	<div class="embeddable">
	    <div class="embed_resource w_16">
		<p>
How does LiveChat work?
<br><br>
Imagine that you want to buy a pair of running shoes. You enter a shoe store’s website and you find a model you’d like to buy, but your size is out of stock. Obviously, you’d like to know when your size will be available. Wouldn’t be great if you could ask your question immediately, without making phone calls or writing emails?
<br><br>
Luckily, it is possible with <a href="" class="disabled-link">live chat software</a>. All you need to do is to click on a chat icon and you can instantly chat with an agent! You get your help immediately, without phone costs and without waste of time! 
<br><br>
LiveChat allows you to chat with customer service in a flash. You don’t need to install any software., Aall you need to have is a computer and internet connection! Easy, isn’t it? Imagine how pleased will be your clients!
<br><br>
Make customers’ life easier and use <a href="" class="disabled-link">customer service software</a> from LiveChat!!
		</p>
		<button class="small grey show-code" data-type="text"><span class="use">Use this</span></button>
	    </div>
	    <div class="embed_code">
		<div class="label">Text asset:</div>
		<textarea class="pre" rows="3" readonly="readonly">How does LiveChat work?

Imagine that you want to buy a pair of running shoes. You enter a shoe store’s website and you find a model you’d like to buy, but your size is out of stock. Obviously, you’d like to know when your size will be available. Wouldn’t be great if you could ask your question immediately, without making phone calls or writing emails?

Luckily, it is possible with &lt;a href="http://www.livechatinc.com/live-chat-software/?a=eeEPMYbGzq"&gt;live chat software&lt;/a&gt; . All you need to do is to click on a chat icon and you can instantly chat with an agent! You get your help immediately, without phone costs and without waste of time! 

LiveChat allows you to chat with customer service in a flash. You don’t need to install any software., Aall you need to have is a computer and internet connection! Easy, isn’t it? Imagine how pleased will be your clients!

Make customers’ life easier and use &lt;a href="http://www.livechatinc.com/customer-service-software/?a=eeEPMYbGzq"&gt;customer service software&lt;/a&gt; from LiveChat!!
		</textarea>
		<button class="cancel">Cancel</button>
	    </div>
	</div>
	-->
									</div>
									<?php } ?>
	
						</div>
							</div>
		
					
					</div>				
				</div>
				<!-- end block -->
			
				<div class="col-md-4">
					<div class="card-box">
										
						<h4 class="header-title m-t-0 m-b-30 header_underline uppercase">your referral link</h4>
						
				
							<div class="row">
								<div class="col-md-12">
								
	
			<p>Use this link to refer customers for <?php echo $product['name']; ?>.
			  <br/>  <textarea class="pre" id="partner_link" name="partner_link" readonly="readonly"><?php echo $product['url']; ?></textarea>
				
			</p>
			<p>
				You can also <a href="<?php echo $product['urlSignup']; ?>" target=_new style="text-decoration:underline;">create an account</a> manually.
			</p>			
			

			</div>
							</div>
		
					</div>								
				<!-- end block -->

					<div class="card-box">
													
						<h4 class="header-title m-t-0 m-b-30 header_underline uppercase">how to promote your link</h4>
					
				
							<div class="row">
								<div class="col-md-12">
								
	<section class="small promotion">
		<p class="title uppercase">how to promote your link</p>
		<div class="box one">
			<p>You can increase the number of clicks on your link by:</p>
			<ul class="indent">
			    <li>Placing banners on your website</li>
			    <li>Posting tweets with your referral link</li>
			    <li>Adding the link to your email signature</li>
			    <li>Adding the link in a product review</li>
			    <li>Sending ready-made newsletter</li>
			    <li>Sending the link directly to your customers</li>
			</ul>			
		</div>
	</section>
	
				</div>
							</div>
		
						
					</div>				
				</div> 
				<!-- end block -->

	</div>
	<!-- end row -->
</div>
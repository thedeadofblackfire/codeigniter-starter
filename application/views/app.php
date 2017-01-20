<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/assets/adminto/images/favicon.ico">

        <title>App</title>
		
		<link href="assets/adminto/plugins/summernote/dist/summernote.css" rel="stylesheet" type="text/css" /><!-- Custom box css -->
        <link href="assets/adminto/plugins/custombox/dist/custombox.min.css" rel="stylesheet" type="text/css" />

        <link href="/assets/adminto/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/adminto/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/assets/adminto/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/assets/adminto/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/assets/adminto/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/assets/adminto/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/adminto/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="/assets/adminto/js/modernizr.min.js"></script>

		<link rel="stylesheet" href="/assets/js/all.debug.css">

    </head>

    <body>
	
	<style>
	.page-content {
		display:none;
		/*
	  visibility: hidden;
  opacity: 0;
  */
	}
	.page-content.is-shown {
		/*
		  visibility: visible;
  opacity: 1;
  */
		display:block;
	}
	/*
.content {
  flex: 1;
  position: relative;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
}
.content.is-shown {
  visibility: visible;;
  opacity: 1;
  
}
*/
	</style>

        <!-- Navigation Bar-->        
		<navigation-bar></navigation-bar>
        <!-- End Navigation Bar-->

		<!--<main>-->
			
					<!--<loader></loader>-->
					<!--<card-list id="card-list"></card-list> -->
					<!--					
					<top-bar></top-bar>
					<card-list id="card-list"></card-list>
					<right-drawer></right-drawer>
					-->
		<!--</main>-->
			
				
        <div class="wrapper">
            <div class="container">							
						
				<div id="main-content"></div>
				<!--<projects-list></projects-list>-->
				
				<main class="content js-content"></main>

      
                <!-- Footer -->
				<!--
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2017 © Adminto.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
				-->
                <!-- End Footer -->

            </div>
            <!-- end container -->



            <!-- Right Sidebar -->
			<rightside-bar></rightside-bar>            
            <!-- /Right-bar -->

        </div>


        <!-- jQuery  -->
        <script src="/assets/adminto/js/jquery.min.js"></script>
        <script src="/assets/adminto/js/bootstrap.min.js"></script>
        <script src="/assets/adminto/js/detect.js"></script>
        <script src="/assets/adminto/js/fastclick.js"></script>
        <script src="/assets/adminto/js/jquery.slimscroll.js"></script>
        <script src="/assets/adminto/js/jquery.blockUI.js"></script>
        <script src="/assets/adminto/js/waves.js"></script>
        <script src="/assets/adminto/js/wow.min.js"></script>
        <script src="/assets/adminto/js/jquery.nicescroll.js"></script>
        <script src="/assets/adminto/js/jquery.scrollTo.min.js"></script>

		<!-- Summernote -->
        <script src="/assets/adminto/plugins/summernote/dist/summernote.min.js"></script>

        <!-- Modal-Effect -->
        <script src="/assets/adminto/plugins/custombox/dist/custombox.min.js"></script>
        <script src="/assets/adminto/plugins/custombox/dist/legacy.min.js"></script>

        <!-- Page specific only -->
        <script src="/assets/adminto/pages/jquery.inbox.js"></script>
		
        <!-- App js -->
        <script type="text/javascript" charset="utf-8" src="/assets/adminto/js/jquery.core.js"></script>
        <script type="text/javascript" charset="utf-8" src="/assets/adminto/js/jquery.app.js"></script>
		
		<script type="text/javascript" charset="utf-8" src="/assets/js/riot-route.lib.js"></script>
		<script type="text/javascript" charset="utf-8" src="/assets/js/riot.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="/assets/js/Promise.js"></script>
		
		<script type="text/javascript" charset="utf-8" src="/assets/js/tags.debug.js"></script>
	
		<!--
		<script type="riot/tag" src="/assets/js/tags/core.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/navigation-bar.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/rightside-bar.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/loader.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/card-list.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/right-drawer.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/top-bar.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/projects-list.tag.html"></script>
		<script type="riot/tag" src="/assets/js/tags/task-detail.tag.html"></script>
		-->
		<script>
		// Adding standalone Riot route to Riot (v3 issue)
		riot.route = route
		
		//var $rightDrawer = document.querySelector("right-drawer");
		var dataPromise=null;

		function getProjectData() {
			return dataPromise;
		}

		function hideAllPages() {
		  const pages = document.querySelectorAll('.page-content.is-shown')
		  Array.prototype.forEach.call(pages, function(p) {
			p.classList.remove('is-shown')
		  })
		}

		function addDynamicTag(myTag, myData){
			var myData = myData || {};
			/*
			const links = document.querySelectorAll('link[rel="import"]')

			// Import and add each page to the DOM
			Array.prototype.forEach.call(links, function (link) {
			  let template = link.import.querySelector('.task-template')
			  let clone = document.importNode(template.content, true)
			  if (link.href.match('about.html')) {
				document.querySelector('body').appendChild(clone)
			  } else {
				document.querySelector('.content').appendChild(clone)
			  }
			})

			*/
			/*
		  var list = document.getElementById("list");
		  var li = document.createElement('li');
		  list.appendChild(li);

		  var tag = document.createElement('example');
		  li.appendChild(tag)
		  riot.mount(tag, 'example');
		  */
		  console.log('addDynamicTag contains='+document.getElementById('page-'+myTag));
		  
		  hideAllPages();
		  //document.querySelectorAll('.page-content').classList.remove('is-shown');
            //self.refs.compactTopBar.querySelector('.top-bar__mobile-trigger .icon-close').classList.add('active');
			
		  if (document.getElementById('page-'+myTag)) {
			  document.getElementById('page-'+myTag).classList.add('is-shown');
		  } else {
			  var dyntag = document.createElement(myTag);
			  dyntag.setAttribute("id",'page-'+myTag);
			  dyntag.setAttribute("class",'page-content is-shown');
			  document.querySelector('.content').appendChild(dyntag);
			  var tags = riot.mount(dyntag, myTag, myData);
			  
			  // @todo store tags in cache
			  //console.log(tags);
			  //riot.mount(tag, 'example');
		  }
		  
		}

		window.onload = function() { 
			console.log('onload');		
			
			//riot.compile(function() {	
			//	console.log('compile');
				
				dataPromise = new Promise(function(resolve, reject) {
					var req = new XMLHttpRequest()

					req.onreadystatechange = function() {
						if (req.readyState === 4 &&
							(req.status === 200 || !req.status && req.responseText.length)) {
							resolve(JSON.parse(req.responseText));
						}
						else if(req.readyState === 4 && req.status !== 200){
							reject("Ajax Failed");
						}
					}
					req.open('GET', "/assets/data/projects.json", true);
					req.send('');
				});

				/*
				window.TopBarComponent = riot.mount('top-bar', {
					cardSelector: '#card-list',
					logoUrl: 'img/logo_2x.png',
					logoAlt: 'Made With Riot',
					slogan: 'A list of apps and components made with Riot.js library.',
					menu: [{
						text: 'Riot.js Website',
						isImportant: true,
						url: 'http://riotjs.com/'
					}, {
						text: 'Submit a Project',
						url: 'https://github.com/riot/made-with-riot#adding-a-project-to-made-with-riot'
					}]
				})[0];

				window.CardListComponent = riot.mount('card-list', {})[0];

				window.RightDrawerComponent = riot.mount("right-drawer", {})[0];
				*/
				var tags = riot.mount('*');			
				console.log(tags);
				
				$.Navbar.init();
				
				riot.route.exec();
			//})
		}

	
		// Riot router
		//riot.route.base('#')
		//riot.route.base('#!')
		riot.route.base('/app/');
		//riot.route.base('/');
		riot.route.start();

		/*
		riot.route("/", function() {
			//$rightDrawer.closeDrawer();
			console.log('/');
			//var tags = riot.mount('div#main-content', 'projects-list', {});
		});
		*/
			
		riot.route("/details/*", function(pid) {
			if (pid) {
				//$rightDrawer.openDrawer(pid);
			}

		});
		
	riot.route(function(action) { 
		console.log('default route: '+action);
		switch(action) {
			case 'contact':
				addDynamicTag('task-detail', {id: 1});
				//riot.mount('div#main-content', 'task-detail', {id: 1});
			break;
			case 'inbox':
				addDynamicTag('inbox');
				//riot.mount('div#main-content', 'inbox');
			break;
			case '':
			case '/':
			case 'app':				
				addDynamicTag('projects-list');
				//riot.mount('div#main-content', 'projects-list');
			break;	
			default:
				// should be404
				//iot.mount('div#main-content', 'projects-list');
		}
	}) 
	riot.route('/users/*', users_router)
	riot.route('/users/*/*', users_router)
	
	function users_router(page,id) {
		console.log('users page='+page+' id='+id)
		/*
        if (page == 'add')
          RiotControl.trigger('route_item_add')
        else
          RiotControl.trigger('route_item', id)
	  */
	   var tags = riot.mount('div#main-content', 'task-detail', {id: id});
	 console.log(tags);
	 
    }
	console.log('route config');
	var currentPage = null;

	/*
	riot.route(function goTo(path) {
		console.log(path);
		
	  if (currentPage) {
		currentPage.unmount(true);
	  }

	  if (path === 'bonjour' ) {
		currentPage = riot.mount('div#main-content', 'bonjour-page')[0];

	  } else if (path === 'hello') {
		 currentPage = riot.mount('div#main-content', 'hello-page')[0];

	  } else {
		 currentPage = riot.mount('div#main-content', 'home-page')[0];

	  }
	});
	*/
	
	 jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 320,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

            });
		</script>
    </body>
</html>
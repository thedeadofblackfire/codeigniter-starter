riot.tag2('card-list', '<div class="card-list"> <loader if="{!isDataLoaded}"></loader> <div if="{isDataLoaded}" class="card-list__card" each="{project in projects}" data-filter="{project.name.toLowerCase() + project.url.toLowerCase() + project.tags.toLowerCase()}"> <a href="{project.url}" target="_blank" rel="nofollow" class="card-list__image"> project.imgUrl </a> <h2 class="card-list__name"> {project.name} </h2> <div if="{project.url}" target="_blank" rel="nofollow" class="card-list__url"> {project.url.replace(/(http|https)\\:\\/\\/(www\\.)?/, \'\')} </div> <a if="{project.url}" href="#/details/{project.id}" class="card-list__details"> View Details </a> </div> </div>', '', '', function(opts) {
        var _self = this;
        this.isDataLoaded = false;
        this.projects = [];
        this.on("mount", function() {
		console.log('card load');
            getProjectData().then(function(e) {
                _self.update({
                    isDataLoaded: true,
                    projects: e.projects.reverse()
                });
            });
        });
});


//-----

riot.tag2('raw', '<span></span>', '', '', function(opts) {

  this.root.innerHTML = opts.content
});

//-----

riot.tag2('loader', '<svg class="spinner" width="65px" height="65px" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"> <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle> </svg>', '', '', function(opts) {
});

//-----

riot.tag2('navigation-bar', '<header id="topnav"> <div class="topbar-main"> <div class="container"> <div class="topbar-left"> <a href="/" class="logo"><span>Admin<span>to2</span></span></a> </div> <div class="menu-extras"> <ul class="nav navbar-nav navbar-right pull-right"> <li> <form role="search" class="navbar-left app-search pull-left hidden-xs"> <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form> </li> <li> <div class="notification-box"> <ul class="list-inline m-b-0"> <li> <a href="javascript:void(0);" class="right-bar-toggle"> <i class="zmdi zmdi-notifications-none"></i> </a> <div class="noti-dot"> <span class="dot"></span> <span class="pulse"></span> </div> </li> </ul> </div> </li> <li class="dropdown user-box"> <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true"> <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img"> <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div> </a> <ul class="dropdown-menu"> <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li> <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li> <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li> <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li> </ul> </li> </ul> <div class="menu-item"> <a class="navbar-toggle"> <div class="lines"> <span></span> <span></span> <span></span> </div> </a> </div> </div> </div> </div> <div class="navbar-custom"> <div class="container"> <div id="navigation"> <ul class="navigation-menu"> <li> <a href="/app/"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a> </li> <li> <a href="/app/users/view/1"><i class="zmdi zmdi-view-dashboard"></i> <span> test3 </span> </a> </li> <li> <a href="/app/contact"><i class="zmdi zmdi-view-dashboard"></i> <span> contact </span> </a> </li> <li class="has-submenu"> <a href="#"><i class="zmdi zmdi-invert-colors"></i> <span> User Interface </span> </a> <ul class="submenu megamenu"> <li> <ul> <li><a href="ui-buttons.html">Buttons</a></li> <li><a href="ui-cards.html">Cards</a></li> <li><a href="ui-draggable-cards.html">Draggable Cards</a></li> <li><a href="ui-typography.html">Typography </a></li> <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li> <li><a href="ui-material-icons.html">Material Design Icons</a></li> <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li> <li><a href="ui-themify-icons.html">Themify Icons</a></li> </ul> </li> <li> <ul> <li><a href="ui-modals.html">Modals</a></li> <li><a href="ui-notification.html">Notification</a></li> <li><a href="ui-range-slider.html">Range Slider</a></li> <li><a href="ui-components.html">Components</a> <li><a href="ui-sweetalert.html">Sweet Alert</a> <li><a href="ui-treeview.html">Tree view</a> <li><a href="ui-widgets.html">Widgets</a></li> </ul> </li> </ul> </li> <li class="has-submenu"> <a href="#"><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a> <ul class="submenu"> <li><a href="form-elements.html">General Elements</a></li> <li><a href="form-advanced.html">Advanced Form</a></li> <li><a href="form-validation.html">Form Validation</a></li> <li><a href="form-wizard.html">Form Wizard</a></li> <li><a href="form-fileupload.html">Form Uploads</a></li> <li><a href="form-wysiwig.html">Wysiwig Editors</a></li> <li><a href="form-xeditable.html">X-editable</a></li> </ul> </li> <li class="has-submenu"> <a href="#"><i class="zmdi zmdi-view-list"></i> <span> Tables </span> </a> <ul class="submenu"> <li><a href="tables-basic.html">Basic Tables</a></li> <li><a href="tables-datatable.html">Data Table</a></li> <li><a href="tables-responsive.html">Responsive Table</a></li> <li><a href="tables-editable.html">Editable Table</a></li> </ul> </li> <li class="has-submenu"> <a href="#"><i class="zmdi zmdi-chart"></i><span> Charts </span> </a> <ul class="submenu"> <li><a href="chart-flot.html">Flot Chart</a></li> <li><a href="chart-morris.html">Morris Chart</a></li> <li><a href="chart-chartist.html">Chartist Charts</a></li> <li><a href="chart-chartjs.html">Chartjs Chart</a></li> <li><a href="chart-other.html">Other Chart</a></li> </ul> </li> <li class="has-submenu"> <a href="#"><i class="zmdi zmdi-collection-item"></i><span> Pages </span> </a> <ul class="submenu"> <li><a href="page-starter.html">Starter Page</a></li> <li><a href="page-login.html">Login</a></li> <li><a href="page-register.html">Register</a></li> <li><a href="page-recoverpw.html">Recover Password</a></li> <li><a href="page-lock-screen.html">Lock Screen</a></li> <li><a href="page-confirm-mail.html">Confirm Mail</a></li> <li><a href="page-404.html">Error 404</a></li> <li><a href="page-500.html">Error 500</a></li> </ul> </li> <li class="has-submenu active"> <a href="#"><i class="zmdi zmdi-layers"></i><span>Extra Pages </span> </a> <ul class="submenu megamenu"> <li> <ul> <li class="active"><a href="extras-projects.html">Projects</a></li> <li><a href="extras-tour.html">Tour</a></li> <li><a href="extras-taskboard.html">Taskboard</a></li> <li><a href="extras-inbox.html">Mail</a></li> <li><a href="extras-taskdetail.html">Task Detail</a></li> <li><a href="extras-maps.html">Maps</a></li> <li><a href="extras-calendar.html">Calendar</a></li> <li><a href="extras-contact.html">Contact list</a></li> <li><a href="extras-pricing.html">Pricing</a></li> </ul> </li> <li> <ul> <li><a href="extras-timeline.html">Timeline</a></li> <li><a href="extras-invoice.html">Invoice</a></li> <li><a href="extras-profile.html">Profile</a></li> <li><a href="extras-faq.html">FAQ</a></li> <li><a href="extras-gallery.html">Gallery</a></li> <li><a href="extras-email-template.html">Email template</a></li> <li><a href="extras-maintenance.html">Maintenance</a></li> <li><a href="extras-comingsoon.html">Coming soon</a></li> </ul> </li> </ul> </li> </ul> </div> </div> </div> </header>', '', '', function(opts) {
        var self = this;

        self.on('mount', function() {
            console.log('navigation-bar load');

        });

});

//-----

riot.tag2('projects-list', '<div class="row"> <div class="col-sm-12"> <div class="btn-group pull-right m-t-15"> <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button> <ul class="dropdown-menu" role="menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li class="divider"></li> <li><a href="#">Separated link</a></li> </ul> </div> <h4 class="page-title">Projects</h4> </div> </div> <div class="row"> <div class="col-sm-4"> <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-20">Create Project</button> </div> <div class="col-sm-8"> <div class="project-sort pull-right"> <div class="project-sort-item"> <form class="form-inline"> <div class="form-group"> <label>Phase :</label> <select class="form-control input-sm"> <option>All Projects(6)</option> <option>Complated</option> <option>Progress</option> </select> </div> <div class="form-group"> <label>Sort :</label> <select class="form-control input-sm"> <option>Date</option> <option>Name</option> <option>End date</option> <option>Start Date</option> </select> </div> </form> </div> </div> </div> </div> <div class="row"> <loader if="{!isDataLoaded}"></loader> <div if="{isDataLoaded}" class="col-lg-4 xcard-list__card" each="{project in projects}" data-filter="{project.name.toLowerCase() + project.url.toLowerCase() + project.tags.toLowerCase()}"> <div class="card-box project-box"> <div class="label label-{(project.class != \'custom\') ? project.class : \'default\'}">{project.status}</div> <h4 class="m-t-0 m-b-5"><a href="" class="text-inverse">New Admin Design</a></h4> <p class="text-{project.class} text-uppercase m-b-20 font-13">{project.name}</p> <p class="text-muted font-13"><raw content="{project.desc}"></raw></p> <ul class="list-inline"> <li> <h3 class="m-b-0">{project.questions}</h3> <p class="text-muted">Questions</p> </li> <li> <h3 class="m-b-0">{project.comments}</h3> <p class="text-muted">Comments</p> </li> </ul> <div class="project-members m-b-20"> <span class="m-r-5 font-600">Team :</span> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"> <img src="/assets/adminto/images/users/avatar-1.jpg" class="img-circle thumb-sm" alt="friend"> </a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty"> <img src="/assets/adminto/images/users/avatar-2.jpg" class="img-circle thumb-sm" alt="friend"> </a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson"> <img src="/assets/adminto/images/users/avatar-3.jpg" class="img-circle thumb-sm" alt="friend"> </a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"> <img src="/assets/adminto/images/users/avatar-4.jpg" class="img-circle thumb-sm" alt="friend"> </a> <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username"> <img src="/assets/adminto/images/users/avatar-5.jpg" class="img-circle thumb-sm" alt="friend"> </a> </div> <p class="font-600 m-b-5">Progress <span class="text-{project.class} pull-right">{project.progress}%</span></p> <div class="progress progress-bar-{project.class}-alt progress-sm m-b-5"> <div class="progress-bar progress-bar-{project.class} progress-animated wow animated animated" role="progressbar" aria-valuenow="{project.progress}" aria-valuemin="0" aria-valuemax="100" riot-style="width: {project.progress}%; visibility: visible; animation-name: animationProgress;"> </div> </div> </div> </div> </div>', '', '', function(opts) {
        var _self = this;
        this.isDataLoaded = false;
        this.projects = [];
        this.on("mount", function() {
			console.log('mount project load');

			setTimeout(function() {
				console.log('update');
				getProjectData().then(function(e) {
					_self.update({
						isDataLoaded: true,
						projects: e.projects.reverse()
					});
				});
			},1000);

        });
});

//-----

riot.tag2('right-drawer', '<div class="phantom {state}" onclick="{goHome}"></div> <div class="rightdrawer {state}"> <loader if="{!isDataLoaded}"></loader> <div if="{isDataLoaded}" class="contents"> <div class="cover"> <img class="pic-cover" riot-src="{imgUrl}" alt="{imgAlt}"> </div> <article class="details"> <div class="name">{name}</div> <a href="{link}" class="link">{link}</a> <cite if="{author}" class="author">Author: <a href="{author.url}">{author.name}</a></cite> <p class="text"> {desc} </p> <div class="tags"> <span class="tag" each="{tag in projectTags}" onclick="{TopBarComponent.filterByTag}">#{tag.trim().toLowerCase()} </span> </div> </acticle> <div if="{link}" class="sitelink"> <a href="{link}" target="_blank" rel="nofollow" class="button-primary">Go To Website</a> </div> </div> </div>', '', '', function(opts) {
    var _self=this;
    _self.isDataLoaded=false;
    _self.state="closed";
    _self.projectTags=[];
    this.on("mount",function(){
      this.root.closeDrawer=function(){
        _self.update({
          state:"closed"
        });
      }

      this.goHome=function(){
        riot.route("/");
      }

      this.root.openDrawer=function(projectid){
        var project=null;
        getProjectData().then(function(e) {
            _self.update({
                isDataLoaded:true
            });
            var projectData=e.projects;
            for(var projectIndex=0;projectIndex<projectData.length;projectIndex++){
              if(projectData[projectIndex].id===projectid){
                project=projectData[projectIndex];
                break;
              }
            }
            if(project){
              _self.update({
                name:project.name,
                link:project.url,
                imgUrl:project.imgUrl,
                imgAlt:project.imgAlt,
                desc:project.desc,
                projectTags: project.tags.split(","),
                state:"opened",
                author: project.author || false
              });
            }
        });
      }
    })
});


//-----

riot.tag2('rightside-bar', '<div class="side-bar right-bar"> <a href="javascript:void(0);" class="right-bar-toggle"> <i class="zmdi zmdi-close-circle-o"></i> </a> <h4 class="">Notifications</h4> <div class="notification-list nicescroll"> <ul class="list-group list-no-border user-list"> <li class="list-group-item"> <a href="#" class="user-list-item"> <div class="avatar"> <img src="assets/images/users/avatar-2.jpg" alt=""> </div> <div class="user-desc"> <span class="name">Michael Zenaty</span> <span class="desc">There are new settings available</span> <span class="time">2 hours ago</span> </div> </a> </li> <li class="list-group-item"> <a href="#" class="user-list-item"> <div class="icon bg-info"> <i class="zmdi zmdi-account"></i> </div> <div class="user-desc"> <span class="name">New Signup</span> <span class="desc">There are new settings available</span> <span class="time">5 hours ago</span> </div> </a> </li> <li class="list-group-item"> <a href="#" class="user-list-item"> <div class="icon bg-pink"> <i class="zmdi zmdi-comment"></i> </div> <div class="user-desc"> <span class="name">New Message received</span> <span class="desc">There are new settings available</span> <span class="time">1 day ago</span> </div> </a> </li> <li class="list-group-item active"> <a href="#" class="user-list-item"> <div class="avatar"> <img src="assets/images/users/avatar-3.jpg" alt=""> </div> <div class="user-desc"> <span class="name">James Anderson</span> <span class="desc">There are new settings available</span> <span class="time">2 days ago</span> </div> </a> </li> <li class="list-group-item active"> <a href="#" class="user-list-item"> <div class="icon bg-warning"> <i class="zmdi zmdi-settings"></i> </div> <div class="user-desc"> <span class="name">Settings</span> <span class="desc">There are new settings available</span> <span class="time">1 day ago</span> </div> </a> </li> </ul> </div> </div>', '', '', function(opts) {
        var self = this;

        self.on('mount', function() {
            console.log('rightside-bar load');

        });

});

//-----

riot.tag2('task-detail', '<loader if="{!isDataLoaded}"></loader> <div class="row"> <div class="col-sm-12"> <div class="btn-group pull-right m-t-15"> <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button> <ul class="dropdown-menu" role="menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li class="divider"></li> <li><a href="#">Separated link</a></li> </ul> </div> <h4 class="page-title">Task Detail {id}</h4> </div> </div> <div class="row"> <div class="col-md-8"> <div class="card-box task-detail"> <div class="dropdown pull-right"> <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a> <ul class="dropdown-menu" role="menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li class="divider"></li> <li><a href="#">Separated link</a></li> </ul> </div> <div class="media m-b-20"> <div class="media-left"> <a href="#"> <img class="media-object img-circle" alt="64x64" src="assets/images/users/avatar-2.jpg" style="width: 48px; height: 48px;"> </a> </div> <div class="media-body"> <h4 class="media-heading m-b-0">Michael Zenaty</h4> <span class="label label-danger">Urgent</span> </div> </div> <h4 class="font-600 m-b-20">Code HTML email template for welcome email</h4> <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. </p> <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. </p> <ul class="list-inline task-dates m-b-0 m-t-20"> <li> <h5 class="font-600 m-b-5">Start Date</h5> <p> 22 March 2016 <small class="text-muted">1:00 PM</small></p> </li> <li> <h5 class="font-600 m-b-5">Due Date</h5> <p> 17 April 2016 <small class="text-muted">12:00 PM</small></p> </li> </ul> <div class="clearfix"></div> <div class="task-tags m-t-20"> <h5 class="font-600">Tags</h5> <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> </div> <div class="assign-team m-t-30"> <h5 class="font-600 m-b-5">Assign to</h5> <div> <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-2.jpg"> </a> <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-3.jpg"> </a> <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-5.jpg"> </a> <a href="#"> <img class="img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-8.jpg"> </a> <a href="#"><span class="add-new-plus"><i class="zmdi zmdi-plus"></i> </span></a> </div> </div> <div class="attached-files m-t-30"> <h5 class="font-600">Attached Files </h5> <div class="files-list"> <div class="file-box"> <a href=""><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a> <p class="font-13 m-b-5 text-muted"><small>File one</small></p> </div> <div class="file-box"> <a href=""><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a> <p class="font-13 m-b-5 text-muted"><small>Attached-2</small></p> </div> <div class="file-box"> <a href=""><img src="assets/images/attached-files/img-3.png" class="img-responsive img-thumbnail" alt="attached-img"></a> <p class="font-13 m-b-5 text-muted"><small>Dribbble shot</small></p> </div> <div class="file-box m-l-15"> <div class="fileupload add-new-plus"> <span><i class="zmdi-plus zmdi"></i></span> <input type="file" class="upload"> </div> </div> </div> <div class="row"> <div class="col-sm-12"> <div class="text-right m-t-30"> <button type="submit" class="btn btn-success waves-effect waves-light"> Save </button> <button type="button" class="btn btn-default waves-effect">Cancel </button> </div> </div> </div> </div> </div> </div> <div class="col-md-4"> <div class="card-box"> <div class="dropdown pull-right"> <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a> <ul class="dropdown-menu" role="menu"> <li><a href="#">Action</a></li> <li><a href="#">Another action</a></li> <li><a href="#">Something else here</a></li> <li class="divider"></li> <li><a href="#">Separated link</a></li> </ul> </div> <h4 class="header-title m-t-0 m-b-30">Comments (6)</h4> <div> <div class="media m-b-10"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-1.jpg"> </a> </div> <div class="media-body"> <h4 class="media-heading">Mat Helme</h4> <p class="font-13 text-muted m-b-0"> <a href="" class="text-primary">@Michael</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p> <a href="" class="text-success font-13">Reply</a> </div> </div> <div class="media m-b-10"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-2.jpg"> </a> </div> <div class="media-body"> <h4 class="media-heading">Media heading</h4> <p class="font-13 text-muted m-b-0"> <a href="" class="text-primary">@Michael</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p> <a href="" class="text-success font-13">Reply</a> <div class="media"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-3.jpg"> </a> </div> <div class="media-body"> <h4 class="media-heading">Nested media heading</h4> <p class="font-13 text-muted m-b-0"> <a href="" class="text-primary">@Michael</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odiot. </p> <a href="" class="text-success font-13">Reply</a> </div> </div> </div> </div> <div class="media m-b-10"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-1.jpg"> </a> </div> <div class="media-body"> <h4 class="media-heading">Mat Helme</h4> <p class="font-13 text-muted m-b-0"> <a href="" class="text-primary">@Michael</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p> <a href="" class="text-success font-13">Reply</a> </div> </div> <div class="media m-b-10"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-2.jpg"> </a> </div> <div class="media-body"> <h4 class="media-heading">Media heading</h4> <p class="font-13 text-muted m-b-0"> <a href="" class="text-primary">@Michael</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p> <a href="" class="text-success font-13">Reply</a> <div class="media"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-3.jpg"> </a> </div> <div class="media-body"> <h4 class="media-heading">Nested media heading</h4> <p class="font-13 text-muted m-b-0"> <a href="" class="text-primary">@Michael</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odiot. </p> <a href="" class="text-success font-13">Reply</a> </div> </div> </div> </div> <div class="media"> <div class="media-left"> <a href="#"> <img class="media-object img-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-1.jpg"> </a> </div> <div class="media-body"> <input type="text" class="form-control input-sm" placeholder="Some text value..."> </div> </div> </div> </div> </div> </div>', '', '', function(opts) {
	console.log(opts);
        var _self = this;
        this.isDataLoaded = false;
		this.id = opts.id;
        this.projects = [];
        this.on("mount", function() {
			console.log('mount task load');
			_self.update({
                    isDataLoaded: true
                });

        });
});


//-----

riot.tag2('top-bar', '<div class="top-bar__mobile-menu" ref="mobileMenu"> <div class="top-bar__search-bar"> <svg class="svg-icon" role="img" title="Preview Mode" width="22"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-search"></use> </svg> <input type="text" name="inputSearch" ref="inputSearch" placeholder="Search" onkeyup="{filterCards}"> </div> <a each="{opts.menu}" href="{url}" class="top-bar__link {state--attention: isImportant}"> {text} </a> </div> <header class="top-bar" ref="mainTopBar"> <div class="container"> <div class="top-bar__mobile-trigger" onclick="{toggleMobileMenu}"> <svg class="svg-icon icon-menu" role="img" title="Preview Mode" width="22"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-menu"></use> </svg> <svg class="svg-icon icon-close" role="img" title="Preview Mode" width="18"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-close"></use> </svg> </div> <div class="top-bar__search-bar"> <svg class="svg-icon" role="img" title="Preview Mode" width="22"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-search"></use> </svg> <input type="text" name="inputSearch" ref="inputSearch" placeholder="Search" onkeyup="{filterCards}"> </div> <div class="top-bar__landing"> <img riot-src="{opts.logoUrl}" alt="{opts.logoAlt}" width="147"> <h1>{opts.slogan}</h1> </div> <div class="top-bar__right-menu"> <a each="{opts.menu}" href="{url}" class="top-bar__link {state--attention: isImportant}"> {text} </a> </div> </div> </header> <header class="top-bar state--compact" ref="compactTopBar"> <div class="container"> <div class="top-bar__mobile-trigger" onclick="{toggleMobileMenu}"> <svg class="svg-icon icon-menu" role="img" title="Preview Mode" width="22"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-menu"></use> </svg> <svg class="svg-icon icon-close" role="img" title="Preview Mode" width="18"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-close"></use> </svg> </div> <div class="top-bar__search-bar"> <svg class="svg-icon" role="img" title="Preview Mode" width="22"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/all.min.svg#icon-search"></use> </svg> <input type="text" name="inputSearchCompact" ref="inputSearchCompact" placeholder="Search" onkeyup="{filterCards}"> </div> <div class="top-bar__landing"> <img riot-src="{opts.logoUrl}" alt="{opts.logoAlt}" width="147"> </div> <div class="top-bar__right-menu"> <a each="{opts.menu}" href="{url}" class="top-bar__link {state--attention: isImportant}"> {text} </a> </div> </div> </header>', '', '', function(opts) {
        var self = this;
        var visibleClass = 'state--visible';
        var styleElement = document.createElement('STYLE');

        self.on('mount', function() {

            self.isMenuOpen = false;

            self.cards = document.querySelector(opts.cardSelector);

            self.refs.mainTopBar.querySelector('.top-bar__mobile-trigger .icon-menu').classList.add('active');
            self.refs.compactTopBar.querySelector('.top-bar__mobile-trigger .icon-menu').classList.add('active');

            document.addEventListener('scroll', function() {

                if(window.pageYOffset < window.innerHeight) {

                    var scaleRatio = 1 - Math.floor(pageYOffset) * 0.0003;
                    var opacityRatio = 1 - Math.floor(pageYOffset) * 0.008;
                    var moveRatio = 1 - Math.floor(pageYOffset) * 0.5;

                    var transformValue = 'scale(' + scaleRatio + ') translate3d(0, ' + moveRatio + 'px, 0)';

                    self.refs.mainTopBar.style.webkitTransform = transformValue;
                    self.refs.mainTopBar.style.transform = transformValue;
                    self.refs.mainTopBar.style.opacity = opacityRatio;
                }

                if(window.pageYOffset > window.innerHeight / 5) {
                    self.showCompactMenu();
                    self.hideMainTopBar();
                }

                if(window.pageYOffset <= window.innerHeight / 5) {
                    self.hideCompactMenu();
                }

            });
        });

        this.hideMainTopBar = function() {
            self.refs.mainTopBar.style.opacity = 0;
        }.bind(this)

        this.showCompactMenu = function() {
            console.log()
            if(!self.refs.compactTopBar.classList.contains(visibleClass)) {
                self.refs.compactTopBar.classList.add(visibleClass);
            }
        }.bind(this)

        this.hideCompactMenu = function() {
            if(self.refs.compactTopBar.classList.contains(visibleClass)) {
                self.refs.compactTopBar.classList.remove(visibleClass);
            }
        }.bind(this)

        this.filterByTag = function(event) {
            var tagText = event.item.tag;
            var filterObject = {
                target: {
                    value: tagText
                }
            };

            this.refs.inputSearch.forEach(function(el) {
                el.value = tagText;
            });

            this.refs.inputSearchCompact.value = tagText;

            this.filterCards(filterObject);

            riot.route('/');
            window.location.hash = '';

        }.bind(this)

        this.filterCards = function(e) {
            var value = e.target.value;

            if(e.target.name == 'inputSearch') {

                console.log(e.target.parentNode.parentNode === this.refs.mobileMenu);

                if(e.target.parentNode.parentNode === this.refs.mobileMenu) {

                    this.refs.inputSearch[1].value = value;
                }else {

                    this.refs.inputSearch[0].value = value;
                }

                this.refs.inputSearchCompact.value = value;

            }else {
                this.refs.inputSearch.forEach(function(input) {
                    console.log(input);
                    input.value = value;
                });
            }

            if(value == ""){
                styleElement.innerHTML = '';
                document.body.appendChild(styleElement);
            }else{
                styleElement.innerHTML =
                    opts.cardSelector + ' .card-list > :not([data-filter *= "' + value.toLowerCase() + '"]){ display: none; };' +
                    opts.cardSelector + ' .card-list{ animation: fade-in-up 0.3s ease-in-out forwards; };';
                document.body.appendChild(styleElement);
            }

            return true;
        }.bind(this)

        this.toggleMobileMenu = function() {
            if(self.isMenuOpen) {
                self.isMenuOpen = !self.isMenuOpen;
                self.closeMobileMenu();
            }else {
                self.isMenuOpen = !self.isMenuOpen;
                self.openMobileMenu();
            }
        }.bind(this)

        this.openMobileMenu = function() {

            self.clearMobileMenuClasses();

            self.refs.mainTopBar.querySelector('.top-bar__mobile-trigger .icon-menu').classList.remove('active');
            self.refs.mainTopBar.querySelector('.top-bar__mobile-trigger .icon-close').classList.add('active');

            self.refs.compactTopBar.querySelector('.top-bar__mobile-trigger .icon-menu').classList.remove('active');
            self.refs.compactTopBar.querySelector('.top-bar__mobile-trigger .icon-close').classList.add('active');

            self.cards.classList.add('animate','animate-slide-right');
            self.refs.mainTopBar.classList.add('animate','animate-slide-right');
            self.refs.compactTopBar.childNodes[1].classList.add('animate','animate-slide-right');
            self.refs.mobileMenu.classList.add('animate', 'animate-fade-in-up');
        }.bind(this)

        this.closeMobileMenu = function() {

            self.clearMobileMenuClasses();

            self.refs.mainTopBar.querySelector('.top-bar__mobile-trigger .icon-menu').classList.add('active');
            self.refs.mainTopBar.querySelector('.top-bar__mobile-trigger .icon-close').classList.remove('active');

            self.refs.compactTopBar.querySelector('.top-bar__mobile-trigger .icon-menu').classList.add('active');
            self.refs.compactTopBar.querySelector('.top-bar__mobile-trigger .icon-close').classList.remove('active');

            self.cards.classList.add('animate','animate-slide-left');
            self.refs.mainTopBar.classList.add('animate','animate-slide-left');
            self.refs.compactTopBar.childNodes[1].classList.add('animate','animate-slide-left');
            self.refs.mobileMenu.classList.add('animate', 'animate-fade-out-z');
        }.bind(this)

        this.clearMobileMenuClasses = function() {
            self.cards.classList.remove('animate', 'animate-slide-left', 'animate-slide-right');
            self.refs.mainTopBar.classList.remove('animate','animate-slide-left', 'animate-slide-right');
            self.refs.compactTopBar.childNodes[1].classList.remove('animate','animate-slide-left', 'animate-slide-right');
            self.refs.mobileMenu.classList.remove('animate', 'animate-fade-out-z', 'animate-fade-in-up');
        }.bind(this)
});
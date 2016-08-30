<?php 
// TWO MINUTE MOODLE CATEGORY ID
$categoryid = 27;

if(!is_siteadmin()){ //Check if the user is signed in as a user
	$url = strtolower($_SERVER['REQUEST_URI']); //Pull URL from site
	$currentcatid = optional_param('categoryid',-1,PARAM_INT);
	if(strpos($url,"course")==true){
		if(($currentcatid  === $categoryid)){ //Check if on Noodles
			;//Do nothing
		}else if (strpos($url,"id=") == false){ // Check if user is on /course
			redirect (new moodle_url('/my'));
		}
		if (strpos($url,"categoryid")== true){ 
			if($currentcatid  !== $categoryid){ //Redirect out of all top level courses besides Noodles
			redirect (new moodle_url('/my'));
			}
		}
	}
}
?>
<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div><a href="/" class="logo" ></a></div>
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
            <?php echo $OUTPUT->user_menu(); ?>
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


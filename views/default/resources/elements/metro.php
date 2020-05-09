<?php
        echo elgg_view('super_dashboard/css');
?>

<body>
	<div class="metro-layout vertical">
		<div class="header">
		
		</div>
                </br>
		<div class="content clearfix">
			<div class="items">


<?php

//Messages Plugin Metro Dashboard Menu
$user = elgg_get_page_owner_entity();
if(elgg_is_active_plugin(messages))
{

?>
<a class="box" href="<?php echo elgg_get_site_url(); ?>messages/inbox/<?php  echo $user->username; ?>">

<span>Mail</span>
<span class="super-dashboard-elgg-icon fa fa-inbox"></span>
</a>


<?php

}

//End of Messages Plugin Metro Dashboard Menu
?>



<a class="box" href="<?php echo elgg_get_site_url(); ?>settings/user/<?php echo $user->username; ?>" style="background: #6b6b6b;">
<span>My Settings</span>
<span class="super-dashboard-elgg-icon fa fa-cogs"></span>
</a>


<a class="box" href="<?php echo elgg_get_site_url(); ?>profile/<?php echo $user->username; ?>/edit" style="background: #43b51f;">
<span>Edit Profile</span>
 
    <span class="super-dashboard-elgg-icon fa fa-address-card"></span>
            
     
</a>
    



<?php

//The Wire Plugin Metro Dashboard Menu

if(elgg_is_active_plugin(thewire))
{

?>

<a class="box" href="<?php echo elgg_get_site_url(); ?>thewire/all/" style="background: #00aeef;">

<span>The Wire</span>
<span class="super-dashboard-elgg-icon fa fa-paper-plane"></span>
</a>


<?php

}

//End of The Wire Plugin Metro Dashboard Menu
?>



<?php

//Blogs Plugin Metro Dashboard Menu

if(elgg_is_active_plugin(blog))
{

?>

<a class="box" href="<?php echo elgg_get_site_url(); ?>blog/all" style="background: #f58d00;">

<span>Blogs</span>
<span class="super-dashboard-elgg-icon fa fa-pencil-square"></span>
</a>

<?php

}

//End of Blogs Plugin Metro Dashboard Menu
?>

			

<?php

//Groups Plugin Metro Dashboard Menu

if(elgg_is_active_plugin(groups))
{

?>

<a class="box height2" href="<?php echo elgg_get_site_url(); ?>groups/all" style="background: #d32c2c;">

<span>Groups</span>
<span class="super-dashboard-elgg-icon fa fa-users"></span>
</a>

<?php

}

//End of Groups Plugin Metro Dashboard Menu
?>


<a class="box" href="<?php echo elgg_get_site_url(); ?>activity" style="background: #ffc808;">

<span>Site Activity</span>
<span class="super-dashboard-elgg-icon fa fa-spinner"></span>
</a>


<?php

//Bookmarks Plugin Metro Dashboard Menu

if(elgg_is_active_plugin(bookmarks))
{

?>

<a class="box" href="<?php echo elgg_get_site_url(); ?>bookmarks/all" style="background: #00a9ec;">
<span>Bookmarks</span>
<span class="super-dashboard-elgg-icon fa fa-link"></span>
</a>

<?php

}

//End of Bookmarks Plugin Metro Dashboard Menu
?>


<?php

//Event Calendar Plugin Metro Dashboard Menu

if(elgg_is_active_plugin(event_calendar))
{

?>
<a class="box height2" href="<?php echo elgg_get_site_url(); ?>event_calendar/list/" style="background: #4c5e51;">

<span>Event Calendar</span>
<span class="super-dashboard-elgg-icon fa fa-calendar"></span>
</a>

<?php

}

//End of Event Calendar Plugin Metro Dashboard Menu
?>


<a class="box" href="<?php echo elgg_get_site_url(); ?>avatar/edit/<?php echo $user->username; ?>" style="background: #f874a4;">

<span>Edit Avatar</span>
<span class="super-dashboard-elgg-icon fa fa-id-badge"></span>
</a>
<?php

//Files Plugin Metro Dashboard Menu

if(elgg_is_active_plugin(file))
{

?>

                            <a class="box" href="<?php echo elgg_get_site_url(); ?>file/owner/<?php echo $user->username; ?>" style="background: #43b51f;">
<span>Files</span>
 
    <span class="super-dashboard-elgg-icon fa fa-file-image-o"></span>
            
     
</a>


<?php

}

//End of Files Plugin Metro Dashboard Menu
?>

			</div>
		</div>
	</div>
</body>
</html>


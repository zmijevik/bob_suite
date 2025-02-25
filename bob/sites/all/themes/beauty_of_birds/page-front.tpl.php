<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
  <head>
    <title><?php print $head_title ?></title>

    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <?php require ('includes/box_layout.php');?>

    <!--[if IE 6]>
    <script type="text/javascript" src="<?php print $base_path ?>sites/all/themes/beauty_of_birds/js/DD_belatedPNG.js"></script>
	  <script type="text/javascript">
        DD_belatedPNG.fix('#site-logo img, .sidebox-left h3, .sidebox-right h3');
	  </script>
      <style type="text/css" media="all">@import "<?php echo $base_path ?>sites/all/themes/beauty_of_birds/ie6.css";</style>
    <![endif]-->

    <!--[if IE]>
      <style type="text/css"> .width33 { width: 33.3%; } </style>
    <![endif]-->

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-431871-2']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

  </head>

  <body<?php print phptemplate_body_class($left, $right); ?>>

<div id="wrapper-top">
	<div id="page-wrapper-top">
		<div class="top-left">
				<?php print date('l, M d, Y'); ?>
		</div>
		<div class="top-right">
		<?php if ($topmenu): ?>
          <div id="topmenu-links">
            <?php print $topmenu ?>
	      </div>
        <?php endif; ?>
		</div>
	</div>
</div>
  <div id="wrapper">

  <div id="page-wrapper">

  <div id="header-wrapper" class="clear-block">

<!-- If Site Logo Enabled -->
    <?php if ($logo) { ?>
	  <div id="site-logo">
        <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"></a>
		  <?php if ($site_slogan) { ?>
		    <div class='site-slogan-logo'>
		      <h2>
			    <?php print $site_slogan ?>
			  </h2>
		    </div>
		  <?php } ?>
	  </div>
	<?php } ?>

<!-- If Site Name Enabled -->
	<?php if ($site_name) { ?>
	  <div id="site-name">
	    <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a>
	      <?php if ($site_slogan) { ?>
	        <div class='site-slogan'>
		      <h2><?php print $site_slogan ?></h2>
		    </div>
		  <?php } ?>
	  </div>
	<?php } ?>

<!-- If Search Box Enabled -->
	<?php if ($search_box): ?>
      <div id="search-box">
        <?php print $search_box; ?>
      </div>
    <?php endif; ?>

  </div><!-- End of header-wrapper -->

<!-- Primary Links -->
	    <?php if ($primary): ?>
          <div id="primary-links">
            <?php print $primary ?>
	      </div>
        <?php endif; ?>

<!-- Secondary Links -->
	    <?php if ($secondary): ?>
          <div id="secondary-links"  class="clear-block">
            <?php print $secondary ?>
	      </div>
        <?php endif; ?>

<!-- Top User Regions -->
    <?php if ($user1 || $user2 || $user3) { ?>
      <div id="topboxes" class="clear-block">
	    <?php if ($user1) { ?>
		  <div class="userbox <?php echo $topBoxes; ?>">
		    <div class="userbox-inner">
              <?php print $user1 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($user2) { ?>
		  <div class="userbox <?php echo $topBoxes; ?>">
		    <div class="userbox-inner">
              <?php print $user2 ?>
	        </div>
		  </div>
        <?php }?>
        <?php if ($user3) { ?>
		  <div class="userbox <?php echo $topBoxes; ?>">
		    <div class="userbox-inner">
              <?php print $user3 ?>
		    </div>
		  </div>
        <?php }?>
      </div><!-- End of Top User Regions -->
    <?php } ?>
                                                <div class="topbanner">
                                                    <script type="text/javascript"><!--
                                                        google_ad_client = "pub-0084318997604431";
                                                        /* 728x90, created 10/20/11 */
                                                        google_ad_slot = "5632434705";
                                                        google_ad_width = 728;
                                                        google_ad_height = 90;
                                                        //-->
                                                        </script>
                                                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

	  					</div>
<!-- Left Sidebar -->
   	 			<?php if ($left) { ?>
	  					<div class="sidebar-left">
        						<?php  print $left; ?>
	  					</div>
    			<?php } ?>
<!-- Main Layout Div & Conditional Statement -->
    <div id="middle-wrapper" class="clear-block">
    	<div id="main-con2" <?php if($topbanner && $right){ ?>style="width:730px;" <?php } else{ ?>style="float:left;" <?php  } ?>>
	  					

		<!-- Main Content Area -->


			<div id="main-content" <?php if($topbanner){ ?>style="margin-right:0px;" <?php } ?>>
	  			<div id="squeeze" <?php if($topbanner && $left){ ?>style="margin:0 0 0 250px;"<?php } ?> <?php if($topbanner && $right){ ?>style="margin:0 0 0 0px;"<?php } ?>  >
	    			<div id="main-content-inner-left"><div id="main-content-inner-right"><div id="main-content-inner">
        				 <?php global $user;  print $tabs;?>
						<?php print $contenttop ?>

          				<?php if ($breadcrumb) { ?>
		    			<div class="clear-block">
        	 	 			<?php print $breadcrumb ?>
		   	 			</div>
         	 			<?php } ?>

         	 			<?php if ($title) { ?>
		    			<div class="node-title"><div class="node-title-left"><div class="node-title-right">
			 	 		<div class="node-title-inner">	<?php print $title ?></div>
						</div></div></div>
	     				 <?php } ?>
          				<?php print $help ?>
         	 			<?php print $messages ?>
         	 			<?php print $content; ?>
         	 			<?php print $feed_icons; ?>
        			  		 <?php if (arg(0)=="user") { ?>
 				<?php if ($userdetailslist) { ?>
						 <div id="user-account">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userdetailslist ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                        <div class=""></div>
                   <?php } ?>
                   <?php if ((arg(0).'/'.arg(1)=="user".'/'.arg(1) || arg(2)=="All" || arg(2)=="onlyPhotos" || arg(2) == "onlyPhotoslist") && arg(2)!="onlySounds" && arg(2)!="onlyVideos" && arg(2) != "onlyVideosthumb" && $userdetailsall) { ?>

              <div class="top-images"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/user/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
			             <?php $view = views_get_view('user_information_all');
							   $view->execute();
							   $count = count( $view->result);
							    print $count; ?>
			     Photos</a>
			   </div>
     				  <div id="user-account-all">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userdetailsall ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                    <?php }elseif(arg(2) == "onlyVideosthumb"){ ?>

                   <div class="top-images"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/user/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
                   <?php $view = views_get_view('user_information_all');
						 $view->execute();
						 $count = count( $view->result);
						  print $count; ?>
			    Photos</a>
			    </div>
                    	  <div id="user-account-all">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userthumbssall ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                     <?php } ?>
                   <?php if ((arg(0).'/'.arg(1)=="user".'/'.arg(1) || arg(2)=="All" || arg(2)=="onlyVideos" || arg(2) == "onlyPhotoslist") && arg(2)!="onlySounds" && arg(2)!="onlyPhotos" && arg(2) != "onlyVideosthumb" && $userdetailsvideo) { ?>

     	<div class="top-videos"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/user/<?php print $uid ?>/<?php print $varcart="onlyVideos"; ?>">
			     	<?php $view = views_get_view('user_information_video');
						  $view->execute();
						  $count = count( $view->result);
						  print $count; ?>
			    Videos</a></div>

     				  <div id="user-account-video">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userdetailsvideo ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                    <?php }elseif(arg(2) == "onlyVideosthumb"){ ?>
                  <div class="top-videos"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/user/<?php print $uid ?>/<?php print $varcart="onlyVideos"; ?>">
				     	<?php $view = views_get_view('user_information_video');
							  $view->execute();
							  $count = count( $view->result);
							  print $count; ?>
				     Videos</a>
				</div>

                    	  <div id="user-account-all">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userthumbsvideo ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                     <?php } ?>

                   <?php if ((arg(0).'/'.arg(1)=="user".'/'.arg(1) || arg(2)=="All" || arg(2)=="onlySounds" || arg(2) == "onlyPhotoslist") && arg(2)!="onlyVideos" && arg(2)!="onlyPhotos" && arg(2) != "onlyVideosthumb" && $userdetailsaudio) { ?>
          <div class="top-audio"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/user/<?php print $uid ?>/<?php print $varcart="onlySounds"; ?>">
				     	<?php $view = views_get_view('user_information_audio');
							  $view->execute();
							  $count = count( $view->result);
							  print $count; ?>
			   Audios</a></div>

                        <div id="user-account-audio">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userdetailsaudio ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                    <?php }elseif(arg(2) == "onlyVideosthumb"){ ?>

               <div class="top-audio"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/user/<?php print $uid ?>/<?php print $varcart="onlySounds"; ?>">
				     	<?php $view = views_get_view('user_information_audio');
							  $view->execute();
							  $count = count( $view->result);
							  print $count; ?>
			       Audios</a>
			   </div>
                    	  <div id="user-account-all">
							<div id="user-account-top"></div>
         	 				  <div class="user-details-list">
         	 				    <?php print $userthumbsaudio ?>
							 </div>
							 <div id="user-account-bottom"></div>
                        </div>
                     <?php } ?>
        <?php } ?>

  <?php if (arg(0)=="birds-speacial") { ?>

  <?php if ((arg(0)=="birds-speacial" || arg(2)=="All" || arg(2)=="onlyPhotos" || arg(2) == "onlyPhotoslist") && arg(2)!="onlySounds" && arg(2)!="onlyVideos" && arg(2) != "onlyVideosthumb" && $termdetailsall) { ?>

              <div class="top-images"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/birds-speacial/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
			             <?php $view = views_get_view('term_information_images');
							   $view->execute();
							   $count = count( $view->result);
							    print $count; ?>
			     Photos</a>
			   </div>

                        <div id="term-account-all">
							<div id="term-account-top"></div>
         	 				  <div class="term-details-list">
         	 				    <?php print $termdetailsall ?>
							 </div>
							 <div id="term-account-bottom"></div>
                        </div>
             <?php }elseif(arg(2) == "onlyVideosthumb"){ ?>

            <div class="top-images"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/birds-speacial/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
                   <?php $view = views_get_view('term_information_images');
						 $view->execute();
						 $count = count( $view->result);
						  print $count; ?>
			    Photos</a>
			    </div>

                      <div id="term-account-all">
							<div id="term-account-top"></div>
         	 				  <div class="term-details-list">
         	 				    <?php print $termthumbssall ?>
							 </div>
							 <div id="term-account-bottom"></div>
                        </div>
                <?php }?>

  <?php if ((arg(0)=="birds-speacial" || arg(2)=="All" || arg(2)=="onlyVideos" || arg(2) == "onlyPhotoslist") && arg(2)!="onlySounds" && arg(2)!="onlyPhotos" && arg(2) != "onlyVideosthumb" && $termdetailsvideo) { ?>

              <div class="top-images1"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/birds-speacial/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
			             <?php $view = views_get_view('term_information_video');
							   $view->execute();
							   $count = count( $view->result);
							    print $count; ?>
			     Photos</a>
			   </div>

                        <div id="term-account-video">
							<div id="term-account-top"></div>
         	 				  <div class="term-details-list">
         	 				    <?php print $termdetailsvideo ?>
							 </div>
							 <div id="term-account-bottom"></div>
                        </div>
      <?php }elseif(arg(2) == "onlyVideosthumb"){ ?>

      	            <div class="top-images1"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/birds-speacial/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
                   <?php $view = views_get_view('term_information_video');
						 $view->execute();
						 $count = count( $view->result);
						  print $count; ?>
			    Videos</a>
			    </div>

                   <div id="term-account-video">
							<div id="term-account-top"></div>
         	 				  <div class="term-details-list">
         	 				    <?php print $termthumbsvideo ?>
							 </div>
							 <div id="term-account-bottom"></div>
                        </div>

      <?php }?>

        <?php if ((arg(0)=="birds-speacial" || arg(2)=="All" || arg(2)=="onlySounds" || arg(2) == "onlyPhotoslist") && arg(2)!="onlyVideos" && arg(2)!="onlyPhotos" && arg(2) != "onlyVideosthumb" && $termdetailsvideo) { ?>

              <div class="top-images1"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/birds-speacial/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
			             <?php $view = views_get_view('term_information_audio');
							   $view->execute();
							   $count = count( $view->result);
							    print $count; ?>
			     Sounds</a>
			   </div>

                        <div id="term-account-audio">
							<div id="term-account-top"></div>
         	 				  <div class="term-details-list">
         	 				    <?php print $termdetailsaudio ?>
							 </div>
							 <div id="term-account-bottom"></div>
                        </div>

     <?php }elseif(arg(2) == "onlyVideosthumb"){ ?>

      	            <div class="top-images1"><a href="<?php $uid=arg(1); global $base_url; print $base_url; ?>/birds-speacial/<?php print $uid ?>/<?php print $varcart="onlyPhotos"; ?>">
                   <?php $view = views_get_view('term_information_audio');
						 $view->execute();
						 $count = count( $view->result);
						  print $count; ?>
			    Videos</a>
			    </div>

                        <div id="term-account-video">
							<div id="term-account-top"></div>
         	 				  <div class="term-details-list">
         	 				    <?php print $termthumbsaudio ?>
							 </div>
							 <div id="term-account-bottom"></div>
                        </div>
    <?php }?>
   <?php } ?>


        		</div></div></div>


        		<div id="main-content-inner-bottom"><?php print $contentbottom ?></div>
	  		</div>



		</div>
</div>


<!-- Right Sidebar -->
    <?php if ($right) { ?>
	  <div class="sidebar-right">
        <?php print $right ?>
	  </div>
    <?php } ?>
    </div>
    <?php if($node->type=="image" || $node->type == "video") { ?>
	  <div class="latest-video"><span class="species">More material of this species</span>
        <?php print $latestvideo ?>
	  </div>
	  <div class="gmap">
        <?php print $gmap ?>
	  </div>

	  <div class="commentedb"><span class="species">Comments</span>
	     <?php  print $commentedb ?>
	  	          <div class="commentedb1"><span class="ratephoto"><a href="<?php global $base_url; print $base_url; ?>/<?php print $node->links['comment_add']['href']; ?>">Add new comment</a> </div>
					<div class="commentedb2"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="http://locatefirms.com/jenni/beautyofbirds" num_posts="1" width="480"></fb:comments></div>
	  </div>
	  <div class="latestvideouser"><span class="species">Recent material by </span>
        <?php print $latestvideouser ?>
	  </div>
   <?php } ?>


<?php

//remove the bottom ad
/*
<div id="bottom_ad">
    <script type="text/javascript"><!--
        google_ad_client = "pub-0084318997604431";
        google_ad_slot = "5632434705";
        google_ad_width = 728;
        google_ad_height = 90;
       //-->
    </script>
    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script> 
</div>
*/
?>
<!-- Bottom-upper User Regions -->
    <?php if ($bottomleft || $bottomright) { ?>
      <div id="bottom-left" class="clear-block">
	    <?php if ($bottomleft) { ?>
	      <div class="bottom-inner-left <?php echo $bottomBoxes_left; ?>">
		    <div class="userbox-bottom-left-inner">
              <?php print $bottomleft ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($bottomright) { ?>
	      <div class="bottom-inner-right <?php echo $bottomBoxes_right; ?>">
		    <div class="userbox-bottom-right-inner"><div class="userbox-bottom-right-inner-right">
              <?php print $bottomright ?>
		    </div></div>
	  	</div>
        <?php }?>
      </div><!-- End of Bottom upper User Regions -->
    <?php } ?>


<!-- Bottom User Regions -->
    <?php if ($user4 || $user5 || $user6) { ?>
      <div id="bottomboxes" class="clear-block">
	    <?php if ($user4) { ?>
	      <div class="userbox-bottom <?php echo $bottomBoxes; ?>">
		    <div class="userbox-bottom-inner">
              <?php print $user4 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($user5) { ?>
	      <div class="userbox-bottom <?php echo $bottomBoxes; ?>">
		    <div class="userbox-bottom-inner">
              <?php print $user5 ?>
		    </div>
	  	</div>
        <?php }?>
        <?php if ($user6) { ?>
	      <div class="userbox-bottom <?php echo $bottomBoxes; ?>">
		    <div class="userbox-bottom-inner">
              <?php print $user6 ?>
		    </div>
		  </div>
        <?php }?>
      </div><!-- End of Bottom User Regions -->
    <?php } ?>

      <div id="bottom_ad2">
        <script type="text/javascript"><!--
        google_ad_client = "pub-0084318997604431";
        /* 728x90, created 10/20/11 */
        google_ad_slot = "5632434705";
        google_ad_width = 728;
        google_ad_height = 90;
        //-->
        </script>
        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
    </div>

<!-- The All Knowing All Seeing Footer Block -->
    <div id="footer" class="clear-block">
	  <?php print $footer ?>
	  <div style="text-align: center; padding: 5px; font-size: 0.9em;color:#FFFFFF;">
	   &copy; 2011 beautyofbirds.com - All Rights Reserved. <a style="text-align: center; padding: 5px; font-size: 0.9em;color:#FFFFFF;font-family: 'Arial, Helvetica, sans-serif';font-size: 12px" href="/terms-use-copyright-restrictions">Terms Of Use / Copyright Restrictions</a>
	  </div>
	</div>

<!-- Script Closure -->
    <?php print $closure ?>

  </div><!-- End of page-wrapper -->
  </div>
  </body>
</html>

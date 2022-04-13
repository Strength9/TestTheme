<?php
$socialmedia = get_field('social_media','options'); 

$site_title = get_bloginfo( 'name' );
if (!empty($socialmedia['facebook_link'])) { $social .= '<li><a href="'.$socialmedia['facebook_link'].'" title="Find us on Facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a></li>';} ;

if (!empty($socialmedia['tik_tok_link'])) { $social .= '<li><a href="'.$socialmedia['tik_tok_link'].'" title="Connect on Linked In" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a></li>';} ;

if (!empty($socialmedia['twitter_link'])) { $social .= '<li><a href="'.$socialmedia['twitter_link'].'"  title="Follow the tweets on twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>';} ;

if (!empty($socialmedia['instagram_link'])) { $social .= '<li><a href="'.$socialmedia['instagram_link'].'" title="Watch us on Instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>';} ;
 
if (!empty($socialmedia['linkedIn_link'])) { $social .= '<li><a href="'.$socialmedia['linkedIn_link'].'" title="Connect with us on Linkedin" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></li>';} ;


if (!empty(get_field('contact_email_address','options'))) { 
	$email= '<li><a href="mailto:'.get_field('contact_email_address','options').'" title="Email The Team" >e: '.get_field('contact_email_address','options').'</a></li>';
	$addemail = '<a href="mailto:'.get_field('contact_email_address','options').'" title="Email The Team" >'.get_field('contact_email_address','options').'</a>';
} ;

if (!empty(get_field('contact_phone_number','options'))) { 

	$valye = str_replace("(0)", "", str_replace(" ", "", get_field('contact_phone_number','options'))); 
	$phone= '<li><a href="tel:'.$valye.'" title="Call The Team" >t: '.get_field('contact_phone_number','options').'</a></li>';
} ;

$addressbar =  str_replace("e: ","",str_replace("</li>","",str_replace("<li>","",$phone)))." • ".str_replace(", "," • ",get_field('address','options'))." • ".$addemail;


?>


<footer>
	
	

	<div class="copyrightbar">
		<div>Copyright © <?php echo date("Y",strtotime("-1 year")).' '.
	$site_title;?> | Site by <a href="https://www.njgraphique.co.uk/" title="NJ Graphique" target="_new">NJGraphique</a></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

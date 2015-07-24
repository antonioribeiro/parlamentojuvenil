<?php

class Service
{
	function posts($facebookId)
	{
		$url = "http://graph.facebook.com/".$facebookId."/feed?limit=3";

		// Update by MC Vooges 11jun 2014: Access token is now required:
		$url.= '&access_token=YOUR_TOKEN|YOUR_ACCESS_SECRET';// *

		//load and setup CURL
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

		//get data from facebook and decode JSON
		$page = json_decode(curl_exec($c));

		//close the connection
		curl_close($c);

		//return the data as an object
		return $page->data;
	}

	public function getPosts()
	{
		/* Change These Values */
		// Your Facebook ID
		$fbid = "190506416472588";

		// How many posts to show?
		$fbLimit = 10;

		// Your Timezone
		date_default_timezone_set("America/Chicago");

		/* Dont Change */
		// Variable used to count how many we’ve loaded
		$fbCount = 0;

		// Call the function and get the posts from facebook
		$myPosts = loadFB($fbid);


		//loop through all the posts we got from facebook
		foreach($myPosts as $dPost){
			//only show posts that are posted by the page admin
			if($dPost->from->id==$fbid){
				//get the post date / time and convert to unix time
				$dTime = strtotime($dPost->created_time);
				//format the date / time into something human readable
				//if you want it formatted differently look up the php date function
				$myTime=date("M d Y h:ia",$dTime);
				?>
				<ul>
					<li><?php echo($dPost->message) . $myTime; ?></li>
				</ul>
				<?php
				//increment counter
				$fbCount++;
				//if we’ve outputted the number set above in fblimit we’re done
				if($fbCount >= $fbLimit) break;
			}
		}
	}
}

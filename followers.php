<h2>Followers</h2>
	<h5>list of followers</h5>
	<div class="fakeimg">
	  <img src="img/branch.png" width="100%" alt="">
	</div>
	<p>Some text..</p>
	<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<div class="container"> 
<?php

foreach($followers as $follower)
{ ?>

	<div class="itembox">
		<h3><? echo $follower['login'] . PHP_EOL;?></h3>
		<p><? echo $follower['name'] . PHP_EOL;?></p>
	</div>
<? 
} 
?>
</div>
<h2>Repositories</h2>
	<h5>list of repositories</h5>
	<div class="fakeimg">
	  <img src="img/branch.png" width="100%" alt="">
	</div>
	<p>Some text..</p>
	<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<div class="container">  
<?php

foreach($repositories as $repository)
{ ?>

	<div class="itembox">
		<h3><? echo $repository['name'] . PHP_EOL;?></h3>
		<p><? echo $repository['description'] . PHP_EOL;?></p>
		<div class="languages-update">
			<div class="laguage">
				<? echo $repository['language'] . PHP_EOL;?>
				<span>
				<? foreach ($repository['languages_url'] as $laguage) {
					echo $laguage['name'];
				}?>
				</span>
			</div>
			<div class="update">
				<span><? echo $repository['updated_at'] . PHP_EOL;?></span>
			</div>
		</div>
	</div>


<? } ?>

</div>

<div class="side">
    <h2>About Me</h2>
    <h5><? echo $show['name'];?></h5>
    <div class="fakeimg" style="text-align: center">
      <img src="<? echo $show['avatar_url'];?>" width="100" alt="">
    </div>
    <p><? echo $show['bio'];?><</p>
    <p>Location: <? echo $show['location'];?><</p>
    <p>Blog: <? echo $show['blog'];?><</p>

    <h3>MENU</h3>
    <p>Selecione no menu abaixo para navegar</p>
    <div class="fakeimg" style="height:60px;">
      <a href="repositories" title="">Repositories</a>
    </div><br>
    <div class="fakeimg" style="height:60px;">
      <a href="followers" title="">Followers</a>
    </div><br>
    <div class="fakeimg" style="height:60px;">
      <a href="all" title="">All</a>
    </div><br>
    <div class="fakeimg" style="height:60px;">
      <a href="exit" title="">Exit</a>
    </div>
  </div>
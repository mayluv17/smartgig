


<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./">Smartgig</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> &nbsp;Search</button>
      </form>
      <ul class="nav navbar-nav navbar-left">
        <li><a href="how-it-works" id="link-works">HOW IT WORKS</a></li>
        
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      	<? if($userid and $utype == 2):?>
        <li><a href="./myaccount" id="btn-join"><? echo($uinfo['firstname']); ?></a></li>
        <li><a href="signin">Sign Out</a></li>
        <? else: ?>
        <li><a href="join" id="btn-join">Join</a></li>
        <li><a href="signin">Sign In</a></li>
		<? endif; ?>       
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>
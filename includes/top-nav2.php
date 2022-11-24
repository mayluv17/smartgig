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
    
      
      <ul class="nav navbar-nav navbar-right icon-nav">
      <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Dashboard" ><img src="img/stats-bars2.png" width="20" /></a></li>
      <li><a href="myaccount/conversations" data-toggle="tooltip" data-placement="bottom" title="Notification" ><img src="img/bullhorn.png" width="20" /></a></li>
        <li><a href="myaccount/conversations" data-toggle="tooltip" data-placement="bottom" title="Inbox" ><img src="img/bubble.png" width="20" /></a></li>
        <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Shopping cart" ><img src="img/cart.png" width="20"/></a></li>
        
        <li>
        
        <a class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img src="<? echo(ppix("$_SESSION[timage]")); ?>" width="28" style="border-radius:50%"/><strong> <? echo($uinfo['firstname']); ?></strong> <div class="small-bal" style="">$20.00</div>
         <span class="caret"></span>
         
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" >
 <li><a href="<? echo($uinfo['username']); ?>/dashboard">Dashboard</a></li>
 <li><a href="#" class="dropdown-toggle inmenu-toggle" menuid="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Selling  <span class="caret pull-right"></span></a>
 
 <ul class="submenu" aria-labelledby="dropdownMenu6"  style="display: none;">
    <li><a href="<? echo($uinfo['username']); ?>/manage-orders">Manage Sales</a></li>
    <li><a href="<? echo($uinfo['username']); ?>/buyer-request">Buyer Request</a></li>
    <li><a href="#">Revenues</a></li>
    <li><a href="#">Analytics</a></li>
    <li><a href="<? echo($uinfo['username']); ?>/gigs">My Gigs</a></li>
    <li><a href="<? echo($uinfo['username']); ?>/gigs/new">Create New Gig</a></li>
   </ul>
    
    </li>
    
    <li><a href="./<? echo($uinfo['username']); ?>">My Profile</a></li>
    <li><a href="#">Promote Your Music</a></li>
     <li><a href="#">Help</a></li>
      <li><a href="signout">Log out</a></li>
  </ul>
        </li>

        
      </ul>
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
 
<div class="row top-base-nav-wrap hidden-sm hidden-xs" style="background-color: #FFFFFF; color: #9C9C9C;"> 
<div class="container">
      <ul class="nav navbar-nav navbar-left top-base-nav">
 
      <li><a href="<? echo($uinfo['username']); ?>/dashboard">Dashboard</a></li>
     <li>
     <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
    Selling
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" >
    <li><a href="<? echo($uinfo['username']); ?>/manage-orders">Manage Sales</a></li>
    <li><a href="#">Buyer Request</a></li>
    <li><a href="#">Revenues</a></li>
    <li><a href="#">Analytics</a></li>
    <li><a href="<? echo($uinfo['username']); ?>/gigs">My Gigs</a></li>
    <li><a href="<? echo($uinfo['username']); ?>/gigs/new">Create New Gig</a></li>
    <li><a href="#">Promote Your Music</a></li>
  </ul>

     
    </li>
    
    
    
     <li><a href="">Requests</a></li>
     <li><a href="">Contacts</a></li>
      <li><a href="<? echo($uinfo['username']); ?>/conversations">Inbox</a></li>
      <li><a href="<? echo($uinfo['username']); ?>/settings">Settings</a></li>
        
      </ul>

       </div>
</div>

</nav>



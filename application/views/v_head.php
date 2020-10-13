<style>
  .bg-teal {
      background-color: teal;
  }
  .progress-bar {
    background-color :#17a2b8;
  }

  /* style navbar */
  .navbar-light .navbar-brand {
    color: white;
}
  .navbar-light .navbar-nav .show > .nav-link, 
  .navbar-light .navbar-nav .active > .nav-link, 
  .navbar-light .navbar-nav .nav-link.show, 
  .navbar-light .navbar-nav .nav-link.active {
    color: white;
}
  .navbar-light .navbar-nav .nav-link {
    color: white;
}
  .navbar-nav > li.active > a, 
	.navbar-nav > li.active:hover > a, 
	.navbar-nav > li.active:focus > a {
	  color: white;
	  background-color: #17a2b8;
	  border-color: #17a2b8;
	}  
  /* /style navbar */
</style>
<head>
<nav class="navbar navbar-expand-lg navbar-light bg-teal">
  <a class="navbar-brand" href="#">Biofarma</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="<?php if (isset($dashboard)) {echo $dashboard;}; ?>">
        <a class="nav-link" href="<?= site_url("dashboard");?>">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="<?php if (isset($user_management)) {echo $user_management;}; ?>">
        <a class="nav-link" href="<?= site_url("user_management");?>">User Management</a>
      </li>
      <li class="<?php if (isset($principle_management)) {echo $principle_management;}; ?>">
        <a class="nav-link" href="<?= site_url("principle_management");?>">Principle Management</a>
      </li>
      <li class="<?php if (isset($primary_production)) {echo $primary_production;}; ?>">
        <a class="nav-link" href="<?= site_url("primary_production");?>">Primary Production</a>
      </li>
      <li class="<?php if (isset($packaging)) {echo $packaging;}; ?>">
        <a class="nav-link" href="<?= site_url("packaging");?>">Packaging</a>
      </li>
    </ul>
    
    <li class="user dropdown">
        <a href="#" class="dropdown-toggle" style="margin-top: -50px;" data-toggle="dropdown">
					<img src="image/QR.png" class="rounded-circle" style="width: 30px;">
					<span style="color: white;">Administrator</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<li><a href="#"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
  </div>
</nav>

</head>

<body>
<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light fixed-top bg-primary">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<!-- <div class="logo">
  				<span class="fa fa-plane-departure"></span>
  			</div> -->
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b><a href="index.php?page=home" class="text-white">Khan Airlines Management Sysyem</a></b></large>
      </div>
	  	<div class="col-md-2 float-right text-white border rounded d-flex flex-row align-items-center p-0 overflow-hidden">
        <span class="p-2 col-md-9 text-center bold"><?php echo $_SESSION['login_name'] ?></span>
	  		<a href="ajax.php?action=logout" class="text-white col-md-3 text-center bg-secondary p-2 mr-0 btn bnt-tool" title="Logout"> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>
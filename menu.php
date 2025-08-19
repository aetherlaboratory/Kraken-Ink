<nav class="navbar apex position-relative w-100 navbar-expand-lg navbar-dark border-0" aria-label="Tenth navbar example">
    <div class="container-fluid">
        
         <a class="navbar-brand trade-winds" href="<?php echo home_url();?>">Kraken Ink <span class="">N.Y.C.</span></a>
 
       
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation"> 
      
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center rye" id="navbarsExample08">
        <ul class="navbar-nav gx-5">
            
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo home_url();?>">Home</a>
          </li>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Tattoos</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="<?php echo home_url();?>/tattoos">Skin</a></li>
              <li><a class="dropdown-item" href="<?php echo home_url();?>/practice">Practice Skin</a></li>
              <li><a class="dropdown-item" href="<?php echo home_url();?>/live">Live</a></li>
                </ul>
            </li>
                
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url();?>/flashes">Flashes</a>
          </li>
                
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Appointment</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="<?php echo home_url();?>/new-tattoo">Need A Tattoo?</a></li>
              <li><a class="dropdown-item" href="<?php echo home_url();?>/appointments">Book Appointment</a></li>
                 <li><a class="dropdown-item" href="<?php echo home_url();?>/account">Your Appointments</a></li>
              </ul> </li>
                
                    <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url();?>/merch">Merch</a>
          </li>
            
        
            
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown08">
              <li><a class="dropdown-item" href="<?php echo home_url();?>/account">Dashboard</a></li>
              <li><a class="dropdown-item" href="<?php echo home_url();?>/account/orders">Orders</a></li>
              <li><a class="dropdown-item" href="<?php echo home_url();?>/account/downloads">Downloads</a></li>
                 <li><a class="dropdown-item" href="<?php echo home_url();?>/account/edit-address">Addresses</a></li>
                 <li><a class="dropdown-item" href="<?php echo home_url();?>/account/edit-account">Account Details</a></li>
   <li><a class="dropdown-item"  href="<?php echo wp_logout_url( home_url( '/account/' ) . '?_wpnonce=' . wp_create_nonce( 'log-out' ) ); ?>">Logout</a></li>



              </ul> </li>
                     <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url();?>/contact">Contact</a>
          </li>
                
            </ul>
          </li>
        </ul>
      </div>

      <form class="d-none d-lg-block col-auto searchform" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="row">
        <div class="col-md-auto">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search...">
        </div>
        <div class="col-md-auto">
            <button class="btn btn-secondary" type="submit">Search</button>
        </div>
    </div>
</form>




    </div>
  </nav>
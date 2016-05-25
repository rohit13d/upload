<nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--<a href="#" class="navbar-brand">Brand</a>-->
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="navoption <?=($this->uri->segment(2)==='upload' || $this->uri->segment(1)===NULL)?'active':''?>" id="navop1"><a href="<?php echo site_url('login/upload') ?>">Upload</a></li>
			<li class="navoption <?=($this->uri->segment(2)==='edit')?'active':''?>" id="navop2"><a href="<?php echo site_url('login/edit') ?>">Edit</a></li>
            <li class="navoption <?=($this->uri->segment(2)==='delete')?'active':''?>" id="navop3"><a href="<?php echo site_url('login/delete') ?>">Delete</a></li>
           
		   <li class="navoption " id="navop3"><a href="<?php echo site_url('login/logout') ?>">Logout</a></li>
		   
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Login</a></li>-->
        </ul>
    </div>
</nav>
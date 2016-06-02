<?php require_once 'init.php'; ?>


<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
    	<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
				<span class-"sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Work Safely</a>
		</div>
		<div class="collapse navbar-collapse" id="responsive-menu">
			<ul class="nav navbar-nav">
				<li><a href="/"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                            &nbsp;Computing<b class="caret"></b>
                    </a>
					<ul class="dropdown-menu">
					    <li>
                            <a href="computing.php"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Calculating</a>
                        </li>
					    <li>
                            <a href="normal.php"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;Norms</a>
                        </li>
					</ul>
				</li>
				
				<li><a href="about.php"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;About us</a></li>
			</ul>

			<?php
				$user = Auth::user();
			    if (empty($user)): ?>

	            <form method="post" action="" class="navbar-form navbar-right hidden-sm hidden-md ">

                <div class="form-group">
                     <input name="entermail" type="text" class="form-control" placeholder="E-mail" >
                </div>

                    <div class="form-group">
                         <input name="enterpass" type="password" class="form-control" placeholder="Password" >
                    </div>

                    <input type="hidden" name="enter"></input>

                    <button type="submit" name="enter" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i>&nbsp;Sign in
                    </button>
                    <button type="submit" name="up" class="btn btn-success" >
                        <a href="registration.php">Sign up</a> 
                    </button>
                    
                    
                </form>
            <?php else: ?>
	            	<p style="color: #D2B48C;" class="navbar-text">
	            	    	<i class="glyphicon glyphicon-user"></i>&nbsp;Hello, <?php echo Auth::userFullname(); ?>
	            	</p>
            	<!-- <input type="hidden" name="exit" value="logout"></input>
            	<button type="submit" name="exit" class="btn btn-success">
	                    <i class="fa fa-sign-in"></i>&nbsp;Exit
                </button> -->
                <!-- <form method="post">
                	<input type="submit" name="mode" value="logout" class="btn btn-success navbar-btn">
        		</form> -->
        		<form method="post" class="navbar-form navbar-right" >
        			
            		<button type="submit" name="mode" value="logout" class="btn btn-danger " >
                        Log out
                    </button>
                </form>

			<?php endif; ?>
			

		</div>
	</div>
</div>

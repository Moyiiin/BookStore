      	<hr>

      	<footer>
        	<div class="text-muted pull-left">
            	<a href="www.fb.com/moyeeen" target="_blank"> Moin Group </a>
        	</div>
					<?php
  					if($_SESSION['admin']) {
							?>
								<a href="admin_signout.php" class="btn btn-primary pull-right">Sign out!</a>
							<?php
						} else {
							?>
							<div class="text-muted pull-right">
									<a href="admin.php">Admin Login</a> @2022
							</div>
							<?php
						}
					?>
      	</footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="./bootstrap/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
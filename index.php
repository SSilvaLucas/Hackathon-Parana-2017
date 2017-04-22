<?php include("cabecalho.php"); ?>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
        
      <div class="logo">
        <img src="build/images/logo.png" alt="logo" width="30%">
      </div>
      

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="realizar-login.php" method="post">
                
                <h1>Login</h1>
              
              <div>
                <input type="text" class="form-control" name="login" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="/production/index.html">Log in</a>
              </div>
              <div class="reset">
                <a href="##">Esqueceu sua senha?</a>
              </div>    

              <div class="clearfix"></div>

                <div>
                  <p>©2017 All Rights Reserved. Reciclo </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
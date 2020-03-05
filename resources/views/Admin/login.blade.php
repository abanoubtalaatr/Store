<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href="{{asset('css/bootstrap/css/bootstrap.css')}}">

    <title>Admin Login</title>
  </head>

  <body style='background:#004445;font-family: -webkit-body; letter-spacing: 1px;'>

      <div class="modal mt-5" tabindex="-1" role="dialog" style="">

          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header" style="display: block;text-align: center; align-items: normal;">
                <h5 class="modal-title">Admin Login</h5>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email </label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Password</label>
                      <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="Password">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Forget Password ??</button>
                
              </div>
            </div>
        </div>
    </div>
   
    
    <script src="{{asset('js/jquery.js')}}" ></script>
    <script src="{{asset('js/bootstrap.js')}}" ></script>

    <script src="{{asset('js/adminLogin.js')}}" ></script>

  </body>
</html>
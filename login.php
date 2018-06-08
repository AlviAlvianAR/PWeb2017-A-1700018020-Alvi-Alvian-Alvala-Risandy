<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body{
      background: url(fyg.jpg) no-repeat fixed;
      background-size: 100%;
    }
    .letak{
          width: 30%;
    margin: 180px auto;
    }
  </style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>

<div class="container">
    <div class="row">
        <div class="letak">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="proses.php">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputemail" name="inputemail" placeholder="Masukkan Username"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="inputpassword" name="inputpassword" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Design by Alvi Alvian AR 
                    <div style="text-align: right;">
                      <a href="https://www.instagram.com/alvialvian.ar/?hl=en"><img width="12%" src="ig.png"></a>
                      <a href="https://web.facebook.com/profile.php?id=100005427154329"><img width="12%" src="fb.png"></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Admin Panel</title>
        <link rel="stylesheet" href="../contents/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../contents/assets/css/login.css">
    </head>
    <body>
        <div class="container login-container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                                Login
                            </div>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login.php" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 label label-info control-label">UserName:</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="username" placeholder="Enter UserName" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 label label-info control-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input type="password" value="userpass" placeholder="Enter Password" class="form-control"/>
                                    </div>
                                </div>
                                <input type="submit" value="Login" class="btn btn-primary pull-right" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascripts -->
        <script type="text/javascript" src="../contents/assets/plugins/jquery-1.11.3.min.js"></script>
    </body>
</html>

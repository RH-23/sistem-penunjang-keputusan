<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.min.css ">
    <style type="text/css">
      th.sort.asc:after{
        content: "\f0d8";
        font-family: FontAwesome;
      }
       th.sort.desc:after{
        content: "\f0d7";
        font-family: FontAwesome;
      }
      th.sort.after{
        content: "\f0dc";
        font-family: FontAwesome;
      }
    </style>
</head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- /.container-fluid -->
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>SPK </span></a>
          <ul class="user-menu">
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>

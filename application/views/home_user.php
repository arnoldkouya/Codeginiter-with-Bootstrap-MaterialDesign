<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CI-CRUD with Bootstrap Material</title>
    
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="<?php echo base_url(); ?>assets/css/roboto.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/material.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/ripples.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-warning">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="javascript:void(0)">CIV3-CRUD + Bootstrap Material Design</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="user">Home</a></li>
      
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="javascript:void(0)" data-toggle="modal" data-target="#simple-dialog">Me</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<div class="container">
            <div class="row">
                    <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Surname</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Surame" name="surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                                <div class="checkbox">
                                    <label>
                                        <a href="<?php echo site_url('user/create') ?>" class="btn btn-primary btn-raised">Add user</a>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                </form>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($users as $user) {?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $$user['name']; ?></td>
                            <td><?php echo $$user['surname']; ?></td>
                            <td><?php echo $$user['email']; ?></td>
                            <td>
                                <i class="mdi-action-highlight-remove"></i>
                                <i class="mdi-action-settings"></i>
                            </td>
                        </tr>
                     <?php } ?>
                       
                       
                    </tbody>
                </table>
                </div>

</div>

  



<div id="simple-dialog" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>I'm Arnold KOUYA from Cote d'Ivoire<br>
            I'm Backend Developer and web Entrepreuner. I like many thing, but coding is my life.
            I like explore new technologies 
            <div class="icon-preview">
                <i class="mdi-action-favorite"></i>
            </div>
        </p>
      </div>
    </div>
  </div>
</div>


        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/ripples.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>

    </body>
</html>




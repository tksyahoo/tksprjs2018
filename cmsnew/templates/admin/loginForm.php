<?php include "templates/include/header.php" ?>
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
<form name="login_form" action="admin.php?action=login" method="post">
  <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="alert alert-danger"><?php echo $results['errorMessage'] ?></div>
<?php } ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Your admin username" required autofocus maxlength="20">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20"  class="form-control">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>

</form></div></div></div>
      <!-- <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          </li>

          <li>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
          </li>

        </ul>

        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>

      </form> -->

<?php include "templates/include/footer.php" ?>


<style>
  nav {
    background-color: #E42E2E;
  }

  nav .logo-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    cursor: pointer;
  }

  nav .logo {
    height: 55.5px;
    margin: -0.825rem -2.8rem;
  }
</style>

<nav class="navbar navbar-light fixed-top" style="padding:0;min-height: 3.5rem">
  <div class="container-fluid mt-2 mb-2">
    <div class="col-lg-12">
      <div class="col-md-4 float-left text-white">
        <!-- <a href="user-home.php" class="logo-link">
          <img src="assets/uploads/image3.jpg" alt="Donor Hub" class="logo">
        </a> -->
      </div>
      <div class="float-right">
        <div class=" dropdown mr-4">
          <a href="#" class="text-white dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
          <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
            <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Kelola Akun </a>
            <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
          </div>
        </div>
      </div>
    </div>

</nav>

<script>
  $('#manage_my_account').click(function() {
    uni_modal("Manage Account", "manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>
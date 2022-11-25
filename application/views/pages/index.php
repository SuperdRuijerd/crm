<!DOCTYPE html>
<html lang="en">
  <head>
      <?php $this->load->view('layouts/head'); ?>
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <?php $this->load->view('layouts/header'); ?>

      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">

        <?php $this->load->view('layouts/sidebar'); ?>

        <div class="page-body">

          <?php $this->load->view('pages/'.$content); ?>

        </div>

        <?php $this->load->view('layouts/footer'); ?>

      </div>
    </div>
        <?php $this->load->view('layouts/script'); ?>
  </body>
</html>

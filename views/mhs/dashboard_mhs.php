<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('mhs/dist/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="col-12 mb-4">
            <div class="hero text-white hero-bg-image hero-bg-parallax"
                style="background-image: url('<?php echo base_url(); ?>assets-new-look/img/bag-hero-1.jpg');">
                <div class="hero-inner">
                    <h2>Welcome, Ujang!</h2>
                    <p class="lead">You almost arrived, complete the information about your account to complete
                        registration.</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                            Setup Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('mhs/dist/footer'); ?>

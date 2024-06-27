<?php $this->load->view('templates/header', ['title' => 'Register']); ?>
<div class="container-fluid" style="background-color: #343a40; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="register-container" style="background-color: #ff8c00; color: #fff; text-align: center; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); width: 400px;">
        <h1 class="mb-4">Register</h1>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo site_url('register/do_register'); ?>" method="post">
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-light btn-block" style="background-color: #fff; color: #ff8c00;">Register</button>
        </form>
        <div class="mt-3">
            <p>Sudah punya akun? <a href="<?php echo site_url('auth/login'); ?>">Login disini</a></p>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>

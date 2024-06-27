<!-- application/views/login.php -->
<?php $this->load->view('templates/header', ['title' => 'Login']); ?>
<div class="container-fluid" style="background-color: #343a40; height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="login-container" style="background-color: #ff8c00; color: #fff; text-align: center; padding: 30px; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); width: 400px;">
        <h1 class="mb-4">Login</h1>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo site_url('auth/do_login'); ?>" method="post">
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-light btn-block" style="background-color: #fff; color: #ff8c00;">Login</button>
        </form>
        <div class="mt-3">
            <p>Belum punya akun? <a href="<?php echo site_url('auth/register'); ?>">Daftar disini</a></p>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>

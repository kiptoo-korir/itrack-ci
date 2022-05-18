<?php $this->extend('layouts/unauthenticated'); ?>

<?php $this->section('content'); ?>
    <?php $errors = session()->getFlashdata('message'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="<?php routePath('login'); ?>">
                            <?php csrf_field(); ?>
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">Email Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control <?php echo ($errors && $errors['email']) ? 'is-invalid' : ''; ?>"
                                        name="email" value="<?php echo old('email'); ?>" required autocomplete="email" autofocus>
                                    <?php if ($errors && $errors['email']) { ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo $errors['email']; ?></strong>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control <?php echo ($errors && isset($errors['password'])) ? 'is-invalid' : ''; ?>" name="password"
                                        value=""
                                        required autocomplete="current-password">
                                    <?php if ($errors && isset($errors['password'])) { ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo $errors['password']; ?></strong>
                                        </span>
                                    <?php } ?>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <i id="show-pass" class="bi bi-eye-slash-fill" onclick="showPassword()"></i>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endSection('content'); ?>

<?php $this->section('js_scripts'); ?>
    <script>
        function showPassword() {
            var passwordInput = document.getElementById('password');
            var passStatus = document.getElementById('show-pass');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passStatus.className = 'bi bi-eye-fill';
            } else {
                passwordInput.type = 'password';
                passStatus.className = 'bi bi-eye-slash-fill';
            }
        }
    </script>
<?php $this->endSection('js_scripts'); ?>

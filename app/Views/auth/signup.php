<?php $this->extend('layouts/unauthenticated'); ?>

<?php $this->section('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo routePath('signup'); ?>">
                            <?php csrf_field(); ?>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"
                                        name="name" value="<?php old('name'); ?>" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">Email Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control"
                                        name="email" value="<?php old('email'); ?>" required autocomplete="email">                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control " name="password"
                                        required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-md-2 mt-2">
                                    <i id="show-pass" class="bi bi-eye-slash-fill" onclick="showPassword()"></i>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
            var passwordConfirm = document.getElementById('password-confirm');
            var passStatus = document.getElementById('show-pass');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordConfirm.type = 'text';
                passStatus.className = 'bi bi-eye-slash-fill';
            } else {
                passwordInput.type = 'password';
                passwordConfirm.type = 'password';
                passStatus.className = 'bi bi-eye-fill';
            }
        }
    </script>
<?php $this->endSection('js_scripts'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- <title>Reset Password &mdash; Stisla</title> -->
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="<?= base_url() ?>assets/assets_shop/img/logodash.ico">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/assets_stisla/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/assets_stisla/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>/assets/assets_stisla/assets/img/logoregis.png" alt="logo" width="90">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Ganti Password</h4>
                            </div>

                            <style type="text/css">
                                .card-primary {
                                background: linear-gradient(to bottom, #FFDD00, #FF5F6D);
                                border: none;
                                border-radius: 20px;
                            }
                            .card-header {
                            background-color: #f1f1f1;
                            border-bottom: none;
                            }
                            </style>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth/ganti_password_aksi'); ?>" autocomplete="off">

                                    <div class="form-group">
                                        <label for="password_baru">Password Baru</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-unlock"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password_baru" id="password_baru" class="form-control pwstrength" data-indicator="pwindicator" tabindex="2" autofocus>
                                        </div>
                                        <?= form_error('password_baru', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_baru">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-unlock"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password_confirm" id="password_confirm" class="form-control" tabindex="2">
                                        </div>
                                        <?= form_error('password_confirm', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Ganti Password
                                        </button>
                                    </div>
                                    <div class="mt-2 text-center">
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='<?= base_url('customer/dashboard'); ?>'">Kembali</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; <a>Arputra Travel</a>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/stisla.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/assets_stisla/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/assets/assets_stisla/assets/js/custom.js"></script>
    
</body>

</html>
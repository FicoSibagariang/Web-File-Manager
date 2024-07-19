<?= $this->extend('layout/templatelogin'); ?>
<?= $this->section('content'); ?>
<section class="sign-in  display-flex-center" style="display: flex; justify-content: center; align-items: center;"> 
    <div class="container" style="max-height: max-content">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="<?= base_url() ?>img/signin-image.jpg" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login</h2>
                <form action="" role="form" id="loginform" method="post">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="username"><i class="zmdi zmdi-account material-icons-name" style="color: #bb2124;"></i></label>
                        <input type="text" name="username" value="<?php echo session()->getFlashdata('member_username') ?>" id="username" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock" style="color: #bb2124;"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" style="background-color: #bb2124; font-size: 15px; font-weight: bold; padding: 10px 30px; width: auto;" name="signin" id="signin" class="form-submit" value="Log in" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/sweetalert2/sweetalert2.min.css">

<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("input").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).removeClass('is-invalid');
        });
        $("textarea").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).removeClass('is-invalid');
        });
        $("select").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).removeClass('is-invalid');
        });

        $('#loginform').on('submit', function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            var btn = $('#submit');

            btn.attr('disabled', 'disabled').text('Wait...');

            var formdata = new FormData($('#loginform')[0]);

            $.ajax({
                url: "<?php echo base_url('LoginAkun') ?>",
                data: formdata,
                type: 'POST',
                dataType: "JSON",
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    btn.removeAttr('disabled').text('Sign in');
                    if (response.status) {

                        Toast.fire({
                            icon: 'success',
                            title: 'Login Berhasil!'
                        });
                        window.location = '<?= base_url() ?>' + response.url;

                    } else if (response.error) {
                        Toast.fire({
                            icon: 'warning',
                            title: response.pesan
                        });
                    } else {
                        $.each(response.errors, function(key, val) {
                            $('[name="' + key + '"]').addClass('is-invalid');
                            $('[name="' + key + '"]').closest('.kosong').append('<span></span>');
                            $('[name="' + key + '"]').next().text(val).addClass('invalid-feedback').removeClass('help-block');
                            if (val === '') {
                                $('[name="' + key + '"]').removeClass('is-invalid');
                                $('[name="' + key + '"]').closest('.kosong').append('<span></span>');
                                $('[name="' + key + '"]').next().text(val).removeClass('invalid-feedback').addClass('help-block');
                            }
                        });
                    }
                }
            })
        });

        $('#loginform input, #loginform select').on('change', function() {
            $(this).closest('.form-group').removeClass('has-error has-success');
            $(this).nextAll('.help-block').eq(0).text('');
        });
    });

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
</script>
<?= $this->endSection(); ?>
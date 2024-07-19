<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<section class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url() ?>img/fico.png" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center mt-3">Nina Mcintire</h3>
                        <p class="text-muted text-center">Software Engineer</p>
                        <a href="#" class="btn btn-primary btn-block mt-4"><b>Edit</b></a>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group row mt-4">
                                    <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10 mt-4 ">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<?= $this->endSection(); ?>
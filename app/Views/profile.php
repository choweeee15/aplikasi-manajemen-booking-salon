<body>
    <div class="main-wrapper">
        <div class="page-wrapper bg-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form method="POST" action="update_profile.php">
                    <div class="card-box">
                        <h3 class="card-title">Basic Information</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <!-- Profile Picture -->
                                    <img class="inline-block" src="assets/img/<?php echo $_SESSION['foto'] ?? 'default-profile.png'; ?>" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">Edit</span>
                                        <input class="upload" type="file" name="profile_image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Full Name</label>
                                                <input type="text" class="form-control floating" name="fullName" value="<?= $userName ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Email</label>
                                                <input type="text" class="form-control floating" name="email" value="<?= $userEmail ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

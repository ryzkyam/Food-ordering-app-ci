<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <div class="container mt-5 col-5">
        <div class="card">
            <form action="" method="POST">
                <div class="card-header bg-secondary text-white">
                    LOGIN
                </div>
                <br>
                <?php if (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('error') ?>
                    </div>
                <?php } ?>
                <div class="card-body ">
                    <div class="mb-3">
                        <label for="inputUsername" class="form-label">
                            Username
                        </label>
                        <input type="text" name="member_username" class="form-control" value="<?php echo session()->getFlashdata('member_username') ?>" id="inputUsername" placeholder="Masukkan username....">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">
                            password
                        </label>
                        <input type="password" name="member_password" class="form-control" id="inputPassword" value="<?php echo session()->getFlashdata("member_password") ?>" placeholder="Masukkan password....">
                    </div>
                    <div class="mb">
                        <input type="submit" name="login" class="btn btn-primary" value="LOGIN" />
                    </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
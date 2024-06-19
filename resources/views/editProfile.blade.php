<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="profileStyle.css">
    <link rel="stylesheet" href="newParticle.css">
    <script defer src="newParticle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</head>

<body>
    <div id="particles-js" class="particles"></div>

    <div class="container bootstrap snippets bootdey mt-5">
        <h1 class="text-danger text-center">Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img id="profile-pic" src="https://i.pinimg.com/564x/02/fb/98/02fb98171ce3b3457c4d92c6e8a43f7d.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload Profile Pict ...</h6>
                    <input type="file" id="upload-profile" class="form-control">
                    <button id="delete-profile" class="btn btn-danger mt-2">Delete Profile Picture</button>
                </div>
            </div>
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <h3>Personal info</h3>
                <form class="form-horizontal" role="form" action="/profile/edit" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label text-lg-end" >Username:</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="username" value="{{$user->username}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label text-lg-end">Phone Number:</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="phone_number" value="{{$user->phone_number}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label text-lg-end">Address:</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" name="address" value="{{$user->address}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-3 col-form-label text-lg-end">Email:</label>
                        <div class="col-lg-9">
                            <input class="form-control text-dark" type="text" value="{{$user->email}}" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <button type="submit" class="btn btn-danger">Save Changes</button>
                            <a href="/home">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profilePic = document.getElementById('profile-pic');
            const uploadInput = document.getElementById('upload-profile');
            const deleteBtn = document.getElementById('delete-profile');

            // Menghapus gambar profil
            deleteBtn.addEventListener('click', function() {
                profilePic.src = 'https://i.pinimg.com/564x/02/fb/98/02fb98171ce3b3457c4d92c6e8a43f7d.jpg'; // Mengatur ulang ke gambar default
                uploadInput.value = ''; // Menghapus nilai input file
                // Anda mungkin ingin menyimpan status penghapusan gambar ini di database atau lokal.
            });

            // Mengganti gambar profil
            uploadInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profilePic.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/icon-tabler/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/Inter-4.0/inter.min.css') }}">
</head>

<body class=" d-flex flex-column bg-black " data-bs-theme="dark">
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">

                <h2 class="h3 text-center mb-3">
                    Halaman Login
                </h2>

                <div id="alert-container"></div>

                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Masukan Username" name="username">
                        <div class="invalid-feedback" id="username_message"></div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        <div class="input-group input-group-flat ">
                            <input type="password" id="password" class="form-control " placeholder="Masukan Password"
                                name="password">
                            <span class="input-group-text ">
                                <a href="#" class="link-secondary" id="togglePassword" data-bs-toggle="tooltip"
                                    aria-label="Show password" data-bs-original-title="Show password">
                                    <i id="toogleIcon" class="icon ti ti-eye"></i>
                                </a>
                            </span>
                            <div class="invalid-feedback" id="password_message"></div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                    <div class="form-footer">
                        <button type="button" id="siginGoogle" class="btn btn-primary w-100">Sig in With Google</button>
                    </div>
                </form>
                <div class="text-center text-muted mt-3">
                    Copyright &copy; 2025
                    <a href="" class="link-secondary">J0404231115.</a>
                    Template by <a href="https://tabler.io" target="_blank" class="link-secondary">Tabler</a>.
                    All rights reserved.
                </div>

            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100" style="background-image: url('assets/background2.jpg')"></div>
        </div>
    </div>
    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-app.js";
        import { getAuth, signInWithPopup, GoogleAuthProvider } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBKRFMlijYSe1vU487Fbk9cblp1FXvVxV0",
            authDomain: "apps-605f4.firebaseapp.com",
            projectId: "apps-605f4",
            storageBucket: "apps-605f4.firebasestorage.app",
            messagingSenderId: "313369719093",
            appId: "1:313369719093:web:f0ac5540d08a081b62dc7c",
            measurementId: "G-0BRF37W7DT"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const provider = new GoogleAuthProvider();
        const auth = getAuth(app);
        $('#siginGoogle').click(function () {
            signInWithPopup(auth, provider)
            .then((result) => {
                // This gives you a Google Access Token. You can use it to access the Google API.
                const credential = GoogleAuthProvider.credentialFromResult(result);
                const token = credential.accessToken;
                // The signed-in user info.
                const user = result.user;
                console.log(user);
                window.location = '/signin/' + user.displayName;
                // IdP data available using getAdditionalUserInfo(result)
                // ...
            }).catch((error) => {
                // Handle Errors here.
                const errorCode = error.code;
                const errorMessage = error.message;
                // The email of the user's account used.
                const email = error.customData.email;
                // The AuthCredential type that was used.
                const credential = GoogleAuthProvider.credentialFromError(error);
                // ...
            });
        })
    </script>

    <script>
        $(document).ready(function () {
            // Toggle password visibility
            $('#togglePassword').on('click', function (e) {
                e.preventDefault();
                let passwordField = $('#password');
                let icon = $('#toogleIcon');

                if (passwordField.attr('type') === 'password') {
                    passwordField.attr('type', 'text');
                    icon.removeClass('ti-eye').addClass('ti-eye-off');
                } else {
                    passwordField.attr('type', 'password');
                    icon.removeClass('ti-eye-off').addClass('ti-eye');
                }
            });


            // Form validation
            $('form').on('submit', function (e) {
                e.preventDefault(); // Mencegah form terkirim sebelum validasi

                let isValid = true;
                let username = $('input[name="username"]');
                let password = $('input[name="password"]');
                let usernameMessage = $('#username_message');
                let passwordMessage = $('#password_message');
                let loginButton = $("button[type='submit']");

                // Hapus alert jika ada sebelumnya
                $('#alert-container').html('');

                // Validasi username
                if (username.val().trim() === '') {
                    username.addClass('is-invalid');
                    usernameMessage.text('Username tidak boleh kosong');
                    isValid = false;
                } else {
                    username.removeClass('is-invalid');
                    usernameMessage.text('');
                }

                // Validasi password
                if (password.val().trim() === '') {
                    password.addClass('is-invalid');
                    passwordMessage.text('Password tidak boleh kosong');
                    isValid = false;
                } else {
                    password.removeClass('is-invalid');
                    passwordMessage.text('');
                }

                // Jika ada error, hentikan proses
                if (!isValid) {
                    return;
                }

                // **Login Check**: Sesuaikan dengan username dan password yang diizinkan
                const allowedUsername = "j0404231115";
                const allowedPassword = "123456";

                if (username.val() === allowedUsername && password.val() === allowedPassword) {
                    loginButton.prop("disabled", true).text("Login Berhasil...")
                        .removeClass("btn-primary").addClass("btn-success");

                    setTimeout(function () {
                        window.location.href =
                            "J0404231115_Home.html"; // Redirect ke halaman berikutnya
                    }, 2000); // Delay 2 detik
                } else {
                    // Tampilkan alert error
                    let alertHtml = `
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <i class="icon alert-icon ti ti-alert-circle"></i>
                                    </div>
                                    <div class="ms-2">
                                        <h4 class="alert-title">Username atau Password salah!</h4>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                    $('#alert-container').html(alertHtml);
                }
            });

            // Hapus error saat mulai mengetik
            $('input').on('input', function () {
                $(this).removeClass('is-invalid');
                let messageDiv = $(this).closest('.mb-3, .mb-2').find('.invalid-feedback');
                messageDiv.text('');
            });
        });
    </script>



</body>

</html>

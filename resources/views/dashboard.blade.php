<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/icon-tabler/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/Inter-4.0/inter.min.css') }}">
</head>

<body class="layout" data-bs-theme="light">
    <div class="page ">
        <!-- Header -->
        <header class="navbar navbar-expand-md navbar-overlap d-print-none" >
            <div class="container-xl">
                <!-- BEGIN NAVBAR TOGGLER -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- END NAVBAR TOGGLER -->
                <!-- BEGIN NAVBAR LOGO -->
                <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        App Name
                    </a>
                </div>
                <!-- END NAVBAR LOGO -->
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <div class="nav-item">
                            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" aria-label="Enable dark mode"
                                data-bs-original-title="Enable dark mode">
                                <i class="icon ti ti-moon"></i>
                            </a>
                            <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" aria-label="Enable light mode"
                                data-bs-original-title="Enable light mode">
                                <i class="icon ti ti-brightness-down"></i>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(assets/person.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ session('displayName') }}</div>
                                <div class="mt-1 small text-secondary">-</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">
                            <button id="signoutGoogle" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <!-- BEGIN NAVBAR MENU -->
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="J0404231115_Home.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-home"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="J0404231115_About.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-users"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        About
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="J0404231115_Portfolio.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-report"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Portfolio
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="J0404231115_Contact.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i class="icon ti ti-address-book"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Contact
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- END NAVBAR MENU -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Content -->
        <div class="page-body">
            <div class="container-xl ">

                <div class="row g-2 mb-4 align-items-center text-white">
                    <div class="col">
                        <h2 class="page-title">
                            Halaman Home
                        </h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-status-start bg-primary"></div>

                    <div class="row g-0">
                        <div class="col-md-4 order-md-last">
                            <img src="assets/person.jpg" class="img-fluid rounded-end" alt="Logo PPLG">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body fs-3" style="text-align: justify;">
                                <h1>Selamat Datang di Lorem Ipsum</h1>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus velit placeat
                                    ipsa. Temporibus, deserunt. Mollitia modi eligendi minus doloremque dolore ratione
                                    nesciunt aliquam natus, nemo sapiente quisquam perspiciatis autem voluptate.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem qui corporis quod
                                    amet, necessitatibus nisi totam maiores hic, illo corrupti eligendi iste! Suscipit
                                    aliquid, ullam hic dolorem neque quae eveniet.
                                </p>
                                <p><strong>"Berkreasi Tanpa Batas, Menginspirasi Masa Depan!"</strong></p>
                                <a href="J0404231115_About.html" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Content -->

        <!-- Footer -->

        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="text-center align-items-center">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; 2025
                                <a href="" class="link-secondary">J0404231115.</a>
                                Template by <a href="https://tabler.io" target="_blank"
                                    class="link-secondary">Tabler</a>.
                                All rights reserved.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- End Footer -->

    </div>


    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-app.js";
        import { getAuth, signOut  } from "https://www.gstatic.com/firebasejs/11.6.0/firebase-auth.js";
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
        const auth = getAuth(app);
        $('#signoutGoogle').click(function () {
            signOut(auth).then(() => {
                alert('berhasil logout')
                window.location = '/signout';
            }).catch((error) => {
                alert('terjadi kesalahan saat logout');
            });
        })
    </script>
</body>

</html>

<?php
session_start();

// Jika sudah login, langsung ke dashboard
// if (isset($_SESSION['admin_id'])) {
//     header("Location: ../dashboard/index.php");
//     exit;
// }

$error = '';

// Proses form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (
        $nama !== '' &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        trim($password) !== ''
    ) {
        session_regenerate_id(true);

        $_SESSION['admin_id'] = 1;
        $_SESSION['admin_nama'] = $nama;
        $_SESSION['admin_email'] = $email;

        header("Location: ../dashboard/index.php");
        exit;
    } else {
        $error = 'Mohon isi nama, email, dan kata sandi dengan benar.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - Portal Qur'an</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS Admin -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="quran-admin-auth">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-5">

                <div class="quran-admin-auth__card shadow-lg">

                    <!-- Header -->
                    <div class="quran-admin-auth__header text-center">

                        <div class="quran-admin-auth__icon-wrapper mb-3">
                            <i class="fas fa-user-shield quran-admin-auth__icon"></i>
                        </div>

                        <h2 class="quran-admin-auth__title">
                            Portal Admin
                        </h2>

                        <p class="quran-admin-auth__subtitle">
                            Silakan masuk untuk mengelola sistem
                        </p>

                    </div>

                    <!-- Form Login -->
                    <div class="quran-admin-auth__body">

                        <?php if ($error !== ''): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= htmlspecialchars(
                                    $error,
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>
                            </div>
                        <?php endif; ?>

                        <form action="" method="POST"
                            class="quran-admin-auth__form">

                            <!-- Nama Pengguna -->
                            <div class="form-group mb-4">

                                <label for="adminNama"
                                    class="quran-admin-auth__label">
                                    Nama Pengguna
                                </label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-admin-auth__input-icon">
                                            <i class="fas fa-user-lock"></i>
                                        </span>
                                    </div>

                                    <input
                                        type="text"
                                        name="nama"
                                        id="adminNama"
                                        class="form-control quran-admin-auth__input"
                                        placeholder="Masukkan nama kamu"
                                        autocomplete="name"
                                        required>
                                </div>

                            </div>

                            <!-- Email -->
                            <div class="form-group mb-4">

                                <label for="adminEmail"
                                    class="quran-admin-auth__label">
                                    Alamat Email
                                </label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-admin-auth__input-icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </div>

                                    <input
                                        type="email"
                                        name="email"
                                        id="adminEmail"
                                        class="form-control quran-admin-auth__input"
                                        placeholder="Masukkan alamat email"
                                        autocomplete="email"
                                        required>
                                </div>

                            </div>

                            <!-- Password -->
                            <div class="form-group mb-4">

                                <label for="adminPassword"
                                    class="quran-admin-auth__label">
                                    Kata Sandi
                                </label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-admin-auth__input-icon">
                                            <i class="fas fa-key"></i>
                                        </span>
                                    </div>

                                    <input
                                        type="password"
                                        name="password"
                                        id="adminPassword"
                                        class="form-control quran-admin-auth__input"
                                        placeholder="Masukkan kata sandi"
                                        autocomplete="current-password"
                                        required>
                                </div>

                            </div>

                            <!-- Checkbox -->
                            <div class="form-group d-flex justify-content-between align-items-center mb-4">

                                <div class="custom-control custom-checkbox">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input quran-admin-auth__checkbox"
                                        id="ingatAdmin">

                                    <label
                                        class="custom-control-label quran-admin-auth__checkbox-label"
                                        for="ingatAdmin">
                                        Simpan sesi login
                                    </label>
                                </div>

                            </div>

                            <!-- Tombol Login -->
                            <button
                                type="submit"
                                class="btn btn-block quran-admin-auth__btn quran-admin-auth__btn--submit mt-4">

                                Masuk Dasbor
                                <i class="fas fa-sign-in-alt ml-2"></i>

                            </button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

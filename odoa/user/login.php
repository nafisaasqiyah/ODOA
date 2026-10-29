<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Portal Qur'an</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body class="quran-auth">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-5">
                
                <div class="quran-auth__card shadow-lg my-4">
                    <div class="quran-auth__header text-center">
                        <div class="quran-auth__icon-wrapper mb-3">
                            <i class="fas fa-user-plus quran-auth__icon"></i>
                        </div>
                        <h2 class="quran-auth__title">Buat Akun Baru</h2>
                        <p class="quran-auth__subtitle">Lengkapi data di bawah ini untuk mendaftar</p>
                    </div>

                    <div class="quran-auth__body">
                        <form action="#" method="POST" class="quran-auth__form" id="formDaftar">

                            <div class="form-group mb-3">
                                <label for="regNama" class="quran-auth__label">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-auth__input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" id="regNama" class="form-control quran-auth__input" placeholder="Nama sesuai KTP/Asli" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="regEmail" class="quran-auth__label">Alamat Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-auth__input-icon"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" id="regEmail" class="form-control quran-auth__input" placeholder="nama@email.com" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="regWa" class="quran-auth__label">Nomor WhatsApp</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text quran-auth__input-icon"><i class="fab fa-whatsapp"></i></span>
                                    </div>
                                    <input type="tel" id="regWa" class="form-control quran-auth__input" placeholder="Contoh: 081234567890" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input quran-auth__checkbox" id="syarat" required>
                                    <label class="custom-control-label quran-auth__checkbox-label" for="syarat">Saya setuju dengan syarat & ketentuan</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block quran-auth__btn quran-auth__btn--submit mb-2">
                                Daftar Akun <i class="fas fa-check-circle ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
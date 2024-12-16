<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Donor Hub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .faq-hero {
        background: url('image/bg\ lgin.png') no-repeat center center/cover;
        color: #f00a0a;
        text-align: center;
        padding: 4rem 2rem;
        margin-bottom: 2rem;

    }

    .faq-hero img {
        margin-top: 5rem;
        width: 20%;
    }



    /* FAQ Section */
    .faq-section {
        max-width: 800px;
        margin: 0 auto;
        padding: 3rem;
    }

    .faq-container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .faq-item {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .faq-title {
        display: block;
        padding: 1rem;
        font-size: 1.2rem;
        font-weight: bold;
        color: white;
        cursor: pointer;
        background-color: #E42E2E;
        border-bottom: 1px solid #ddd;
        transition: background-color 0.3s ease;
    }

    .faq-item:hover {
        transform: scale(1.05);
        /* Membesarkan kotak sedikit */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Tambahkan bayangan untuk memberi efek kedalaman */
    }

    .faq-toggle {
        display: none;
    }

    .faq-toggle:checked+.faq-title+.faq-content {
        max-height: 300px;
        /* Cukup besar untuk konten panjang */
        padding: 1rem;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .faq-content {
        max-height: 0;
        padding: 0;
        overflow: hidden;
        font-size: 1rem;
        line-height: 1.6;
        color: #333;
    }
</style>

<body>
    <?php include 'user-topbar.php' ?>
    <!-- Hero Section -->
    <header class="faq-hero">
        <img src="assets/uploads/donorfaq.png" alt="Donor Hub" class="logo">
    </header>
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-item">
                <input type="checkbox" id="faq1" class="faq-toggle">
                <label for="faq1" class="faq-title">Apa itu Donor Hub?</label>
                <div class="faq-content">
                    <p>Donor Hub adalah platform yang membantu masyarakat mendapatkan informasi stok darah yang tersedia di UDD PMI Padang secara cepat dan transparan.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq2" class="faq-toggle">
                <label for="faq2" class="faq-title">Bagaimana cara mengetahui stok darah yang tersedia?</label>
                <div class="faq-content">
                    <p>Anda dapat melihat ketersediaan stok darah pada halaman utama kami yang diperbarui secara berkala.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq3" class="faq-toggle">
                <label for="faq3" class="faq-title">Bagaimana cara menjadi donor darah?</label>
                <div class="faq-content">
                    <p>Untuk menjadi donor darah, silakan kunjungi UDD PMI terdekat dan penuhi persyaratan kesehatan yang telah ditentukan.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq4" class="faq-toggle">
                <label for="faq4" class="faq-title">Siapa yang dapat menerima donor darah?</label>
                <div class="faq-content">
                    <p>Penerima donor darah biasanya pasien rumah sakit atau individu dengan kondisi kesehatan tertentu. Proses ini diatur oleh tenaga medis profesional.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq5" class="faq-toggle">
                <label for="faq5" class="faq-title">Bagaimana cara pengajuan permintaan darah?</label>
                <div class="faq-content">
                    <p>Pilih “Request Darah”</p>
                    <p> Isikan formulir request darah</p>
                    <p>Tekan kirim dan tunggu notifikasi</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq6" class="faq-toggle">
                <label for="faq6" class="faq-title">Apakah ada batasan jumlah darah yang bisa saya minta?</label>
                <div class="faq-content">
                    <p>Jumlah darah yang diberikan akan disesuaikan dengan kebutuhan medis pasien dan persediaan yang ada. Harap berikan informasi detail tentang kebutuhan Anda saat mengajukan permintaan.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq7" class="faq-toggle">
                <label for="faq7" class="faq-title">Bagaimana cara saya mengetahui jika permintaan saya disetujui atau ditolak?</label>
                <div class="faq-content">
                    <p>Permintaan darah anda akan diberitahu melalui E-mail dan nomor HP yang telah diberikan saat pengisian form “Request Darah”</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq8" class="faq-toggle">
                <label for="faq8" class="faq-title">Informasi apa saja yang diperlukan untuk mengajukan permintaan darah?</label>
                <div class="faq-content">
                    <p>Nama</p>
                    <p>Umur</p>
                    <p>Golongan darah</p>
                    <p>Volume (L)</p>
                    <p>Lokasi</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq9" class="faq-toggle">
                <label for="faq9" class="faq-title">Bagaimana Donor Hub membantu rumah sakit?</label>
                <div class="faq-content">
                    <p>Donor Hub menyediakan akses cepat ke informasi stok darah, yang membantu rumah sakit mempersingkat waktu pencarian darah untuk pasien yang membutuhkan.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq10" class="faq-toggle">
                <label for="faq10" class="faq-title">Apakah saya perlu membuat akun untuk menggunakan Donor Hub?</label>
                <div class="faq-content">
                    <p>Anda tidak perlu membuat akun untuk melihat stok darah. Namun, pendonor yang ingin mendaftar atau login membutuhkan akun untuk menyimpan informasi pribadi mereka.</p>
                </div>
            </div>
        </div>
    </section>


    </div>
    </div>
    </section>

    <?php include 'footer.php' ?>
    <!--footer-->
</body>

</html>
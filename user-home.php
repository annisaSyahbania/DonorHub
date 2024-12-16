<?php include 'db_connect.php' ?>
<style>
    .hero {
        padding: 2rem;
        background-color: #f5f5f5;
        display: flex;
        gap: 2rem;

    }

    .hero-left {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .logo-container {
        width: 100%;
    }

    .logo {
        height: 150px;
        width: auto;
    }

    .text-content {
        font-size: 0.9rem;
        line-height: 1.5;
        text-align: justify;
    }

    .hero-right {
        flex: 1;
    }

    .hero-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    /* Blood stocks section */
    .blood-stocks-container {
        padding: 2rem 1rem;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #E42E2E;
        margin-bottom: 1.5rem;
        font-weight: bold;
    }

    .blood-stocks {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .blood-type {
        background-color: #E42E2E;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .blood-type:hover {
        background-color: #e42e2e;
        /* Warna saat di hover */
        color: white;
        /* Ubah teks menjadi putih */
        transform: scale(1.05);
        /* Sedikit memperbesar */
    }


    .text-blood {
        color: white;
        font-size: 2rem;
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    .stock-level {
        font-size: 1.5rem;
        color: white;
    }

    /* Request button */
    .request-container {
        text-align: center;
        margin: 2rem 0;
    }

    .request-btn {
        display: inline-block;
        background-color: #E42E2E;
        color: white;
        padding: 1rem 2rem;
        border-radius: 5px;
        text-decoration: none;
    }

    .request-btn:hover {
        background-color: #c41230;
    }

    /* Media queries */
    @media (max-width: 768px) {
        .hero {
            flex-direction: column;
        }

        .hero-right {
            width: 100%;
        }

        .hero-image {
            height: 300px;
        }

        .blood-stocks {
            grid-template-columns: repeat(2, 1fr);
        }

        .nav-links {
            gap: 1rem;
        }
    }
</style>
<?php include 'user-topbar.php' ?>

<!-- Bagian Hero -->
<section class="container py-5">
    <div class="hero py-xl-5 py-lg-3">
        <div class="hero-left">
            <div class="logo-container">
                <img src="assets/uploads/image1.png" alt="Donor Hub" class="logo">
            </div>
            <div class="text-content">
                <h4>
                    Merupakan trobosan yang bertujuan untuk menyediakan platform online yang menampilkan stok darah yang tersedia di UDD PMI Padang.
                    Tujuan dari transparansi stock darah yang tersedia yaitu untuk mempermudah komunikasi ketersediaan darah kepada publik.
                </h4>
            </div>
            <div class="request-container">
                <a href="https://pmisumbar.or.id/udd-pmi-kota-padang/" class="request-btn">Pelajari Lebih lanjut ></a>
            </div>
        </div>
        <div class="hero-right">
            <img src="assets/uploads/image4.png" alt="Blood Donation" class="hero-image">
        </div>
    </div>

    <!-- Stok darah -->
    <div class="blood-stocks-container">
        <h2 class="section-title">Ketersediaan Stok Darah</h2>
        <div class="blood-stocks">
            <?php
            $blood_group = array("A+", "B+", "O+", "AB+", "A-", "B-", "O-", "AB-");
            foreach ($blood_group as $v) {
                $bg_inn[$v] = 0;
                $bg_out[$v] = 0;
            }
            $qry = $conn->query("SELECT * FROM blood_inventory ");
            while ($row = $qry->fetch_assoc()) {
                if ($row['status'] == 1) {
                    $bg_inn[$row['blood_group']] += $row['volume'];
                } else {
                    $bg_out[$row['blood_group']] += $row['volume'];
                }
            }

            ?>
            <?php foreach ($blood_group as $v): ?>
                <div class="blood-type">
                    <div class="card-body text-light">
                        <span class="float-right text-blood"> <?php echo $v ?> <i class="fa fa-tint text-danger"></i></span>
                        <h4><b>
                                <?php echo ($bg_inn[$v] - $bg_out[$v]) / 1000 ?>
                                L </b></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="request-container">
        <a href="user_requests.php" class="request-btn">Request Darah</a>
    </div>
</section>
<?php include 'footer.php' ?>
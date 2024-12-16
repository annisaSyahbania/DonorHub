<?php include 'db_connect.php' ?>
<style>
    /* ------------------------------------
   aboutus.html
------------------------------------ */


    /* Hero Section */
    .about-hero {
        background: url('images/about-background.jpg') no-repeat center center/cover;
        color: black;
        text-align: center;
        padding: 4rem 2rem;
        margin-bottom: 2rem;
    }

    .about-hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;

    }

    .about-hero p {
        font-size: 1.2rem;
        line-height: 1.5;
    }

    /* About Content */
    .about-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2 rem;
        text-align: center;
    }

    .about-content h2 {
        font-size: 2rem;
        color: black;
        margin-bottom: 3 rem;
    }

    .about-content p,
    .about-content ul {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        text-align: justify;
    }

    .about-content ul {
        list-style: none;
        padding: 0;
    }

    .about-content ul li {
        margin-bottom: 0.5rem;
        position: relative;
        padding-left: 1.5rem;
    }

    .about-content ul li::before {
        content: '✔';
        position: absolute;
        left: 0;
        color: #e42e2e;
    }

    /* Team Section */
    .team-section {
        background-color: #f5f5f5;
        padding: 2rem 1rem;
    }

    .team-section h2 {
        text-align: center;
        font-size: 2rem;
        color: #e42e2e;
        margin-bottom: 2rem;
    }

    .team-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 2rem;
    }

    .team-member {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        text-align: center;
        width: 250px;
    }

    .team-member img {
        width: 100%;
        margin-bottom: 1rem;
    }

    .team-member h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .team-member p {
        font-size: 1rem;
        color: #555;
    }
</style>
<?php include 'user-topbar.php' ?>
<!-- Hero Section -->
<header class="about-hero">
    <h1>Tentang Kami</h1>
    <p>Mempertemukan donor darah dengan mereka yang membutuhkan, dengan transparansi dan efisiensi.</p>
</header>

<!-- About Section -->
<section class="about-content">
    <div class="about-intro">
        <h2>Visi</h2>
        <p>
            Donor Hub adalah platform digital yang bertujuan untuk mempermudah masyarakat dalam mengakses informasi
            ketersediaan stok darah di UDD PMI Padang. Kami percaya bahwa transparansi dan kemudahan akses
            informasi dapat menyelamatkan lebih banyak nyawa.
        </p>
    </div>
    <div class="about-mission">
        <h2>Misi Kami</h2>
        <ul>
            <li>Menyediakan akses informasi stok darah secara real-time.</li>
            <li>Meningkatkan kesadaran masyarakat akan pentingnya donor darah.</li>
            <li>Mendukung kebutuhan darurat akan donor darah melalui konektivitas yang efisien.</li>
        </ul>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <h2>Our Team</h2>
    <div class="team-container">
        <div class="team-member">
            <img src="assets/uploads/member5.jpg" alt="Team Member 1">
            <h3>M Zhaki Ilham</h3>
            <p>Project Manager</p>
        </div>
        <div class="team-member">
            <img src="assets/uploads/member3.jpg" alt="Team Member 3">
            <h3>M. Asad Mufadhal</h3>
            <p>Arsitektur</p>
        </div>

        <div class="team-member">
            <img src="assets/uploads/member4.jpg" alt="Team Member 1">
            <h3>Ahsanul Zakri</h3>
            <p>Designer</p>
        </div>
        <div class="team-member">
            <img src="assets/uploads/member6.jpg" alt="Team Member 2">
            <h3>Ridho Afan </h3>
            <p>Front End Dev</p>
        </div>
        <div class="team-member">
            <img src="assets/uploads/member7.jpg" alt="Team Member 2">
            <h3>Annisa Syahbania Arifa </h3>
            <p>Back End Dev</p>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
</div>
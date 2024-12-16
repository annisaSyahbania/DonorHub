<style>
    footer {
        background-color: #e42e2e;
        color: #fff;
        padding: 2rem 1rem;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-container div {
        flex: 1;
        min-width: 250px;
    }

    .footer-container h3 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .footer-container p,
    .footer-container ul {
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .footer-container ul {
        list-style: none;
        padding: 0;
    }

    .footer-container ul li {
        margin-bottom: 0.5rem;
    }

    .footer-container ul li a {
        color: #fff;
        text-decoration: none;
    }

    .footer-container ul li a:hover {
        text-decoration: underline;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 2rem;
        font-size: 0.8rem;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 1rem;
    }
</style>
<footer>
    <div class="footer-container">
        <div class="footer-about">
            <h3>Tentang Kami</h3>
            <p>Donor Hub adalah platform untuk mempermudah akses informasi ketersediaan darah di UDD PMI Padang. Kami mendukung transparansi dan aksesibilitas untuk masyarakat.</p>
        </div>
        <div class="footer-links">
            <h3>Navigasi</h3>
            <ul>
                <li><a href="user-home.php">Home</a></li>
                <li><a href="user-about.php">Tentang</a></li>
                <li><a href="user-faq.php">FAQ</a></li>
                <li><a href="user_requests.php">Request Darah</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h3>Kontak</h3>
            <ul>
                <li><strong>Telepon:</strong> (0751) 123-456</li>
                <li><strong>Email:</strong> kelompok8@donorhub.com</li>
                <li><strong>Alamat:</strong> Jl. Limau Manis No.1, Padang, Sumatera Barat</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Donor Hub - UDD PMI Padang. All rights reserved.</p>
    </div>
</footer>
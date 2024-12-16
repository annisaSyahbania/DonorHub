<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Berhasil</title>
    <link rel="stylesheet" href="konfirmasi.css">
</head>
<style>
    /* ------------------------------------
   konfirmasi.html
------------------------------------ */
    /* Konfirmasi Page Styles */
    .confirmation-page {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        text-align: center;
        padding: 2rem;
    }

    .confirmation-message {
        max-width: 600px;
        background-color: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .confirmation-message h1 {
        color: #e42e2e;
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .confirmation-message p {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        color: #555;
    }

    .back-home-btn {
        display: inline-block;
        padding: 0.8rem 2rem;
        background-color: #e42e2e;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .back-home-btn:hover {
        background-color: #c41230;
    }
</style>

<body>


    <main class="confirmation-page">
        <section class="confirmation-message">
            <h1>Permintaan Berhasil Dikirim!</h1>
            <p>Terima kasih telah menggunakan Donor Hub. Permintaan Anda telah berhasil dikirimkan. Kami akan segera memproses data Anda.</p>
            <a href="user-home.php" class="back-home-btn">Kembali ke Home</a>
        </section>
    </main>


</body>

</html>
<?php include('db_connect.php'); ?>
<style>
    .request-page {
        padding: 2rem;
        background-color: #fcf6f6;
        min-height: 100vh;
    }

    .form-section {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        text-align: center;
        font-size: 2rem;
        color: #E42E2E;
        margin-bottom: 1.5rem;
        font-weight: bold;
    }

    .request-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    input,
    select {
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }

    button.submit-btn {
        background-color: #E42E2E;
        color: #fff;
        padding: 10px;
        /* Increased padding for a larger button */
        border: none;
        border-radius: 5px;
        font-size: 1.3rem;
        /* Increased font size for better visibility */
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 10px;
    }

    button.submit-btn:hover {
        background-color: #c41230;
    }
</style>
<?php include 'user-topbar.php' ?>

<main class="request-page container py-5">
    <div class="container py-xl-5 py-lg-3 ">
        <section class="form-section">
            <h2 class="section-title">Form Permintaan Darah</h2>
            <form action="ajax.php?action=save_request_user" id="manage-request" method="POST">
                <div id="msg"></div>
                <div class="form-group">
                    <label for="" class="control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="patient" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">NIK</label>
                    <input type="text" class="form-control" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Blood Group</label>
                    <select name="blood_group" class="custom-select select2" required>
                        <option value=""></option>
                        <option>A+</option>
                        <option>B+</option>
                        <option>O+</option>
                        <option>AB+</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>O-</option>
                        <option>AB-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Volume (L)</label>
                    <input type="number" class="form-control" name="volume" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Email</label>
                    <input type="text" class="form-control" name="email_pasien" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Nomor WhatsApp</label>
                    <input type="text" class="form-control" name="nowa" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Alamat</label>
                    <input class="form-control" id="message" name="alamat" style="height: 100px" value="<?php echo isset($alamat) ? $alamat : '' ?>" required placeholder="ketikan alamat lengkap disini"></input>
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="submit-btn">Kirim Permintaan</button>
                </div>
            </form>
        </section>

    </div>
</main>
<?php include 'footer.php' ?>
<script>
    $.ajax({
        url: 'ajax.php?action=save_request_user',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        success: function(resp) {
            if (resp.success) {
                alert("Data sukses disimpan");
            } else {
                alert("Terjadi kesalahan, silakan coba lagi.");
            }
        }
    });
</script>
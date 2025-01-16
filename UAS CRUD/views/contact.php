<!-- contact.php -->
<div class="container my-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>
    <p class="text-center">Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami melalui form di bawah ini.</p>

    <form action="proses_contact.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
<!-- contact.php -->
<div class="container my-5">
    <form action="proses_contact.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Password</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-dark">Login</button>
    </form>
</div>
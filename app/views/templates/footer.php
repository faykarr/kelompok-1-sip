</div>
</main>
<hr class="mt-5">
<footer class="mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; <?= date('Y'); ?> Perpusku</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?= BASE_URL; ?>js/jquery-3.7.1.min.js"></script>
<script src="<?= BASE_URL; ?>js/popper.min.js"></script>
<script src="<?= BASE_URL; ?>js/bootstrap.min.js"></script>
<script src="<?= BASE_URL; ?>js/bootstrap.min.js.map"></script>
<script src="<?= BASE_URL; ?>js/select2-full.min.js"></script>
<script src="<?= BASE_URL; ?>js/script.js"></script>
<?php if (strpos($_SERVER['REQUEST_URI'], '/buku') !== false) : ?>
    <script src="<?= BASE_URL; ?>js/buku.js"></script>
<?php endif; ?>
</body>
</html>
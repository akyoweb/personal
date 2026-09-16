</main>

<footer class="site-footer">
    <div class="wrap footer-inner">
        <div class="footer-links">
            <a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a>
            <a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
            <a href="<?= e($profile['linkedin']) ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="<?= e($profile['telegram']) ?>" target="_blank" rel="noopener noreferrer">telegram</a>
        </div>
        <p class="footer-note">
            © <?= date('Y') ?> <?= e($profile['name']) ?> — ساخته‌شده با PHP و کمی CSS.
        </p>
    </div>
</footer>

<button class="to-top" type="button" aria-label="بازگشت به بالا" title="بازگشت به بالا">↑</button>

<script src="assets/js/main.js"></script>
</body>

</html>
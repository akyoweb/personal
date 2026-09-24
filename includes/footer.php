</main>

<footer class="site-footer">
    <div class="wrap footer-inner">
        <div class="footer-links">
            <a href="<?= e(lang_url('blog.php')) ?>"><?= e(lang('nav_blog')) ?></a>
            <a href="mailto:<?= e($me['email']) ?>"><?= e($me['email']) ?></a>
            <a href="<?= e($me['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
            <a href="<?= e($me['linkedin']) ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="<?= e($me['telegram']) ?>" target="_blank" rel="noopener noreferrer">Telegram</a>
        </div>
        <p class="footer-note">
            © <?= date('Y') ?> <?= e($me['name']) ?> — <?= e(lang('footer_built')) ?>
        </p>
    </div>
</footer>

<button class="to-top" type="button" aria-label="<?= e(lang('back_to_top')) ?>" title="<?= e(lang('back_to_top')) ?>">↑</button>

<script src="assets/js/main.js"></script>
</body>

</html>
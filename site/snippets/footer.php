<?php

use Kirby\Cms\Site;

$link_assets = $kirby->url('assets') ?>
</main>
<footer id="footer" class="">

</footer>

<?= js([
    'assets/JavaScript/slick/slick.min.js',
    'assets/JavaScript/main.min.js',
    '@auto'
]) ?>
</body>

</html>
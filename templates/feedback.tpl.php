<div class="founders">
    <div class="grid">
        <div class="founder grid__col grid__col--6-of-12">
            <?php if ($first_founder['avatar']): ?>
                <img src="<?php print $first_founder['avatar']; ?>"
                     alt="<?php print t($first_founder['name']); ?>">
            <?php endif; ?>
            <header class="founder__name"><?php print t($first_founder['name']); ?></header>
            <div class="founder__information"><?php print t($first_founder['information']); ?></div>
        </div>
        <div class="founder grid__col grid__col--6-of-12">
            <?php if ($second_founder['avatar']): ?>
                <img src="<?php print $second_founder['avatar']; ?>"
                     alt="<?php print t($second_founder['name']); ?>">
            <?php endif; ?>
            <header class="founder__name"><?php print t($second_founder['name']); ?></header>
            <div class="founder__information"><?php print t($second_founder['information']); ?></div>
        </div>
    </div>
</div>
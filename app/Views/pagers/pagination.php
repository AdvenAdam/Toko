<?php $pager->setSurroundCount(2) ?>
<div class="pro-pagination-style text-center mt-50">
    <ul class="pagination">
        <?php foreach ($pager->links() as $link) : ?>
            <li>
                <a class="<?= $link['active'] ? 'active"' : '' ?>" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
</nav>
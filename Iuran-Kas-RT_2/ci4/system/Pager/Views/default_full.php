<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination">
		<?php if ($pager->hasPrevious()) : ?>
			<li class="ok">
				<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" class="ob">
					<span aria-hidden="true" class="oi"></span><?= lang('Pager.first') ?></span>
				</a>
			</li>
			<li class="ok">
				<a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="ob">
					<span aria-hidden="true" class="oi"></span><?= lang('Pager.previous') ?></span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li <?= $link['active'] ? 'class="active"' : '' ?>>
				<a href="<?= $link['uri'] ?>" class="ob">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<li class="ok">
				<a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="ob">
					<span aria-hidden="true" class="oi"></span><?= lang('Pager.next') ?></span>
				</a>
			</li>
			<li class="ok">
				<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="ob">
					<span aria-hidden="true" class="oi"></span><?= lang('Pager.last') ?></span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie Desc'), ['action' => 'edit', $movieDesc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie Desc'), ['action' => 'delete', $movieDesc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movieDesc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movie Desc'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie Desc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movieDesc view large-9 medium-8 columns content">
    <h3><?= h($movieDesc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Movie Title') ?></th>
            <td><?= h($movieDesc->movie_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genres') ?></th>
            <td><?= h($movieDesc->genres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie Imdb Link') ?></th>
            <td><?= h($movieDesc->movie_imdb_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Content Rating') ?></th>
            <td><?= h($movieDesc->content_rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movieDesc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= $this->Number->format($movieDesc->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Budget') ?></th>
            <td><?= $this->Number->format($movieDesc->budget) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie Year') ?></th>
            <td><?= $this->Number->format($movieDesc->movie_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gross') ?></th>
            <td><?= $this->Number->format($movieDesc->gross) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Movies') ?></h4>
        <?php if (!empty($movieDesc->movies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Movie Desc Id') ?></th>
                <th scope="col"><?= __('People Id') ?></th>
                <th scope="col"><?= __('Movie Reviews Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($movieDesc->movies as $movies): ?>
            <tr>
                <td><?= h($movies->id) ?></td>
                <td><?= h($movies->movie_desc_id) ?></td>
                <td><?= h($movies->people_id) ?></td>
                <td><?= h($movies->movie_reviews_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Movies', 'action' => 'view', $movies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Movies', 'action' => 'edit', $movies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movies', 'action' => 'delete', $movies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

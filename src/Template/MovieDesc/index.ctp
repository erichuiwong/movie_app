<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movie Desc'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movieDesc index large-9 medium-8 columns content">
    <h3><?= __('Movie Desc') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('budget') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gross') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_imdb_link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('content_rating') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movieDesc as $movieDesc): ?>
            <tr>
                <td><?= $this->Number->format($movieDesc->id) ?></td>
                <td><?= h($movieDesc->movie_title) ?></td>
                <td><?= h($movieDesc->genres) ?></td>
                <td><?= $this->Number->format($movieDesc->duration) ?></td>
                <td><?= $this->Number->format($movieDesc->budget) ?></td>
                <td><?= $this->Number->format($movieDesc->movie_year) ?></td>
                <td><?= $this->Number->format($movieDesc->gross) ?></td>
                <td><?= h($movieDesc->movie_imdb_link) ?></td>
                <td><?= h($movieDesc->content_rating) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movieDesc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movieDesc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movieDesc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movieDesc->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

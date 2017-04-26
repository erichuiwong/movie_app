<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movie Review'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movieReviews index large-9 medium-8 columns content">
    <h3><?= __('Movie Reviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imdb_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_user_for_reviews') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_voted_users') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_critic_for_reviews') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movieReviews as $movieReview): ?>
            <tr>
                <td><?= $this->Number->format($movieReview->id) ?></td>
                <td><?= $this->Number->format($movieReview->imdb_score) ?></td>
                <td><?= $this->Number->format($movieReview->num_user_for_reviews) ?></td>
                <td><?= $this->Number->format($movieReview->num_voted_users) ?></td>
                <td><?= $this->Number->format($movieReview->num_critic_for_reviews) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movieReview->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movieReview->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movieReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movieReview->id)]) ?>
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

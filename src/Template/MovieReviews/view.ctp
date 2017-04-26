<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie Review'), ['action' => 'edit', $movieReview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie Review'), ['action' => 'delete', $movieReview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movieReview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movie Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie Review'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movieReviews view large-9 medium-8 columns content">
    <h3><?= h($movieReview->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movieReview->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imdb Score') ?></th>
            <td><?= $this->Number->format($movieReview->imdb_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num User For Reviews') ?></th>
            <td><?= $this->Number->format($movieReview->num_user_for_reviews) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Voted Users') ?></th>
            <td><?= $this->Number->format($movieReview->num_voted_users) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Critic For Reviews') ?></th>
            <td><?= $this->Number->format($movieReview->num_critic_for_reviews) ?></td>
        </tr>
    </table>
</div>

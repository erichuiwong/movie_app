<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movie Desc'), ['controller' => 'MovieDesc', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie Desc'), ['controller' => 'MovieDesc', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movie Reviews'), ['controller' => 'MovieReviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie Review'), ['controller' => 'MovieReviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movies view large-9 medium-8 columns content">
    <h3><?= h($movie->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Movie Desc') ?></th>
            <td><?= $movie->has('movie_desc') ? $this->Html->link($movie->movie_desc->id, ['controller' => 'MovieDesc', 'action' => 'view', $movie->movie_desc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $movie->has('person') ? $this->Html->link($movie->person->id, ['controller' => 'People', 'action' => 'view', $movie->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie Review') ?></th>
            <td><?= $movie->has('movie_review') ? $this->Html->link($movie->movie_review->id, ['controller' => 'MovieReviews', 'action' => 'view', $movie->movie_review->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movie->id) ?></td>
        </tr>
    </table>
</div>

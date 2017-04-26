<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="people view large-9 medium-8 columns content">
    <h3><?= h($person->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Director') ?></th>
            <td><?= h($person->director) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actor 1') ?></th>
            <td><?= h($person->actor_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actor 2') ?></th>
            <td><?= h($person->actor_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actor 3') ?></th>
            <td><?= h($person->actor_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
    </table>
</div>

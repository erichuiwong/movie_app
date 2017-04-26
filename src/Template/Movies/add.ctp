<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Movie Desc'), ['controller' => 'MovieDesc', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie Desc'), ['controller' => 'MovieDesc', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movie Reviews'), ['controller' => 'MovieReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie Review'), ['controller' => 'MovieReviews', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movies form large-9 medium-8 columns content">
    <?= $this->Form->create($movie) ?>
    <fieldset>
        <legend><?= __('Add Movie') ?></legend>
        <?php
            echo $this->Form->control('movie_desc_id', ['options' => $movieDesc, 'empty' => true]);
            echo $this->Form->control('people_id', ['options' => $people, 'empty' => true]);
            echo $this->Form->control('movie_reviews_id', ['options' => $movieReviews, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movieDesc->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movieDesc->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movie Desc'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movieDesc form large-9 medium-8 columns content">
    <?= $this->Form->create($movieDesc) ?>
    <fieldset>
        <legend><?= __('Edit Movie Desc') ?></legend>
        <?php
            echo $this->Form->control('movie_title');
            echo $this->Form->control('genres');
            echo $this->Form->control('duration');
            echo $this->Form->control('budget');
            echo $this->Form->control('movie_year');
            echo $this->Form->control('gross');
            echo $this->Form->control('movie_imdb_link');
            echo $this->Form->control('content_rating');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

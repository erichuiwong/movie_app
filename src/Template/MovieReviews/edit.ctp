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
                ['action' => 'delete', $movieReview->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movieReview->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movie Reviews'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="movieReviews form large-9 medium-8 columns content">
    <?= $this->Form->create($movieReview) ?>
    <fieldset>
        <legend><?= __('Edit Movie Review') ?></legend>
        <?php
            echo $this->Form->control('imdb_score');
            echo $this->Form->control('num_user_for_reviews');
            echo $this->Form->control('num_voted_users');
            echo $this->Form->control('num_critic_for_reviews');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

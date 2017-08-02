<nav class="large-3 medium-4 columns">
<h1>Movies</h1>
    <table>
    <?= $this->Form->create(false, ['type'=>'get']); ?>
        <thead>
            <tr>
                <th>Search</th>
            </tr> 
        </thead>
        <tbody>
            <tr>
                <td><?= $this->Form->input('movie_title') ?></td>
            </tr>
            <tr>
                <td><?= $this->Form->input('director') ?></td>
            </tr>
            <tr>
                <td><?= $this->Form->input('actor') ?></td>
            </tr>
            <tr>
                <td><?= $this->Form->input('movie_year') ?></td>
            </tr>
            <tr>
                <td><?= $this->Form->input('genres') ?></td>
            </tr>
            <tr>
                <td><?= $this->Form->input('imdb_score') ?></td>
            </tr>
            <tr>
                <td><?= $this->Form->input('gross') ?></td>
            </tr>
        </tbody>
    </table>
    <?= $this->Form->Submit('Search') ?>
    <?= $this->Form->end() ?>
</nav>

<div class="movies index large-9 medium-8 columns content">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Movie Title</th>
                <th>Movie Year</th>
                <th>Director</th>
                <th>Actor 1</th>
                <th>Actor 2</th>
                <th>Actor 3</th>
                <th>Genres</th>
                <th>Imdb Score</th>
                <th>Gross</th>
                <th>Budget</th>
                <th>View Movie</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
            <tr>
                <td><?= $this->Number->format($movie->id) ?></td>
                <td><?= h($movie->movie_desc->movie_title) ?></td>
                <td><?= h($movie->movie_desc->movie_year) ?></td>
                <td><?= h($movie->person->director) ?></td>
                <td><?= h($movie->person->actor_1) ?></td>
                <td><?= h($movie->person->actor_2) ?></td>
                <td><?= h($movie->person->actor_3) ?></td>
                <td><?= h($movie->movie_desc->genres) ?></td>
                <td><?= h($movie->movie_review->imdb_score) ?></td>
                <td><?= $this->Number->currency(h($movie->movie_desc->gross), 'USD') ?></td>
                <td><?= $this->Number->currency(h($movie->movie_desc->budget), 'USD') ?></td>
                <td><?= $this->Html->link('View', ['action'=>'view', $movie->id]) ?></td>
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

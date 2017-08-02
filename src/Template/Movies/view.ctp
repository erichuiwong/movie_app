<div class="movies view large-9 medium-8 columns content">
    <h3><?= h($movie->movie_desc->movie_title) ?></h3>
    <table>
        <tr>
            <td>Genres</td>
            <td><?= h($movie->movie_desc->genres) ?></td>
        </tr>
        <tr>
            <td>Content Rating</td>
            <td><?= h($movie->movie_desc->content_rating) ?></td>
        </tr>
        <tr>
            <td>Movie Duration in Minutes</td>
            <td><?= h($movie->movie_desc->duration) ?></td>
        </tr>
        <tr>
            <td>Movie Year</td>
            <td><?= h($movie->movie_desc->movie_year) ?></td>
        </tr>
        <tr>
            <td>Gross</td>
            <td><?= $this->Number->currency(h($movie->movie_desc->gross), 'USD') ?></td>
        </tr>
        <tr>
            <td>Budget</td>
            <td><?= $this->Number->currency(h($movie->movie_desc->budget), 'USD') ?></td>
        </tr>
        <tr>
            <td>Movie Imdb Link</td>
            <td><?= h($movie->movie_desc->movie_imdb_link) ?></td>
        </tr>
        <tr>
            <td>Imdb Score</td>
            <td><?= h($movie->movie_review->imdb_score) ?></td>
        </tr>
        <tr>
            <td>Number of User Reviews</td>
            <td><?= h($movie->movie_review->num_user_for_reviews) ?></td>
        </tr>
        <tr>
            <td>Number of Voted Users</td>
            <td><?= h($movie->movie_review->num_voted_users) ?></td>
        </tr>
        <tr>
            <td>Number of Critics</td>
            <td><?= h($movie->movie_review->num_critic_for_reviews) ?></td>
        </tr>
        <tr>
            <td>Director</td>
            <td><?= h($movie->person->director) ?></td>
        </tr>
        <tr>
            <td>Movie Actor 1</td>
            <td><?= h($movie->person->actor_1) ?></td>
        </tr>
        <tr>
            <td>Movie Actor 2</td>
            <td><?= h($movie->person->actor_2) ?></td>
        </tr>
        <tr>
            <td>Movie Actor 3</td>
            <td><?= h($movie->person->actor_3) ?></td>
        </tr>
    </table>
</div>

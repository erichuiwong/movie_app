use project177;

SELECT D.movie_title

FROM movies M
INNER JOIN movie_desc D ON (M.movie_desc_id = D.id)

WHERE D.gross - D.budget > D.budget / 2 AND D.movie_year = 2001;
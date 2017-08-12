use project177;

CREATE TABLE movie_desc (
	id INT AUTO_INCREMENT PRIMARY KEY,
    movie_title VARCHAR(255) NOT NULL,
    genremovie_desc VARCHAR(255),
    duration INT,
    budget INT,
    movie_year INT,
    gross INT,
    movie_imdb_link VARCHAR(255),
    content_rating VARCHAR(50)
);

CREATE TABLE people (
	id INT AUTO_INCREMENT PRIMARY KEY,
    director VARCHAR(255),
    actor_1 VARCHAR(255),
    actor_2 VARCHAR(255),
    actor_3 VARCHAR(255)
);

CREATE TABLE movie_reviews (
	id INT AUTO_INCREMENT PRIMARY KEY,
	imdb_score INT,
    num_user_for_reviews INT,
    num_voted_users INT,
    num_critic_for_reviews INT
);

CREATE TABLE movies (
	id INT AUTO_INCREMENT PRIMARY KEY,
    movie_desc_id INT,
    people_id INT,
    movie_reviews_id INT,
    FOREIGN KEY movie_ref (movie_desc_id) REFERENCES movie_desc(id),
    FOREIGN KEY people_ref (people_id) REFERENCES people(id),
    FOREIGN KEY movie_reviews_ref (movie_reviews_id) REFERENCES movie_reviews(id)
);
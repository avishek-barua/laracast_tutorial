<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>

<body>
    <?php
    $movies = [
        [
            'name' => 'The Shawshank Redemption',
            'imdb_rating' => 9.3,
            'releaseYear' => 1994,
        ],
        [
            'name' => 'The Godfather',
            'imdb_rating' => 9.2,
            'releaseYear' => 1972,
        ],
        [
            'name' => 'The Dark Knight',
            'imdb_rating' => 9.0,
            'releaseYear' => 2008,
        ],
        [
            'name' => 'The Godfather Part II',
            'imdb_rating' => 9.0,
            'releaseYear' => 1974,
        ],
        [
            'name' => '12 Angry Men',
            'imdb_rating' => 9.0,
            'releaseYear' => 1954,
        ],
        [
            'name' => 'Schindlers List',
            'imdb_rating' => 9.0,
            'releaseYear' => 1993,
        ]
    ];

    function filterByYear($movies, $year)
    {
        $filteredMovie = [];
        foreach ($movies as $movie) {
            if ($movie['releaseYear'] <= $year) {
                $filteredMovie[] = $movie;
            }
        }
        return $filteredMovie;
    }
    function filterByRating($movies, $rating)
    {
        $filteredMovie = [];
        foreach ($movies as $movie) {
            if ($movie['imdb_rating'] > $rating) {
                $filteredMovie[] = $movie;
            }
        }
        return $filteredMovie;
    }


    ?>

    <ul>
        <caption>Movie filtered by year</caption>
        <?php foreach (filterByYear($movies, 1990) as $movie) : ?>
            <li>
                <?= $movie['name']; ?>-rating &nbsp;<?= $movie['imdb_rating']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <caption>Movie filtered by rating</caption>
        <?php foreach (filterByRating($movies, 9) as $movie) : ?>
            <li>
                <?= $movie['name']; ?>-rating &nbsp;<?= $movie['imdb_rating']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
<?php 

    require __DIR__ . '/classes/Movie.php';

    $movies = [
        new Movie
        (
            'https://picsum.photos/300',
            'Back to the Future',
            'en',
            "Eighties teenager Marty McFly is accidentally sent back in time to 1955, inadvertently disrupting his parents' first meeting and attracting his mother's romantic interest. Marty must repair the damage to history by rekindling his parents' romance and - with the help of his eccentric inventor friend Doc Brown - return to 1985.",
            '1985-07-03',
            8
        ),
        new Movie
        (
            'https://picsum.photos/300',
            'Avatar',
            'en',
            "In the 22nd century, a paraplegic Marine is dispatched to the moon Pandora on a unique mission, but becomes torn between following orders and protecting an alien civilization.",
            '2009-12-10',
            7
        ),
        new Movie
        (
            'https://picsum.photos/300',
            'Star Wars',
            'en',
            "Princess Leia is captured and held hostage by the evil Imperial forces in their effort to take over the galactic Empire. Venturesome Luke Skywalker and dashing captain Han Solo team together with the loveable robot duo R2-D2 and C-3PO to rescue the beautiful princess and restore peace and justice in the Empire.",
            '1977-05-25',
            8
        ),
        new Movie
        (
            'https://picsum.photos/300',
            'The Hateful Eight',
            'en',
            "Bounty hunters seek shelter from a raging blizzard and get caught up in a plot of betrayal and deception.",
            '2015-12-25',
            7
        )
    ];

    //var_dump($movies)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: black;
        color: white;
        text-align: center;
        padding: 1.5rem;
    }
    </style>
</head>

<body>

    <header>
        <h1>Movies</h1>
    </header>

    <main>

        <div class="cards">

            <?php foreach ($movies as $movie) : ?>
            <div class="card">
                <img src="<?php echo $movie->image ?>" alt="">
                <h2><?php echo $movie->title ?></h2>
                <p><?php echo $movie->overview ?></p>
                <div>
                    <span>Language: <?php echo $movie->language ?></span>
                    <span>Date of release: <?php echo $movie->releaseDate ?></span>
                    <span>Vote: <?php echo $movie->vote ?></span>
                </div>

            </div>
            <?php endforeach ?>

        </div>
    </main>


</body>

</html>
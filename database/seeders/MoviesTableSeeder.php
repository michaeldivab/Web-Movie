<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{

    function encodeImageToBase64($imagePath) {
        $imageData = file_get_contents($imagePath);
        return base64_encode($imageData);
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Avatar: The Way of Water',
                'year' => '2022',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'poster' =>  'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://www.puriindahmall.co.id/assets/img/news/1670915741_77_0_avatar.jpg')),
                'genre' => 'Action',
                'rating' => '4.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Medellin',
                'year' => '2023',
                'description' => 'Reda is a French wannabe tough guy who manages a boxing gym. When his brother Brahim, a social media influencer, fan of narcoculture, and even more so of Pablo Escobar, who calls himself Pablito, is kidnapped by cartel members during a trip to Colombia, Reda unexpectedly jumps into action, gathering his gym members and making them pledge to accompany him to Medellin to rescue his younger brother.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://assets.gadgets360cdn.com/pricee/assets/product/202306/Medelln_1685605298.jpg')),
                'genre' => 'Action',
                'rating' => '4.0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Black Demon',
                'year' => '2023',
                'description' => 'Nixon Oil company inspector Paul Sturges is sent to a small Mexican town in Baja California, to check on El Diamante, an offshore oil rig. He brings his wife Ines and their two children, Audrey and Tommy, along for a vacation.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://play-lh.googleusercontent.com/DgH32MV42BfDnvuKAjWw88sJ2gIbj-aONzDEFSnBvVc7FiYwLRS32owGVvnms1FvefRUbc4Fnn4Seve4Lt66')),
                'genre' => 'Horror',
                'rating' => '3.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fast X',
                'year' => '2023',
                'description' => 'Dominic Toretto and his team are requested by the Agency to steal a computer chip during its transit in Rome. Dom and his wife Letty Ortiz stay behind with his son Brian "Little B" Marcos, while the rest of the team, consisting of Roman Pearce, Tej Parker, Han Lue, and Ramsey, travels to Rome. A wounded Cipher arrives at Doms home in the middle of the night and informs him and Letty that Dante Reyes, the son of drug lord Hernan Reyes, has turned her crew against her and is using them to target Dom as revenge for his fathers death and the loss of his familys fortune ten years prior. The next morning, when Little Nobody informs Dom and Letty that there is no Agency mission in Rome, they realize the mission is a setup, and travel to Rome to rescue the team.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/I/81fwW957MuL._AC_UF894,1000_QL80_.jpg')),
                'genre' => 'Crime, Drama, Action',
                'rating' => '4.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Forrest Gump',
                'year' => '1994',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal, and other historical events unfold from the perspective of an Alabama man with an extraordinary talent for running.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BNDYwNzVjMTItZmU5YS00YjQ5LTljYjgtMjY2NDVmYWMyNWFmXkEyXkFqcGc@._V1_.jpg')),
                'genre' => 'Drama, Romance',
                'rating' => '8.8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inception',
                'year' => '2010',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
                'poster' =>  'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg')),
                'genre' => 'Action, Adventure, Sci-Fi',
                'rating' => '8.8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Matrix',
                'year' => '1999',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BN2NmN2VhMTQtMDNiOS00NDlhLTliMjgtODE2ZTY0ODQyNDRhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg')),
                'genre' => 'Action, Sci-Fi',
                'rating' => '8.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'year' => '2003',
                'description' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BMTZkMjBjNWMtZGI5OC00MGU0LTk4ZTItODg2NWM3NTVmNWQ4XkEyXkFqcGc@._V1_.jpg')),
                'genre' => 'Action, Adventure, Drama',
                'rating' => '8.9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fight Club',
                'year' => '1999',
                'description' => 'An insomniac office worker and a soap salesman build a global organization to help vent male aggression.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BOTgyOGQ1NDItNGU3Ny00MjU3LTg2YWEtNmEyYjBiMjI1Y2M5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg')),
                'genre' => 'Drama',
                'rating' => '8.8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Empire Strikes Back',
                'year' => '1980',
                'description' => 'After the rebels are overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued by Darth Vader.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BMTkxNGFlNDktZmJkNC00MDdhLTg0MTEtZjZiYWI3MGE5NWIwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg')),
                'genre' => 'Action, Adventure, Fantasy',
                'rating' => '8.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Goodfellas',
                'year' => '1990',
                'description' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen and his mob partners Jimmy and Tommy in the Italian-American crime syndicate.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BN2E5NzI2ZGMtY2VjNi00YTRjLWI1MDUtZGY5OWU1MWJjZjRjXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg')),
                'genre' => 'Crime, Drama',
                'rating' => '8.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Lion King',
                'year' => '1994',
                'description' => 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://upload.wikimedia.org/wikipedia/en/3/3d/The_Lion_King_poster.jpg')),
                'genre' => 'Animation, Adventure, Drama',
                'rating' => '8.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interstellar',
                'year' => '2014',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://cdn1-production-images-kly.akamaized.net/0wsE-R0s8CQvfzewWrruGW2TWbc=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3526151/original/056690700_1627631864-Interstellar_Paramount_Pictures__Warner_Bros._Pictures.jpg')),
                'genre' => 'Adventure, Drama, Sci-Fi',
                'rating' => '8.6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Prestige',
                'year' => '2006',
                'description' => 'Two magicians engage in a bitter rivalry, which leads them down a path of obsession, deception, and tragedy.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BMjA4NDI0MTIxNF5BMl5BanBnXkFtZTYwNTM0MzY2._V1_.jpg')),
                'genre' => 'Drama, Mystery, Sci-Fi',
                'rating' => '8.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Silence of the Lambs',
                'year' => '1991',
                'description' => 'A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BZTk5NTYzMGEtMDE2OS00ODYxLWJiNjQtNGMyMmM2MTE0M2QxXkEyXkFqcGc@._V1_.jpg')),
                'genre' => 'Crime, Drama, Thriller',
                'rating' => '8.6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Se7en',
                'year' => '1995',
                'description' => 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his modus operandi.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://m.media-amazon.com/images/M/MV5BY2IzNzMxZjctZjUxZi00YzAxLTk3ZjMtODFjODdhMDU5NDM1XkEyXkFqcGc@._V1_QL75_UX190_CR0,8,190,281_.jpg')),
                'genre' => 'Crime, Drama, Mystery',
                'rating' => '8.6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Back to the Future',
                'year' => '1985',
                'description' => 'Marty McFly, a teenager, is accidentally sent 30 years into the past in a time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://upload.wikimedia.org/wikipedia/en/d/d2/Back_to_the_Future.jpg')),
                'genre' => 'Adventure, Comedy, Sci-Fi',
                'rating' => '8.5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Guardians of the Galaxy Vol. 3',
                'year' => '2023',
                'description' => 'The Guardians embark on a mission to protect Rocket from his past, leading them into conflict with the High Evolutionary and other intergalactic dangers.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://lumiere-a.akamaihd.net/v1/images/id-guardiansofthegalaxy-vol3-payoffposter_6ba5c28b.jpeg')),
                'genre' => 'Action',
                'rating' => '4.7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Oppenheimer',
                'year' => '2023',
                'description' => 'The story of J. Robert Oppenheimer and the development of the atomic bomb during World War II, exploring the moral and political dilemmas surrounding its use.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://upload.wikimedia.org/wikipedia/id/4/4a/Oppenheimer_%28film%29.jpg')),
                'genre' => 'Drama',
                'rating' => '4.8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spider-Man: Across the Spider-Verse',
                'year' => '2023',
                'description' => 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence.',
                'poster' => 'data:image/jpeg;base64,' . base64_encode(file_get_contents('https://upload.wikimedia.org/wikipedia/en/thumb/b/b4/Spider-Man-_Across_the_Spider-Verse_poster.jpg/220px-Spider-Man-_Across_the_Spider-Verse_poster.jpg')),
                'genre' => 'Animation',
                'rating' => '4.9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

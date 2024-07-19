<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieDirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $movieDirections = [
            ['director_dir_id'=>201,'movie_mov_id'=>901],
            ['director_dir_id'=>202,'movie_mov_id'=>902],
            ['director_dir_id'=>203,'movie_mov_id'=>903],
            ['director_dir_id'=>204,'movie_mov_id'=>904],
            ['director_dir_id'=>205,'movie_mov_id'=>905],
            ['director_dir_id'=>206,'movie_mov_id'=>906],
            ['director_dir_id'=>207,'movie_mov_id'=>907],
            ['director_dir_id'=>208,'movie_mov_id'=>908],
            ['director_dir_id'=>209,'movie_mov_id'=>909],
            ['director_dir_id'=>210,'movie_mov_id'=>910],
            ['director_dir_id'=>211,'movie_mov_id'=>911],
            ['director_dir_id'=>212,'movie_mov_id'=>912],
            ['director_dir_id'=>213,'movie_mov_id'=>913],
            ['director_dir_id'=>214,'movie_mov_id'=>914],
            ['director_dir_id'=>215,'movie_mov_id'=>915],
            ['director_dir_id'=>216,'movie_mov_id'=>916],
            ['director_dir_id'=>217,'movie_mov_id'=>917],
            ['director_dir_id'=>218,'movie_mov_id'=>918],
            ['director_dir_id'=>219,'movie_mov_id'=>919],
            ['director_dir_id'=>220,'movie_mov_id'=>920],
            ['director_dir_id'=>218,'movie_mov_id'=>921],
            ['director_dir_id'=>215,'movie_mov_id'=>922],
            ['director_dir_id'=>221,'movie_mov_id'=>923]
       ];

    DB::table('director_movie')->insert($movieDirections);

    }
}

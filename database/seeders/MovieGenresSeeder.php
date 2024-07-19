<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movieGenres = [
            ['movie_mov_id'=>922,'genre_gen_id'=>1001],
            ['movie_mov_id'=>917,'genre_gen_id'=>1002],
            ['movie_mov_id'=>903,'genre_gen_id'=>1002],
            ['movie_mov_id'=>912,'genre_gen_id'=>1003],
            ['movie_mov_id'=>911,'genre_gen_id'=>1005],
            ['movie_mov_id'=>908,'genre_gen_id'=>1006],
            ['movie_mov_id'=>913,'genre_gen_id'=>1006],
            ['movie_mov_id'=>926,'genre_gen_id'=>1007],
            ['movie_mov_id'=>928,'genre_gen_id'=>1007],
            ['movie_mov_id'=>918,'genre_gen_id'=>1007],
            ['movie_mov_id'=>921,'genre_gen_id'=>1007],
            ['movie_mov_id'=>902,'genre_gen_id'=>1008],
            ['movie_mov_id'=>923,'genre_gen_id'=>1009],
            ['movie_mov_id'=>907,'genre_gen_id'=>1010],
            ['movie_mov_id'=>927,'genre_gen_id'=>1010],
            ['movie_mov_id'=>901,'genre_gen_id'=>1010],
            ['movie_mov_id'=>914,'genre_gen_id'=>1011],
            ['movie_mov_id'=>906,'genre_gen_id'=>1012],
            ['movie_mov_id'=>904,'genre_gen_id'=>1013]
        ];

        DB::table('genre_movie')->insert($movieGenres);
    }
}

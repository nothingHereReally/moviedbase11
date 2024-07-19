<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ratings = [
            ['movie_mov_id'=>901,'reviewer_rev_id'=>9001,'rev_stars'=>8.40,'num_o_ratings'=>263575],
            ['movie_mov_id'=>902,'reviewer_rev_id'=>9002,'rev_stars'=>7.90,'num_o_ratings'=>20207],
            ['movie_mov_id'=>903,'reviewer_rev_id'=>9003,'rev_stars'=>8.30,'num_o_ratings'=>202778],
            ['movie_mov_id'=>906,'reviewer_rev_id'=>9005,'rev_stars'=>8.20,'num_o_ratings'=>484746],
            ['movie_mov_id'=>924,'reviewer_rev_id'=>9006,'rev_stars'=>7.30,'num_o_ratings'=>220934],
            ['movie_mov_id'=>908,'reviewer_rev_id'=>9007,'rev_stars'=>8.60,'num_o_ratings'=>779489],
            ['movie_mov_id'=>909,'reviewer_rev_id'=>9008,'rev_stars'=>7.80,'num_o_ratings'=>227235],
            ['movie_mov_id'=>910,'reviewer_rev_id'=>9009,'rev_stars'=>3.00,'num_o_ratings'=>195961],
            ['movie_mov_id'=>911,'reviewer_rev_id'=>9010,'rev_stars'=>8.10,'num_o_ratings'=>203875],
            ['movie_mov_id'=>912,'reviewer_rev_id'=>9011,'rev_stars'=>8.40,'num_o_ratings'=>17856],
            ['movie_mov_id'=>914,'reviewer_rev_id'=>9013,'rev_stars'=>7.00,'num_o_ratings'=>862618],
            ['movie_mov_id'=>915,'reviewer_rev_id'=>9001,'rev_stars'=>7.70,'num_o_ratings'=>830095],
            ['movie_mov_id'=>916,'reviewer_rev_id'=>9014,'rev_stars'=>4.00,'num_o_ratings'=>642132],
            ['movie_mov_id'=>925,'reviewer_rev_id'=>9015,'rev_stars'=>7.70,'num_o_ratings'=>81328],
            ['movie_mov_id'=>918,'reviewer_rev_id'=>9016,'rev_stars'=>8.30,'num_o_ratings'=>580301],
            ['movie_mov_id'=>920,'reviewer_rev_id'=>9017,'rev_stars'=>8.10,'num_o_ratings'=>609451],
            ['movie_mov_id'=>921,'reviewer_rev_id'=>9018,'rev_stars'=>8.00,'num_o_ratings'=>667758],
            ['movie_mov_id'=>922,'reviewer_rev_id'=>9019,'rev_stars'=>8.40,'num_o_ratings'=>511613],
            ['movie_mov_id'=>923,'reviewer_rev_id'=>9020,'rev_stars'=>6.70,'num_o_ratings'=>13091]
        ];

        DB::table('ratings')->insert($ratings);
    }
}

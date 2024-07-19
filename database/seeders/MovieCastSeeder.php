<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieCastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $roles = [
            ['actor_act_id'=>101,'movie_mov_id'=>901,'role'=>'John Scottie Ferguson'],
            ['actor_act_id'=>102,'movie_mov_id'=>902,'role'=>'Miss Giddens'],
            ['actor_act_id'=>103,'movie_mov_id'=>903,'role'=>'T.E. Lawrence'],
            ['actor_act_id'=>104,'movie_mov_id'=>904,'role'=>'Michael'],
            ['actor_act_id'=>105,'movie_mov_id'=>905,'role'=>'Antonio Salieri'],
            ['actor_act_id'=>106,'movie_mov_id'=>906,'role'=>'Rick Deckard'],
            ['actor_act_id'=>107,'movie_mov_id'=>907,'role'=>'Alice Harford'],
            ['actor_act_id'=>108,'movie_mov_id'=>908,'role'=>'McManus'],
            ['actor_act_id'=>110,'movie_mov_id'=>910,'role'=>'Eddie Adams'],
            ['actor_act_id'=>111,'movie_mov_id'=>911,'role'=>'Alvy Singer'],
            ['actor_act_id'=>112,'movie_mov_id'=>912,'role'=>'San'],
            ['actor_act_id'=>113,'movie_mov_id'=>913,'role'=>'Andy Dufresne'],
            ['actor_act_id'=>114,'movie_mov_id'=>914,'role'=>'Lester Burnham'],
            ['actor_act_id'=>115,'movie_mov_id'=>915,'role'=>'Rose DeWitt Bukater'],
            ['actor_act_id'=>116,'movie_mov_id'=>916,'role'=>'Sean Maguire'],
            ['actor_act_id'=>117,'movie_mov_id'=>917,'role'=>'Ed'],
            ['actor_act_id'=>118,'movie_mov_id'=>918,'role'=>'Renton'],
            ['actor_act_id'=>120,'movie_mov_id'=>920,'role'=>'Elizabeth Darko'],
            ['actor_act_id'=>121,'movie_mov_id'=>921,'role'=>'Older Jamal'],
            ['actor_act_id'=>122,'movie_mov_id'=>922,'role'=>'Ripley'],
            ['actor_act_id'=>114,'movie_mov_id'=>923,'role'=>'Bobby Darin'],
            ['actor_act_id'=>109,'movie_mov_id'=>909,'role'=>'J.J. Gittes'],
            ['actor_act_id'=>119,'movie_mov_id'=>909,'role'=>'Alfred Borden'],
            // ['act_id'=>119,'mov_id'=>919,'role'=>'Alfred Borden'],

      ];

      DB::table('actor_movie')->insert($roles);
    }
}

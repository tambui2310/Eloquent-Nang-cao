<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Posts;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
          $posts = new Posts();
          $posts->id   = 1;
          $posts->title = "ha noi";
          $posts->content  = "anh yeu em";
          $posts->image  = "";
          $posts->date = "2019-03-08";
          $posts->category_id  = 1;
          $posts->save();

          $posts = new Posts();
          $posts->id   = 2;
          $posts->title = "ha noi";
          $posts->content  = "anh yeu em";
          $posts->image  = "";
          $posts->date = "2019-03-08";
          $posts->category_id  = 2;
          $posts->save();
    }
}

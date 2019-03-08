<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	  $category = new Category();
		  $category->id = 1;
		  $category->name = 'Thể thao';
		  $category->save();

		  $category = new Category();
		  $category->id = 2;
		  $category->name = 'Giải trí';
		  $category->save();

		  $category = new Category();
		  $category->id = 3;
		  $category->name = 'Ẩm thực';
		  $category->save();
    }
}

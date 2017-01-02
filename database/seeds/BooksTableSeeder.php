<?php
 
use Illuminate\Database\Seeder;
 
class BooksTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('books')->truncate();
 
        DB::table('books')->insert([
            [
	     'id'         => '1',  
	     'title'      => 'TestA',
	     'isbn'       => 'TestA body test.',
	     'number'     => '1',
	     'created_at' => '2016-08-12 14:00:00',
	     'updated_at' => '2016-08-12 14:00:00',
            ],
            [
	     'id'         => '2',  
	     'title'      => 'TestB',
	     'isbn'       => 'TestB body test.',
	     'number'     => '2',
	     'created_at' => '2016-08-12 14:00:00',
	     'updated_at' => '2016-08-12 14:00:00',
            ],
	    [
	     'id'         => '3',  
	     'title'      => 'TestC',
	     'isbn'       => 'TestC body test.',
	     'number'     => '3',
	     'created_at' => '2016-08-12 14:00:00',
	     'updated_at' => '2016-08-12 14:00:00',
            ],
	    [
	     'id'         => '4',  
	     'title'      => 'TestD',
	     'isbn'       => 'TestD body test.',
	     'number'     => '5',
	     'created_at' => '2016-08-12 14:00:00',
	     'updated_at' => '2016-08-12 14:00:00',
            ],
        ]);
    }
}
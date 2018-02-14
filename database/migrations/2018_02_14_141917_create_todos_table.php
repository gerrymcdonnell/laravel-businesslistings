<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('text');
            $table->mediumText('body');
            $table->string('due');

            $table->timestamps();
        });

        $this->insertTodos();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }

    public function insertTodos(){
        //setup default user

        $rows = [
            [
                'text'=>'first to do',
                'body'=>'blah blah bah',
                'due'=>'friday',
                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ],
            [
                'text'=>'second to do',
                'body'=>'blah blah bah',
                'due'=>'sunday',
                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ]

        ];
        // insert records
        DB::table('todos')->insert($rows);
    }
}

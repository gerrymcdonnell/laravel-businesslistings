<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');

            //nullable
            //$table->integer('user_id')->nullable();

            $table->integer('user_id')->default(1);

            $table->string('name');
            $table->string('address');
            $table->string('website');
            $table->string('email');
            $table->string('phone');
            $table->string('bio');


            $table->timestamps();
        });

        $this->insertDefaultData();
    }



    public function insertDefaultData(){
        //setup default data
        $rows = [
            [
                'name'=>'first to do',
                'address'=>'blah blah bah',
                'website'=>'kjkjkj',
                'email'=>'jkjkjk',
                'phone'=>'099 5656565',
                'bio'=>'Lorem dfghdfgfdgdfgd',

                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ],
            [
                'name'=>'first to do',
                'address'=>'blah blah bah',
                'website'=>'kjkjkj',
                'email'=>'jkjkjk',
                'phone'=>'099 5656565',
                'bio'=>'Lorem dfghdfgfdgdfgd',

                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ],
            [
                'name'=>'first to do',
                'address'=>'blah blah bah',
                'website'=>'kjkjkj',
                'email'=>'jkjkjk',
                'phone'=>'099 5656565',
                'bio'=>'Lorem dfghdfgfdgdfgd',

                'created_at'=>date('Y-m-d G:i:s'),
                'updated_at'=>date('Y-m-d G:i:s')
            ]
        ];
        // insert records
        DB::table('listings')->insert($rows);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}

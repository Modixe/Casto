<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->increments('id');               //
            $table->string('id_key_result')->nullable();                // ключевой результат
            $table->string('name_target');                              // имя цели
            $table->string('id_department')->nullable();                // отдел
            $table->string('status')->default('0%');              // статус
            $table->string('description');                              // описание
            $table->string('author')->nullable();                       // автор
            $table->string('executor')->nullable();                     // исполнитель
            $table->string('start_date');                               // дата начала
            $table->string('expiration_date');                          // дата окончания
            $table->string('priority')->default('0');              // приоритет
            $table->string('confirmed')->default('false');         // подтвержденый
            $table->string('period');                                   // период отчета
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('targets');
    }
}

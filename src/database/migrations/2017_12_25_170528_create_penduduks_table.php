<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenduduksTable extends Migration {

	public function up()
	{
		Schema::create('penduduks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable();
			$table->string('nama_lengkap', 100);
			$table->string('jenis_kelamin', 20);
			$table->string('agama', 100);
			$table->string('pekerjaan', 100);
			$table->string('status_perkawinan', 100);
			$table->text('alamat');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('penduduks');
	}
}
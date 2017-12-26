<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('penduduks', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('set null')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('penduduks', function(Blueprint $table) {
			$table->dropForeign('penduduks_user_id_foreign');
		});
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'news',
            function (Blueprint $table) {
                $table->unsignedInteger('user_id')->nullable();
                $table->index('user_id', 'news_user_id_index');
                $table->foreign('user_id', 'news_user_id_foreign')
                    ->references('id')
                    ->on('users');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'news',
            function (Blueprint $table) {
                $table->dropForeign('news_user_id_foreign');
                $table->dropIndex('news_user_id_index');
                $table->dropColumn('user_id');
            }
        );
    }
}

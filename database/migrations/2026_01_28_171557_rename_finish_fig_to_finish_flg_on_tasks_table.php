<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // renameColumn('今の名前', '新しい名前')
            $table->renameColumn('finish_fig', 'finish_flg');
        });
    }

    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            // ロールバック（元に戻す）した時のために逆の処理も書く
            $table->renameColumn('finish_flg', 'finish_fig');
        });
    }
};

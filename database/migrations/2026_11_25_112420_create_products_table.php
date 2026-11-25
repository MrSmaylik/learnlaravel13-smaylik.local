<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // $table->id(); bigIncrements -- по умолчанию поле будет id
            // $table->bigIncrements('id'); -- Тоже самое что и 1
            $table->increments('id'); // -- Любое имя для поля
            $table->string('name'); // VARCHAR - без ограничения (255)
            $table->string('email', 100)->unique(); // VARCHAR - ограничения (100); unique - уникальное значение записи
            $table->date('published_date'); // YYYY-MM-DD
            $table->dateTime('starts_at'); // YYYY-MM-DD + время
            // $table->dateTimeTz('starts_at');  YYYY-MM-DD + время с часовым поясом
            $table->timestamp('created_at'); // метка времени
            // $table->timestampsTz('created_at'); // метка времени с часовым поясом
            $table->timestamps(); // created_at + updated_at
            // $table->timestampsTZ(); // created_at + updated_at с часовым поясом
            $table->boolean('is_active')->default(true);
            $table->decimal('price', 8, 2); // 100000.99
            $table->float('discount', 10, 6); // то же самое что и decimal, но хранит приблеженное значение
            $table->json('settings')->nullable(); // создает json + по умолчанию 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

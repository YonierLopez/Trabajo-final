<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('names');  // Campo para el nombre
            $table->string('phone')->nullable();  // Campo para teléfono
            $table->string('email');
            $table->text('mensaje');
            $table->timestamps();  // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}

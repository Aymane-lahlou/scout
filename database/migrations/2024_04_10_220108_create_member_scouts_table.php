<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberScoutsTable extends Migration
{
    public function up()
    {
        Schema::create('MemberScouts', function (Blueprint $table) {
            $table->id();
            $table->string('Nom complet en arabe', 40);
            $table->enum('Sexe', ['Male', 'Female']);
            $table->string('État civil', 30);
            $table->integer('Nombre d\'enfants');
            $table->date('Date de naissance');
            $table->string('Lieu de naissance', 50);
            $table->string('L\'adresse', 150);
            $table->string('La ville', 30);
            $table->string('CIN', 30)->unique();
            $table->string('Numéro de téléphone', 30)->unique();
            $table->string('Numéro WhatsApp', 30)->unique();
            $table->string('Facebook', 20);
            $table->string('Email', 90)->unique();
            $table->string('Password', 60);
            $table->string('niveau d\'étude', 30);
            $table->string('Spécialisation', 50);
            $table->integer('Niveau de langue arabe');
            $table->integer('Niveau de langue amazighe');
            $table->integer('Niveau de langue française');
            $table->integer('niveau de langue anglais');
            $table->integer('Niveau de langue espagnole');
            $table->string('Autres langues', 140);
            $table->string('Situation professionnelle', 40);
            $table->string('Spécialité professionnelle', 80);
            $table->integer('Années d\'expérience');
            $table->string('Region', 60);
            $table->date('date d\'adhésion à l\'association');
            $table->enum('membre actif Dans l\'association', ['Yes', 'No']);
            $table->string('Responsabilité au sein de l\'association', 100);
            $table->string('Formation acquise', 56);
            $table->string('fillier', 80)->nullable();
            $table->string('Prise de mesure pour les vêtements', 6);
            $table->string('L\'appartenance politique', 60);
            $table->date('date d\'adhésion à parti');
            $table->enum('Membre actif dans le parti', ['Yes', 'No']);
            $table->string('La fonction au sein du parti', 80);
            $table->unsignedBigInteger('association_id');
            $table->foreign('association_id')->references('id')->on('scout_associations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('MemberScouts');
    }
}

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('La_branche', 75);
            $table->string('Entité', 75);
            $table->string('Le siège central', 75);
            $table->string('type d\'activité', 75);
            $table->date('date d\'activity');
            $table->string('Nature de l\'activité', 75);
            $table->string('Domaine de l\'activité', 75);
            $table->integer('Nombre de bénéficiaires masculins');
            $table->integer('Nombre de bénéficiaires féminins');
            $table->string('La population cible', 75);
            $table->string('Lieu de l\'activité', 75);
            $table->string('Durée de l\'activité', 75);
            $table->string('Rapport d\'activité', 75);
            $table->string('Les membres du personnel impliqués dans l\'activité', 75);
            $table->float('Les frais de l\'activité');
            $table->float('Les Revenus de l\'activité');
            $table->string('location', 255);
            $table->unsignedBigInteger('association_id');
            $table->foreign('association_id')->references('id')->on('scout_associations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}

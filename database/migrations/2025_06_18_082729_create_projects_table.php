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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable(); // Path to an organization logo
            $table->json('settings')->nullable(); // JSON field for additional settings
            $table->unsignedBigInteger('leader_id')->nullable();
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('leader_id')->nullable();
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('set null');
            $table->timestamps();
        });
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('status')->default('active'); // e.g., active, archived
            $table->unsignedBigInteger('leader_id')->nullable();
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('set null');
            $table->string('members')->nullable();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('set null');
            $table->unsignedBigInteger('departement_id')->nullable();
            $table->foreign('departements_id')->references('id')->on('departments')->onDelete('set null');
            $table->date('start_at');
            $table->date('end_at')->nullable(); // Nullable for ongoing projects
            $table->string('icon')->nullable(); // Path to an icon image
            $table->json('settings')->nullable(); // JSON field for additional settings
            $table->timestamps();
        });
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category'); // e.g., planning, excetution, monitoring, evaluation, reporting
            $table->string('status')->default('active'); // e.g., active, archived
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
            $table->date('start_at');
            $table->date('end_at')->nullable(); // Nullable for ongoing projects
            $table->string('icon')->nullable(); // Path to an icon image
            $table->json('settings')->nullable(); // JSON field for additional settings
            $table->string('file')->nullable(); // Path to an files;
            $table->timestamps();
        });
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('active'); // e.g., active, archived
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->unsignedBigInteger('assignment_id')->nullable();
            $table->foreign('assignment_id')->references('id')->on('assignments')->onDelete('set null');
            $table->date('start_at');
            $table->date('end_at')->nullable(); // Nullable for ongoing projects
            $table->string('icon')->nullable(); // Path to an icon image
            $table->json('settings')->nullable(); // JSON field for additional settings
            $table->string('file')->nullable(); // Path to an files;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('departements');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('assignments');
        Schema::dropIfExists('tasks');
    }
};

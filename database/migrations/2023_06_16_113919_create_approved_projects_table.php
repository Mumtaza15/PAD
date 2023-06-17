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
        Schema::create('approved_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->unsignedBigInteger('event_id')->nullable;
            $table->integer('votes')->default(0);
            $table->text('description');
            $table->string('category');
            $table->string('video_link');
            $table->string('dosen_pembimbing');
            $table->string('event_name')->nullable;
            $table->string('demo_link');
            $table->string('team_name');
            $table->string('member1_name');
            $table->string('member2_name')->nullable;
            $table->string('member3_name')->nullable;
            $table->string('member4_name')->nullable;
            $table->string('member5_name')->nullable;
            $table->string('member1_role');
            $table->string('member2_role')->nullable;
            $table->string('member3_role')->nullable;
            $table->string('member4_role')->nullable;
            $table->string('member5_role')->nullable;
            $table->string('member1_photo');
            $table->string('member2_photo')->nullable;
            $table->string('member3_photo')->nullable;
            $table->string('member4_photo')->nullable;
            $table->string('member5_photo')->nullable;
            $table->string('project_picture1');
            $table->string('project_picture2')->nullable;
            $table->string('project_picture3')->nullable;
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approved_projects');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateContentTypeInAdvertisementsTable extends Migration
{
    public function up()
    {
        Schema::table('advertisements', function (Blueprint $table) {
            // Change the column definition to include the new enum values
            $table
                ->enum('content_type', [
                    'course',
                    'exam',
                    'book',
                    'free_service',
                    'external-link',
                ])
                ->nullable()
                ->change();
        });
    }

    public function down()
    {
        Schema::table('advertisements', function (Blueprint $table) {
            // Revert to the old values (if needed)
            $table
                ->enum('content_type', [
                    'course',
                    'exam',
                    'external-link',
                ])
                ->nullable()
                ->change();
        });
    }
}

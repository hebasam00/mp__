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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // عمود للاسم
            $table->string('category'); // عمود للفئة
            $table->unsignedBigInteger('created_by'); // عمود لإنشاء بواسطة
            $table->timestamps();

            // إذا كان لديك جدول المستخدمين، يمكنك إضافة قيود المفتاح الخارجي
            // $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};


<?php
//protected $table = 'note_forms';
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_forms', function (Blueprint $table) {
            //会社名、会社住所、会社電話番号、会社メールアドレス、URL、sns
            $table->bigIncrements('id');
            $table->string('company_name', 100);
            $table->string('company_address', 100);
            $table->string('company_number', 100);
            $table->string('company_email', 255);
            $table->longText('url')->nullable($value = true);
            $table->longText('sns')->nullable($value = true);
            //担当者名、担当電話番号、担当メールアドレス
            $table->string('person_name', 100);
            $table->string('person_number', 100);
            $table->string('person_email', 255);
//断熱性能(Ua値)、断熱材、(耐震等級)、構造
            $table->string('ua', 100);
            $table->string('insulation', 100);
            $table->string('contact', 200);
//坪単価、総資金計画、建売価格
            $table->string('tusbo_price', 100);
            $table->string('financing_plan', 100);
            $table->string('selling_price', 100);
//標準仕様、オプション
            $table->string('standard', 100);
            $table->string('option', 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note_forms');
    }
}

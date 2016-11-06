<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('alcohol')->truncate();
         $now = Carbon::now();

        $jonniewalker_black = [
        "name" => "Jonnie Walker Black Label",
        "img" => "img/item/johnniewalker_black.jpg",
        "description" => "ジョニーウォーカーブラックラベル",
        "price" => "2000",
          "created_at" => $now,
            "updated_at" => $now
    ];

        $jonniewalker_doubleblack = [
        "name" => "Jonnie Walker Double Black",
        "img" => "img/item/johnniewalker_doubleblack.jpg",
        "description" => "ジョニーウォーカーダブルブラック",
        "price" => "2500",
          "created_at" => $now,
            "updated_at" => $now
    ];

   $jonniewalker_green = [
        "name" => "Jonnie Walker Green Label",
        "img" => "img/item/johnniewalker_green.jpg",
        "description" => "ジョニーウォーカーグリーンラベル",
        "price" => "5000",
          "created_at" => $now,
            "updated_at" => $now
    ];

    $jonniewalker_blue = [
        "name" => "Jonnie Walker Blue Label",
        "img" => "img/item/johnniewalker_blue.jpg",
        "description" => "至高のウイスキー",
        "price" => "13500",
          "created_at" => $now,
            "updated_at" => $now
    ];

       $henessy = [
        "name" => "Henessy",
        "img" => "img/item/hennessy.jpg",
        "description" => "Henessy",
        "price" => "2500",
          "created_at" => $now,
            "updated_at" => $now
    ];

       $henessy_black = [
        "name" => "Henessy Black",
        "img" => "img/item/hennessy_black.jpg",
        "description" => "Henessy Black",
        "price" => "4500",
          "created_at" => $now,
            "updated_at" => $now
    ];

       $bowmore = [
        "name" => "Bowmore",
        "img" => "img/item/bowmore.jpg",
        "description" => "Bowmore",
        "price" => "4000",
          "created_at" => $now,
            "updated_at" => $now
    ];

      $macallan = [
        "name" => "Macallan",
        "img" => "img/item/macallan.jpg",
        "description" => "Macallan",
        "price" => "5000",
          "created_at" => $now,
            "updated_at" => $now
    ];

      $oldpar = [
        "name" => "Old Par",
        "img" => "img/item/oldpar.jpg",
        "description" => "Old Par",
        "price" => "2500",
          "created_at" => $now,
            "updated_at" => $now
    ];

      $fourroses = [
        "name" => "Four Roses",
        "img" => "img/item/fourroses.jpg",
        "description" => "Four Roses",
        "price" => "1500",
          "created_at" => $now,
            "updated_at" => $now
    ];

      $ballantine17 = [
        "name" => "Ballantine 17 Years",
        "img" => "img/item/ballantine_17years.jpg",
        "description" => "Ballantine17Years",
        "price" => "10000",
          "created_at" => $now,
            "updated_at" => $now
    ];

    $ballantine21 = [
        "name" => "Ballantine 21 Years",
        "img" => "img/item/ballantine_21years.jpg",
        "description" => "Ballantine21Years",
        "price" => "15000",
          "created_at" => $now,
            "updated_at" => $now
    ];

    DB::table('alcohol')->insert([
        $jonniewalker_black, 
        $jonniewalker_doubleblack, 
        $jonniewalker_green,
        $jonniewalker_blue,
        $henessy,
        $henessy_black,
        $bowmore,
        $macallan,
        $oldpar,
        $fourroses,
        $ballantine17,
        $ballantine21,
        ]);
    }
}

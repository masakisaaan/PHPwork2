<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
use App\Item;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
  {
         $now = Carbon::now();

       DB::table('item_master')->insert([
        "item_name" => "Jonnie Walker Black Label",
        "item_img" => "img/item/johnniewalker_black.jpg",
        "description" => "ジョニーウォーカーブラックラベル",
        "price" => "2000",
          "created_at" => $now,
            "updated_at" => $now
    ]);

        DB::table('item_master')->insert([
        "item_name" => "Jonnie Walker Double Black",
        "item_img" => "img/item/johnniewalker_doubleblack.jpg",
        "description" => "ジョニーウォーカーダブルブラック",
        "price" => "2500",
          "created_at" => $now,
            "updated_at" => $now
    ]);

        DB::table('item_master')->insert([
        "item_name" => "Jonnie Walker Green Label",
        "item_img" => "img/item/johnniewalker_green.jpg",
        "description" => "ジョニーウォーカーグリーンラベル",
        "price" => "5000",
          "created_at" => $now,
            "updated_at" => $now
    ]);

        DB::table('item_master')->insert([
        "item_name" => "Jonnie Walker Blue Label",
        "item_img" => "img/item/johnniewalker_blue.jpg",
        "description" => "至高のウイスキー",
        "price" => "13500",
          "created_at" => $now,
            "updated_at" => $now
    ]);

        DB::table('item_master')->insert([
        "item_name" => "Henessy",
        "item_img" => "img/item/hennessy.jpg",
        "description" => "Henessy",
        "price" => "2500",
          "created_at" => $now,
            "updated_at" => $now
    ]);

        DB::table('item_master')->insert([
        "item_name" => "Henessy Black",
        "item_img" => "img/item/hennessy_black.jpg",
        "description" => "Henessy Black",
        "price" => "4500",
          "created_at" => $now,
            "updated_at" => $now
    ]);

    

        DB::table('users')->insert([
          //  'username' => 'masakidj',
            'name' => '濱田 真旗',
          //  'kana' => 'ハマダ マサキ',
            'email' => 'masakilex@gmail.com',
            'password' => bcrypt('masakiserver'),
          //  'zip' => 5510033,
          //  'address1' => '大阪府大阪市大正区北鹿島',
          //  'address2' => '2-1-11',
          //  'address3' => '',
          //  'phone' => '09012345678',
          //  'birthday' => 19960507,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}

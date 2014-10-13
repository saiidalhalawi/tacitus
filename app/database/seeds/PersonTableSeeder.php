<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class PersonTableSeeder extends Seeder {

	public function run()
	{
		$persons = array(
						array(
							'name_jp'=> 'エリザベスI世', 
							'name_en'=> 'Elizabeth I of England', 
							'birth_year'=> 15330907, 
							'is_birth_year_fixed'=> true, 
							'death_year'=> 16030324, 
							'is_death_year_fixed'=> true, 
							'region_id'=> 1, 
							'explanation_jp'=> 'ヘンリー8世の娘でテューダー朝イングランド王国の女王。'
												+ '25歳で即位し、内政では1559年に統一法を発布し、国教会を中心としてカトリック・プロテスタント両勢力の融和を図り、'
												+'対外的には1588年に無敵艦隊のスペインを破り、その後の海洋帝国への端緒を開いた。生涯の未婚を宣言したことから処女王と呼ばれた。', 
							'explanation_en'=> 'Queen of England and Ireland, and the daughter of Henry VIII', 
							'title_jp'=> 'イングランド女王', 
							'title_en'=> 'Queen of England',
						), 
						array(
							'name_jp'=> 'リシュリュー', 
							'name_en'=> 'Richelieu', 
							'birth_year'=> 15850909, 
							'is_birth_year_fixed'=> true, 
							'death_year'=> 16421204, 
							'is_death_year_fixed'=> true, 
							'region_id'=> 1, 
							'explanation_jp'=> 'カトリック教会の聖職者にしてフランス王国の政治家。'
												+ '中央集権体制の確立と王権の強化に尽力し、行政組織の整備、三部会の停止などを通じて後年の絶対王政の基礎を築いた。', 
							'explanation_en'=> "a French cardinal, noble and King Louis XIII's chief minister", 
							'title_jp'=> 'フランス宰相', 
							'title_en'=> 'Prime Minister of France',
						), 
					);

		foreach($persons as $person)
		{
			Person::create($person);
		}
	}

}

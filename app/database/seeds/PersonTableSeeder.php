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
							'region_id'=> 2, 
							'explanation_jp'=> 'カトリック教会の聖職者にしてフランス王国の政治家。'
												+ '中央集権体制の確立と王権の強化に尽力し、行政組織の整備、三部会の停止などを通じて後年の絶対王政の基礎を築いた。', 
							'explanation_en'=> "a French cardinal, noble and King Louis XIII's chief minister", 
							'title_jp'=> 'フランス宰相', 
							'title_en'=> 'Prime Minister of France',
						), 
						array(
							'name_jp'=> 'スレイマン1世', 
							'name_en'=> 'Suleiman I', 
							'birth_year'=> 14941106, 
							'is_birth_year_fixed'=> true, 
							'death_year'=> 15660906, 
							'is_death_year_fixed'=> true, 
							'region_id'=> 7, 
							'explanation_jp'=> 'オスマン帝国の第10代皇帝。セリム1世の子。'
												+ '46年の長期にわたる在位の中で13回もの対外遠征を行い、数多くの軍事的成功を収めてオスマン帝国を最盛期に導いた。', 
							'explanation_en'=> "The tenth Sultan of the Ottoman Empire, known as “the Magnificent” in the West." 
												+"presiding over the apex of the Ottoman Empire's military, political and economic power.", 
							'title_jp'=> 'オスマン皇帝', 
							'title_en'=> 'Ottoman Emperor',
						), 
						array(
							'name_jp'=> 'レオポルト1世', 
							'name_en'=> 'Leopold I', 
							'birth_year'=> 16400609, 
							'is_birth_year_fixed'=> true, 
							'death_year'=> 17050505, 
							'is_death_year_fixed'=> true, 
							'region_id'=> 3, 
							'explanation_jp'=> 'ハプスブルク家の神聖ローマ皇帝で、オーストリア大公、ボヘミア王、ハンガリー王。'
												+ '三十年戦争で衰退した領土を受け継ぎ、全盛期のフランスとオスマン帝国に圧迫されて苦戦を強いられたが、'
												+'やがてオスマン帝国からハンガリー・トランシルヴァニアを奪取して東に領土を拡大、ハプスブルク家の大国復興の足がかりを築いた。', 
							'explanation_en'=> "Holy Roman Emperor, King of Hungary and Croatia and King of Bohemia." 
												+"Leopold's reign is known for the conflicts with the Ottoman Empire in the east, "
												+"and the rivalry with Louis XIV, a contemporary and first cousin, in the west.", 
							'title_jp'=> '神聖ローマ皇帝', 
							'title_en'=> 'Holy Roman Emperor',
						), 
					);

		$personModel = new Person();
		foreach($persons as $person)
		{
			var_dump($person);die;
			$rec = $personModel->findBy('name_en', $person['name_en']);
			if($rec){
				continue;
			}
			Person::create($person);
		}
	}

}

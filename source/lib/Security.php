<?php
class Security {
	private static $seed = '9YKz8wx8p6U4Exl1a';

	static public function getSeed() {
		return self::$seed;
	}

	function chiffrer($texte_en_clair) {
		$texte_chiffre = hash('sha256', $texte_en_clair);
		return $texte_chiffre;
	}

}
?>
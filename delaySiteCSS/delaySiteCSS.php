<?php
class delaySiteCSS extends plxPlugin {	
    
	public function __construct($default_lang) {		
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('IndexBegin','IndexBegin');
		$this->addHook('ThemeEndHead','ThemeEndHead');
	}	
		# modify les balises link : valeur des attributs media^à none et repasser à all sur l'evenement onload de la page.
		public function ThemeEndHead() {	
echo '<?php ';?>
			ob_start();
			$output = preg_replace('/(<*[^>]*media=)"[^>]+"([^>]*>)/', ob_get_clean().'\1"none" onload="if(media!=\'all\')media=\'all\'"\2', $output);
	?>
<?php	
		}		
}
?>

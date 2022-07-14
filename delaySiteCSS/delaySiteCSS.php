<?php
class delaySiteCSS extends plxPlugin {	 
	const BEGIN_CODE = '<?php' . PHP_EOL;
	const END_CODE = PHP_EOL . '?>';
    
	public function __construct($default_lang) {
		
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('plxShowPluginsCss', 'plxShowPluginsCss');
		

	}	
	public function plxShowPluginsCss(){ 
	echo '<link rel="stylesheet" type="text/css" href="data/site.css" media="none" onload="if(media!=\'all\')media=\'all\'"  />';
				echo self::BEGIN_CODE;
?>
	return true;
<?php
		echo self::END_CODE;        
       }
}
?>

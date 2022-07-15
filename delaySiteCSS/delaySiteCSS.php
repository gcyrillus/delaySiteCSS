<?php
class delaySiteCSS extends plxPlugin {	 
    
	public function __construct($default_lang) {
		
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('IndexBegin','IndexBegin');
		$this->addHook('IndexEnd','IndexEnd');
	}	
        // désactive de force la compression gzip si activée pour une compatibilité des plugins usant du hook indexEnd() ou hook perso similaire dans les templates
        public function  IndexBegin() {
            echo '<?php ';
?>
        $plxMotor->aConf['gzip'] ='0';
            ?>
<?php           
        }  
	public function IndexEnd() {
		$find = 'media="screen"';	
		echo '<?php ';?>
			ob_start();
			echo 'media="none" onload="if(media!=\'all\')media=\'all\'"'; 
			$output = str_replace('<?php echo $find; ?>', ob_get_clean(), $output);
	 ?>
	  <?php	
	}		
}
?>

<?php
class delaySiteCSS extends plxPlugin {	 
    
	public function __construct($default_lang) {
		
		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('IndexEnd','IndexEnd');
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
<div id='shipping-calc'>
	<div id='wscp-form'>
	<input type='tel' id='wscp-postcode' autocomplete="postal-code" placeholder="<?=get_option('wscip_placeholder','Insira o seu CEP')?>" name='wscp-postcode' class='input-text text' />
	<input type='button' id='wscp-button' class='button wscp-button' value='Calcular' style="color: <?=get_option('wscip_btn_color_text','#ffffff');?>; background-color: <?=get_option('wscip_btn_color','#999999');?>">
	<input type='hidden' name='wscp-nonce' id='wscp-nonce' value='<?= wp_create_nonce( 'wscp-nonce' ); ?>'>
	</div>
	<div id='wscp-response'></div>
</div>

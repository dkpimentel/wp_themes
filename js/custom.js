/*
 * Fução para Copywight que retorar o ano atual
 */
add_shortcode('dd_cod_ano','dd_cod_ano');
function dd_cod_ano(){

	$anoAtual = "© Copyright ". date('Y');
	return $anoAtual;

}






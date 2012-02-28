<?php
/**
 * Ajustes das inflections para portuguÃªs
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @author        Juan Basso <jrbasso@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link          http://wiki.github.com/jrbasso/cake_ptbr/inflections
 */

// AlteraÃ§Ã£o do inflector
$_uninflected = array('atlas', 'lapis', 'onibus', 'pires', 'virus', '.*x');
$_pluralIrregular = array(
	'abdomens' => 'abdomen',
	'alemao' => 'alemaes',
	'artesa' => 'artesaos',
	'as' => 'ases',
	'bencao' => 'bencaos',
	'cao' => 'caes',
	'capelao' => 'capelaes',
	'capitao' => 'capitaes',
	'chao' => 'chaos',
	'charlatao' => 'charlataes',
	'cidadao' => 'cidadaos',
	'consul' => 'consules',
	'cristao' => 'cristaos',
	'dificil' => 'dificeis',
	'email' => 'emails',
	'escrivao' => 'escrivaes',
	'fossel' => 'fosseis',
	'germens' => 'germen',
	'grao' => 'graos',
	'hifens' => 'hifen',
	'irmao' => 'irmaos',
	'liquens' => 'liquen',
	'mal' => 'males',
	'mao' => 'maos',
	'orfao' => 'orfaos',
	'pais' => 'paises',
	'pai' => 'pais',
	'pao' => 'paes',
	'perfil' => 'perfis',
	'projetil' => 'projeteis',
	'reptil' => 'repteis',
	'sacristao' => 'sacristaes',
	'sotao' => 'sotaos',
	'tabeliao' => 'tabeliaes',
	'rg' => 'rgs',
	'pf' => 'pfs',
	'uf' => 'ufs',
	'funcao_exercida' => 'funcoes_exercidas',
	'pais' => 'paises'	
);

Inflector::rules('singular', array(
	'rules' => array(
		'/^(.*)(oes|aes|aos)$/i' => '\1ao',
		'/^(.*)(a|e|o|u)is$/i' => '\1\2l',
		'/^(.*)e?is$/i' => '\1il',
		'/^(.*)(r|s|z)es$/i' => '\1\2',
		'/^(.*)ns$/i' => '\1m',
		'/^(.*)s$/i' => '\1',
	),
	'uninflected' => $_uninflected,
	'irregular' => array_flip($_pluralIrregular)
), true);

Inflector::rules('plural', array(
	'rules' => array(
		'/^(.*)ao$/i' => '\1oes',
		'/^(.*)(r|s|z)$/i' => '\1\2es',
		'/^(.*)(a|e|o|u)l$/i' => '\1\2is',
		'/^(.*)il$/i' => '\1is',
		'/^(.*)(m|n)$/i' => '\1ns',
		'/^(.*)$/i' => '\1s'
	),
	'uninflected' => $_uninflected,
	'irregular' => $_pluralIrregular
), true);

Inflector::rules('transliteration', array(
	'/Ã€|Ã�|Ã‚|Ãƒ|Ã„|Ã…/' => 'A',
	'/Ãˆ|Ã‰|ÃŠ|Ã‹/' => 'E',
	'/ÃŒ|Ã�|ÃŽ|Ã�/' => 'I',
	'/Ã’|Ã“|Ã”|Ã•|Ã–|Ã˜/' => 'O',
	'/Ã™|Ãš|Ã›|Ãœ/' => 'U',
	'/Ã‡/' => 'C',
	'/Ã�/' => 'D',
	'/Ã‘/' => 'N',
	'/Å /' => 'S',
	'/Ã�|Å¸/' => 'Y',
	'/Å½/' => 'Z',
	'/Ã†/' => 'AE',
	'/ÃŸ/'=> 'ss',
	'/Å’/' => 'OE',
	'/Ã |Ã¡|Ã¢|Ã£|Ã¤|Ã¥|Âª/' => 'a',
	'/Ã¨|Ã©|Ãª|Ã«|&/' => 'e',
	'/Ã¬|Ã­|Ã®|Ã¯/' => 'i',
	'/Ã²|Ã³|Ã´|Ãµ|Ã¶|Ã¸|Âº/' => 'o',
	'/Ã¹|Ãº|Ã»|Ã¼/' => 'u',
	'/Ã§/' => 'c',
	'/Ã°/' => 'd',
	'/Ã±/' => 'n',
	'/Å¡/' => 's',
	'/Ã½|Ã¿/' => 'y',
	'/Å¾/' => 'z',
	'/Ã¦/' => 'ae',
	'/Å“/' => 'oe',
	'/Æ’/' => 'f'
));

unset($_uninflected, $_pluralIrregular);

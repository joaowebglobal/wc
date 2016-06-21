<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property PromoVigentePor $PromoVigentePor
 * @property PromoPorPercDesconto $PromoPorPercDesconto
 * @property PromoPorValorDesconto $PromoPorValorDesconto
 * @property PromoVigenteAvista $PromoVigenteAvista
 * @property PromoAvistaPercDesconto $PromoAvistaPercDesconto
 * @property Arquivo $Arquivo
 * @property CursosNoticia $CursosNoticia
 * @property Curso $Curso
 * @property MarketplaceB2wBatch $MarketplaceB2wBatch
 * @property Marketplace $Marketplace
 * @property News $News
 * @property Noticia $Noticia
 * @property Campanha $Campanha
 * @property Colaboradore $Colaboradore
 * @property Comparadore $Comparadore
 * @property Selo $Selo
 * @property Vitrine $Vitrine
 */
class Produto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'codigo_produto' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nome_produto' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tempo_garantia_produto' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estoque_produto' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'qtde_alocada_produto' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_integrado_de' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_manual_de' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_calculado_de' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_vigente_de' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_integrado_por' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_manual_por' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_calculado_por' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_vigente_por' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_integrado_avista' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_manual_avista' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_calculado_avista' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_vigente_avista' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nome_promocao_vigente' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'google_shopping' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'altura' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comprimento' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'largura' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lancamento' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'marketplace_produto_exclusivo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PromoVigentePor' => array(
			'className' => 'PromoVigentePor',
			'foreignKey' => 'promo_vigente_por_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PromoPorPercDesconto' => array(
			'className' => 'PromoPorPercDesconto',
			'foreignKey' => 'promo_por_perc_desconto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PromoPorValorDesconto' => array(
			'className' => 'PromoPorValorDesconto',
			'foreignKey' => 'promo_por_valor_desconto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PromoVigenteAvista' => array(
			'className' => 'PromoVigenteAvista',
			'foreignKey' => 'promo_vigente_avista_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PromoAvistaPercDesconto' => array(
			'className' => 'PromoAvistaPercDesconto',
			'foreignKey' => 'promo_avista_perc_desconto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Arquivo' => array(
			'className' => 'Arquivo',
			'foreignKey' => 'produto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'CursosNoticia' => array(
			'className' => 'CursosNoticia',
			'joinTable' => 'cursos_noticias_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'cursos_noticia_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Curso' => array(
			'className' => 'Curso',
			'joinTable' => 'cursos_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'curso_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'MarketplaceB2wBatch' => array(
			'className' => 'MarketplaceB2wBatch',
			'joinTable' => 'marketplace_b2w_batch_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'marketplace_b2w_batch_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Marketplace' => array(
			'className' => 'Marketplace',
			'joinTable' => 'marketplace_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'marketplace_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'News' => array(
			'className' => 'News',
			'joinTable' => 'news_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'news_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Noticia' => array(
			'className' => 'Noticia',
			'joinTable' => 'noticias_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'noticia_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Campanha' => array(
			'className' => 'Campanha',
			'joinTable' => 'produtos_campanhas',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'campanha_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Colaboradore' => array(
			'className' => 'Colaboradore',
			'joinTable' => 'produtos_colaboradores',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'colaboradore_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Comparadore' => array(
			'className' => 'Comparadore',
			'joinTable' => 'produtos_comparadores',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'comparadore_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Selo' => array(
			'className' => 'Selo',
			'joinTable' => 'produtos_selos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'selo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Vitrine' => array(
			'className' => 'Vitrine',
			'joinTable' => 'vitrines_produtos',
			'foreignKey' => 'produto_id',
			'associationForeignKey' => 'vitrine_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public function putProduct($data){

		$data = get_object_vars($data);

		$new['properties']['description'] 			= $data['description'];
		$new['properties']['salePrice'] 			= $data['salePrice'];
		$new['properties']['orderLimit'] 			= $data['orderLimit'];
		$new['properties']['displayName'] 			= $data['displayName'];
		$new['properties']['width'] 				= '';
		$new['properties']['brand'] 				= $data['brand'];
		//$tmp['properties']['weight'] 				= '';
		//$tmp['properties']['productNumber'] 		= '';
		$new['properties']['active'] 				= $data['active'];
		$new['properties']['id'] 					= $data['id'];
		$new['properties']['listPrice'] 			= $data['listPrice'];
		$new['properties']['length'] 				= '';
		$new['properties']['shippingSurcharge'] 	= $data['shippingSurcharge'];
		$new['properties']['arrivalDate'] 			= '';
		$new['properties']['longDescription'] 		= $data['longDescription'];
		$new['properties']['taxCode'] 				= '';
		//$new['properties']['primaryFullImageURL'] 	= 'http://www.imagenslivres.com/wp-content/uploads/2016/03/Empres%C3%A1rio-com-Holograma-de-Redes-Sociais.jpg';
		//$tmp['properties']['height'] 				= '';
		//$tmp['productType'] 						= '';
		//$tmp['categoryId'] 							= '';
		$new['id'] 									= $data['id'];
		//$tmp['catalogId'] 							= '';

		/*
		$new['productImages'][0]['path']				= 'http://assets.lwsite.com.br/uploads/widget_image/image/336/519/336519/imagens-imagens-gratis-5e728e.jpg';
		$new['productImages'][0]['metadata']['altText']= 'teste';
		$new['productImages'][0]['metadata']['titleText']= 'teste';
		$new['productImages'][0]['repositoryId']		= '';
		$new['productImages'][0]['name']				= 'teste';
		*/

		return $new;
	}

	public function teste(){
		$data = $this->query('SELECT 
							p.id_produto as "ID",
							p.nome_produto as "Nome",
							p.descricao_produto as "Descricao",
							p.valor_vigente_por as "PrecoPor",
							p.valor_vigente_de as "PrecoDe",
								(SELECT round(p.valor_vigente_por /MAX(parcelas_condpagto),2)
									FROM  condicao_pagamento
									where ativo = "S" and id_meiopagto = 3
									and p.valor_vigente_por / parcelas_condpagto > 
										(SELECT valor_pg FROM parametros_gerais WHERE label_pg = "parcela_minima")) as "VezesParcela",
										(SELECT MAX(parcelas_condpagto) FROM condicao_pagamento where ativo = "S" AND id_meiopagto = 3
											AND p.valor_vigente_por / parcelas_condpagto > (SELECT valor_pg FROM parametros_gerais WHERE
											label_pg = "parcela_minima")) as "VezesParcela",
							f.nome_fabricante as "Marca",
							p.seo_title_pagina as "Titulo",
							p.seo_meta_keyword as "Keywords",
							p.seo_meta_description as "Description"
						FROM produtos p 
						LEFT JOIN fabricantes f 
						ON f.id_fabricante = p.id_fabricante 
						WHERE p.id_produto > "731"
						LIMIT 300');
						// WHERE p.id_produto = "731"');
//header('content-type:text/plain;');
// header("Content-Type: text/html; charset=UTF-8",true);
// foreach ($data as $kd=>$d) 
// 	foreach ($d as $kr=>$r) 
// 		foreach ($r as $kl=>$l) 
// print_r($data);
// 		$data[$kd][$kr][$kl]=addslashes(htmlspecialchars($l));
	

// print_r($data);
// echo 'pq nao encodo ----'.json_encode($data);
// exit;
// header('content-type:text/plain;');
		$result = array();
		$id = '';

		foreach($data as $key => $d){
// echo $d['p']['Nome'].PHP_EOL;
// echo mb_convert_encoding($d['p']['Nome'], "UTF-8").PHP_EOL;
// echo utf8_encode($d['p']['Nome']).PHP_EOL;
// echo utf8_decode($d['p']['Nome']).PHP_EOL;
// echo utf8_decode(utf8_encode($d['p']['Nome'])).PHP_EOL;
//exit;
// print_r($d);
			
			//$m = str_replace('"', "'", $d['p']['Descricao']);
			$m = addslashes(htmlspecialchars($d['p']['Descricao']));
			//debug($m);
			//$m = htmlspecialchars($m;
//			debug($m);
			$string = str_replace("&quot;", "'",$m);
			if(strlen($string) > 2000){
				$string = '';
			}
			//debug($string);
   //      	$string = ereg_replace("([/\'])$", "'",$string);
   //      	debug($string);
//die;
			$tmp['properties']['description'] 			= $string;//addslashes(htmlspecialchars($string));
			$tmp['properties']['salePrice'] 			= $d['p']['PrecoPor'];
			$tmp['properties']['orderLimit'] 			= '5';
			$tmp['properties']['displayName'] 			= utf8_encode($d['p']['Nome']);
			$tmp['properties']['width'] 				= '';
			$tmp['properties']['brand'] 				= utf8_encode($d['f']['Marca']);
			$tmp['properties']['weight'] 				= '';
			$tmp['properties']['productNumber'] 		= '';
			$tmp['properties']['active'] 				= true;
			$tmp['properties']['id'] 					= $d['p']['ID'];
			$tmp['properties']['listPrice'] 			= $d['p']['PrecoDe'];
			$tmp['properties']['length'] 				= '';
			$tmp['properties']['shippingSurcharge'] 	= 0;
			$tmp['properties']['arrivalDate'] 			= '';
			$tmp['properties']['longDescription'] 		= addslashes(htmlspecialchars($d['p']['Description']));
			$tmp['properties']['taxCode'] 				= '';
			$tmp['properties']['height'] 				= '';
			$tmp['productType'] 						= '';
			$tmp['categoryId'] 							= '';
			$tmp['id'] 									= $d['p']['ID'];
			$tmp['catalogId'] 							= '';

			//$id = $d['p']['ID'];
			$result[] = $tmp;
			
		}
		
		 //$response = json_encode($result);
		 //print_r($response);die;
		// $response = substr($response, 1);
		// $response = substr($response, 0, -1);
		
		return $result;
	}

}

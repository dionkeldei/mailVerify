<?php
namespace dionkeldei\mailVerify;

class mailVerify {

	public $list_domain_extensions = array(
										'ac',
										'academy',
										'actor',
										'ad',
										'ae',
										'aero',
										'af',
										'ag',
										'agency',
										'ai',
										'al',
										'am',
										'an',
										'ao',
										'aq',
										'ar',
										'arpa',
										'as',
										'asia',
										'at',
										'au',
										'aw',
										'ax',
										'az',
										'ba',
										'bar',
										'bargains',
										'bb',
										'bd',
										'be',
										'berlin',
										'best',
										'bf',
										'bg',
										'bh',
										'bi',
										'bid',
										'bike',
										'biz',
										'bj',
										'blue',
										'bm',
										'bn',
										'bo',
										'boutique',
										'br',
										'bs',
										'bt',
										'build',
										'builders',
										'buzz',
										'bv',
										'bw',
										'by',
										'bz',
										'ca',
										'cab',
										'camera',
										'camp',
										'cards',
										'careers',
										'cat',
										'catering',
										'cc',
										'cd',
										'center',
										'ceo',
										'cf',
										'cg',
										'ch',
										'cheap',
										'christmas',
										'ci',
										'ck',
										'cl',
										'cleaning',
										'clothing',
										'club',
										'cm',
										'cn',
										'co',
										'codes',
										'coffee',
										'com',
										'community',
										'company',
										'computer',
										'condos',
										'construction',
										'contractors',
										'cool',
										'coop',
										'cr',
										'cruises',
										'cu',
										'cv',
										'cw',
										'cx',
										'cy',
										'cz',
										'dance',
										'dating',
										'de',
										'democrat',
										'diamonds',
										'directory',
										'dj',
										'dk',
										'dm',
										'do',
										'domains',
										'dz',
										'ec',
										'edu',
										'education',
										'ee',
										'eg',
										'email',
										'enterprises',
										'equipment',
										'er',
										'es',
										'estate',
										'et',
										'eu',
										'events',
										'expert',
										'exposed',
										'farm',
										'fi',
										'fish',
										'fj',
										'fk',
										'flights',
										'florist',
										'fm',
										'fo',
										'foundation',
										'fr',
										'futbol',
										'ga',
										'gallery',
										'gb',
										'gd',
										'ge',
										'gf',
										'gg',
										'gh',
										'gi',
										'gift',
										'gl',
										'glass',
										'gm',
										'gn',
										'gov',
										'gp',
										'gq',
										'gr',
										'graphics',
										'gs',
										'gt',
										'gu',
										'guitars',
										'guru',
										'gw',
										'gy',
										'hk',
										'hm',
										'hn',
										'holdings',
										'holiday',
										'house',
										'hr',
										'ht',
										'hu',
										'id',
										'ie',
										'il',
										'im',
										'immobilien',
										'in',
										'industries',
										'info',
										'institute',
										'int',
										'international',
										'io',
										'iq',
										'ir',
										'is',
										'it',
										'je',
										'jm',
										'jo',
										'jobs',
										'jp',
										'kaufen',
										'ke',
										'kg',
										'kh',
										'ki',
										'kim',
										'kitchen',
										'kiwi',
										'km',
										'kn',
										'koeln',
										'kp',
										'kr',
										'kred',
										'kw',
										'ky',
										'kz',
										'la',
										'land',
										'lb',
										'lc',
										'li',
										'lighting',
										'limo',
										'link',
										'lk',
										'lr',
										'ls',
										'lt',
										'lu',
										'luxury',
										'lv',
										'ly',
										'ma',
										'maison',
										'management',
										'mango',
										'marketing',
										'mc',
										'md',
										'me',
										'menu',
										'mg',
										'mh',
										'mil',
										'mk',
										'ml',
										'mm',
										'mn',
										'mo',
										'mobi',
										'moda',
										'monash',
										'mp',
										'mq',
										'mr',
										'ms',
										'mt',
										'mu',
										'museum',
										'mv',
										'mw',
										'mx',
										'my',
										'mz',
										'na',
										'nagoya',
										'name',
										'nc',
										'ne',
										'net',
										'neustar',
										'nf',
										'ng',
										'ni',
										'ninja',
										'nl',
										'no',
										'np',
										'nr',
										'nu',
										'nz',
										'okinawa',
										'om',
										'onl',
										'org',
										'pa',
										'partners',
										'parts',
										'pe',
										'pf',
										'pg',
										'ph',
										'photo',
										'photography',
										'photos',
										'pics',
										'pink',
										'pk',
										'pl',
										'plumbing',
										'pm',
										'pn',
										'post',
										'pr',
										'pro',
										'productions',
										'properties',
										'ps',
										'pt',
										'pub',
										'pw',
										'py',
										'qa',
										'qpon',
										're',
										'recipes',
										'red',
										'rentals',
										'repair',
										'report',
										'reviews',
										'rich',
										'ro',
										'rs',
										'ru',
										'ruhr',
										'rw',
										'sa',
										'sb',
										'sc',
										'sd',
										'se',
										'sexy',
										'sg',
										'sh',
										'shiksha',
										'shoes',
										'si',
										'singles',
										'sj',
										'sk',
										'sl',
										'sm',
										'sn',
										'so',
										'social',
										'solar',
										'solutions',
										'sr',
										'st',
										'su',
										'supplies',
										'supply',
										'support',
										'sv',
										'sx',
										'sy',
										'systems',
										'sz',
										'tattoo',
										'tc',
										'td',
										'technology',
										'tel',
										'tf',
										'tg',
										'th',
										'tienda',
										'tips',
										'tj',
										'tk',
										'tl',
										'tm',
										'tn',
										'to',
										'today',
										'tokyo',
										'tools',
										'tp',
										'tr',
										'training',
										'travel',
										'tt',
										'tv',
										'tw',
										'tz',
										'ua',
										'ug',
										'uk',
										'uno',
										'us',
										'uy',
										'uz',
										'va',
										'vacations',
										'vc',
										've',
										'ventures',
										'vg',
										'vi',
										'viajes',
										'villas',
										'vision',
										'vn',
										'vote',
										'voting',
										'voto',
										'voyage',
										'vu',
										'wang',
										'watch',
										'wed',
										'wf',
										'wien',
										'wiki',
										'works',
										'ws',
										'xxx',
										'xyz',
										'ye',
										'yt',
										'za',
										'zm',
										'zone',
										'zw'
	);
	
	public list_generic_domains = array(
	                                'gmail.com',
	                                'yahoo.com',
	                                'yahoo.com.mx',
	                                'hotmail.com',
	                                'outlook.com',
	                                'outlook.com.mx',
	                            	'live.com',
	                            	'live.com.mx'
	                            	);

	public list_no_reply_mails = array(
									'ventas',
									'admin',
									'administracion',
									'administration',
									'no-reply',
									'soporte',
									'webmaster',
									'info',
									'oficina',
									'contacto',
									'contact',
									'sales',
									'support',
									'office'
									);

	public notes = [
       'ampersand' = [
                'es' => 'No tiene simbolo Ampersand.',
                'en' => 'Ampersand simbol is missing'
       ],
       'domain' = [
                'es' => 'No existe el dominio',
                'en' => 'Domain not found'
       ],
       'dot' = [
                'es' => 'No tiene punto.',
                'en' => 'Dot not found'
       ],
       'generic' = [
                'es' => 'El correo es Correo genérico',
                'en' => 'Generic email user'
       ],
       'public' = [
                'es' => 'El correo es de Servidor Público',
                'en' => 'Public server Email'
       ]

	]
	public function __construct($lang = 'es'){
		$this->lang = $lang;
	}
	
	public function verify_domain($address_to_verify){
		if(strstr($address_to_verify, "@") == FALSE){
			 $array = [
                'success' => false,
                'message' => $this->message('ampersand')
			 ]
				return (object) $array;
		}
		$record = 'MX';
		list($user, $domain) = explode('@', $address_to_verify);
		if(checkdnsrr($domain, $record)){
		   $array = [
              'success' => true,
              'message' => ''
		   ]
		}else{
		   $array = [
              'success' => false,
              'message' => $this->message('domain');
		   ]
		}

		return (object) $array;
	}
	
	public function verify_formatting($address_to_verify){
		
		if(strstr($address_to_verify, "@") == FALSE){
			 $array = [
                'success' => false,
                'message' => $this->message('ampersand')
			 ]
				return (object) $array;
		}else{
			
			list($user, $domain) = explode('@', $address_to_verify);
			
			if(strstr($domain, '.') == FALSE){
				  $array = [
                    'success' => false,
                    'message' => $this->message('dot');
			     ]
				return (object) $array;
			}else{
				
				$domain_check = explode(".", $domain);
				$domain_extension = end($domain_check);
				
				if(strlen($domain_extension) < 2){
					$array = [
                       'success' => false,
                       'message' => $this->message('domain');
			        ]
					return (object) $array;
				}else{
					if(!in_array($domain_extension, $this->list_domain_extensions)){
						$array = [
                           'success' => false,
                           'message' => $this->message('domain');
			            ]
							return (object) $array;
					}
				}
			}
		}
        $array = [
              'success' => success,
              'message' => '';
		]
		return (object) $array;
	}

	public function isGeneric($address_to_verify){
	   list($user, $domain) = explode('@', $address_to_verify);
	   if(in_array($domain, $this->list_generic_domains)){
          $array = [
             'success' => false,
             'message' => $this->message('public');
          ]
          return (object) $array;
	   }

	   $array = [
          'success' => true,
          'message' => ''
	   ]
	}

	public function isNoReply($address_to_verify){
	   list($user, $domain) = explode('@', $address_to_verify);
	   if(in_array($user, $this->list_no_reply_mails)){
          $array = [
             'success' => false,
             'message' => $this->message('generic');
          ]
          return (object) $array;
	   }

	   $array = [
          'success' => true,
          'message' => ''
	   ]
	}

	public function check_email($mail){

      $isNoReply = $this->isNoReply($mail);
      if(!$isNoReply->success){
         return $isNoReply
      }

      $isGeneric = $this->isGeneric($mail);
      if(!$isGeneric->success){
         return $isGeneric
      }

      $verify_formatting = $this->verify_formatting($mail);
      if(!$verify_formatting->success){
         return $verify_formatting
      }

      $verify_domain = $this->verify_domain($mail);
      if(!$verify_domain->success){
         return $verify_domain
      }
	}

	public function message($message){
       return $this->notes[$message,$this->lang];
	}
}
?>

<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_ajadocompanies_location'] = array(
	'ctrl' => $TCA['tx_ajadocompanies_location']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,name'
	),
	'feInterface' => $TCA['tx_ajadocompanies_location']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(		
			'exclude' => 1,
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type'                => 'select',
				'foreign_table'       => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				)
			)
		),
		'l10n_parent' => array(		
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => 1,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array(
				'type'  => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'       => 'tx_ajadocompanies_location',
				'foreign_table_where' => 'AND tx_ajadocompanies_location.pid=###CURRENT_PID### AND tx_ajadocompanies_location.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array(		
			'config' => array(
				'type' => 'passthrough'
			)
		),
		'hidden' => array(		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type'    => 'check',
				'default' => '0'
			)
		),
		'name' => array(		
			'exclude' => 0,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_location.name',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);



$TCA['tx_ajadocompanies_industry'] = array(
	'ctrl' => $TCA['tx_ajadocompanies_industry']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,name'
	),
	'feInterface' => $TCA['tx_ajadocompanies_industry']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(		
			'exclude' => 1,
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type'                => 'select',
				'foreign_table'       => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				)
			)
		),
		'l10n_parent' => array(		
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => 1,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array(
				'type'  => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'       => 'tx_ajadocompanies_industry',
				'foreign_table_where' => 'AND tx_ajadocompanies_industry.pid=###CURRENT_PID### AND tx_ajadocompanies_industry.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array(		
			'config' => array(
				'type' => 'passthrough'
			)
		),
		'hidden' => array(		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type'    => 'check',
				'default' => '0'
			)
		),
		'name' => array(		
			'exclude' => 0,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_industry.name',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	)
);



$TCA['tx_ajadocompanies_company'] = array(
	'ctrl' => $TCA['tx_ajadocompanies_company']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,title,subtitle,address1,address2,zip,city,telephone,mobile,fax,email,state,country,url,location,industry'
	),
	'feInterface' => $TCA['tx_ajadocompanies_company']['feInterface'],
	'columns' => array(
		'sys_language_uid' => array(		
			'exclude' => 1,
			'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type'                => 'select',
				'foreign_table'       => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				)
			)
		),
		'l10n_parent' => array(		
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude'     => 1,
			'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config'      => array(
				'type'  => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table'       => 'tx_ajadocompanies_company',
				'foreign_table_where' => 'AND tx_ajadocompanies_company.pid=###CURRENT_PID### AND tx_ajadocompanies_company.sys_language_uid IN (-1,0)',
			)
		),
		'l10n_diffsource' => array(		
			'config' => array(
				'type' => 'passthrough'
			)
		),
		'hidden' => array(		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type'    => 'check',
				'default' => '0'
			)
		),
		'starttime' => array(		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config'  => array(
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'default'  => '0',
				'checkbox' => '0'
			)
		),
		'endtime' => array(		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config'  => array(
				'type'     => 'input',
				'size'     => '8',
				'max'      => '20',
				'eval'     => 'date',
				'checkbox' => '0',
				'default'  => '0',
				'range'    => array(
					'upper' => mktime(3, 14, 7, 1, 19, 2038),
					'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
				)
			)
		),
		'title' => array(		
			'exclude' => 0,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.title',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'subtitle' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.subtitle',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'address1' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.address1',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'address2' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.address2',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'zip' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.zip',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'city' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.city',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'telephone' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.telephone',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'mobile' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.mobile',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'fax' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.fax',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'email' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.email',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'state' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.state',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'country' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.country',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'url' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.url',		
			'config' => array(
				'type' => 'input',	
				'size' => '30',
			)
		),
		'location' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.location',		
			'config' => array(
				'type' => 'select',	
				'foreign_table' => 'tx_ajadocompanies_location',	
				'foreign_table_where' => 'AND tx_ajadocompanies_location.pid=###CURRENT_PID### ORDER BY tx_ajadocompanies_location.uid',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 100,	
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 1,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'tx_ajadocompanies_location',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_ajadocompanies_location',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
			)
		),
		'industry' => array(		
			'exclude' => 1,		
			'label' => 'LLL:EXT:ajado_companies/locallang_db.xml:tx_ajadocompanies_company.industry',		
			'config' => array(
				'type' => 'select',	
				'foreign_table' => 'tx_ajadocompanies_industry',	
				'foreign_table_where' => 'AND tx_ajadocompanies_industry.pid=###CURRENT_PID### ORDER BY tx_ajadocompanies_industry.uid',	
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 100,	
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 1,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'tx_ajadocompanies_industry',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_ajadocompanies_industry',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
			)
		),
	),
	'types' => array(
		'0' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title;;;;2-2-2, subtitle;;;;3-3-3, address1, address2, zip, city, telephone, mobile, fax, email, state, country, url, location, industry')
	),
	'palettes' => array(
		'1' => array('showitem' => 'starttime, endtime')
	)
);
?>
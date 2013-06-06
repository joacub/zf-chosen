<?php
namespace ZfChosen;
return array(
	'view_helpers' => array(
		'invokables' => array(
			'jcChosen' => 'ZfChosen\View\Helper\Chosen'
		)
	),
	'asset_manager' => array(
		'resolver_configs' => array(
			'paths' => array(
				__DIR__ . '/../public'
			)
		)
	)
);
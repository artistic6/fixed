<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '4, 5, 8, 10',
			'qin' => '2, 4, 5, 8, 10',
			'trio' => '1, 2, 3, 4, 5, 8, 9, 10',//count trio: 8
			'inter' => '4, 5',
		],
		'win inter' => '1, 2, 4, 5, 8, 10',
		'win inter 2' => '4, 5, 8, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 30)' => '(Q) 4, 5',
		],
		'total bets' => 0,
		'wp' => '4, 5',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 5, 11, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 5, 6, 7, 9, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '3, 5, 12',
		],
		'win inter' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 11',//count wp: 3
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '3, 5, 8',
			'qin' => '1, 3, 5, 7, 8',
			'trio' => '1, 3, 5, 6, 7, 8, 9',//count trio: 7
			'inter' => '',
		],
		'win inter' => '1, 3, 5, 6, 7, 8, 11',
		'win inter 2' => '3, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'win/qin/qpl/trio($10 30)' => '(Q) 6, 7',
		],
		'total bets' => 0,
		'wp' => '6, 7',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 3, 4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 3, 4, 7',
		],
		'win inter' => '1, 2, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'win/qin/qpl/trio($10 30)' => '(Q) 2, 3, 4, 7',
		],
		'total bets' => 0,
		'wp' => '2, 3, 4, 7',//count wp: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '6, 9',
			'qin' => '6, 9, 12',
			'trio' => '5, 6, 9, 10, 12',//count trio: 5
			'inter' => '6',
		],
		'win inter' => '1, 2, 5, 6, 9, 11',
		'win inter 2' => '6, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 30)' => '(Q) 5, 6',
		],
		'total bets' => 0,
		'wp' => '5, 6',//count wp: 2
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 6, 7, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 3, 4, 5, 7, 8, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
];
//total place end favorites: 0
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: 0
//total: 0

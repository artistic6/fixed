<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 7, 8, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 6, 7',
		],
		'win inter' => '1, 5, 6, 7, 11',
		'win inter 2' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 6)' => '(Q) 1, 6, 7',
			'place(end-favorites 6)' => '7',
			'place(end-wp 6)' => '7',
			'super sure bet' => 'super sure place 7',
		],
		'total bets' => 300,
		'wp' => '1, 6, 7',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '10',
			'qin' => '2, 10',
			'trio' => '1, 2, 10',//count trio: 3
			'inter' => '10',
		],
		'win inter' => '4, 5, 10',
		'win inter 2' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 10',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 5, 6, 7, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '3, 5, 7, 8',
		],
		'win inter' => '1, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 6, 7, 8',//count wp: 5
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 3, 4, 11',
			'qin' => '1, 2, 3, 4, 7, 8, 10, 11',
			'trio' => '1, 2, 3, 4, 7, 8, 9, 10, 11',//count trio: 9
			'inter' => '2, 3',
		],
		'win inter' => '1, 2, 3, 4, 8, 11',
		'win inter 2' => '2, 3, 4, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'win/qin/qpl/trio($10 6)' => '(Q) 2, 3',
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 5, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 5, 8',
		],
		'win inter' => '1, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 5, 8',//count wp: 4
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
			'win/qin/qpl/trio($10 6)' => '(Q) 5, 6',
		],
		'total bets' => 0,
		'wp' => '5, 6',//count wp: 2
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '2, 3, 6, 8, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',//count trio: 10
			'inter' => '8, 11',
		],
		'win inter' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'win(union 6)' => '5, 6, 8, 11',
		],
		'total bets' => 400,
		'wp' => '5, 8',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 5, 6, 8, 12',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 12',//count trio: 9
			'inter' => '3, 5',
		],
		'win inter' => '3, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'win/qin/qpl/trio($10 6)' => '(Q) 3, 5, 10',
		],
		'total bets' => 0,
		'wp' => '3, 5, 10',//count wp: 3
	],
];
//total place end favorites: -100
//total place end wp: -100
//total place wp: 0
//total sure place: -100
//total win: -400
//total: 0
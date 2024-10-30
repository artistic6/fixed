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
			'win/qin/qpl/trio($10 5)' => '(Q) 1, 6, 7',
			'place(end-favorites 5)' => '7',
			'place(end-wp 5)' => '7',
			'super sure bet' => 'super sure place 7',
		],
		'total bets' => 300,
		'wp' => '1, 6, 7',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '2, 4, 5, 6, 7, 8, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 9, 10',
		],
		'win inter' => '4, 10',
		'win inter 2' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites 5)' => '10',
		],
		'total bets' => 100,
		'wp' => '1, 2, 9, 10',//count wp: 4
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
		'favorites' => '2, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 11',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '2, 3, 4',
		],
		'win inter' => '1, 2, 3, 4, 11',
		'win inter 2' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'win/qin/qpl/trio($10 5)' => '(Q) 2, 3, 4',
			'place(end-favorites 5)' => '4',
			'place(end-wp 5)' => '4',
			'super sure bet' => 'super sure place 4',
		],
		'total bets' => 300,
		'wp' => '2, 3, 4',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 5, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 5, 8',
		],
		'win inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 5, 8, 11',//count wp: 5
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 6, 9, 11',
			'qin' => '1, 2, 6, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '2, 6',
		],
		'win inter' => '1, 2, 5, 6, 9, 11',
		'win inter 2' => '6, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl/trio($10 5)' => '(Q) 2, 5, 6',
			'place(end-favorites 5)' => '6',
			'place(end-wp 5)' => '6',
			'super sure bet' => 'super sure place 6',
		],
		'total bets' => 300,
		'wp' => '2, 5, 6',//count wp: 3
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
			'win(union 5)' => '5, 6, 8, 11',
		],
		'total bets' => 400,
		'wp' => '5, 8',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 2, 3, 5, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 2, 3, 5, 9, 10',
		],
		'win inter' => '3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 5, 9, 10',//count wp: 6
	],
];
//total place end favorites: -400
//total place end wp: -300
//total place wp: 0
//total sure place: -300
//total win: -400
//total: 0

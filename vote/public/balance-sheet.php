<?php
$colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'body', 'white', 'black-50', 'white-50'];
$show_by = 'd';

$funds_name = [
    'd' => '28-12-2020',
    'total' => [
        'invested' => 2999.89,
        'current' => 3125.95,
        'profit' => 126.06,
        'profit_per' => 4.20,
    ],
    1 => [
        'name' => 'ICICI Prudintial Bluechip Fund',
        'type' => 'Large Cap Funds',
        'invested' => 499.98,
        'current' => 507.16,
        'profit' => 7.18,
        'profit_per' => 1.44,
        'unit' => 10.225,
        'folio_no' => '16111471/08',
        'exit_load' => '1%upto1year'
    ],
    2 => [
        'name' => 'ICICI Prudintial Nifty Index Fund',
        'type' => 'Index Funds',
        'invested' => 499.98,
        'current' => 524.23,
        'profit' => 24.25,
        'profit_per' => 4.85,
        'unit' => 3.922,
        'folio_no' => '16111471/08',
        'exit_load' => 'Nil'
    ],
    3 => [
        'name' => 'ICICI Prudintial Liquid Fund',
        'type' => 'Liquid Funds',
        'invested' => 0,
        'current' => 0,
        'profit' => 0,
        'profit_per' => 0,
        'unit' => 0,
        'folio_no' => '16111471/08',
        'exit_load' => '0.0045%-0.007%first7days'
    ],
    4 => [
        'name' => 'Axis Long Term Equity Fund',
        'type' => 'Tax Saving Funds',
        'invested' => 499.98,
        'current' => 524.14,
        'profit' => 24.16,
        'profit_per' => 4.83,
        'unit' => 8.996,
        'folio_no' => '91099316252',
        'exit_load' => 'Nil',
        'withdraw' => false,
    ],
    5 => [
        'name' => 'Aditya Brila Sun Life Equity Fund',
        'type' => 'Diversified Funds',
        'invested' => 499.98,
        'current' => 513.48,
        'profit' => 13.50,
        'profit_per' => 2.70,
        'unit' => 0.59,
        'folio_no' => '1040347381',
        'exit_load' => '1%365days',
        'withdraw' => true,
    ],
    6 => [
        'name' => 'Aditya Brila Sun Life Liquid Fund',
        'type' => 'Liquid Funds',
        'invested' => 0,
        'current' => 0,
        'profit' => 0,
        'profit_per' => 0,
        'unit' => 0,
        'folio_no' => '1040347381',
        'exit_load' => '0.0045%-0.007%first7days',
        'withdraw' => false,
    ],
    7 => [
        'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
        'type' => 'Aggressive Funds',
        'invested' => 499.98,
        'current' => 522.21,
        'profit' => 22.23,
        'profit_per' => 4.45,
        'unit' => 0.616,
        'folio_no' => '1040347381',
        'exit_load' => '1%-unitsinexcessof15%1year',
        'withdraw' => true,
    ],
    8 => [
        'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
        'type' => 'Large Cap Funds',
        'invested' => 499.99,
        'current' => 534.74,
        'profit' => 34.74,
        'profit_per' => 6.95,
        'unit' => 2.048,
        'folio_no' => '1040347381',
        'exit_load' => '1%90days',
        'withdraw' => true,
    ],
    'k' => [
        'd' => '9-1-2021 23:43',
        'type' => 'Gold',
        'invested' => 677.74,
        'current' => 658,
        'weight' => 0.1294, //gm
        'change' => 0,
        'buyrate' => 5083.1, //per gm
        'sellrate' => 4933.1 //per gm
    ]
];
$funds_name['d'] = '11-1-2021 22:25';
$funds_name['total'] = [
    'invested' => 7999.64,
    'current' => 8287.41,
    'profit' => 287.77,
    'profit_per' => 3.597,//3.59728687791
];
$funds_name[9] = [
    'name' => 'Axis Treasury Advantage Fund',
    'type' => 'Debt Funds',
    'invested' => 4999.75,
    'current' => 5000.38,
    'profit' => 0.63,
    'profit_per' => 0.01,
    'unit' => 2.096,
    'folio_no' => '91099316252',
    'exit_load' => 'Nil',
    'withdraw' => true,
];
$funds_name['d'] = '20-1-2021 11:13';
$funds_name[9]['invested'] = 3997.89;
$funds_name[9]['current'] = 3993.33;
$funds_name[9]['profit'] = -4.56;
$funds_name[9]['profit_per'] = -0.11;
$funds_name[9]['unit'] = 1.676;
$funds_name['total'] = [
    'invested' => 6997.78,
    'current' => 7279.53,
    'profit' => 281.75,
    'profit_per' => 4.03,
];

$gold = [
    [
        'd' => '9-1-2021 23:43',
        'k' => [
            'invested' => 677.74,
            'current' => 658,
            'weight' => 0.1294, //gm
            'change' => 0,
            'buyrate' => 5083.1, //per gm
            'sellrate' => 4933.1 //per gm
        ]
    ],
    [
        'd' => '10-1-2021 10:37',
        'k' => [
            'invested' => 677.74,
            'current' => 638,
            'weight' => 0.1294,
            'change' => 5, //0.73%
            'buyrate' => 5083.1,
            'sellrate' => 4933.1
        ]
    ],
    [
        'd' => '11-1-2021 12:30',
        'k' => [
            'invested' => 677.74,
            'current' => 636.87,
            'weight' => 0.1294,
            'change' => -1, // -0.2%
            'buyrate' => 5071.7,
            'sellrate' => 4921.7
        ]
    ],
    [
        'd' => '11-1-2021 15:19',
        'k' => [
            'invested' => 677.74,
            'current' => 637.31,
            'weight' => 0.1294,
            'change' => 0, // 0%
            'buyrate' => 5075.1,
            'sellrate' => 4925.1
        ]
    ],
    [
        'd' => '12-1-2021',
        'k' => [
            'invested' => 677.74,
            'current' => 637.77,
            'weight' => 0.1294,
            'change' => 0, // 0%
            'buyrate' => 5078.7,
            'sellrate' => 4928.7
        ],
    ],
    [
        'd' => '13-1-2021',
        'k' => [
            'invested' => 677.74,
            'current' => 637.33,
            'weight' => 0.1294,
            'change' => 2, // 0.35%
            'buyrate' => 5075.3,
            'sellrate' => 4925.3
        ],
    ],
    [
        'd' => '14-1-2021 13:27',
        'k' => [
            'invested' => 677.74,
            'current' => 631.65,
            'weight' => 0.1294,
            'change' => -5, // 0.82%
            'buyrate' => 5031.4,
            'sellrate' => 4881.4
        ],
    ],
    [
        'd' => '17-1-2021 13:27',
        'k' => [
            'invested' => 677.74,
            'current' => 628.87,
            'weight' => 0.1294,
            'change' => 0, // 0%
            'buyrate' => 5009.9,
            'sellrate' => 4859.9
        ],
    ],
    [
        'd' => '18-1-2021 12:40',
        'k' => [
            'invested' => 677.74,
            'current' => 631.03,
            'weight' => 0.1294,
            'change' => 3, // 0.41%
            'buyrate' => 5026.6,
            'sellrate' => 4876.6
        ],
    ],
    [
        'd' => '19-1-2021 17:07',
        'k' => [
            'invested' => 677.74,
            'current' => 632.86,
            'weight' => 0.1294,
            'change' => 1, // 0.24%
            'buyrate' => 5040.7,
            'sellrate' => 4890.7
        ],
    ],
    [
        'd' => '20-1-2021 11:32',
        'k' => [
            'invested' => 677.74,
            'current' => 634.62,
            'weight' => 0.1294,
            'change' => 2, // 0.3%
            'buyrate' => 5054.3,
            'sellrate' => 4904.3
        ],
    ],
    [
        'd' => '20-1-2021 11:36',
        'k' => [
            'invested' => 677.74,
            'current' => 632.55,
            'weight' => 0.1290, // 0.0004 sold at ₹ 1.96
            'change' => 2, // 0.3%
            'buyrate' => 5053.5,
            'sellrate' => 4903.5
        ],
    ],
    [
        'd' => '21-1-2021 08:43',
        'k' => [
            'invested' => 677.74,
            'current' => 636.95,
            'weight' => 0.129,
            'change' => 6, // 0.97%
            'buyrate' => 5087.6,
            'sellrate' => 4937.6
        ],
    ],
    [
        'd' => '21-1-2021 08:50',
        'k' => [
            'invested' => 677.74,
            'current' => 592.51,
            'weight' => 0.120, // 0.009 sold at ₹ 44.44, 27 Jan
            'change' => 6, // 0.97%
            'buyrate' => 5087.6,
            'sellrate' => 4937.6
        ],
    ],
    [
        'd' => '21-1-2021 09:09',
        'k' => [
            'invested' => 677.74,
            'current' => 593.7,
            'weight' => 0.12,
            'change' => 1, // 0.23%
            'buyrate' => 5097.5,
            'sellrate' => 4947.5
        ],
    ],
    [
        'd' => '23-1-2021 00:00',
        'k' => [
            'invested' => 677.74,
            'current' => 587.7,
            'weight' => 0.12,
            'change' => 0, // 0%
            'buyrate' => 5047.5,
            'sellrate' => 4897.5
        ],
    ],
    [
        'd' => '24-1-2021 21:44',
        'k' => [
            'invested' => 677.74,
            'current' => 587.7,
            'weight' => 0.12,
            'change' => 0, // 0%
            'buyrate' => 5047.5,
            'sellrate' => 4897.5
        ],
    ],
];

foreach($gold as $i => $funds) {
    $resum = 0;
    foreach($funds as $j => $fund) {
        if($j == 'd') {
            $gold[$i]['dmy'] = date('d-m-Y', strtotime($fund, 0));
            $gold[$i]['date'] = date('Y-m-d', strtotime($fund, 0));
            $gold[$i]['month'] = date('Y-m', strtotime($fund, 0));
            $gold[$i]['year'] = date('Y', strtotime($fund, 0));
        } elseif($j != 'total') {
            //unset($gold[$i][$j]);
            $gold[$i][$j]['current'] = $fund['current'] ?? 0.0;
            $funds[$i]['invested'] = $fund['invested'] ?? 0.0;
            $funds[$i]['weight'] = $fund['weight'] ?? 0.0;
            $funds[$i]['buyrate'] = $fund['buyrate'] ?? 0.0;
            $funds[$i]['sellrate'] = $fund['sellrate'] ?? 0.0;
            //$funds[$i]['profit'] = $fund['profit'] ?? 0.0;
            //$funds[$i]['profit_per'] = $fund['profit_per'] ?? 0.0;
            $resum += $gold[$i][$j]['current'];
        }
    }
    $invested = $gold[$i][$j]['invested'];

    $retotal['invested'] = $invested;
    $retotal['current'] = $resum;
    $retotal['profit'] = $retotal['current'] - $invested;
    $retotal['profit_per'] = round(($retotal['profit'] / $invested) * 100, 3);

    $current = $gold[$i]['total']['current'] ?? $retotal['current'];
    $profit = $gold[$i]['total']['profit'] ?? $retotal['profit'];
    $profit_per = $gold[$i]['total']['profit'] ?? $retotal['profit'];

    $gold[$i]['resum'] = $retotal;
}

$funds_blnc = [
    [
        'd' => '28-12-2020',
        'total' => [
            'invested' => 2999.89,
            'current' => 3125.95,
            'profit' => 126.06,
            'profit_per' => 4.20,
        ],
        1 => [
            'fund' => 'ICICI Prudintial Bluechip Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.98,
            'current' => 507.16,
            'profit' => 7.18,
            'profit_per' => 1.44,
            'unit' => 10.225,
            'folio_no' => '16111471/08',
            'exit_load' => '1%upto1year'
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'type' => 'Index Funds',
            'invested' => 499.98,
            'current' => 524.23,
            'profit' => 24.25,
            'profit_per' => 4.85,
            'unit' => 3.922,
            'folio_no' => '16111471/08',
            'exit_load' => 'Nil'
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '16111471/08',
            'exit_load' => '0.0045%-0.007%first7days'
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'type' => 'Tax Saving Funds',
            'invested' => 499.98,
            'current' => 524.14,
            'profit' => 24.16,
            'profit_per' => 4.83,
            'unit' => 8.996,
            'folio_no' => '91099316252',
            'exit_load' => 'Nil',
            'withdraw' => false,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'type' => 'Diversified Funds',
            'invested' => 499.98,
            'current' => 513.48,
            'profit' => 13.50,
            'profit_per' => 2.70,
            'unit' => 0.59,
            'folio_no' => '1040347381',
            'exit_load' => '1%365days',
            'withdraw' => true,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '1040347381',
            'exit_load' => '0.0045%-0.007%first7days',
            'withdraw' => false,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'type' => 'Aggressive Funds',
            'invested' => 499.98,
            'current' => 522.21,
            'profit' => 22.23,
            'profit_per' => 4.45,
            'unit' => 0.616,
            'folio_no' => '1040347381',
            'exit_load' => '1%-unitsinexcessof15%1year',
            'withdraw' => true,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.99,
            'current' => 534.74,
            'profit' => 34.74,
            'profit_per' => 6.95,
            'unit' => 2.048,
            'folio_no' => '1040347381',
            'exit_load' => '1%90days',
            'withdraw' => true,
        ],
    ],
    [
        'd' => '29-12-2020',
        'total' => [
            'invested' => 2999.89,
            'current' => 3151.87,
            'profit' => 151.98,
            'profit_per' => 5.07,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.98,
            'current' => 511.86,
            'profit' => 11.88,
            'profit_per' => 2.38,
            'unit' => 10.225,
            'folio_no' => '16111471/08',
            'exit_load' => '1%upto1year'
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'type' => 'Index Funds',
            'invested' => 499.98,
            'current' => 528.93,
            'profit' => 28.95,
            'profit_per' => 5.79,
            'unit' => 3.922,
            'folio_no' => '16111471/08',
            'exit_load' => 'Nil'
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '16111471/08',
            'exit_load' => '0.0045%-0.007%first7days'
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'type' => 'Tax Saving Funds',
            'invested' => 499.98,
            'current' => 528.06,
            'profit' => 28.08,
            'profit_per' => 5.62,
            'unit' => 8.996,
            'folio_no' => '91099316252',
            'exit_load' => 'Nil',
            'withdraw' => false,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'type' => 'Diversified Funds',
            'invested' => 499.98,
            'current' => 518.23,
            'profit' => 18.25,
            'profit_per' => 3.65,
            'unit' => 0.59,
            'folio_no' => '1040347381',
            'exit_load' => '1%365days',
            'withdraw' => true,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '1040347381',
            'exit_load' => '0.0045%-0.007%first7days',
            'withdraw' => false,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'type' => 'Aggressive Funds',
            'invested' => 499.98,
            'current' => 525.39,
            'profit' => 25.41,
            'profit_per' => 5.08,
            'unit' => 0.616,
            'folio_no' => '1040347381',
            'exit_load' => '1%-unitsinexcessof15%1year',
            'withdraw' => true,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.99,
            'current' => 539.40,
            'profit' => 39.41,
            'profit_per' => 7.88,
            'unit' => 2.048,
            'folio_no' => '1040347381',
            'exit_load' => '1%90days',
            'withdraw' => true,
        ],
    ],
    [
        'd' => '30-12-2020',
        'total' => [
            'invested' => 2999.89,
            'current' => 3160.95,
            'profit' => 161.98,
            'profit_per' => 5.37,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.98,
            'current' => 513.50,
            'profit' => 13.52,
            'profit_per' => 2.70,
            'unit' => 10.225,
            'folio_no' => '16111471/08',
            'exit_load' => '1%upto1year',
            'withdraw' => true,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'type' => 'Index Funds',
            'invested' => 499.98,
            'current' => 531.18,
            'profit' => 31.20,
            'profit_per' => 6.24,
            'unit' => 3.922,
            'folio_no' => '16111471/08',
            'exit_load' => 'Nil',
            'withdraw' => true,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '16111471/08',
            'exit_load' => '0.0045%-0.007%first7days'
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'type' => 'Tax Saving Funds',
            'invested' => 499.98,
            'current' => 528.72,
            'profit' => 28.59,
            'profit_per' => 5.72,
            'unit' => 8.996,
            'folio_no' => '91099316252',
            'exit_load' => 'Nil',
            'withdraw' => false,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'type' => 'Diversified Funds',
            'invested' => 499.98,
            'current' => 519.18,
            'profit' => 19.20,
            'profit_per' => 3.84,
            'unit' => 0.59,
            'folio_no' => '1040347381',
            'exit_load' => '1%365days',
            'withdraw' => true,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '1040347381',
            'exit_load' => '0.0045%-0.007%first7days',
            'withdraw' => false,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'type' => 'Aggressive Funds',
            'invested' => 499.98,
            'current' => 526.54,
            'profit' => 26.56,
            'profit_per' => 5.31,
            'unit' => 0.616,
            'folio_no' => '1040347381',
            'exit_load' => '1%-unitsinexcessof15%1year',
            'withdraw' => true,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.99,
            'current' => 541.98,
            'profit' => 41.99,
            'profit_per' => 8.40,
            'unit' => 2.048,
            'folio_no' => '1040347381',
            'exit_load' => '1%90days',
            'withdraw' => true,
        ],
    ],
    [
        'd' => '31-12-2020',
        'total' => [
            'invested' => 2999.89,
            'current' => 3173.88,
            'profit' => 173.99,
            'profit_per' => 5.80,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.98,
            'current' => 514.83,
            'profit' => 14.85,
            'profit_per' => 2.97,
            'unit' => 10.225,
            'folio_no' => '16111471/08',
            'exit_load' => '1%upto1year',
            'withdraw' => true,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'type' => 'Index Funds',
            'invested' => 499.98,
            'current' => 533.05,
            'profit' => 33.07,
            'profit_per' => 6.61,
            'unit' => 3.922,
            'folio_no' => '16111471/08',
            'exit_load' => 'Nil',
            'withdraw' => true,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '16111471/08',
            'exit_load' => '0.0045%-0.007%first7days'
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'type' => 'Tax Saving Funds',
            'invested' => 499.98,
            'current' => 532.96,
            'profit' => 32.98,
            'profit_per' => 6.60,
            'unit' => 8.996,
            'folio_no' => '91099316252',
            'exit_load' => 'Nil',
            'withdraw' => false,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'type' => 'Diversified Funds',
            'invested' => 499.98,
            'current' => 520.86,
            'profit' => 20.88,
            'profit_per' => 4.18,
            'unit' => 0.59,
            'folio_no' => '1040347381',
            'exit_load' => '1%365days',
            'withdraw' => true,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'type' => 'Liquid Funds',
            'invested' => 0,
            'current' => 0,
            'profit' => 0,
            'profit_per' => 0,
            'unit' => 0,
            'folio_no' => '1040347381',
            'exit_load' => '0.0045%-0.007%first7days',
            'withdraw' => false,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'type' => 'Aggressive Funds',
            'invested' => 499.98,
            'current' => 528.29,
            'profit' => 28.31,
            'profit_per' => 5.31,
            'unit' => 0.616,
            'folio_no' => '1040347381',
            'exit_load' => '1%-unitsinexcessof15%1year',
            'withdraw' => true,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'type' => 'Large Cap Funds',
            'invested' => 499.99,
            'current' => 543.89,
            'profit' => 43.90,
            'profit_per' => 8.78,
            'unit' => 2.048,
            'folio_no' => '1040347381',
            'exit_load' => '1%90days',
            'withdraw' => true,
        ],
    ],
];
$funds_blnc = array_merge($funds_blnc, [
    [
        'd' => '1-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3179.28,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 516.26,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 533.04,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 534.07,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 522.31,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 529.10,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 544.50,
        ],
    ],
    [
        'd' => '2-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3187.02,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 516.26,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 533.04,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 536.54,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 524.30,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 531.29,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 545.59,
        ],
    ],
    [
        'd' => '3-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3189.33,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 517.18,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 534.43,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 536.54,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 524.30,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 531.29,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 545.59,
        ],
    ],
    [
        'd' => '4-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3189.33,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 517.18,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 534.43,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 536.54,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 524.30,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 531.29,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 545.59,
        ],
    ],
    [
        'd' => '5-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3222.50,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 523.42,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 538.76,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 541.34,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 531.70,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 536.18,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 551.10,
        ],
    ],
    [
        'd' => '6-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3244.65,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 526.28,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 541.29,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 548.09,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 535.77,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 540.22,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 553.00,
        ],
    ],
    [
        'd' => '7-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3238.51,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 526.28,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 539.26,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 543.84,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 536.86,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 539.39,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 552.88,
        ],
    ],
    [
        'd' => '8-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3243.15,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 528.43,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 538.92,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 542.81,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 539.27,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 539.59,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 554.13,
        ],
    ],
    [
        'd' => '9-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3287.03,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 535.69,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 546.90,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 551.21,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.74,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 546.40,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 562.09,
        ],
    ],
    [
        'd' => '10-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3287.03,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 535.69,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 546.90,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 551.21,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.74,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 546.40,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 562.09,
        ],
    ],
    [
        'd' => '11-1-2021',
        'total' => [
            'invested' => 2999.89,
            'current' => 3287.03,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 535.69,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 546.90,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 551.21,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.74,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 546.40,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 562.09,
        ],
    ],
    [
        'd' => '11-1-2021 22:56',
        'total' => [
            'invested' => 7999.64,
            'current' => 8287.41,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 535.69,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 546.90,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 551.21,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.74,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 546.40,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 562.09,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 5000.38,
        ],
    ],
    [
        'd' => '12-1-2021',
        'total' => [
            'invested' => 7999.64,
            'current' => 8310.20,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 535.69,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 546.90,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 551.21,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.74,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 546.40,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 562.09,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 5000.38,
        ],
    ],
    [
        'd' => '13-1-2021',
        'total' => [
            'invested' => 7999.64,
            'current' => 8313.70,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 540.08,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 552.10,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 552.31,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 551.25,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 550.29,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 571.08,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4996.59,
        ],
    ],
    [
        'd' => '13-1-2021 18:07',
        'total' => [
            'invested' => 7999.64,
            'current' => 8320.67,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 544.07,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 555.08,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 552.31,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 551.25,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 550.29,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 571.08,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4996.59,
        ],
    ],
    [
        'd' => '14-1-2021 13:31',
        'total' => [
            'invested' => 7999.64,
            'current' => 8313.86,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 545.50,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 555.13,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 545.23,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 551.21,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 548.47,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 572.38,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4995.94,
        ],
    ],
    [
        'd' => '15-1-2021 17:51',
        'total' => [
            'invested' => 7999.64,
            'current' => 8312.30,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 544.99,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 556.35,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 545.40,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 550.42,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 548,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 572.38,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.76,
        ],
    ],
    [
        'd' => '16-1-2021 08:37',
        'total' => [
            'invested' => 7999.64,
            'current' => 8275.61,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 539.27,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 550.18,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 538,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 545.25,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 543.06,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 565.43,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.42,
        ],
    ],
    [
        'd' => '17-1-2021 22:15',
        'total' => [
            'invested' => 7999.64,
            'current' => 8275.61,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 539.27,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 550.18,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 538,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 545.25,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 543.06,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 565.43,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.42,
        ],
    ],
    [
        'd' => '18-1-2021 12:39',
        'total' => [
            'invested' => 7999.64,
            'current' => 8275.61,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 539.27,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 550.18,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 538,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 545.25,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 543.06,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 565.43,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.42,
        ],
    ],
    [
        'd' => '19-1-2021 08:51',
        'total' => [
            'invested' => 7999.64,
            'current' => 8251.45,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 531.39,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 544.35,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 527.96,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 545.25,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 543.06,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 565.43,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.01,
        ],
    ],
    [
        'd' => '19-1-2021 13:40',
        'total' => [
            'invested' => 7999.64,
            'current' => 8228.60,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 531.39,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 544.35,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 527.96,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 536.29,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 537.05,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 557.55,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.01,
        ],
    ],
    [
        'd' => '20-1-2021 10:42',
        'total' => [
            'invested' => 7999.64,
            'current' => 8280.25,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 539.27,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 553.45,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 537.81,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.58,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 544.43,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 566.66,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'current' => 4994.05,
        ],
    ],
    [
        'd' => '20-1-2021 11:08',
        'total' => [
            'invested' => 6997.78,
            'current' => 7279.53,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 539.27,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 553.45,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 537.81,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 544.58,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 544.43,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 566.66,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'invested' => 3997.89,
            'current' => 3993.33,
        ],
    ],
    [
        'd' => '21-1-2021 08:54',
        'total' => [
            'invested' => 6997.78,
            'current' => 7304.84,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 542.54,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 558.15,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 541.74,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 548.06,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 548.88,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 571.21,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'invested' => 3997.89,
            'current' => 3994.26,
        ],
    ],
    [
        'd' => '22-1-2021 08:52',
        'total' => [
            'invested' => 6997.78,
            'current' => 7286.60,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 538.45,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 556.11,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 539.43,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 543.56,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 546.79,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 567.79,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'invested' => 3997.89,
            'current' => 3994.47,
        ],
    ],
    [
        'd' => '23-1-2021 22:57',
        'total' => [
            'invested' => 6997.78,
            'current' => 7246.89,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 530.98,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 547.79,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 536.79,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 536.27,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 541.89,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 558.90,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'invested' => 3997.89,
            'current' => 3994.27,
        ],
    ],
    [
        'd' => '24-1-2021 21:43',
        'total' => [
            'invested' => 6997.78,
            'current' => 7246.89,
        ],
        1 => [
            'name' => 'ICICI Prudintial Bluechip Fund',
            'current' => 530.98,
        ],
        2 => [
            'name' => 'ICICI Prudintial Nifty Index Fund',
            'current' => 547.79,
        ],
        3 => [
            'name' => 'ICICI Prudintial Liquid Fund',
            'current' => 0,
        ],
        4 => [
            'name' => 'Axis Long Term Equity Fund',
            'current' => 536.79,
        ],
        5 => [
            'name' => 'Aditya Brila Sun Life Equity Fund',
            'current' => 536.27,
        ],
        6 => [
            'name' => 'Aditya Brila Sun Life Liquid Fund',
            'current' => 0,
        ],
        7 => [
            'name' => 'Aditya Brila Sun Life Equity Hybrid \'95 Fund',
            'current' => 541.89,
        ],
        8 => [
            'name' => 'Aditya Brila Sun Life Frontline Equity Fund',
            'current' => 558.90,
        ],
        9 => [
            'name' => 'Axis Tresury Advantage Fund',
            'invested' => 3997.89,
            'current' => 3994.27,
        ],
    ],
]);

foreach($funds_blnc as $i => $funds) {
    $resum = 0;
    foreach($funds as $j => $fund) {
        if($j == 'd') {
            $funds_blnc[$i]['dmy'] = date('d-m-Y', strtotime($fund, 0));
            $funds_blnc[$i]['date'] = date('Y-m-d', strtotime($fund, 0));
            $funds_blnc[$i]['month'] = date('Y-m', strtotime($fund, 0));
            $funds_blnc[$i]['year'] = date('Y', strtotime($fund, 0));
        } elseif($j != 'total') {
            unset($funds_blnc[$i][$j]);
            //$funds[$i]['name'] = $fund['name'] ?? null;
            //$funds[$i]['type'] = $fund['type'] ?? null;
            //$funds[$i]['invested'] = $fund['invested'] ?? 0.0;
            $funds_blnc[$i][$j]['current'] = $fund['current'] ?? 0.0;
            //$funds[$i]['profit'] = $fund['profit'] ?? 0.0;
            //$funds[$i]['profit_per'] = $fund['profit_per'] ?? 0.0;
            //$funds[$i]['unit'] = $fund['unit'] ?? 0.0;
            //$funds[$i]['folio_no'] = $fund['folio_no'] ?? null;
            //$funds[$i]['exit_load'] = $fund['exit_load'] ?? null;
            //$funds[$i]['withdraw'] = $fund['withdraw'] ?? null;
            $resum += $funds_blnc[$i][$j]['current'];
        }
    }
    $invested = $funds_blnc[$i]['total']['invested'];

    $retotal['invested'] = $invested;
    $retotal['current'] = $resum;
    $retotal['profit'] = $retotal['current'] - $invested;
    $retotal['profit_per'] = round(($retotal['profit'] / $invested) * 100, 3);

    $current = $funds_blnc[$i]['total']['current'] ?? $retotal['current'];
    $profit = $funds_blnc[$i]['total']['profit'] ?? $retotal['profit'];
    $profit_per = $funds_blnc[$i]['total']['profit'] ?? $retotal['profit'];

    $funds_blnc[$i]['resum'] = $retotal;
}

$fields = [
    ['name', 'type', 'folio_no', 'exit_load'],
    ['invested', 'current', 'profit', 'profit_per', 'unit'],
    ['withdraw']
];

$tracks = [
    [
        'd' => '31-3-2020',
        't' => 6715,
        's' => 1345
    ],
    [
        'd' => '30-4-2020',
        't' => 1571,
        's' => 5109
    ],
    [
        'd' => '31-5-2020',
        't' => 1537,
        's' => 35
    ],
    [
        'd' => '25-6-2020',
        'w' => 640,
        'b' => 308,
        't' => 948.26
    ],
    [
        'd' => '30-6-2020 00:00',
        'w' => 640,
        'b' => 298,
        't' => 938.26
    ],
    [
        'd' => '30-6-2020 00:01',
        'w' => 646,
        'b' => 298,
        'i' => 10,
        's' => 66,
        't' => 944
    ],
    [
        'd' => '31-7-2020 00:00',
    ],
    [
        'd' => '31-8-2020 00:00',
    ],
    [
        'd' => '18-9-2020',
        't' => 14314.79
    ],
    [
        'd' => '30-9-2020',
        'w' => 640,
        'b' => 308,
        't' => 948.26
    ],
    [
        'd' => '18-10-2020',
        't' => 14701.79
    ],
    [
        'd' => '15-10-2020',
        't' => 15201.79
    ],
    [
        'd' => '30-11-2020',
    ],
];
$tracks = array_merge($tracks, [
    [
        'd' => '16-12-2020',
        't' => 4865.78,
        's' => 10
    ],
    [
        'd' => '17-12-2020',
        'w' => 587,
        'b' => 530.88,
        'a' => 140.85,
        'm' => 3611.73,
        's' => 60
    ],
    [
        'd' => '18-12-2020',
        'w' => 587,
        'b' => 609.88,
        'a' => 140.85,
        'm' => 3620.03
    ],
    [
        'd' => '19-12-2020',
        'w' => 507,
        'b' => 556.88,
        'a' => 140.85,
        'm' => 3628.36
    ],
    [
        'd' => '20-12-2020',
        'w' => 507,
        'b' => 556.88,
        'a' => 140.85,
        'm' => 3628.44
    ],
    [
        'd' => '21-12-2020',
        'w' => 507,
        'b' => 511.88,
        'a' => 140.85,
        'm' => 3628.44,
        's' => 46
    ],
    [
        'd' => '22-12-2020',
        'w' => 507,
        'b' => 962.88,
        'a' => 94.85,
        'm' => 3081.26,
        'i' => 451,
        's' => 0
    ],
    [
        'd' => '23-12-2020',
        'w' => 507,
        'b' => 967.88,
        'a' => 94.85,
        'm' => 3111.98,
        'i' => 1212,
        's' => 1207
    ],
    [
        'd' => '23-12-2020 17:32',
        'w' => 96,
        'b' => 189.07,
        'a' => 94.85,
        'm' => 3061.69,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '24-12-2020',
        'w' => 96,
        'b' => 129.07,
        'a' => 94.85,
        'm' => 3097.58,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '24-12-2020 14:48',
        'w' => 316,
        'b' => 224.92,
        'a' => 0,
        'm' => 3097.58,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '25-12-2020',
        'w' => 320,
        'b' => 224.92,
        'a' => 0,
        'm' => 3125.95,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '26-12-2020',
        'w' => 320,
        'b' => 224.92,
        'a' => 0,
        'm' => 3125.95,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '27-12-2020',
        'w' => 320,
        'b' => 232.92,
        'a' => 0,
        'm' => 3125.95,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '28-12-2020',
        'w' => 320,
        'b' => 232.92,
        'a' => 0,
        'm' => 3125.95,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '29-12-2020',
        'w' => 370,
        'b' => 232.92,
        'a' => 0,
        'm' => 3151.87,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '30-12-2020',
        'w' => 370,
        'b' => 233.92,
        'a' => 0,
        'm' => 3160.95,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '31-12-2020',
        'w' => 370,
        'b' => 233.92,
        'a' => 0,
        'm' => 3173.88,
        'i' => 0,
        's' => 0
    ],
]);
$tracks = array_merge($tracks, [
    [
        'd' => '1-1-2021',
        'w' => 370+32,
        'b' => 233.92,
        'a' => 0,
        'm' => 3179.28,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '2-1-2021',
        'w' => 402,
        'b' => 233.92,
        'a' => 0,
        'm' => 3187.02,
        'i' => 0,
        's' => 10//airtel8866134579 blnc
    ],
    [
        'd' => '3-1-2021',
        'w' => 402,
        'b' => 224.92,
        'a' => 0,
        'm' => 3189.33,
        'i' => 0,
        's' => 48
    ],
    [
        'd' => '4-1-2021',
        'w' => 402,
        'b' => 176.92,
        'a' => 0,
        'm' => 3189.33,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '5-1-2021',
        'w' => 397,
        'b' => 677.92,
        'a' => 0,
        'm' => 3222.50,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '6-1-2021',
        'w' => 397,
        'b' => 1177.92,
        'a' => 0,
        'm' => 3244.65,
        'i' => 500, //belle ame
        's' => 0
    ],
    [
        'd' => '6-1-2021 21:16',
        'w' => 397,
        'b' => 4617.92,
        'a' => 0,
        'm' => 3244.65,
        'i' => 3440, //e-wally
        's' => 0
    ],
    [
        'd' => '7-1-2021',
        'w' => 397,
        'b' => 4617.92,
        'a' => 0,
        'm' => 3238.51,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '7-1-2021 14:54',
        'w' => 397,
        'b' => 4018.92,
        'a' => 29.95,
        'm' => 3238.51,
        'i' => 29.95,
        's' => 599
    ],
    [
        'd' => '7-1-2021 23:45',
        'w' => 397,
        'b' => 6018.92,
        'a' => 29.95,
        'm' => 3238.51,
        'i' => 500+1500,
        's' => 0
    ],
    [
        'd' => '8-1-2021',
        'w' => 397,
        'b' => 6018.92,
        'a' => 29.95,
        'm' => 3243.15,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '8-1-2021 19:55',
        'w' => 397,
        'b' => 1018.92,
        'a' => 29.95,
        'm' => 3243.15,
        'i' => 0,
        's' => 5000//invested in m
    ],
    [
        'd' => '8-1-2021 22:40',
        'w' => 397,
        'b' => 693.92,
        'a' => 29.95,
        'm' => 3243.15,
        'i' => 0,
        's' => 325//invested in m
    ],
    [
        'd' => '9-1-2021',
        'w' => 397,
        'b' => 693.92,
        'a' => 29.95,
        'm' => 3287.03,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '9-1-2021 20:27',
        'w' => 397,
        'b' => 631.92,
        'a' => 29.95,
        'm' => 3287.03,
        'i' => 0,
        's' => 1+1+60
    ],
    [
        'd' => '9-1-2021 23:41',
        'w' => 397,
        'b' => 678.92,
        'a' => 29.95,
        'm' => 3287.03,
        'i' => 47,
        's' => 0
    ],
    [
        'd' => '9-1-2021 23:43',
        'w' => 397,
        'b' => 1.18,
        'a' => 29.95,
        'm' => 3287.03,
        'g' => 658,
        'i' => 0,
        's' => 677.74 // 658(0.1294gm Gold)+19.74(GST 3%)
    ],
    [
        'd' => '10-1-2021 10:37',
        'w' => 397,
        'b' => 1.18,
        'm' => 3287.03,
        'a' => 29.95,
        'g' => 638,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '10-1-2021 12:10',
        'w' => 400,
        'b' => 1.18,
        'm' => 3287.03,
        'a' => 29.95,
        'g' => 638,
        'i' => 3,
        's' => 0
    ],
    [
        'd' => '10-1-2021 17:11',
        'w' => 400,
        'b' => 0.18,
        'm' => 3287.03,
        'a' => 29.95,
        'g' => 638+0.49+1.48,
        'i' => 0,
        's' => 1
    ],
    [
        'd' => '11-1-2021 00:15',
        'w' => 400,
        'b' => 0.18,
        'm' => 3287.03,
        'a' => 29.95,
        'g' => 638+0.49+1.48,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '11-1-2021 10:10',
        'w' => 400,
        'b' => 0.18,
        'm' => 3287.03,
        'a' => 29.95,
        'g' => 633+0.49+1.48,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '11-1-2021 12:25',
        'w' => 400,
        'b' => 0.18,
        'm' => 3287.03,
        'a' => 29.95,
        'g' => 637+0.49+1.48,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '11-1-2021 22:25',
        'w' => 430,
        'b' => 0.18,
        'm' => 8287.41,
        'a' => 29.95,
        'g' => 638.47,
        'i' => 5000.38,
        's' => 0
    ],
    [
        'd' => '12-1-2021',
        'w' => 430,
        'b' => 0.18,
        'm' => 8310.20,
        'a' => 29.95,
        'g' => 635,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '13-1-2021 00:45',
        'w' => 430,
        'b' => 0.18,
        'm' => 8310.20,
        'a' => 29.95,
        'g' => 635,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '13-1-2021 10:14',
        'w' => 430,
        'b' => 0.18,
        'm' => 8313.70,
        'a' => 29.95,
        'g' => 639,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '13-1-2021 17:47',
        'w' => 430,
        'b' => 0.18,
        'm' => 8320.67,
        'a' => 29.95,
        'g' => 638,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '14-1-2021 13:58',
        'w' => 450,
        'b' => 0.18,
        'm' => 8313.86,
        'a' => 29.95,
        'g' => 632,
        'i' => 20,
        's' => 0
    ],
    [
        'd' => '15-1-2021 17:49',
        'w' => 440,
        'b' => 0.18,
        'm' => 8312.30,
        'a' => 29.95,
        'g' => 634,
        'i' => 0,
        's' => 10
    ],
    [
        'd' => '16-1-2021 08:24',
        'w' => 420,
        'b' => 0.18,
        'm' => 8275.61,
        'a' => 29.95,
        'g' => 630,
        'i' => 0,
        's' => 20
    ],
    [
        'd' => '17-1-2021 11:09',
        'w' => 20,
        'b' => 0.18,
        'm' => 8275.61,
        'a' => 29.95,
        'g' => 629,
        'i' => 0,
        's' => 400
    ],
    [
        'd' => '18-1-2021 12:38',
        'w' => 0,
        'b' => 0.18,
        'm' => 8275.61,
        'a' => 29.95,
        'g' => 631,
        'i' => 0,
        's' => 20
    ],
    [
        'd' => '18-1-2021 20:50',
        'w' => 0,
        'b' => 100.18,
        'm' => 8275.61,
        'a' => 29.95,
        'g' => 631,
        'i' => 100, //belle ame
        's' => 0
    ],
    [
        'd' => '19-1-2021 20:50',
        'w' => 0,
        'b' => 100.18,
        'm' => 8251.45,
        'a' => 29.95,
        'g' => 631,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '19-1-2021 13:39',
        'w' => 0,
        'b' => 1081.13,
        'm' => 8228.60,
        'a' => 0,
        'g' => 632,
        'i' => 0,
        's' => 29.95+19.05 //45:3GB:28days:airtel:8866
    ],
    [
        'd' => '19-1-2021 17:03',
        'w' => 0,
        'b' => 1081.13,
        'm' => 8228.60,
        'a' => 0,
        'g' => 633,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '19-1-2021 21:24',
        'w' => 5,
        'b' => 1035.13,
        'm' => 8280.25,
        'a' => 0,
        'g' => 633,
        'i' => 5,
        's' => 46//b:46:1k
    ],
    [
        'd' => '20-1-2021 10:35',
        'w' => 5,
        'b' => 1035.13,
        'm' => 8280.25,
        'a' => 0,
        'g' => 634,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '20-1-2021 11:21',
        'w' => 5,
        'b' => 1035.13,
        'm' => 7279.53,
        'a' => 0,
        'g' => 634,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '21-1-2021 09:04',
        'w' => 5,
        'b' => 1035.13,
        'm' => 7304.84,
        'a' => 0,
        'g' => 594,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '21-1-2021 19:07',
        'w' => 5,
        'b' => 1037.09,
        'm' => 7304.84,
        'a' => 0,
        'g' => 594,
        'i' => 1.96, // 0.0004 gold
        's' => 0
    ],
    [
        'd' => '22-1-2021 07:58',
        'w' => 5,
        'b' => 1037.09,
        'm' => 7286.60,
        'a' => 0,
        'g' => 590,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '23-1-2021 23:02',
        'w' => 15,
        'b' => 1037.09,
        'm' => 7246.89,
        'a' => 0,
        'g' => 588,
        'i' => 0,
        's' => 0
    ],
    [
        'd' => '24-1-2021 21:41',
        'w' => 15,
        'b' => 1037.09,
        'm' => 7246.89,
        'a' => 0,
        'g' => 588,
        'i' => 0,
        's' => 0
    ],
]);

$source = array_keys($tracks[0]);
array_shift($source);

$fields = array_unique([
    'w', 'b', 'm', 'a', 'g', 't'//'i', 's', 
]);

foreach($tracks as $i => $track) {
    $tracks[$i]['d'] = date('Y-m-d H:i', strtotime($track['d'], 0));
    $tracks[$i]['dmy'] = date('d-m-Y', strtotime($track['d'], 0));
    $tracks[$i]['date'] = date('Y-m-d', strtotime($track['d'], 0));
    $tracks[$i]['week'] = date('Y-W', strtotime($track['d'], 0));
    $tracks[$i]['month'] = date('Y-m', strtotime($track['d'], 0));
    $tracks[$i]['year'] = date('Y', strtotime($track['d'], 0));
    $tracks[$i]['w'] = $track['w'] ?? 0;
    $tracks[$i]['b'] = $track['b'] ?? 0;
    $tracks[$i]['m'] = $track['m'] ?? 0;
    $tracks[$i]['a'] = $track['a'] ?? 0;
    $tracks[$i]['g'] = $track['g'] ?? 0;
    $tracks[$i]['i'] = $track['i'] ?? 0;
    $tracks[$i]['s'] = $track['s'] ?? 0;
    unset($track['i']);
    unset($track['s']);
    array_shift($track);
    $tracks[$i]['t'] = isset($track['t']) ? $track['t'] : array_sum($track);
}

$new_tracks = [];
foreach($tracks as $i => $track) {
    if(!isset($new_tracks[$track[$show_by]])) {
        $new_tracks[$track[$show_by]] = $track;
    }
    else {
        $old = $new_tracks[$track[$show_by]];
        foreach(['w', 'b', 'm', 'a', 'g', 't'] as $f) {
            $old[$f] = $track[$f];
        }
        $old['i'] += $track['i'];
        $old['s'] += $track['s'];
        $new_tracks[$track[$show_by]] = $old;
    }
}

$i = 0;
$tracks = [];
foreach($new_tracks as $track) {
    $tracks[$i] = $track;
    $i++;
}

foreach($tracks as $i => $track) {
    foreach($source as $key) {
        $tracks[$i][$key.'%'] = $track['t'] == 0 ? '0%' : round($track[$key] / $track['t'] * 100, 1).'%';
    }
}

function diff($diff) {
    if($diff >= 1000 || $diff <= -1000) {
        $diff = number_format($diff/1000, 2).'K';
    }
    else {
        $diff = number_format($diff, 2);
    }
    return $diff > 0 ? '+'.$diff : $diff;
}

function perc($perc) {
    if($perc > 1000) {
        $perc = round($perc/1000, 0).'K ';
    }
    return $perc > 0 ? '+'.$perc.'%' : $perc.'%';
}

function color($no, $colors) {
    //echo '#'.$no.'#';
    if($no == 0) {
        return $colors[0];
    }
    elseif($no > 0) {
        return $colors[2];
    }
    else {
        return $colors[3];
    }
}
unset($profit, $profit_per);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Balance Sheet</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-bordered table-hover table-striped table-responsive table-sm font-monospace" style="font-size: 16px;text-align: right">
                    <thead>
                        <tr>
                            <th>#</th>
                        <?php
                        foreach($gold as $i => $funds) {
                            if($i) {
                                foreach($funds as $f => $fund) {
                                    if(is_array($fund) && !in_array($f, ['resum']) && $funds_name[$f]['invested'] != 0) {
                                        $invested = $funds_name[$f]['invested'];
                                        $profit[$i][$f] = $fund['current'] - $invested;
                                        $profit_per[$i][$f] = $fund['current'] == 0 ? 0 : round($profit[$i][$f] / $invested * 100, 2);

                                        $diff[$i][$f] = $profit[$i][$f] - $profit[$i-1][$f];
                                        $perc[$i][$f] = $profit[$i-1][$f] == 0 ? 0 : round($diff[$i][$f] / $profit[$i-1][$f] * 100, 2);

                                        $diff2[$i][$f] = $gold[$i][$f]['sellrate'] - $gold[$i][$f]['sellrate'];
                                        $perc2[$i][$f] = $gold[$i-1][$f]['sellrate'] == 0 ? 0 : round($diff2[$i][$f] / $gold[$i-1][$f]['sellrate'] * 100, 2);

                                        $diff3[$i][$f] = $gold[$i][$f]['buyrate'] - $gold[$i-1][$f]['buyrate'];
                                        $perc2[$i][$f] = $gold[$i-1][$f]['buyrate'] == 0 ? 0 : round($diff3[$i][$f] / $gold[$i-1][$f]['buyrate'] * 100, 2);
                                    }
                                }
                            }
                            else {
                                foreach($funds as $f => $fund) {
                                    if(is_array($fund) &&
                                       !in_array($f, ['total','resum']) &&
                                       $funds_name[$f]['invested'] != 0
                                       ) {
                                        $profit[$i][$f] = $profit_per[$i][$f] = $diff[$i][$f] = $perc[$i][$f] = $diff2[$i][$f] = $perc2[$i][$f] = $diff3[$i][$f] = $perc3[$i][$f] = 0.0;
                                        echo '<th colspan="5">'.$f.'<br>'.$funds_name[$f]['invested'].'<br>'.$funds_name[$f]['type'].'</th>';
                                    }
                                    elseif($f == 'total') {
                                        $diff[$i][$f] = $perc[$i][$f] = 0.0;
                                        echo '<th colspan="5" class="bg-info">0<br>'.$funds_name[$f]['invested'].'<br>Total</th>';
                                        $invested = $funds_name[$f]['invested'];
                                        $profit[$i][$f] = $fund['current'] - $invested;
                                        $profit_per[$i][$f] = $fund['current'] == 0 ? 0 : round($profit[$i][$f] / $invested * 100, 2);
                                    }
                                }
                            }
                        }
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($gold as $i => $funds) {
                        ?>
                        <tr>
                            <td width="10" title="<?=$funds['dmy']?>"><?='#'.$i?></td>
                            <?php
                            foreach($funds as $f => $fund) {
                                if(is_array($fund) && !in_array($f, ['resum']) && $funds_name[$f]['invested'] != 0) {
                                    $invested = (float) $funds_name[$f]['invested'];
                                    $c = $f != 'total' ? 'fw-bold' : null;
                                    if(!isset($profit[$i][$f])) {
                                        $profit[$i][$f] = $profit_per[$i][$f] = $diff[$i][$f] = 0;
                                    }
                            ?>
                            <td class="<?=$c?> text-<?=$colors[1]?>">
                                <?=number_format($fund['current'], 2)?><br>
                                <span class="text-<?=color($profit[$i][$f], $colors)?>">
                                    <?=diff($profit[$i][$f])?>
                                </span><br>
                                <span class="text-<?=color($profit_per[$i][$f], $colors)?>"><?=perc($profit_per[$i][$f])?></span>
                            </td>
                            <td class="<?=$c?> text-<?=color($diff[$i][$f], $colors)?>">
                                <?=diff($diff[$i][$f])?><br>
                                <?php
                                $diff_per_invested = round($diff[$i][$f] / $invested * 100, 2);
                                ?>
                                <span class="text-<?=color($diff_per_invested, $colors)?>"><?=perc($diff_per_invested)?></span>
                            </td>
                            <td class="<?=$c?> border-primary border-end text-<?=color($perc[$i][$f], $colors)?>">
                                <?=perc($perc[$i][$f])?>
                            </td>

                            <td class="<?=$c?> text-primary">
                                <?=($fund['sellrate'])?>
                            </td>
                            <td class="<?=$c?> text-primary">
                                <?=diff($diff2[$i][$f])?>
                            </td>
                            <td class="<?=$c?> border-primary border-end text-primary">
                                <?=perc($perc2[$i][$f])?>
                            </td>

                            <td class="<?=$c?> text-primary">
                                <?=($fund['buyrate'])?>
                            </td>
                            <td class="<?=$c?> text-primary">
                                <?=diff($diff3[$i][$f])?>
                            </td>
                            <td class="<?=$c?> border-primary border-end text-primary">
                                <?=perc($perc3[$i][$f] ?? 0)?>
                            </td>
                            <?php
                                }
                            }
                            ?>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-bordered table-hover table-striped table-responsive table-sm font-monospace" style="font-size: 15px;text-align: right">
                    <thead>
                        <tr>
                            <th>#</th>
                        <?php
                        foreach($funds_blnc as $i => $funds) {
                            if($i) {
                                foreach($funds as $f => $fund) {
                                    if(is_array($fund) && !in_array($f, ['resum']) && $funds_name[$f]['invested'] != 0) {
                                        $invested = $funds_name[$f]['invested'];
                                        $profit[$i][$f] = $fund['current'] - $invested;
                                        $profit_per[$i][$f] = $fund['current'] == 0 ? 0 : round($profit[$i][$f] / $invested * 100, 2);
                                        $diff[$i][$f] = ($profit[$i][$f] ?? 0) - ($profit[$i-1][$f] ?? 0);
                                        $perc[$i][$f] = ($profit[$i-1][$f] ?? 0) == 0 ? 0 : round($diff[$i][$f] / ($profit[$i-1][$f] ?? 0) * 100, 2);
                                        $diff_array[$f][$i] = $diff[$i][$f];
                                    }
                                }
                            }
                            else {
                                foreach($funds as $f => $fund) {
                                    if(is_array($fund) && !in_array($f, ['total','resum']) && $funds_name[$f]['invested'] != 0) {
                                        $profit[$i][$f] = $profit_per[$i][$f] = $diff[$i][$f] = $perc[$i][$f] = 0.0;
                                        //$diff_array[$i][$f] = 0;
                                        echo '<th colspan="2">'.$f.'<br>'.$funds_name[$f]['invested'].'<br>'.$funds_name[$f]['type'].'</th>';
                                    }
                                    elseif($f == 'total') {
                                        $diff[$i][$f] = $perc[$i][$f] = 0.0;
                                        echo '<th colspan="2" class="bg-info">0<br>'.$funds_name[$f]['invested'].'<br>Total</th>';
                                        $invested = $funds_name[$f]['invested'];
                                        $profit[$i][$f] = $fund['current'] - $invested;
                                        $profit_per[$i][$f] = $fund['current'] == 0 ? 0 : round($profit[$i][$f] / $invested * 100, 2);
                                    }
                                }
                            }
                        }
                        /*
                        ?>
                        <tr class="text-center">
                            <th class="align-middle" rowspan="2">#</th>
                            <?php
                            foreach($fields as $field) {
                            ?>
                            <th colspan="3" class="bg-white" title="<?=ucfirst($field)?>">
                                <?=ucfirst($field)?>
                            </th>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr class="text-center">
                            <?php
                            foreach($fields as $field) {
                            ?>
                            <td class="text-<?=$colors[0]?>">#</td>
                            <td class="text-<?=$colors[1]?>">+-</td>
                            <td class="text-<?=$colors[2]?>">%</td>
                            <?php
                            }
                            ?>
                        </tr>
                        */
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($funds_blnc as $i => $funds) {
                        ?>
                        <tr>
                            <td width="10" title="<?=$funds['dmy']?>"><?='#'.$i?></td>
                            <?php
                            foreach($funds as $f => $fund) {
                                if(is_array($fund) && !in_array($f, ['resum']) && $funds_name[$f]['invested'] != 0) {
                                    $invested = (float) $funds_name[$f]['invested'];
                                    $c = $f == 'total' ? 'fw-bold' : null;
                                    if(!isset($profit[$i][$f])) {
                                        $profit[$i][$f] = $profit_per[$i][$f] = $diff[$i][$f] = 0;
                                    }
                            ?>
                            <td class="<?=$c?> text-<?=$colors[1]?>">
                                <?=number_format($fund['current'], 2)?><br>
                                <span class="text-<?=color($profit[$i][$f], $colors)?>">
                                    <?=diff($profit[$i][$f])?>
                                </span><br>
                                <span class="fw-bold text-<?=color($profit_per[$i][$f], $colors)?>"><?=perc($profit_per[$i][$f])?></span>
                            </td>
                            <td class="<?=$c?> border-primary border-end text-<?=color($diff[$i][$f], $colors)?>">
                                <?=diff($diff[$i][$f])?><br>
                                <?php
                                $diff_per_invested = round($diff[$i][$f] / $invested * 100, 2);
                                ?>
                                <span class="text-<?=color($diff_per_invested, $colors)?>"><?=perc($diff_per_invested)?></span>
                                <span class="<?=$c?> text-<?=color($perc[$i][$f], $colors)?>">
                                    <?=perc($perc[$i][$f])?>
                                </span>
                            </td>
                            <?php
                                }
                            }
                            ?>
                        </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td>Avg</td>
                        <?php
                        foreach($diff_array as $i => $diff) {
                            $avg = array_sum($diff) / count($diff);
                            $per_month = $avg * 30;
                            $per_year = $avg * 365;
                            echo "<td colspan='2' align='right'>".round($avg,2)."/d<br>".round($per_month,2)."/m<br>".round($per_year,2)."/y</td>";
                        }
                        ?>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-hover table-striped table-responsive table-sm font-monospace" style="font-size: 15px;text-align: right">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle" rowspan="2">#</th>
                            <?php
                            foreach($fields as $field) {
                            ?>
                            <th colspan="3" class="bg-white" title="<?=ucfirst($field)?>">
                                <?=ucfirst($field)?>
                            </th>
                            <?php
                            }
                            ?>
                        </tr>
                        <tr class="text-center">
                            <?php
                            foreach($fields as $field) {
                            ?>
                            <td class="text-<?=$colors[0]?>">#</td>
                            <td class="text-<?=$colors[1]?>">+-</td>
                            <td class="text-<?=$colors[2]?>">%</td>
                            <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($tracks as $i => $track) {
                        ?>
                        <tr>
                            <td width="8" title="<?=$track['dmy']?>"><?='#'.$i?></td>
                            <?php
                            if($i) {
                                foreach($fields as $f) {
                                    $diff[$f] = $track[$f] - $tracks[$i-1][$f];
                                    $perc[$f] = $tracks[$i-1][$f] == 0 ? 0 : round($diff[$f] / $tracks[$i-1][$f]  * 100, 2);
                                }
                            }
                            else {
                                foreach($fields as $f) {
                                    $diff[$f] = $perc[$f] = 0;
                                }
                            }

                            foreach($fields as $a => $f) {
                            ?>
                            <td class=" text-<?=$colors[1]?>">
                                <?=number_format($track[$f], 2)?>
                                <?php if($f != 't' && $track['t'] != 0) { ?>
                                <br><span class="text-primary"><?=round($track[$f]/$track['t']*100,2).'%'?></span>
                                <?php } ?>
                            </td>
                            <td class="text-<?=color($diff[$f], $colors)?>">
                                <?=diff($diff[$f])?>
                            </td>
                            <td class="border-primary border-end text-<?=color($perc[$f], $colors)?>">
                                <?=perc($perc[$f])?>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>

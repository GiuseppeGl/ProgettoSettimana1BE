<?php

echo "ciao";
// Dati forniti
$optionsData = [
    0 => [
        'expirationDate' => 1708041600,
        'hasMiniOptions' => false,
        'straddles' => [
            0 => [
                'strike' => 0.5,
                'call' => null,
                'put' => null
            ]
        ]
    ],
    1 => [
        'strike' => 1,
        'call' => [
            'contractSymbol' => 'BKKT240216C00001000',
            'strike' => 1,
            'currency' => 'USD',
            'lastPrice' => 0.1,
            'change' => -0.3,
            'percentChange' => -75,
            'volume' => 41,
            'openInterest' => 961,
            'bid' => 0.05,
            'ask' => 0.15,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1707403600,
            'impliedVolatility' => 1.75000125,
            'inTheMoney' => false
        ],
        'put' => [
            'contractSymbol' => 'BKKT240216P00001000',
            'strike' => 1,
            'currency' => 'USD',
            'lastPrice' => 0.15,
            'change' => 0.11000001,
            'percentChange' => 275.00003,
            'volume' => 37,
            'openInterest' => 54,
            'bid' => 0.1,
            'ask' => 0.15,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1707403423,
            'impliedVolatility' => 1.875000625,
            'inTheMoney' => true
        ]
    ],
    2 => [
        'strike' => 1.5,
        'call' => [
            'contractSymbol' => 'BKKT240216C00001500',
            'strike' => 1.5,
            'currency' => 'USD',
            'lastPrice' => 0.05,
            'change' => -0.05,
            'percentChange' => -50,
            'volume' => 46,
            'openInterest' => 2556,
            'bid' => 0.05,
            'ask' => 0.05,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1707403110,
            'impliedVolatility' => 2.843752890625,
            'inTheMoney' => false
        ],
        'put' => [
            'contractSymbol' => 'BKKT240216P00001500',
            'strike' => 1.5,
            'currency' => 'USD',
            'lastPrice' => 0.6,
            'change' => 0.40000004,
            'percentChange' => 200.00003,
            'volume' => 22,
            'openInterest' => 3369,
            'bid' => 0.55,
            'ask' => 0.6,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1707403299,
            'impliedVolatility' => 3.06250234375,
            'inTheMoney' => true
        ]
    ],
    3 => [
        'strike' => 2,
        'call' => [
            'contractSymbol' => 'BKKT240216C00002000',
            'strike' => 2,
            'currency' => 'USD',
            'lastPrice' => 0.05,
            'change' => 0,
            'percentChange' => 0,
            'volume' => 201,
            'openInterest' => 3811,
            'bid' => 0,
            'ask' => 0.05,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1707403373,
            'impliedVolatility' => 3.1875020312499998,
            'inTheMoney' => false
        ],
        'put' => [
            'contractSymbol' => 'BKKT240216P00002000',
            'strike' => 2,
            'currency' => 'USD',
            'lastPrice' => 0.75,
            'change' => 0,
            'percentChange' => 0,
            'volume' => 2,
            'openInterest' => 556,
            'bid' => 1,
            'ask' => 1.1,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1707154873,
            'impliedVolatility' => 3.50000125,
            'inTheMoney' => true
        ]
    ],
    4 => [
        'strike' => 2.5,
        'call' => [
            'contractSymbol' => 'BKKT240216C00002500',
            'strike' => 2.5,
            'currency' => 'USD',
            'lastPrice' => 0.05,
            'change' => -0.06999999,
            'percentChange' => -58.333332,
            'volume' => 1,
            'openInterest' => 2997,
            'bid' => 0,
            'ask' => 0.05,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1706820491,
            'impliedVolatility' => 3.8750003125,
            'inTheMoney' => false
        ],
        'put' => [
            'contractSymbol' => 'BKKT240216P00002500',
            'strike' => 2.5,
            'currency' => 'USD',
            'lastPrice' => 1.3,
            'change' => 0,
            'percentChange' => 0,
            'volume' => 2,
            'openInterest' => 282,
            'bid' => 1.5,
            'ask' => 1.8,
            'contractSize' => 'REGULAR',
            'expiration' => 1708041600,
            'lastTradeDate' => 1706279403,
            'impliedVolatility' => 6.312502109375,
            'inTheMoney' => true
        ]
    ]
];
$callCount = 0;
$putCount = 0;

// Scorre ogni elemento dei dati delle opzioni
foreach ($optionsData as $option) {
    // Verifica se l'elemento è un'opzione call o put in base alla presenza del campo 'call' o 'put'
    if (isset($option['call'])) {
        // È un'opzione call
        $callCount++;
        // Stampa i dettagli dell'opzione call
        echo "Opzione Call - Strike: {$option['strike']}<br>";
        echo "Open Interest: {$option['call']['openInterest']}<br>";
        echo "Volume: {$option['call']['volume']}<br>";
        // Aggiungi qui altri dettagli che desideri stampare per le opzioni call
        echo "<br>";
    }
    if (isset($option['put'])) {
        // È un'opzione put
        $putCount++;
        // Stampa i dettagli dell'opzione put
        echo "Opzione Put - Strike: {$option['strike']}<br>";
        echo "Open Interest: {$option['put']['openInterest']}<br>";
        echo "Volume: {$option['put']['volume']}<br>";
        // Aggiungi qui altri dettagli che desideri stampare per le opzioni put
        echo "<br>";
    }
}

// Stampa il numero di opzioni call e put
echo "Numero di opzioni Call: $callCount<br>";
echo "Numero di opzioni Put: $putCount<br>";
?>
$provider = \Sadovod\Local\Hlblock\Provider::getList('ID',
[
    'filter' => ['UF_MARKET' => false],
    'select' => ['ID', 'UF_MARKET'],
    // 'limit' => 10,
]);

foreach ($provider as $key => $value) {
    $value['UF_MARKET'] = 64;
    $market[$value['ID']] = $value['UF_MARKET'];
}
foreach ($market as $kId => $valMarket) {
    $result = \Sadovod\Local\Hlblock\Provider::update($kId, ['UF_MARKET' => $valMarket]);
   
}

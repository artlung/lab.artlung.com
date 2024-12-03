<?php
require_once '../../loader.php';
$lab = new Lab();
$lab->printHeader('SQL Server Collations')
?>

    <pre>SELECT *
FROM   ::FN_HELPCOLLATIONS()  </pre>

    <pre>

Albanian_BIN    Albanian, binary sort
Albanian_BIN2    Albanian, binary code point comparison sort
Albanian_CI_AI    Albanian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Albanian_CI_AI_WS      Albanian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Albanian_CI_AI_KS      Albanian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Albanian_CI_AI_KS_WS      Albanian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Albanian_CI_AS          Albanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Albanian_CI_AS_WS      Albanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Albanian_CI_AS_KS      Albanian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Albanian_CI_AS_KS_WS      Albanian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Albanian_CS_AI          Albanian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Albanian_CS_AI_WS      Albanian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Albanian_CS_AI_KS      Albanian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Albanian_CS_AI_KS_WS      Albanian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Albanian_CS_AS          Albanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Albanian_CS_AS_WS      Albanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Albanian_CS_AS_KS      Albanian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Albanian_CS_AS_KS_WS      Albanian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Arabic_BIN          Arabic, binary sort
Arabic_BIN2          Arabic, binary code point comparison sort
Arabic_CI_AI          Arabic, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Arabic_CI_AI_WS          Arabic, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Arabic_CI_AI_KS          Arabic, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Arabic_CI_AI_KS_WS      Arabic, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Arabic_CI_AS          Arabic, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Arabic_CI_AS_WS          Arabic, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Arabic_CI_AS_KS          Arabic, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Arabic_CI_AS_KS_WS      Arabic, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Arabic_CS_AI          Arabic, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Arabic_CS_AI_WS          Arabic, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Arabic_CS_AI_KS          Arabic, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Arabic_CS_AI_KS_WS      Arabic, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Arabic_CS_AS          Arabic, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Arabic_CS_AS_WS          Arabic, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Arabic_CS_AS_KS          Arabic, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Arabic_CS_AS_KS_WS      Arabic, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Azeri_Cyrillic_90_BIN      Azeri-Cyrillic-90, binary sort
Azeri_Cyrillic_90_BIN2      Azeri-Cyrillic-90, binary code point comparison sort
Azeri_Cyrillic_90_CI_AI      Azeri-Cyrillic-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Azeri_Cyrillic_90_CI_AI_WS             Azeri-Cyrillic-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Azeri_Cyrillic_90_CI_AI_KS             Azeri-Cyrillic-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Azeri_Cyrillic_90_CI_AI_KS_WS             Azeri-Cyrillic-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Azeri_Cyrillic_90_CI_AS                 Azeri-Cyrillic-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Azeri_Cyrillic_90_CI_AS_WS             Azeri-Cyrillic-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Azeri_Cyrillic_90_CI_AS_KS             Azeri-Cyrillic-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Azeri_Cyrillic_90_CI_AS_KS_WS             Azeri-Cyrillic-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Azeri_Cyrillic_90_CS_AI                 Azeri-Cyrillic-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Azeri_Cyrillic_90_CS_AI_WS             Azeri-Cyrillic-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Azeri_Cyrillic_90_CS_AI_KS             Azeri-Cyrillic-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Azeri_Cyrillic_90_CS_AI_KS_WS             Azeri-Cyrillic-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Azeri_Cyrillic_90_CS_AS                 Azeri-Cyrillic-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Azeri_Cyrillic_90_CS_AS_WS             Azeri-Cyrillic-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Azeri_Cyrillic_90_CS_AS_KS             Azeri-Cyrillic-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Azeri_Cyrillic_90_CS_AS_KS_WS             Azeri-Cyrillic-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Azeri_Latin_90_BIN                 Azeri-Latin-90, binary sort
Azeri_Latin_90_BIN2                 Azeri-Latin-90, binary code point comparison sort
Azeri_Latin_90_CI_AI                 Azeri-Latin-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Azeri_Latin_90_CI_AI_WS                 Azeri-Latin-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Azeri_Latin_90_CI_AI_KS                 Azeri-Latin-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Azeri_Latin_90_CI_AI_KS_WS             Azeri-Latin-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Azeri_Latin_90_CI_AS                 Azeri-Latin-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Azeri_Latin_90_CI_AS_WS                 Azeri-Latin-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Azeri_Latin_90_CI_AS_KS                 Azeri-Latin-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Azeri_Latin_90_CI_AS_KS_WS             Azeri-Latin-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Azeri_Latin_90_CS_AI                 Azeri-Latin-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Azeri_Latin_90_CS_AI_WS                 Azeri-Latin-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Azeri_Latin_90_CS_AI_KS                 Azeri-Latin-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Azeri_Latin_90_CS_AI_KS_WS             Azeri-Latin-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Azeri_Latin_90_CS_AS                 Azeri-Latin-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Azeri_Latin_90_CS_AS_WS                 Azeri-Latin-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Azeri_Latin_90_CS_AS_KS                 Azeri-Latin-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Azeri_Latin_90_CS_AS_KS_WS             Azeri-Latin-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_BIN             Chinese-Hong-Kong-Stroke-90, binary sort
Chinese_Hong_Kong_Stroke_90_BIN2         Chinese-Hong-Kong-Stroke-90, binary code point comparison sort
Chinese_Hong_Kong_Stroke_90_CI_AI         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CI_AI_WS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CI_AI_KS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CI_AI_KS_WS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CI_AS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CI_AS_WS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CI_AS_KS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CI_AS_KS_WS         Chinese-Hong-Kong-Stroke-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CS_AI         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CS_AI_WS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CS_AI_KS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CS_AI_KS_WS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CS_AS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CS_AS_WS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Hong_Kong_Stroke_90_CS_AS_KS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Hong_Kong_Stroke_90_CS_AS_KS_WS         Chinese-Hong-Kong-Stroke-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_BIN                     Chinese-PRC, binary sort
Chinese_PRC_BIN2                 Chinese-PRC, binary code point comparison sort
Chinese_PRC_CI_AI                 Chinese-PRC, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_CI_AI_WS                 Chinese-PRC, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_CI_AI_KS                 Chinese-PRC, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_CI_AI_KS_WS                 Chinese-PRC, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_CI_AS                 Chinese-PRC, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_CI_AS_WS                 Chinese-PRC, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_CI_AS_KS                 Chinese-PRC, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_CI_AS_KS_WS                 Chinese-PRC, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_CS_AI                 Chinese-PRC, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_CS_AI_WS                 Chinese-PRC, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_CS_AI_KS                 Chinese-PRC, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_CS_AI_KS_WS                 Chinese-PRC, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_CS_AS                 Chinese-PRC, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_CS_AS_WS                 Chinese-PRC, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_CS_AS_KS                 Chinese-PRC, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_CS_AS_KS_WS                 Chinese-PRC, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_90_BIN                 Chinese-PRC-90, binary sort
Chinese_PRC_90_BIN2                 Chinese-PRC-90, binary code point comparison sort
Chinese_PRC_90_CI_AI                 Chinese-PRC-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_90_CI_AI_WS                 Chinese-PRC-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_90_CI_AI_KS                 Chinese-PRC-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_90_CI_AI_KS_WS             Chinese-PRC-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_90_CI_AS                 Chinese-PRC-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_90_CI_AS_WS                 Chinese-PRC-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_90_CI_AS_KS                 Chinese-PRC-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_90_CI_AS_KS_WS             Chinese-PRC-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_90_CS_AI                 Chinese-PRC-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_90_CS_AI_WS                 Chinese-PRC-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_90_CS_AI_KS                 Chinese-PRC-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_90_CS_AI_KS_WS             Chinese-PRC-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_90_CS_AS                 Chinese-PRC-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_90_CS_AS_WS                 Chinese-PRC-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_90_CS_AS_KS                 Chinese-PRC-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_90_CS_AS_KS_WS             Chinese-PRC-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_BIN                 Chinese-PRC-Stroke, binary sort
Chinese_PRC_Stroke_BIN2                 Chinese-PRC-Stroke, binary code point comparison sort
Chinese_PRC_Stroke_CI_AI             Chinese-PRC-Stroke, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_CI_AI_WS             Chinese-PRC-Stroke, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_CI_AI_KS             Chinese-PRC-Stroke, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_CI_AI_KS_WS             Chinese-PRC-Stroke, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_CI_AS             Chinese-PRC-Stroke, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_CI_AS_WS             Chinese-PRC-Stroke, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_CI_AS_KS             Chinese-PRC-Stroke, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_CI_AS_KS_WS             Chinese-PRC-Stroke, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_CS_AI             Chinese-PRC-Stroke, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_CS_AI_WS             Chinese-PRC-Stroke, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_CS_AI_KS             Chinese-PRC-Stroke, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_CS_AI_KS_WS             Chinese-PRC-Stroke, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_CS_AS             Chinese-PRC-Stroke, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_CS_AS_WS             Chinese-PRC-Stroke, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_CS_AS_KS             Chinese-PRC-Stroke, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_CS_AS_KS_WS             Chinese-PRC-Stroke, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_90_BIN             Chinese-PRC-Stroke-90, binary sort
Chinese_PRC_Stroke_90_BIN2             Chinese-PRC-Stroke-90, binary code point comparison sort
Chinese_PRC_Stroke_90_CI_AI             Chinese-PRC-Stroke-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_90_CI_AI_WS             Chinese-PRC-Stroke-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_90_CI_AI_KS             Chinese-PRC-Stroke-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_90_CI_AI_KS_WS         Chinese-PRC-Stroke-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_90_CI_AS             Chinese-PRC-Stroke-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_90_CI_AS_WS             Chinese-PRC-Stroke-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_90_CI_AS_KS             Chinese-PRC-Stroke-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_90_CI_AS_KS_WS         Chinese-PRC-Stroke-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_90_CS_AI             Chinese-PRC-Stroke-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_90_CS_AI_WS             Chinese-PRC-Stroke-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_90_CS_AI_KS             Chinese-PRC-Stroke-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_90_CS_AI_KS_WS         Chinese-PRC-Stroke-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_PRC_Stroke_90_CS_AS             Chinese-PRC-Stroke-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_PRC_Stroke_90_CS_AS_WS             Chinese-PRC-Stroke-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_PRC_Stroke_90_CS_AS_KS             Chinese-PRC-Stroke-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_PRC_Stroke_90_CS_AS_KS_WS         Chinese-PRC-Stroke-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_BIN             Chinese-Taiwan-Bopomofo, binary sort
Chinese_Taiwan_Bopomofo_BIN2             Chinese-Taiwan-Bopomofo, binary code point comparison sort
Chinese_Taiwan_Bopomofo_CI_AI             Chinese-Taiwan-Bopomofo, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CI_AI_WS         Chinese-Taiwan-Bopomofo, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CI_AI_KS         Chinese-Taiwan-Bopomofo, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CI_AI_KS_WS         Chinese-Taiwan-Bopomofo, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CI_AS             Chinese-Taiwan-Bopomofo, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CI_AS_WS         Chinese-Taiwan-Bopomofo, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CI_AS_KS         Chinese-Taiwan-Bopomofo, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CI_AS_KS_WS         Chinese-Taiwan-Bopomofo, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CS_AI             Chinese-Taiwan-Bopomofo, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CS_AI_WS         Chinese-Taiwan-Bopomofo, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CS_AI_KS         Chinese-Taiwan-Bopomofo, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CS_AI_KS_WS         Chinese-Taiwan-Bopomofo, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CS_AS             Chinese-Taiwan-Bopomofo, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CS_AS_WS         Chinese-Taiwan-Bopomofo, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_CS_AS_KS         Chinese-Taiwan-Bopomofo, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_CS_AS_KS_WS         Chinese-Taiwan-Bopomofo, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_BIN             Chinese-Taiwan-Bopomofo-90, binary sort
Chinese_Taiwan_Bopomofo_90_BIN2             Chinese-Taiwan-Bopomofo-90, binary code point comparison sort
Chinese_Taiwan_Bopomofo_90_CI_AI         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CI_AI_WS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CI_AI_KS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CI_AI_KS_WS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CI_AS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CI_AS_WS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CI_AS_KS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CI_AS_KS_WS         Chinese-Taiwan-Bopomofo-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CS_AI         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CS_AI_WS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CS_AI_KS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CS_AI_KS_WS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CS_AS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CS_AS_WS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Bopomofo_90_CS_AS_KS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Bopomofo_90_CS_AS_KS_WS         Chinese-Taiwan-Bopomofo-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_BIN             Chinese-Taiwan-Stroke, binary sort
Chinese_Taiwan_Stroke_BIN2             Chinese-Taiwan-Stroke, binary code point comparison sort
Chinese_Taiwan_Stroke_CI_AI             Chinese-Taiwan-Stroke, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_CI_AI_WS             Chinese-Taiwan-Stroke, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_CI_AI_KS             Chinese-Taiwan-Stroke, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_CI_AI_KS_WS         Chinese-Taiwan-Stroke, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_CI_AS             Chinese-Taiwan-Stroke, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_CI_AS_WS             Chinese-Taiwan-Stroke, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_CI_AS_KS             Chinese-Taiwan-Stroke, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_CI_AS_KS_WS         Chinese-Taiwan-Stroke, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_CS_AI             Chinese-Taiwan-Stroke, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_CS_AI_WS             Chinese-Taiwan-Stroke, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_CS_AI_KS             Chinese-Taiwan-Stroke, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_CS_AI_KS_WS         Chinese-Taiwan-Stroke, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_CS_AS             Chinese-Taiwan-Stroke, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_CS_AS_WS             Chinese-Taiwan-Stroke, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_CS_AS_KS             Chinese-Taiwan-Stroke, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_CS_AS_KS_WS         Chinese-Taiwan-Stroke, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_90_BIN             Chinese-Taiwan-Stroke-90, binary sort
Chinese_Taiwan_Stroke_90_BIN2             Chinese-Taiwan-Stroke-90, binary code point comparison sort
Chinese_Taiwan_Stroke_90_CI_AI             Chinese-Taiwan-Stroke-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CI_AI_WS         Chinese-Taiwan-Stroke-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CI_AI_KS         Chinese-Taiwan-Stroke-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CI_AI_KS_WS         Chinese-Taiwan-Stroke-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CI_AS             Chinese-Taiwan-Stroke-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CI_AS_WS         Chinese-Taiwan-Stroke-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CI_AS_KS         Chinese-Taiwan-Stroke-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CI_AS_KS_WS         Chinese-Taiwan-Stroke-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CS_AI             Chinese-Taiwan-Stroke-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CS_AI_WS         Chinese-Taiwan-Stroke-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CS_AI_KS         Chinese-Taiwan-Stroke-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CS_AI_KS_WS         Chinese-Taiwan-Stroke-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CS_AS             Chinese-Taiwan-Stroke-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CS_AS_WS         Chinese-Taiwan-Stroke-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Chinese_Taiwan_Stroke_90_CS_AS_KS         Chinese-Taiwan-Stroke-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Chinese_Taiwan_Stroke_90_CS_AS_KS_WS         Chinese-Taiwan-Stroke-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Croatian_BIN                     Croatian, binary sort
Croatian_BIN2                     Croatian, binary code point comparison sort
Croatian_CI_AI                     Croatian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Croatian_CI_AI_WS                 Croatian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Croatian_CI_AI_KS                 Croatian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Croatian_CI_AI_KS_WS                 Croatian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Croatian_CI_AS                     Croatian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Croatian_CI_AS_WS                 Croatian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Croatian_CI_AS_KS                 Croatian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Croatian_CI_AS_KS_WS                 Croatian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Croatian_CS_AI                     Croatian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Croatian_CS_AI_WS                 Croatian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Croatian_CS_AI_KS                 Croatian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Croatian_CS_AI_KS_WS                 Croatian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Croatian_CS_AS                     Croatian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Croatian_CS_AS_WS                 Croatian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Croatian_CS_AS_KS                 Croatian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Croatian_CS_AS_KS_WS                 Croatian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Cyrillic_General_BIN                 Cyrillic-General, binary sort
Cyrillic_General_BIN2                 Cyrillic-General, binary code point comparison sort
Cyrillic_General_CI_AI                 Cyrillic-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Cyrillic_General_CI_AI_WS             Cyrillic-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Cyrillic_General_CI_AI_KS             Cyrillic-General, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Cyrillic_General_CI_AI_KS_WS             Cyrillic-General, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Cyrillic_General_CI_AS                 Cyrillic-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Cyrillic_General_CI_AS_WS             Cyrillic-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Cyrillic_General_CI_AS_KS             Cyrillic-General, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Cyrillic_General_CI_AS_KS_WS             Cyrillic-General, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Cyrillic_General_CS_AI                 Cyrillic-General, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Cyrillic_General_CS_AI_WS             Cyrillic-General, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Cyrillic_General_CS_AI_KS             Cyrillic-General, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Cyrillic_General_CS_AI_KS_WS             Cyrillic-General, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Cyrillic_General_CS_AS                 Cyrillic-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Cyrillic_General_CS_AS_WS             Cyrillic-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Cyrillic_General_CS_AS_KS             Cyrillic-General, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Cyrillic_General_CS_AS_KS_WS             Cyrillic-General, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Czech_BIN                     Czech, binary sort
Czech_BIN2                     Czech, binary code point comparison sort
Czech_CI_AI                     Czech, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Czech_CI_AI_WS                     Czech, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Czech_CI_AI_KS                     Czech, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Czech_CI_AI_KS_WS                 Czech, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Czech_CI_AS                     Czech, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Czech_CI_AS_WS                     Czech, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Czech_CI_AS_KS                     Czech, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Czech_CI_AS_KS_WS                 Czech, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Czech_CS_AI                     Czech, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Czech_CS_AI_WS                     Czech, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Czech_CS_AI_KS                     Czech, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Czech_CS_AI_KS_WS                 Czech, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Czech_CS_AS                     Czech, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Czech_CS_AS_WS                     Czech, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Czech_CS_AS_KS                     Czech, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Czech_CS_AS_KS_WS                 Czech, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Danish_Norwegian_BIN                 Danish-Norwegian, binary sort
Danish_Norwegian_BIN2                 Danish-Norwegian, binary code point comparison sort
Danish_Norwegian_CI_AI                 Danish-Norwegian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Danish_Norwegian_CI_AI_WS             Danish-Norwegian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Danish_Norwegian_CI_AI_KS             Danish-Norwegian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Danish_Norwegian_CI_AI_KS_WS             Danish-Norwegian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Danish_Norwegian_CI_AS                 Danish-Norwegian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Danish_Norwegian_CI_AS_WS             Danish-Norwegian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Danish_Norwegian_CI_AS_KS             Danish-Norwegian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Danish_Norwegian_CI_AS_KS_WS             Danish-Norwegian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Danish_Norwegian_CS_AI                 Danish-Norwegian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Danish_Norwegian_CS_AI_WS             Danish-Norwegian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Danish_Norwegian_CS_AI_KS             Danish-Norwegian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Danish_Norwegian_CS_AI_KS_WS             Danish-Norwegian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Danish_Norwegian_CS_AS                 Danish-Norwegian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Danish_Norwegian_CS_AS_WS             Danish-Norwegian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Danish_Norwegian_CS_AS_KS             Danish-Norwegian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Danish_Norwegian_CS_AS_KS_WS             Danish-Norwegian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Divehi_90_BIN                     Divehi-90, binary sort
Divehi_90_BIN2                     Divehi-90, binary code point comparison sort
Divehi_90_CI_AI                     Divehi-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Divehi_90_CI_AI_WS                 Divehi-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Divehi_90_CI_AI_KS                 Divehi-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Divehi_90_CI_AI_KS_WS                 Divehi-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Divehi_90_CI_AS                     Divehi-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Divehi_90_CI_AS_WS                 Divehi-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Divehi_90_CI_AS_KS                 Divehi-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Divehi_90_CI_AS_KS_WS                 Divehi-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Divehi_90_CS_AI                     Divehi-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Divehi_90_CS_AI_WS                 Divehi-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Divehi_90_CS_AI_KS                 Divehi-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Divehi_90_CS_AI_KS_WS                 Divehi-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Divehi_90_CS_AS                     Divehi-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Divehi_90_CS_AS_WS                 Divehi-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Divehi_90_CS_AS_KS                 Divehi-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Divehi_90_CS_AS_KS_WS                 Divehi-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Estonian_BIN                     Estonian, binary sort
Estonian_BIN2                     Estonian, binary code point comparison sort
Estonian_CI_AI                     Estonian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Estonian_CI_AI_WS                 Estonian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Estonian_CI_AI_KS                 Estonian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Estonian_CI_AI_KS_WS                 Estonian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Estonian_CI_AS                     Estonian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Estonian_CI_AS_WS                 Estonian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Estonian_CI_AS_KS                 Estonian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Estonian_CI_AS_KS_WS                 Estonian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Estonian_CS_AI                     Estonian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Estonian_CS_AI_WS                 Estonian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Estonian_CS_AI_KS                 Estonian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Estonian_CS_AI_KS_WS                 Estonian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Estonian_CS_AS                     Estonian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Estonian_CS_AS_WS                 Estonian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Estonian_CS_AS_KS                 Estonian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Estonian_CS_AS_KS_WS                 Estonian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Finnish_Swedish_BIN                 Finnish-Swedish, binary sort
Finnish_Swedish_BIN2                 Finnish-Swedish, binary code point comparison sort
Finnish_Swedish_CI_AI                 Finnish-Swedish, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Finnish_Swedish_CI_AI_WS             Finnish-Swedish, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Finnish_Swedish_CI_AI_KS             Finnish-Swedish, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Finnish_Swedish_CI_AI_KS_WS             Finnish-Swedish, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Finnish_Swedish_CI_AS                 Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Finnish_Swedish_CI_AS_WS             Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Finnish_Swedish_CI_AS_KS             Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Finnish_Swedish_CI_AS_KS_WS             Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Finnish_Swedish_CS_AI                 Finnish-Swedish, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Finnish_Swedish_CS_AI_WS             Finnish-Swedish, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Finnish_Swedish_CS_AI_KS             Finnish-Swedish, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Finnish_Swedish_CS_AI_KS_WS             Finnish-Swedish, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Finnish_Swedish_CS_AS                 Finnish-Swedish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Finnish_Swedish_CS_AS_WS             Finnish-Swedish, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Finnish_Swedish_CS_AS_KS             Finnish-Swedish, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Finnish_Swedish_CS_AS_KS_WS             Finnish-Swedish, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
French_BIN                     French, binary sort
French_BIN2                     French, binary code point comparison sort
French_CI_AI                     French, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
French_CI_AI_WS                     French, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
French_CI_AI_KS                     French, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
French_CI_AI_KS_WS                 French, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
French_CI_AS                     French, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
French_CI_AS_WS                     French, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
French_CI_AS_KS                     French, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
French_CI_AS_KS_WS                 French, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
French_CS_AI                     French, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
French_CS_AI_WS                     French, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
French_CS_AI_KS                     French, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
French_CS_AI_KS_WS                 French, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
French_CS_AS                     French, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
French_CS_AS_WS                     French, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
French_CS_AS_KS                     French, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
French_CS_AS_KS_WS                 French, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Georgian_Modern_Sort_BIN             Georgian-Modern-Sort, binary sort
Georgian_Modern_Sort_BIN2             Georgian-Modern-Sort, binary code point comparison sort
Georgian_Modern_Sort_CI_AI             Georgian-Modern-Sort, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Georgian_Modern_Sort_CI_AI_WS             Georgian-Modern-Sort, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Georgian_Modern_Sort_CI_AI_KS             Georgian-Modern-Sort, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Georgian_Modern_Sort_CI_AI_KS_WS         Georgian-Modern-Sort, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Georgian_Modern_Sort_CI_AS             Georgian-Modern-Sort, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Georgian_Modern_Sort_CI_AS_WS             Georgian-Modern-Sort, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Georgian_Modern_Sort_CI_AS_KS             Georgian-Modern-Sort, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Georgian_Modern_Sort_CI_AS_KS_WS         Georgian-Modern-Sort, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Georgian_Modern_Sort_CS_AI             Georgian-Modern-Sort, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Georgian_Modern_Sort_CS_AI_WS             Georgian-Modern-Sort, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Georgian_Modern_Sort_CS_AI_KS             Georgian-Modern-Sort, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Georgian_Modern_Sort_CS_AI_KS_WS         Georgian-Modern-Sort, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Georgian_Modern_Sort_CS_AS             Georgian-Modern-Sort, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Georgian_Modern_Sort_CS_AS_WS             Georgian-Modern-Sort, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Georgian_Modern_Sort_CS_AS_KS             Georgian-Modern-Sort, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Georgian_Modern_Sort_CS_AS_KS_WS         Georgian-Modern-Sort, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
German_PhoneBook_BIN                 German-PhoneBook, binary sort
German_PhoneBook_BIN2                 German-PhoneBook, binary code point comparison sort
German_PhoneBook_CI_AI                 German-PhoneBook, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
German_PhoneBook_CI_AI_WS             German-PhoneBook, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
German_PhoneBook_CI_AI_KS             German-PhoneBook, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
German_PhoneBook_CI_AI_KS_WS             German-PhoneBook, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
German_PhoneBook_CI_AS                 German-PhoneBook, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
German_PhoneBook_CI_AS_WS             German-PhoneBook, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
German_PhoneBook_CI_AS_KS             German-PhoneBook, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
German_PhoneBook_CI_AS_KS_WS             German-PhoneBook, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
German_PhoneBook_CS_AI                 German-PhoneBook, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
German_PhoneBook_CS_AI_WS             German-PhoneBook, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
German_PhoneBook_CS_AI_KS             German-PhoneBook, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
German_PhoneBook_CS_AI_KS_WS             German-PhoneBook, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
German_PhoneBook_CS_AS                 German-PhoneBook, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
German_PhoneBook_CS_AS_WS             German-PhoneBook, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
German_PhoneBook_CS_AS_KS             German-PhoneBook, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
German_PhoneBook_CS_AS_KS_WS             German-PhoneBook, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Greek_BIN                     Greek, binary sort
Greek_BIN2                     Greek, binary code point comparison sort
Greek_CI_AI                     Greek, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Greek_CI_AI_WS                     Greek, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Greek_CI_AI_KS                     Greek, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Greek_CI_AI_KS_WS                 Greek, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Greek_CI_AS                     Greek, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Greek_CI_AS_WS                     Greek, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Greek_CI_AS_KS                     Greek, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Greek_CI_AS_KS_WS                 Greek, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Greek_CS_AI                     Greek, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Greek_CS_AI_WS                     Greek, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Greek_CS_AI_KS                     Greek, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Greek_CS_AI_KS_WS                 Greek, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Greek_CS_AS                     Greek, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Greek_CS_AS_WS                     Greek, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Greek_CS_AS_KS                     Greek, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Greek_CS_AS_KS_WS                 Greek, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Hebrew_BIN                     Hebrew, binary sort
Hebrew_BIN2                     Hebrew, binary code point comparison sort
Hebrew_CI_AI                     Hebrew, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Hebrew_CI_AI_WS                     Hebrew, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Hebrew_CI_AI_KS                     Hebrew, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Hebrew_CI_AI_KS_WS                 Hebrew, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Hebrew_CI_AS                     Hebrew, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Hebrew_CI_AS_WS                     Hebrew, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Hebrew_CI_AS_KS                     Hebrew, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Hebrew_CI_AS_KS_WS                 Hebrew, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Hebrew_CS_AI                     Hebrew, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Hebrew_CS_AI_WS                     Hebrew, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Hebrew_CS_AI_KS                     Hebrew, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Hebrew_CS_AI_KS_WS                 Hebrew, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Hebrew_CS_AS                     Hebrew, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Hebrew_CS_AS_WS                     Hebrew, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Hebrew_CS_AS_KS                     Hebrew, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Hebrew_CS_AS_KS_WS                 Hebrew, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Hungarian_BIN                     Hungarian, binary sort
Hungarian_BIN2                     Hungarian, binary code point comparison sort
Hungarian_CI_AI                     Hungarian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Hungarian_CI_AI_WS                 Hungarian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Hungarian_CI_AI_KS                 Hungarian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Hungarian_CI_AI_KS_WS                 Hungarian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Hungarian_CI_AS                     Hungarian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Hungarian_CI_AS_WS                 Hungarian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Hungarian_CI_AS_KS                 Hungarian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Hungarian_CI_AS_KS_WS                 Hungarian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Hungarian_CS_AI                     Hungarian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Hungarian_CS_AI_WS                 Hungarian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Hungarian_CS_AI_KS                 Hungarian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Hungarian_CS_AI_KS_WS                 Hungarian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Hungarian_CS_AS                     Hungarian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Hungarian_CS_AS_WS                 Hungarian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Hungarian_CS_AS_KS                 Hungarian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Hungarian_CS_AS_KS_WS                 Hungarian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Hungarian_Technical_BIN                 Hungarian-Technical, binary sort
Hungarian_Technical_BIN2             Hungarian-Technical, binary code point comparison sort
Hungarian_Technical_CI_AI             Hungarian-Technical, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Hungarian_Technical_CI_AI_WS             Hungarian-Technical, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Hungarian_Technical_CI_AI_KS             Hungarian-Technical, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Hungarian_Technical_CI_AI_KS_WS             Hungarian-Technical, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Hungarian_Technical_CI_AS             Hungarian-Technical, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Hungarian_Technical_CI_AS_WS             Hungarian-Technical, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Hungarian_Technical_CI_AS_KS             Hungarian-Technical, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Hungarian_Technical_CI_AS_KS_WS             Hungarian-Technical, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Hungarian_Technical_CS_AI             Hungarian-Technical, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Hungarian_Technical_CS_AI_WS             Hungarian-Technical, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Hungarian_Technical_CS_AI_KS             Hungarian-Technical, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Hungarian_Technical_CS_AI_KS_WS             Hungarian-Technical, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Hungarian_Technical_CS_AS             Hungarian-Technical, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Hungarian_Technical_CS_AS_WS             Hungarian-Technical, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Hungarian_Technical_CS_AS_KS             Hungarian-Technical, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Hungarian_Technical_CS_AS_KS_WS             Hungarian-Technical, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Icelandic_BIN                     Icelandic, binary sort
Icelandic_BIN2                     Icelandic, binary code point comparison sort
Icelandic_CI_AI                     Icelandic, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Icelandic_CI_AI_WS                 Icelandic, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Icelandic_CI_AI_KS                 Icelandic, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Icelandic_CI_AI_KS_WS                 Icelandic, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Icelandic_CI_AS                     Icelandic, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Icelandic_CI_AS_WS                 Icelandic, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Icelandic_CI_AS_KS                 Icelandic, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Icelandic_CI_AS_KS_WS                 Icelandic, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Icelandic_CS_AI                     Icelandic, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Icelandic_CS_AI_WS                 Icelandic, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Icelandic_CS_AI_KS                 Icelandic, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Icelandic_CS_AI_KS_WS                 Icelandic, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Icelandic_CS_AS                     Icelandic, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Icelandic_CS_AS_WS                 Icelandic, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Icelandic_CS_AS_KS                 Icelandic, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Icelandic_CS_AS_KS_WS                 Icelandic, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Indic_General_90_BIN                 Indic-General-90, binary sort
Indic_General_90_BIN2                 Indic-General-90, binary code point comparison sort
Indic_General_90_CI_AI                 Indic-General-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Indic_General_90_CI_AI_WS             Indic-General-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Indic_General_90_CI_AI_KS             Indic-General-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Indic_General_90_CI_AI_KS_WS             Indic-General-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Indic_General_90_CI_AS                 Indic-General-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Indic_General_90_CI_AS_WS             Indic-General-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Indic_General_90_CI_AS_KS             Indic-General-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Indic_General_90_CI_AS_KS_WS             Indic-General-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Indic_General_90_CS_AI                 Indic-General-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Indic_General_90_CS_AI_WS             Indic-General-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Indic_General_90_CS_AI_KS             Indic-General-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Indic_General_90_CS_AI_KS_WS             Indic-General-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Indic_General_90_CS_AS                 Indic-General-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Indic_General_90_CS_AS_WS             Indic-General-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Indic_General_90_CS_AS_KS             Indic-General-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Indic_General_90_CS_AS_KS_WS             Indic-General-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Japanese_BIN                     Japanese, binary sort
Japanese_BIN2                     Japanese, binary code point comparison sort
Japanese_CI_AI                     Japanese, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Japanese_CI_AI_WS                 Japanese, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Japanese_CI_AI_KS                 Japanese, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Japanese_CI_AI_KS_WS                 Japanese, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Japanese_CI_AS                     Japanese, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Japanese_CI_AS_WS                 Japanese, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Japanese_CI_AS_KS                 Japanese, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Japanese_CI_AS_KS_WS                 Japanese, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Japanese_CS_AI                     Japanese, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Japanese_CS_AI_WS                 Japanese, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Japanese_CS_AI_KS                 Japanese, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Japanese_CS_AI_KS_WS                 Japanese, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Japanese_CS_AS                     Japanese, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Japanese_CS_AS_WS                 Japanese, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Japanese_CS_AS_KS                 Japanese, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Japanese_CS_AS_KS_WS                 Japanese, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Japanese_90_BIN                     Japanese-90, binary sort
Japanese_90_BIN2                 Japanese-90, binary code point comparison sort
Japanese_90_CI_AI                 Japanese-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Japanese_90_CI_AI_WS                 Japanese-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Japanese_90_CI_AI_KS                 Japanese-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Japanese_90_CI_AI_KS_WS                 Japanese-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Japanese_90_CI_AS                 Japanese-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Japanese_90_CI_AS_WS                 Japanese-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Japanese_90_CI_AS_KS                 Japanese-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Japanese_90_CI_AS_KS_WS                 Japanese-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Japanese_90_CS_AI                 Japanese-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Japanese_90_CS_AI_WS                 Japanese-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Japanese_90_CS_AI_KS                 Japanese-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Japanese_90_CS_AI_KS_WS                 Japanese-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Japanese_90_CS_AS                 Japanese-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Japanese_90_CS_AS_WS                 Japanese-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Japanese_90_CS_AS_KS                 Japanese-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Japanese_90_CS_AS_KS_WS                 Japanese-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Japanese_Unicode_BIN                 Japanese-Unicode, binary sort
Japanese_Unicode_BIN2                 Japanese-Unicode, binary code point comparison sort
Japanese_Unicode_CI_AI                 Japanese-Unicode, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Japanese_Unicode_CI_AI_WS             Japanese-Unicode, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Japanese_Unicode_CI_AI_KS             Japanese-Unicode, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Japanese_Unicode_CI_AI_KS_WS             Japanese-Unicode, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Japanese_Unicode_CI_AS                 Japanese-Unicode, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Japanese_Unicode_CI_AS_WS             Japanese-Unicode, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Japanese_Unicode_CI_AS_KS             Japanese-Unicode, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Japanese_Unicode_CI_AS_KS_WS             Japanese-Unicode, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Japanese_Unicode_CS_AI                 Japanese-Unicode, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Japanese_Unicode_CS_AI_WS             Japanese-Unicode, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Japanese_Unicode_CS_AI_KS             Japanese-Unicode, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Japanese_Unicode_CS_AI_KS_WS             Japanese-Unicode, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Japanese_Unicode_CS_AS                 Japanese-Unicode, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Japanese_Unicode_CS_AS_WS             Japanese-Unicode, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Japanese_Unicode_CS_AS_KS             Japanese-Unicode, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Japanese_Unicode_CS_AS_KS_WS             Japanese-Unicode, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Kazakh_90_BIN                     Kazakh-90, binary sort
Kazakh_90_BIN2                     Kazakh-90, binary code point comparison sort
Kazakh_90_CI_AI                     Kazakh-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Kazakh_90_CI_AI_WS                 Kazakh-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Kazakh_90_CI_AI_KS                 Kazakh-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Kazakh_90_CI_AI_KS_WS                 Kazakh-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Kazakh_90_CI_AS                     Kazakh-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Kazakh_90_CI_AS_WS                 Kazakh-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Kazakh_90_CI_AS_KS                 Kazakh-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Kazakh_90_CI_AS_KS_WS                 Kazakh-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Kazakh_90_CS_AI                     Kazakh-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Kazakh_90_CS_AI_WS                 Kazakh-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Kazakh_90_CS_AI_KS                 Kazakh-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Kazakh_90_CS_AI_KS_WS                 Kazakh-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Kazakh_90_CS_AS                     Kazakh-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Kazakh_90_CS_AS_WS                 Kazakh-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Kazakh_90_CS_AS_KS                 Kazakh-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Kazakh_90_CS_AS_KS_WS                 Kazakh-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Korean_90_BIN                     Korean-90, binary sort
Korean_90_BIN2                     Korean-90, binary code point comparison sort
Korean_90_CI_AI                     Korean-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Korean_90_CI_AI_WS                 Korean-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Korean_90_CI_AI_KS                 Korean-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Korean_90_CI_AI_KS_WS                 Korean-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Korean_90_CI_AS                     Korean-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Korean_90_CI_AS_WS                 Korean-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Korean_90_CI_AS_KS                 Korean-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Korean_90_CI_AS_KS_WS                 Korean-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Korean_90_CS_AI                     Korean-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Korean_90_CS_AI_WS                 Korean-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Korean_90_CS_AI_KS                 Korean-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Korean_90_CS_AI_KS_WS                 Korean-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Korean_90_CS_AS                     Korean-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Korean_90_CS_AS_WS                 Korean-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Korean_90_CS_AS_KS                 Korean-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Korean_90_CS_AS_KS_WS                 Korean-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Korean_Wansung_BIN                 Korean-Wansung, binary sort
Korean_Wansung_BIN2                 Korean-Wansung, binary code point comparison sort
Korean_Wansung_CI_AI                 Korean-Wansung, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Korean_Wansung_CI_AI_WS                 Korean-Wansung, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Korean_Wansung_CI_AI_KS                 Korean-Wansung, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Korean_Wansung_CI_AI_KS_WS             Korean-Wansung, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Korean_Wansung_CI_AS                 Korean-Wansung, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Korean_Wansung_CI_AS_WS                 Korean-Wansung, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Korean_Wansung_CI_AS_KS                 Korean-Wansung, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Korean_Wansung_CI_AS_KS_WS             Korean-Wansung, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Korean_Wansung_CS_AI                 Korean-Wansung, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Korean_Wansung_CS_AI_WS                 Korean-Wansung, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Korean_Wansung_CS_AI_KS                 Korean-Wansung, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Korean_Wansung_CS_AI_KS_WS             Korean-Wansung, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Korean_Wansung_CS_AS                 Korean-Wansung, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Korean_Wansung_CS_AS_WS                 Korean-Wansung, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Korean_Wansung_CS_AS_KS                 Korean-Wansung, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Korean_Wansung_CS_AS_KS_WS             Korean-Wansung, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Latin1_General_BIN                 Latin1-General, binary sort
Latin1_General_BIN2                 Latin1-General, binary code point comparison sort
Latin1_General_CI_AI                 Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Latin1_General_CI_AI_WS                 Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Latin1_General_CI_AI_KS                 Latin1-General, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Latin1_General_CI_AI_KS_WS             Latin1-General, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Latin1_General_CI_AS                 Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Latin1_General_CI_AS_WS                 Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Latin1_General_CI_AS_KS                 Latin1-General, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Latin1_General_CI_AS_KS_WS             Latin1-General, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Latin1_General_CS_AI                 Latin1-General, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Latin1_General_CS_AI_WS                 Latin1-General, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Latin1_General_CS_AI_KS                 Latin1-General, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Latin1_General_CS_AI_KS_WS             Latin1-General, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Latin1_General_CS_AS                 Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Latin1_General_CS_AS_WS                 Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Latin1_General_CS_AS_KS                 Latin1-General, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Latin1_General_CS_AS_KS_WS             Latin1-General, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Latvian_BIN                     Latvian, binary sort
Latvian_BIN2                     Latvian, binary code point comparison sort
Latvian_CI_AI                     Latvian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Latvian_CI_AI_WS                 Latvian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Latvian_CI_AI_KS                 Latvian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Latvian_CI_AI_KS_WS                 Latvian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Latvian_CI_AS                     Latvian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Latvian_CI_AS_WS                 Latvian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Latvian_CI_AS_KS                 Latvian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Latvian_CI_AS_KS_WS                 Latvian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Latvian_CS_AI                     Latvian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Latvian_CS_AI_WS                 Latvian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Latvian_CS_AI_KS                 Latvian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Latvian_CS_AI_KS_WS                 Latvian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Latvian_CS_AS                     Latvian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Latvian_CS_AS_WS                 Latvian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Latvian_CS_AS_KS                 Latvian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Latvian_CS_AS_KS_WS                 Latvian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Lithuanian_BIN                     Lithuanian, binary sort
Lithuanian_BIN2                     Lithuanian, binary code point comparison sort
Lithuanian_CI_AI                 Lithuanian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Lithuanian_CI_AI_WS                 Lithuanian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Lithuanian_CI_AI_KS                 Lithuanian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Lithuanian_CI_AI_KS_WS                 Lithuanian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Lithuanian_CI_AS                 Lithuanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Lithuanian_CI_AS_WS                 Lithuanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Lithuanian_CI_AS_KS                 Lithuanian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Lithuanian_CI_AS_KS_WS                 Lithuanian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Lithuanian_CS_AI                 Lithuanian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Lithuanian_CS_AI_WS                 Lithuanian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Lithuanian_CS_AI_KS                 Lithuanian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Lithuanian_CS_AI_KS_WS                 Lithuanian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Lithuanian_CS_AS                 Lithuanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Lithuanian_CS_AS_WS                 Lithuanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Lithuanian_CS_AS_KS                 Lithuanian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Lithuanian_CS_AS_KS_WS                 Lithuanian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Macedonian_FYROM_90_BIN                 Macedonian-FYROM-90, binary sort
Macedonian_FYROM_90_BIN2             Macedonian-FYROM-90, binary code point comparison sort
Macedonian_FYROM_90_CI_AI             Macedonian-FYROM-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Macedonian_FYROM_90_CI_AI_WS             Macedonian-FYROM-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Macedonian_FYROM_90_CI_AI_KS             Macedonian-FYROM-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Macedonian_FYROM_90_CI_AI_KS_WS             Macedonian-FYROM-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Macedonian_FYROM_90_CI_AS             Macedonian-FYROM-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Macedonian_FYROM_90_CI_AS_WS             Macedonian-FYROM-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Macedonian_FYROM_90_CI_AS_KS             Macedonian-FYROM-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Macedonian_FYROM_90_CI_AS_KS_WS             Macedonian-FYROM-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Macedonian_FYROM_90_CS_AI             Macedonian-FYROM-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Macedonian_FYROM_90_CS_AI_WS             Macedonian-FYROM-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Macedonian_FYROM_90_CS_AI_KS             Macedonian-FYROM-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Macedonian_FYROM_90_CS_AI_KS_WS             Macedonian-FYROM-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Macedonian_FYROM_90_CS_AS             Macedonian-FYROM-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Macedonian_FYROM_90_CS_AS_WS             Macedonian-FYROM-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Macedonian_FYROM_90_CS_AS_KS             Macedonian-FYROM-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Macedonian_FYROM_90_CS_AS_KS_WS             Macedonian-FYROM-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Modern_Spanish_BIN                 Modern-Spanish, binary sort
Modern_Spanish_BIN2                 Modern-Spanish, binary code point comparison sort
Modern_Spanish_CI_AI                 Modern-Spanish, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Modern_Spanish_CI_AI_WS                 Modern-Spanish, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Modern_Spanish_CI_AI_KS                 Modern-Spanish, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Modern_Spanish_CI_AI_KS_WS             Modern-Spanish, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Modern_Spanish_CI_AS                 Modern-Spanish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Modern_Spanish_CI_AS_WS                 Modern-Spanish, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Modern_Spanish_CI_AS_KS                 Modern-Spanish, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Modern_Spanish_CI_AS_KS_WS             Modern-Spanish, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Modern_Spanish_CS_AI                 Modern-Spanish, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Modern_Spanish_CS_AI_WS                 Modern-Spanish, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Modern_Spanish_CS_AI_KS                 Modern-Spanish, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Modern_Spanish_CS_AI_KS_WS             Modern-Spanish, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Modern_Spanish_CS_AS                 Modern-Spanish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Modern_Spanish_CS_AS_WS                 Modern-Spanish, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Modern_Spanish_CS_AS_KS                 Modern-Spanish, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Modern_Spanish_CS_AS_KS_WS             Modern-Spanish, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Polish_BIN                     Polish, binary sort
Polish_BIN2                     Polish, binary code point comparison sort
Polish_CI_AI                     Polish, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Polish_CI_AI_WS                     Polish, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Polish_CI_AI_KS                     Polish, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Polish_CI_AI_KS_WS                 Polish, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Polish_CI_AS                     Polish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Polish_CI_AS_WS                     Polish, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Polish_CI_AS_KS                     Polish, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Polish_CI_AS_KS_WS                 Polish, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Polish_CS_AI                     Polish, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Polish_CS_AI_WS                     Polish, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Polish_CS_AI_KS                     Polish, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Polish_CS_AI_KS_WS                 Polish, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Polish_CS_AS                     Polish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Polish_CS_AS_WS                     Polish, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Polish_CS_AS_KS                     Polish, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Polish_CS_AS_KS_WS                 Polish, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Romanian_BIN                     Romanian, binary sort
Romanian_BIN2                     Romanian, binary code point comparison sort
Romanian_CI_AI                     Romanian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Romanian_CI_AI_WS                 Romanian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Romanian_CI_AI_KS                 Romanian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Romanian_CI_AI_KS_WS                 Romanian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Romanian_CI_AS                     Romanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Romanian_CI_AS_WS                 Romanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Romanian_CI_AS_KS                 Romanian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Romanian_CI_AS_KS_WS                 Romanian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Romanian_CS_AI                     Romanian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Romanian_CS_AI_WS                 Romanian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Romanian_CS_AI_KS                 Romanian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Romanian_CS_AI_KS_WS                 Romanian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Romanian_CS_AS                     Romanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Romanian_CS_AS_WS                 Romanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Romanian_CS_AS_KS                 Romanian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Romanian_CS_AS_KS_WS                 Romanian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Slovak_BIN                     Slovak, binary sort
Slovak_BIN2                     Slovak, binary code point comparison sort
Slovak_CI_AI                     Slovak, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Slovak_CI_AI_WS                     Slovak, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Slovak_CI_AI_KS                     Slovak, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Slovak_CI_AI_KS_WS                 Slovak, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Slovak_CI_AS                     Slovak, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Slovak_CI_AS_WS                     Slovak, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Slovak_CI_AS_KS                     Slovak, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Slovak_CI_AS_KS_WS                 Slovak, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Slovak_CS_AI                     Slovak, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Slovak_CS_AI_WS                     Slovak, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Slovak_CS_AI_KS                     Slovak, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Slovak_CS_AI_KS_WS                 Slovak, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Slovak_CS_AS                     Slovak, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Slovak_CS_AS_WS                     Slovak, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Slovak_CS_AS_KS                     Slovak, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Slovak_CS_AS_KS_WS                 Slovak, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Slovenian_BIN                     Slovenian, binary sort
Slovenian_BIN2                     Slovenian, binary code point comparison sort
Slovenian_CI_AI                     Slovenian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Slovenian_CI_AI_WS                 Slovenian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Slovenian_CI_AI_KS                 Slovenian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Slovenian_CI_AI_KS_WS                 Slovenian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Slovenian_CI_AS                     Slovenian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Slovenian_CI_AS_WS                 Slovenian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Slovenian_CI_AS_KS                 Slovenian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Slovenian_CI_AS_KS_WS                 Slovenian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Slovenian_CS_AI                     Slovenian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Slovenian_CS_AI_WS                 Slovenian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Slovenian_CS_AI_KS                 Slovenian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Slovenian_CS_AI_KS_WS                 Slovenian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Slovenian_CS_AS                     Slovenian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Slovenian_CS_AS_WS                 Slovenian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Slovenian_CS_AS_KS                 Slovenian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Slovenian_CS_AS_KS_WS                 Slovenian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Syriac_90_BIN                     Syriac-90, binary sort
Syriac_90_BIN2                     Syriac-90, binary code point comparison sort
Syriac_90_CI_AI                     Syriac-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Syriac_90_CI_AI_WS                 Syriac-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Syriac_90_CI_AI_KS                 Syriac-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Syriac_90_CI_AI_KS_WS                 Syriac-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Syriac_90_CI_AS                     Syriac-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Syriac_90_CI_AS_WS                 Syriac-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Syriac_90_CI_AS_KS                 Syriac-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Syriac_90_CI_AS_KS_WS                 Syriac-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Syriac_90_CS_AI                     Syriac-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Syriac_90_CS_AI_WS                 Syriac-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Syriac_90_CS_AI_KS                 Syriac-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Syriac_90_CS_AI_KS_WS                 Syriac-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Syriac_90_CS_AS                     Syriac-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Syriac_90_CS_AS_WS                 Syriac-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Syriac_90_CS_AS_KS                 Syriac-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Syriac_90_CS_AS_KS_WS                 Syriac-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Tatar_90_BIN                     Tatar-90, binary sort
Tatar_90_BIN2                     Tatar-90, binary code point comparison sort
Tatar_90_CI_AI                     Tatar-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Tatar_90_CI_AI_WS                 Tatar-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Tatar_90_CI_AI_KS                 Tatar-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Tatar_90_CI_AI_KS_WS                 Tatar-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Tatar_90_CI_AS                     Tatar-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Tatar_90_CI_AS_WS                 Tatar-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Tatar_90_CI_AS_KS                 Tatar-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Tatar_90_CI_AS_KS_WS                 Tatar-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Tatar_90_CS_AI                     Tatar-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Tatar_90_CS_AI_WS                 Tatar-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Tatar_90_CS_AI_KS                 Tatar-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Tatar_90_CS_AI_KS_WS                 Tatar-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Tatar_90_CS_AS                     Tatar-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Tatar_90_CS_AS_WS                 Tatar-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Tatar_90_CS_AS_KS                 Tatar-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Tatar_90_CS_AS_KS_WS                 Tatar-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Thai_BIN                     Thai, binary sort
Thai_BIN2                     Thai, binary code point comparison sort
Thai_CI_AI                     Thai, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Thai_CI_AI_WS                     Thai, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Thai_CI_AI_KS                     Thai, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Thai_CI_AI_KS_WS                 Thai, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Thai_CI_AS                     Thai, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Thai_CI_AS_WS                     Thai, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Thai_CI_AS_KS                     Thai, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Thai_CI_AS_KS_WS                 Thai, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Thai_CS_AI                     Thai, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Thai_CS_AI_WS                     Thai, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Thai_CS_AI_KS                     Thai, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Thai_CS_AI_KS_WS                 Thai, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Thai_CS_AS                     Thai, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Thai_CS_AS_WS                     Thai, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Thai_CS_AS_KS                     Thai, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Thai_CS_AS_KS_WS                 Thai, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Traditional_Spanish_BIN                 Traditional-Spanish, binary sort
Traditional_Spanish_BIN2             Traditional-Spanish, binary code point comparison sort
Traditional_Spanish_CI_AI             Traditional-Spanish, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Traditional_Spanish_CI_AI_WS             Traditional-Spanish, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Traditional_Spanish_CI_AI_KS             Traditional-Spanish, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Traditional_Spanish_CI_AI_KS_WS             Traditional-Spanish, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Traditional_Spanish_CI_AS             Traditional-Spanish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Traditional_Spanish_CI_AS_WS             Traditional-Spanish, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Traditional_Spanish_CI_AS_KS             Traditional-Spanish, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Traditional_Spanish_CI_AS_KS_WS             Traditional-Spanish, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Traditional_Spanish_CS_AI             Traditional-Spanish, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Traditional_Spanish_CS_AI_WS             Traditional-Spanish, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Traditional_Spanish_CS_AI_KS             Traditional-Spanish, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Traditional_Spanish_CS_AI_KS_WS             Traditional-Spanish, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Traditional_Spanish_CS_AS             Traditional-Spanish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Traditional_Spanish_CS_AS_WS             Traditional-Spanish, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Traditional_Spanish_CS_AS_KS             Traditional-Spanish, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Traditional_Spanish_CS_AS_KS_WS             Traditional-Spanish, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Turkish_BIN                     Turkish, binary sort
Turkish_BIN2                     Turkish, binary code point comparison sort
Turkish_CI_AI                     Turkish, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Turkish_CI_AI_WS                 Turkish, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Turkish_CI_AI_KS                 Turkish, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Turkish_CI_AI_KS_WS                 Turkish, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Turkish_CI_AS                     Turkish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Turkish_CI_AS_WS                 Turkish, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Turkish_CI_AS_KS                 Turkish, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Turkish_CI_AS_KS_WS                 Turkish, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Turkish_CS_AI                     Turkish, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Turkish_CS_AI_WS                 Turkish, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Turkish_CS_AI_KS                 Turkish, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Turkish_CS_AI_KS_WS                 Turkish, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Turkish_CS_AS                     Turkish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Turkish_CS_AS_WS                 Turkish, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Turkish_CS_AS_KS                 Turkish, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Turkish_CS_AS_KS_WS                 Turkish, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Ukrainian_BIN                     Ukrainian, binary sort
Ukrainian_BIN2                     Ukrainian, binary code point comparison sort
Ukrainian_CI_AI                     Ukrainian, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Ukrainian_CI_AI_WS                 Ukrainian, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Ukrainian_CI_AI_KS                 Ukrainian, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Ukrainian_CI_AI_KS_WS                 Ukrainian, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Ukrainian_CI_AS                     Ukrainian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Ukrainian_CI_AS_WS                 Ukrainian, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Ukrainian_CI_AS_KS                 Ukrainian, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Ukrainian_CI_AS_KS_WS                 Ukrainian, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Ukrainian_CS_AI                     Ukrainian, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Ukrainian_CS_AI_WS                 Ukrainian, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Ukrainian_CS_AI_KS                 Ukrainian, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Ukrainian_CS_AI_KS_WS                 Ukrainian, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Ukrainian_CS_AS                     Ukrainian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Ukrainian_CS_AS_WS                 Ukrainian, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Ukrainian_CS_AS_KS                 Ukrainian, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Ukrainian_CS_AS_KS_WS                 Ukrainian, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Uzbek_Latin_90_BIN                 Uzbek-Latin-90, binary sort
Uzbek_Latin_90_BIN2                 Uzbek-Latin-90, binary code point comparison sort
Uzbek_Latin_90_CI_AI                 Uzbek-Latin-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Uzbek_Latin_90_CI_AI_WS                 Uzbek-Latin-90, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Uzbek_Latin_90_CI_AI_KS                 Uzbek-Latin-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Uzbek_Latin_90_CI_AI_KS_WS             Uzbek-Latin-90, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Uzbek_Latin_90_CI_AS                 Uzbek-Latin-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Uzbek_Latin_90_CI_AS_WS                 Uzbek-Latin-90, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Uzbek_Latin_90_CI_AS_KS                 Uzbek-Latin-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Uzbek_Latin_90_CI_AS_KS_WS             Uzbek-Latin-90, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Uzbek_Latin_90_CS_AI                 Uzbek-Latin-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Uzbek_Latin_90_CS_AI_WS                 Uzbek-Latin-90, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Uzbek_Latin_90_CS_AI_KS                 Uzbek-Latin-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Uzbek_Latin_90_CS_AI_KS_WS             Uzbek-Latin-90, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Uzbek_Latin_90_CS_AS                 Uzbek-Latin-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Uzbek_Latin_90_CS_AS_WS                 Uzbek-Latin-90, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Uzbek_Latin_90_CS_AS_KS                 Uzbek-Latin-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Uzbek_Latin_90_CS_AS_KS_WS             Uzbek-Latin-90, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Vietnamese_BIN                     Vietnamese, binary sort
Vietnamese_BIN2                     Vietnamese, binary code point comparison sort
Vietnamese_CI_AI                 Vietnamese, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Vietnamese_CI_AI_WS                 Vietnamese, case-insensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Vietnamese_CI_AI_KS                 Vietnamese, case-insensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Vietnamese_CI_AI_KS_WS                 Vietnamese, case-insensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Vietnamese_CI_AS                 Vietnamese, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Vietnamese_CI_AS_WS                 Vietnamese, case-insensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Vietnamese_CI_AS_KS                 Vietnamese, case-insensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Vietnamese_CI_AS_KS_WS                 Vietnamese, case-insensitive, accent-sensitive, kanatype-sensitive, width-sensitive
Vietnamese_CS_AI                 Vietnamese, case-sensitive, accent-insensitive, kanatype-insensitive, width-insensitive
Vietnamese_CS_AI_WS                 Vietnamese, case-sensitive, accent-insensitive, kanatype-insensitive, width-sensitive
Vietnamese_CS_AI_KS                 Vietnamese, case-sensitive, accent-insensitive, kanatype-sensitive, width-insensitive
Vietnamese_CS_AI_KS_WS                 Vietnamese, case-sensitive, accent-insensitive, kanatype-sensitive, width-sensitive
Vietnamese_CS_AS                 Vietnamese, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive
Vietnamese_CS_AS_WS                 Vietnamese, case-sensitive, accent-sensitive, kanatype-insensitive, width-sensitive
Vietnamese_CS_AS_KS                 Vietnamese, case-sensitive, accent-sensitive, kanatype-sensitive, width-insensitive
Vietnamese_CS_AS_KS_WS                 Vietnamese, case-sensitive, accent-sensitive, kanatype-sensitive, width-sensitive
SQL_1xCompat_CP850_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 49 on Code Page 850 for non-Unicode Data
SQL_AltDiction_CP850_CI_AI             Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 57 on Code Page 850 for non-Unicode Data
SQL_AltDiction_CP850_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 61 on Code Page 850 for non-Unicode Data
SQL_AltDiction_CP850_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 55 on Code Page 850 for non-Unicode Data
SQL_AltDiction_Pref_CP850_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 56 on Code Page 850 for non-Unicode Data
SQL_AltDiction2_CP1253_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 122 on Code Page 1253 for non-Unicode Data
SQL_Croatian_CP1250_CI_AS             Croatian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 92 on Code Page 1250 for non-Unicode Data
SQL_Croatian_CP1250_CS_AS             Croatian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 91 on Code Page 1250 for non-Unicode Data
SQL_Czech_CP1250_CI_AS                 Czech, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 84 on Code Page 1250 for non-Unicode Data
SQL_Czech_CP1250_CS_AS                 Czech, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 83 on Code Page 1250 for non-Unicode Data
SQL_Danish_Pref_CP1_CI_AS             Danish-Norwegian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 183 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC037_CP1_CS_AS                 Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 210 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC273_CP1_CS_AS                 German-PhoneBook, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 211 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC277_CP1_CS_AS                 Danish-Norwegian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 212 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC278_CP1_CS_AS                 Finnish-Swedish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 213 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC280_CP1_CS_AS                 Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 214 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC284_CP1_CS_AS                 Modern-Spanish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 215 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC285_CP1_CS_AS                 Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 216 on Code Page 1252 for non-Unicode Data
SQL_EBCDIC297_CP1_CS_AS                 French, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 217 on Code Page 1252 for non-Unicode Data
SQL_Estonian_CP1257_CI_AS             Estonian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 156 on Code Page 1257 for non-Unicode Data
SQL_Estonian_CP1257_CS_AS             Estonian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 155 on Code Page 1257 for non-Unicode Data
SQL_Hungarian_CP1250_CI_AS             Hungarian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 86 on Code Page 1250 for non-Unicode Data
SQL_Hungarian_CP1250_CS_AS             Hungarian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 85 on Code Page 1250 for non-Unicode Data
SQL_Icelandic_Pref_CP1_CI_AS             Icelandic, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 186 on Code Page 1252 for non-Unicode Data
SQL_Latin1_General_CP1_CI_AI             Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 54 on Code Page 1252 for non-Unicode Data
SQL_Latin1_General_CP1_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 52 on Code Page 1252 for non-Unicode Data
SQL_Latin1_General_CP1_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 51 on Code Page 1252 for non-Unicode Data
SQL_Latin1_General_CP1250_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 82 on Code Page 1250 for non-Unicode Data
SQL_Latin1_General_CP1250_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 81 on Code Page 1250 for non-Unicode Data
SQL_Latin1_General_CP1251_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 106 on Code Page 1251 for non-Unicode Data
SQL_Latin1_General_CP1251_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 105 on Code Page 1251 for non-Unicode Data
SQL_Latin1_General_CP1253_CI_AI             Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 124 on Code Page 1253 for non-Unicode Data
SQL_Latin1_General_CP1253_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 114 on Code Page 1253 for non-Unicode Data
SQL_Latin1_General_CP1253_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 113 on Code Page 1253 for non-Unicode Data
SQL_Latin1_General_CP1254_CI_AS             Turkish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 130 on Code Page 1254 for non-Unicode Data
SQL_Latin1_General_CP1254_CS_AS             Turkish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 129 on Code Page 1254 for non-Unicode Data
SQL_Latin1_General_CP1255_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 138 on Code Page 1255 for non-Unicode Data
SQL_Latin1_General_CP1255_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 137 on Code Page 1255 for non-Unicode Data
SQL_Latin1_General_CP1256_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 146 on Code Page 1256 for non-Unicode Data
SQL_Latin1_General_CP1256_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 145 on Code Page 1256 for non-Unicode Data
SQL_Latin1_General_CP1257_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 154 on Code Page 1257 for non-Unicode Data
SQL_Latin1_General_CP1257_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 153 on Code Page 1257 for non-Unicode Data
SQL_Latin1_General_CP437_BIN             Latin1-General, binary sort for Unicode Data, SQL Server Sort Order 30 on Code Page 437 for non-Unicode Data
SQL_Latin1_General_CP437_BIN2             Latin1-General, binary code point comparison sort for Unicode Data, SQL Server Sort Order 30 on Code Page 437 for non-Unicode Data
SQL_Latin1_General_CP437_CI_AI             Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 34 on Code Page 437 for non-Unicode Data
SQL_Latin1_General_CP437_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 32 on Code Page 437 for non-Unicode Data
SQL_Latin1_General_CP437_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 31 on Code Page 437 for non-Unicode Data
SQL_Latin1_General_CP850_BIN             Latin1-General, binary sort for Unicode Data, SQL Server Sort Order 40 on Code Page 850 for non-Unicode Data
SQL_Latin1_General_CP850_BIN2             Latin1-General, binary code point comparison sort for Unicode Data, SQL Server Sort Order 40 on Code Page 850 for non-Unicode Data
SQL_Latin1_General_CP850_CI_AI             Latin1-General, case-insensitive, accent-insensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 44 on Code Page 850 for non-Unicode Data
SQL_Latin1_General_CP850_CI_AS             Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 42 on Code Page 850 for non-Unicode Data
SQL_Latin1_General_CP850_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 41 on Code Page 850 for non-Unicode Data
SQL_Latin1_General_Pref_CP1_CI_AS         Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 53 on Code Page 1252 for non-Unicode Data
SQL_Latin1_General_Pref_CP437_CI_AS         Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 33 on Code Page 437 for non-Unicode Data
SQL_Latin1_General_Pref_CP850_CI_AS         Latin1-General, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 43 on Code Page 850 for non-Unicode Data
SQL_Latvian_CP1257_CI_AS             Latvian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 158 on Code Page 1257 for non-Unicode Data
SQL_Latvian_CP1257_CS_AS             Latvian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 157 on Code Page 1257 for non-Unicode Data
SQL_Lithuanian_CP1257_CI_AS             Lithuanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 160 on Code Page 1257 for non-Unicode Data
SQL_Lithuanian_CP1257_CS_AS             Lithuanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 159 on Code Page 1257 for non-Unicode Data
SQL_MixDiction_CP1253_CS_AS             Latin1-General, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 120 on Code Page 1253 for non-Unicode Data
SQL_Polish_CP1250_CI_AS                 Polish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 88 on Code Page 1250 for non-Unicode Data
SQL_Polish_CP1250_CS_AS                 Polish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 87 on Code Page 1250 for non-Unicode Data
SQL_Romanian_CP1250_CI_AS             Romanian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 90 on Code Page 1250 for non-Unicode Data
SQL_Romanian_CP1250_CS_AS             Romanian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 89 on Code Page 1250 for non-Unicode Data
SQL_Scandinavian_CP850_CI_AS             Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 60 on Code Page 850 for non-Unicode Data
SQL_Scandinavian_CP850_CS_AS             Finnish-Swedish, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 59 on Code Page 850 for non-Unicode Data
SQL_Scandinavian_Pref_CP850_CI_AS         Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 58 on Code Page 850 for non-Unicode Data
SQL_Slovak_CP1250_CI_AS                 Slovak, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 94 on Code Page 1250 for non-Unicode Data
SQL_Slovak_CP1250_CS_AS                 Slovak, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 93 on Code Page 1250 for non-Unicode Data
SQL_Slovenian_CP1250_CI_AS             Slovenian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 96 on Code Page 1250 for non-Unicode Data
SQL_Slovenian_CP1250_CS_AS             Slovenian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 95 on Code Page 1250 for non-Unicode Data
SQL_SwedishPhone_Pref_CP1_CI_AS             Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 184 on Code Page 1252 for non-Unicode Data
SQL_SwedishStd_Pref_CP1_CI_AS             Finnish-Swedish, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 185 on Code Page 1252 for non-Unicode Data
SQL_Ukrainian_CP1251_CI_AS             Ukrainian, case-insensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 108 on Code Page 1251 for non-Unicode Data
SQL_Ukrainian_CP1251_CS_AS             Ukrainian, case-sensitive, accent-sensitive, kanatype-insensitive, width-insensitive for Unicode Data, SQL Server Sort Order 107 on Code Page 1251 for non-Unicode Data

<?php
$lab->printFooter();
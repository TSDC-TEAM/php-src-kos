--TEST--
Test get_html_translation_table() function: htmlentities/HTML 4/ISO-8859-1 (bug #64011)
--SKIPIF--
<?php if (PHP_OS_FAMILY == "KOS") die("skip KOS failed test"); ?>
--FILE--
<?php

function so($a,$b) { return ord($a) - ord($b); }

$table = HTML_ENTITIES;
$tt = get_html_translation_table($table, ENT_COMPAT, "ISO-8859-1");
uksort( $tt, 'so' );
var_dump( count($tt) );
print_r( $tt );
echo "Done\n";

?>
--EXPECT--
int(100)
Array
(
    ["] => &quot;
    [&] => &amp;
    [<] => &lt;
    [>] => &gt;
    [�] => &nbsp;
    [�] => &iexcl;
    [�] => &cent;
    [�] => &pound;
    [�] => &curren;
    [�] => &yen;
    [�] => &brvbar;
    [�] => &sect;
    [�] => &uml;
    [�] => &copy;
    [�] => &ordf;
    [�] => &laquo;
    [�] => &not;
    [�] => &shy;
    [�] => &reg;
    [�] => &macr;
    [�] => &deg;
    [�] => &plusmn;
    [�] => &sup2;
    [�] => &sup3;
    [�] => &acute;
    [�] => &micro;
    [�] => &para;
    [�] => &middot;
    [�] => &cedil;
    [�] => &sup1;
    [�] => &ordm;
    [�] => &raquo;
    [�] => &frac14;
    [�] => &frac12;
    [�] => &frac34;
    [�] => &iquest;
    [�] => &Agrave;
    [�] => &Aacute;
    [�] => &Acirc;
    [�] => &Atilde;
    [�] => &Auml;
    [�] => &Aring;
    [�] => &AElig;
    [�] => &Ccedil;
    [�] => &Egrave;
    [�] => &Eacute;
    [�] => &Ecirc;
    [�] => &Euml;
    [�] => &Igrave;
    [�] => &Iacute;
    [�] => &Icirc;
    [�] => &Iuml;
    [�] => &ETH;
    [�] => &Ntilde;
    [�] => &Ograve;
    [�] => &Oacute;
    [�] => &Ocirc;
    [�] => &Otilde;
    [�] => &Ouml;
    [�] => &times;
    [�] => &Oslash;
    [�] => &Ugrave;
    [�] => &Uacute;
    [�] => &Ucirc;
    [�] => &Uuml;
    [�] => &Yacute;
    [�] => &THORN;
    [�] => &szlig;
    [�] => &agrave;
    [�] => &aacute;
    [�] => &acirc;
    [�] => &atilde;
    [�] => &auml;
    [�] => &aring;
    [�] => &aelig;
    [�] => &ccedil;
    [�] => &egrave;
    [�] => &eacute;
    [�] => &ecirc;
    [�] => &euml;
    [�] => &igrave;
    [�] => &iacute;
    [�] => &icirc;
    [�] => &iuml;
    [�] => &eth;
    [�] => &ntilde;
    [�] => &ograve;
    [�] => &oacute;
    [�] => &ocirc;
    [�] => &otilde;
    [�] => &ouml;
    [�] => &divide;
    [�] => &oslash;
    [�] => &ugrave;
    [�] => &uacute;
    [�] => &ucirc;
    [�] => &uuml;
    [�] => &yacute;
    [�] => &thorn;
    [�] => &yuml;
)
Done

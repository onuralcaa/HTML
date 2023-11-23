<?php

Translate::lookup();//statik ve sabit(const) ifadelere erişim.

class Translate
{
const ENGLISH = 0;
const SPANISH = 1;
const FRENCH = 2;
const GERMAN = 3;
// …
static function lookup()
{
echo self::SPANISH;//self anahtar kelimesi sabitleri referanslamak için kullanılır. Çift kolon ile birlikte kullanılır.
}
}
?>
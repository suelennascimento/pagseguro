<?php

namespace Hcode\PagSeguro;

class Config {
  
  const SANDBOX = true;

  const SANDBOX_EMAIL = "projetos.rio@yahoo.com";
  const PRODUCTION_EMAIL = "projetos.rio@yahoo.com";

  const SANDBOX_TOKEN = "9B0B9EC0DBB64AB7BE3073125CD3E832";
  const PRODUCTION_TOKEN = "00ac4103-72be-40ea-aeca-33a1fc66bbe15038070547759b7dfef593f545315f1cc16a-0a93-4373-bc62-a28259b9ab5d";

  const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
  const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

  const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

  const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";


 public static function getAuthentication():array 
 {

   if (Config::SANDBOX === true)
   {


   	return [
        "email"=>Config::SANDBOX_EMAIL,
        "token"=>Config::SANDBOX_TOKEN

   	];

   } else {

   	return [
       "email"=>Config::PRODUCTION_EMAIL,
       "token"=>Config::PRODUCTION_TOKEN
   	];
   }
 }

public static function getUrlSessions():string 
{

	return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
}

public static function getUrlJS()
{

	return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;
}

}

?>
<?php
/*
  ULTRACODEX PHP CORE °€° l_J J_Jz^²³
  "LOGIN & DASHBOARD"
  PHP EVAL & AJAX HACK
  ZERO OBJECT MODEL | Z=OM
  CORE Version 3.0 | 1.2022 STABLE
  "DEFINE, INIT AND LOAD CORE"
  Author: HACKBUGZ | Z0OM
*/

if((!defined('z'))){
  define('z',	'0');         // CONTROL VALUE, SECURE ALL LOCAL SCRIPTS
  
  $ERROR_REPORT = '1';      // 1/0 ENABLE/DISABLE CORE ERROR REPORT
  $CA1          = array();  // CORE ARRAY ADD LIST
  $CA1          =		
  [
     'lib'      => 	['1' ,'LAB'     ,'2.0' ,'10.2021']
    ,'secure'   => 	['0' ,'NOUSE'   ,'2.0' ,'10.2021']
    ,'cache'    => 	['1' ,'LAB'     ,'2.0' ,'10.2021']
    ,'charsec'  => 	['1' ,'STABLE'  ,'2.0' ,'10.2021']
    ,'time'     => 	['1' ,'STABLE'  ,'2.0' ,'10.2021']    
    ,'stamp'    => 	['1' ,'STABLE' 	,'2.0' ,'10.2021']    
    ,'randnum'  => 	['1' ,'STABLE' 	,'2.0' ,'10.2021']
    ,'hash'     => 	['1' ,'STABLE'  ,'2.0' ,'10.2021']
    ,'cook'     => 	['1' ,'HACK'    ,'2.0' ,'10.2021']
    ,'https'    => 	['0' ,'NOUSE'   ,'2.0' ,'10.2021']
    ,'dbmaria'  => 	['1' ,'LAB'     ,'2.0' ,'10.2021']
    ,'traffic'  => 	['0' ,'LAB'     ,'2.0' ,'10.2021']
  ];
	
  $CK           = '0';        // CA1 ARRAY KEY
  $CV           = '0';        // CA1 ARRAY VALUE
  $CP           = '0';        // INCLUDE-PATH ADD
  $CF           = '.php';     // FILE TYPE ADD
  $CSHA256      = '0';        // HASH ADD FILE SHA256
  $CSHA512      = '0';        // HASH ADD FILE SHA512
  $CC           = array();    // HASH CONTROL ADD
  $CM           = array();    // LIST LOADED ADD
  $CH           = array();    // CORE ADD HASH

  foreach($CA1 as $CK => $CV){
    if($CV[0] === '1'){
      try{
        $CP         = $CK.$CF;
        $CSHA256    = hash_file('sha256', stream_resolve_include_path($CP));
        $CSHA512    = hash_file('sha512', stream_resolve_include_path($CP));
        $CC[]       = [$CK,$CSHA256,$CSHA512];
        $CM[]       =  $CK;
        $CSHA256    = '0';
        $CSHA512    = '0';
        @include($CP);
      }
      catch (ERROR $EGM){
        if($ERROR_REPORT === '1'){
          print_r("CORE ADD <b>* $CP *</b> NOT FOUND OR ERROR IN SOURCE\n<br><pre>");
          #print_r($EGM);
        }
      exit;
      }
    }
  }

}

?>

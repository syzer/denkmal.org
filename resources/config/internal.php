<?php
// This is autogenerated config file. You should not change it manually.

return function (CM_Config_Node $config) {
    $config->CM_Mail->types = array();
    $config->CM_Mail->types[1] = 'CM_Mail';
    $config->CM_Mail->types[2] = 'CM_Mail_Welcome';
    $config->CM_Mail->types[38] = 'Admin_Mail_EventNotification';

    $config->CM_Action_Abstract->types = array();
    $config->CM_Action_Abstract->types[3] = 'CM_Action_Email';
    $config->CM_Action_Abstract->types[27] = 'Denkmal_Action_Message';

    $config->CM_Model_Abstract->types = array();
    $config->CM_Model_Abstract->types[5] = 'CM_Model_Language';
    $config->CM_Model_Abstract->types[6] = 'CM_Model_Location';
    $config->CM_Model_Abstract->types[7] = 'CM_Model_Splitfeature';
    $config->CM_Model_Abstract->types[8] = 'CM_Model_Splittest';
    $config->CM_Model_Abstract->types[9] = 'CM_Model_SplittestVariation';
    $config->CM_Model_Abstract->types[10] = 'CM_Model_User';
    $config->CM_Model_Abstract->types[11] = 'CM_Model_Splittest_RequestClient';
    $config->CM_Model_Abstract->types[12] = 'CM_Model_Splittest_User';
    $config->CM_Model_Abstract->types[13] = 'CM_Model_Stream_Publish';
    $config->CM_Model_Abstract->types[14] = 'CM_Model_Stream_Subscribe';
    $config->CM_Model_Abstract->types[15] = 'CM_Model_StreamChannel_Message';
    $config->CM_Model_Abstract->types[16] = 'CM_Model_StreamChannel_Video';
    $config->CM_Model_Abstract->types[17] = 'CM_Model_StreamChannel_Message_User';
    $config->CM_Model_Abstract->types[18] = 'CM_Model_StreamChannelArchive_Video';
    $config->CM_Model_Abstract->types[28] = 'Denkmal_Model_Event';
    $config->CM_Model_Abstract->types[29] = 'Denkmal_Model_Link';
    $config->CM_Model_Abstract->types[30] = 'Denkmal_Model_Message';
    $config->CM_Model_Abstract->types[31] = 'Denkmal_Model_Song';
    $config->CM_Model_Abstract->types[32] = 'Denkmal_Model_User';
    $config->CM_Model_Abstract->types[33] = 'Denkmal_Model_Venue';
    $config->CM_Model_Abstract->types[34] = 'Denkmal_Model_VenueAlias';
    $config->CM_Model_Abstract->types[37] = 'Denkmal_Model_MessageImage';
    $config->CM_Model_Abstract->types[39] = 'CM_Model_Location_City';
    $config->CM_Model_Abstract->types[40] = 'CM_Model_Location_Country';
    $config->CM_Model_Abstract->types[41] = 'CM_Model_Location_State';
    $config->CM_Model_Abstract->types[42] = 'CM_Model_Location_Zip';
    $config->CM_Model_Abstract->types[43] = 'CM_Model_LanguageKey';
    $config->CM_Model_Abstract->types[51] = 'Denkmal_Scraper_SourceResult';

    $config->CM_Paging_ContentList_Abstract->types = array();
    $config->CM_Paging_ContentList_Abstract->types[19] = 'CM_Paging_ContentList_Badwords';

    $config->CM_Paging_Log_Abstract->types = array();
    $config->CM_Paging_Log_Abstract->types[20] = 'CM_Paging_Log_Error';
    $config->CM_Paging_Log_Abstract->types[21] = 'CM_Paging_Log_Fatal';
    $config->CM_Paging_Log_Abstract->types[22] = 'CM_Paging_Log_JsError';
    $config->CM_Paging_Log_Abstract->types[23] = 'CM_Paging_Log_Mail';
    $config->CM_Paging_Log_Abstract->types[24] = 'CM_Paging_Log_Warn';

    $config->CM_Provision_Script_OptionBased->types = array();
    $config->CM_Provision_Script_OptionBased->types[52] = 'CM_Http_SetupScript';
    $config->CM_Provision_Script_OptionBased->types[53] = 'CM_App_SetupScript_Translations';
    $config->CM_Provision_Script_OptionBased->types[54] = 'CM_Elasticsearch_SetupScript';
    $config->CM_Provision_Script_OptionBased->types[55] = 'Denkmal_App_SetupScript_LoadLanguage';
    $config->CM_Provision_Script_OptionBased->types[56] = 'Denkmal_ExampleData_Users';

    $config->CM_Site_Abstract->types = array();
    $config->CM_Site_Abstract->types[35] = 'Denkmal_Site';
    $config->CM_Site_Abstract->types[36] = 'Admin_Site';

    $config->CM_Stream_Adapter_Abstract->types = array();
    $config->CM_Stream_Adapter_Abstract->types[25] = 'CM_Stream_Adapter_Message_SocketRedis';
    $config->CM_Stream_Adapter_Abstract->types[26] = 'CM_Stream_Adapter_Video_Wowza';

    $config->Denkmal_Scraper_Source_Abstract->types = array();
    $config->Denkmal_Scraper_Source_Abstract->types[45] = 'Denkmal_Scraper_Source_Fingerzeig';
    $config->Denkmal_Scraper_Source_Abstract->types[46] = 'Denkmal_Scraper_Source_Hinterhof';
    $config->Denkmal_Scraper_Source_Abstract->types[47] = 'Denkmal_Scraper_Source_Kaschemme';
    $config->Denkmal_Scraper_Source_Abstract->types[48] = 'Denkmal_Scraper_Source_Lastfm';
    $config->Denkmal_Scraper_Source_Abstract->types[49] = 'Denkmal_Scraper_Source_Programmzeitung';
    $config->Denkmal_Scraper_Source_Abstract->types[50] = 'Denkmal_Scraper_Source_Saali';


    $config->CM_Mail->type = 1;
    $config->CM_Mail_Welcome->type = 2;
    $config->CM_Action_Email->type = 3;
    $config->CM_Model_Language->type = 5;
    $config->CM_Model_Location->type = 6;
    $config->CM_Model_Splitfeature->type = 7;
    $config->CM_Model_Splittest->type = 8;
    $config->CM_Model_SplittestVariation->type = 9;
    $config->CM_Model_User->type = 10;
    $config->CM_Model_Splittest_RequestClient->type = 11;
    $config->CM_Model_Splittest_User->type = 12;
    $config->CM_Model_Stream_Publish->type = 13;
    $config->CM_Model_Stream_Subscribe->type = 14;
    $config->CM_Model_StreamChannel_Message->type = 15;
    $config->CM_Model_StreamChannel_Video->type = 16;
    $config->CM_Model_StreamChannel_Message_User->type = 17;
    $config->CM_Model_StreamChannelArchive_Video->type = 18;
    $config->CM_Paging_ContentList_Badwords->type = 19;
    $config->CM_Paging_Log_Error->type = 20;
    $config->CM_Paging_Log_Fatal->type = 21;
    $config->CM_Paging_Log_JsError->type = 22;
    $config->CM_Paging_Log_Mail->type = 23;
    $config->CM_Paging_Log_Warn->type = 24;
    $config->CM_Stream_Adapter_Message_SocketRedis->type = 25;
    $config->CM_Stream_Adapter_Video_Wowza->type = 26;
    $config->Denkmal_Action_Message->type = 27;
    $config->Denkmal_Model_Event->type = 28;
    $config->Denkmal_Model_Link->type = 29;
    $config->Denkmal_Model_Message->type = 30;
    $config->Denkmal_Model_Song->type = 31;
    $config->Denkmal_Model_User->type = 32;
    $config->Denkmal_Model_Venue->type = 33;
    $config->Denkmal_Model_VenueAlias->type = 34;
    $config->Denkmal_Site->type = 35;
    $config->Admin_Site->type = 36;
    $config->Denkmal_Model_MessageImage->type = 37;
    $config->Admin_Mail_EventNotification->type = 38;
    $config->CM_Model_Location_City->type = 39;
    $config->CM_Model_Location_Country->type = 40;
    $config->CM_Model_Location_State->type = 41;
    $config->CM_Model_Location_Zip->type = 42;
    $config->CM_Model_LanguageKey->type = 43;
    $config->Denkmal_Scraper_Source_Fingerzeig->type = 45;
    $config->Denkmal_Scraper_Source_Hinterhof->type = 46;
    $config->Denkmal_Scraper_Source_Kaschemme->type = 47;
    $config->Denkmal_Scraper_Source_Lastfm->type = 48;
    $config->Denkmal_Scraper_Source_Programmzeitung->type = 49;
    $config->Denkmal_Scraper_Source_Saali->type = 50;
    $config->Denkmal_Scraper_SourceResult->type = 51;
    $config->CM_Http_SetupScript->type = 52;
    $config->CM_App_SetupScript_Translations->type = 53;
    $config->CM_Elasticsearch_SetupScript->type = 54;
    $config->Denkmal_App_SetupScript_LoadLanguage->type = 55;
    $config->Denkmal_ExampleData_Users->type = 56;

    $config->CM_Class_Abstract->typesMaxValue = 56;

    $config->CM_Action_Abstract->verbs = array();
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::CREATE] = 1;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::UPDATE] = 2;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::DELETE] = 3;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::ONLINE] = 4;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::OFFLINE] = 5;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::VIEW] = 6;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::VISIBLE] = 7;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::INVISIBLE] = 8;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::PUBLISH] = 9;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::UNPUBLISH] = 10;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::SUBSCRIBE] = 11;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::UNSUBSCRIBE] = 12;
    $config->CM_Action_Abstract->verbs[CM_Action_Abstract::SEND] = 13;
    $config->CM_Action_Abstract->verbsMaxValue = 13;
};

<?php
// This is autogenerated action verbs config file. You should not adjust changes manually.
// You should adjust TYPE constants and regenerate file using `config generate` command

$config->CM_Site_Abstract->types = array();
$config->CM_Site_Abstract->types[Denkmal_Site::TYPE] = 'Denkmal_Site'; // #100
$config->CM_Site_Abstract->types[Admin_Site::TYPE] = 'Admin_Site'; // #101
// Highest type used: #101

$config->CM_Action_Abstract->types = array();
$config->CM_Action_Abstract->types[CM_Action_Email::TYPE] = 'CM_Action_Email'; // #6
$config->CM_Action_Abstract->types[Denkmal_Action_Message::TYPE] = 'Denkmal_Action_Message'; // #100
// Highest type used: #100

$config->CM_Model_Abstract->types = array();
$config->CM_Model_Abstract->types[CM_Model_DeviceCapabilities::TYPE] = 'CM_Model_DeviceCapabilities'; // #20
$config->CM_Model_Abstract->types[CM_Model_Language::TYPE] = 'CM_Model_Language'; // #23
$config->CM_Model_Abstract->types[CM_Model_Location::TYPE] = 'CM_Model_Location'; // #24
$config->CM_Model_Abstract->types[CM_Model_Splitfeature::TYPE] = 'CM_Model_Splitfeature'; // #28
$config->CM_Model_Abstract->types[CM_Model_Splittest::TYPE] = 'CM_Model_Splittest'; // #16
$config->CM_Model_Abstract->types[CM_Model_SplittestVariation::TYPE] = 'CM_Model_SplittestVariation'; // #17
$config->CM_Model_Abstract->types[CM_Model_User::TYPE] = 'CM_Model_User'; // #13
$config->CM_Model_Abstract->types[CM_Model_Splittest_RequestClient::TYPE] = 'CM_Model_Splittest_RequestClient'; // #26
$config->CM_Model_Abstract->types[CM_Model_Splittest_User::TYPE] = 'CM_Model_Splittest_User'; // #27
$config->CM_Model_Abstract->types[CM_Model_Stream_Publish::TYPE] = 'CM_Model_Stream_Publish'; // #21
$config->CM_Model_Abstract->types[CM_Model_Stream_Subscribe::TYPE] = 'CM_Model_Stream_Subscribe'; // #22
$config->CM_Model_Abstract->types[CM_Model_StreamChannel_Message::TYPE] = 'CM_Model_StreamChannel_Message'; // #18
$config->CM_Model_Abstract->types[CM_Model_StreamChannel_Video::TYPE] = 'CM_Model_StreamChannel_Video'; // #19
$config->CM_Model_Abstract->types[CM_Model_StreamChannel_Message_User::TYPE] = 'CM_Model_StreamChannel_Message_User'; // #29
$config->CM_Model_Abstract->types[CM_Model_StreamChannelArchive_Video::TYPE] = 'CM_Model_StreamChannelArchive_Video'; // #25
$config->CM_Model_Abstract->types[Denkmal_Model_Event::TYPE] = 'Denkmal_Model_Event'; // #101
$config->CM_Model_Abstract->types[Denkmal_Model_Link::TYPE] = 'Denkmal_Model_Link'; // #105
$config->CM_Model_Abstract->types[Denkmal_Model_Message::TYPE] = 'Denkmal_Model_Message'; // #104
$config->CM_Model_Abstract->types[Denkmal_Model_Song::TYPE] = 'Denkmal_Model_Song'; // #102
$config->CM_Model_Abstract->types[Denkmal_Model_User::TYPE] = 'Denkmal_Model_User'; // #106
$config->CM_Model_Abstract->types[Denkmal_Model_Venue::TYPE] = 'Denkmal_Model_Venue'; // #100
$config->CM_Model_Abstract->types[Denkmal_Model_VenueAlias::TYPE] = 'Denkmal_Model_VenueAlias'; // #103
// Highest type used: #106

$config->CM_Model_ActionLimit_Abstract->types = array();
// Highest type used: #0

$config->CM_Model_Entity_Abstract->types = array();
// Highest type used: #0

$config->CM_Model_StreamChannel_Abstract->types = array();
$config->CM_Model_StreamChannel_Abstract->types[CM_Model_StreamChannel_Message::TYPE] = 'CM_Model_StreamChannel_Message'; // #18
$config->CM_Model_StreamChannel_Abstract->types[CM_Model_StreamChannel_Video::TYPE] = 'CM_Model_StreamChannel_Video'; // #19
$config->CM_Model_StreamChannel_Abstract->types[CM_Model_StreamChannel_Message_User::TYPE] = 'CM_Model_StreamChannel_Message_User'; // #29
// Highest type used: #29

$config->CM_Mail->types = array();
$config->CM_Mail->types[CM_Mail_Welcome::TYPE] = 'CM_Mail_Welcome'; // #2
// Highest type used: #2

$config->CM_Paging_Log_Abstract->types = array();
$config->CM_Paging_Log_Abstract->types[CM_Paging_Log_Error::TYPE] = 'CM_Paging_Log_Error'; // #1
$config->CM_Paging_Log_Abstract->types[CM_Paging_Log_Fatal::TYPE] = 'CM_Paging_Log_Fatal'; // #5
$config->CM_Paging_Log_Abstract->types[CM_Paging_Log_JsError::TYPE] = 'CM_Paging_Log_JsError'; // #6
$config->CM_Paging_Log_Abstract->types[CM_Paging_Log_Mail::TYPE] = 'CM_Paging_Log_Mail'; // #3
$config->CM_Paging_Log_Abstract->types[CM_Paging_Log_Warn::TYPE] = 'CM_Paging_Log_Warn'; // #4
// Highest type used: #6

$config->CM_Paging_ContentList_Abstract->types = array();
$config->CM_Paging_ContentList_Abstract->types[CM_Paging_ContentList_Badwords::TYPE] = 'CM_Paging_ContentList_Badwords'; // #2
// Highest type used: #2


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
$config->CM_Action_Abstract->verbsMaxValue = 12;


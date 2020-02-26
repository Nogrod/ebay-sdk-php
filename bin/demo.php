<?php
require __DIR__ . '/../vendor/autoload.php';

//vendor/bin/soap-client -vvv generate config/trading.yml src/Trading/Service --dest-class=Nogrod/eBaySDK/Trading/Service/TradingService
//vendor/bin/soap-client -vvv generate config/shopping.yml src/Shopping/Service --dest-class=Nogrod/eBaySDK/Shopping/Service/ShoppingService

use Nogrod\eBaySDK\Constants\SiteIds;
use Nogrod\eBaySDK\FileTransfer\Client\FileTransferClient;
use Nogrod\eBaySDK\FileTransfer\DownloadFileRequest;
use Nogrod\eBaySDK\FileTransfer\FileAttachmentType;
use Nogrod\eBaySDK\FileTransfer\UploadFileRequest;
use Nogrod\eBaySDK\MerchantData\BulkDataExchangeRequests;
use Nogrod\eBaySDK\MerchantData\Client\MerchantDataBaseClient;
use Nogrod\eBaySDK\Shopping\GetSingleItemRequest;
use Nogrod\eBaySDK\Shopping\Client\ShoppingClient;
use Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest;
use Nogrod\eBaySDK\Trading\AmountType;
use Nogrod\eBaySDK\Trading\Client\TradingClassMap;
use Nogrod\eBaySDK\Trading\Client\TradingClient;
use Nogrod\eBaySDK\Trading\ItemType;
use Nogrod\eBaySDK\Trading\NameValueListArrayType;
use Nogrod\eBaySDK\Trading\NameValueListType;
use Nogrod\eBaySDK\Trading\StorefrontType;
use Nogrod\XMLClientRuntime\Exception\ServerException;
use Symfony\Component\VarDumper\VarDumper;

$test = new AddFixedPriceItemRequest();
$item = new ItemType();
$item->setSKU('123');
$item->setEBayPlus(true);
$item->setQuantity(9);
$item->setBuyItNowPrice(new AmountType(11.11));
$itemSpecifics = new NameValueListArrayType();
$nameValueList = new NameValueListType();
$nameValueList->setName("Key1");
$nameValueList->setValue(["Value1"]);
$itemSpecifics->addToNameValueList($nameValueList);
$nameValueList = new NameValueListType();
$nameValueList->setName("Key2");
$nameValueList->setValue(["Value2"]);
$itemSpecifics->addToNameValueList($nameValueList);
$item->setItemSpecifics($itemSpecifics->getNameValueList());
$storefront = new StorefrontType();
$storefront->setStoreCategoryID(123456);
$item->setStorefront($storefront);
$test->setItem($item);

$client = new TradingClient();
echo $client->serialize($test);

$service = new Sabre\Xml\Service();
$service->classMap = TradingClassMap::Get();
$service->namespaceMap = TradingClassMap::GetNamespaces();
echo $service->write('AddFixedPriceItemRequest', $test);

$payload = new BulkDataExchangeRequests();
$test = new \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequest();
$item = new \Nogrod\eBaySDK\MerchantData\ItemType();
$item->setSKU('123');
$item->setEBayPlus(true);
$item->setQuantity(9);
$item->setBuyItNowPrice(new \Nogrod\eBaySDK\MerchantData\AmountType(11.11));
$item->setScheduleTime(new DateTime('now'));
$itemSpecifics = new \Nogrod\eBaySDK\MerchantData\NameValueListArrayType();
$nameValueList = new \Nogrod\eBaySDK\MerchantData\NameValueListType();
$nameValueList->setName("Key1");
$nameValueList->setValue(["Value1"]);
$itemSpecifics->addToNameValueList($nameValueList);
$nameValueList = new \Nogrod\eBaySDK\MerchantData\NameValueListType();
$nameValueList->setName("Key2");
$nameValueList->setValue(["Value2"]);
$itemSpecifics->addToNameValueList($nameValueList);
$item->setItemSpecifics($itemSpecifics->getNameValueList());
$storefront = new \Nogrod\eBaySDK\MerchantData\StorefrontType();
$storefront->setStoreCategoryID(123456);
$item->setStorefront($storefront);
$test->setItem($item);
$payload->setAddFixedPriceItemRequest([$test, $test]);

$client = new MerchantDataBaseClient();
echo $client->serialize($payload);
echo $client->serializeSabre($payload);
print_r($client->deserializeSabre($client->serialize($payload)));

$client = new FileTransferClient([
    'auth' => '1234567890',
    'appId' => '---'
]);

$uploadFileRequest = new UploadFileRequest();
$uploadFileRequest->setFileFormat('gzip');
$uploadFileRequest->setFileReferenceId('1234567890');
$uploadFileRequest->setTaskReferenceId('1234567890');
$fileAttachment = new FileAttachmentType();
$fileAttachment->setData(gzencode('<xml>...'));
$uploadFileRequest->setFileAttachment($fileAttachment);
$result = $client->uploadFile($uploadFileRequest);
VarDumper::dump($result);

$downloadFileRequest = new DownloadFileRequest();
$downloadFileRequest->setFileReferenceId('9104252079');
$downloadFileRequest->setTaskReferenceId('8768150309');
$result = $client->downloadFile($downloadFileRequest);
VarDumper::dump($result);


$client = new ShoppingClient([
    'siteId' => SiteIds::DE,
    'appId' => '---',
]);

$getSingleItemRequest = new GetSingleItemRequest();
$getSingleItemRequest->setItemID('182479132271');
$getSingleItemRequest->setIncludeSelector('Details,ItemSpecifics');

try {
    $result = $client->getSingleItem($getSingleItemRequest);
    VarDumper::dump($result);
} catch (ServerException $e) {
    echo (string) $e->getRequest()->getBody();
    echo (string) $e->getResponse()->getBody();
} catch (Exception $e) {
    echo $e->getMessage();
    echo $e->getTraceAsString();
}

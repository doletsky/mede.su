<?php
//string tags in array
$arTags=explode(",",$arResult["TAGS"]);
$arResult["arTAGS"]=$arTags;

CModule::IncludeModule("iblock");
$arSec=end($arResult['SECTION']);
$arFilter = Array(
    "IBLOCK_ID"=>$arSec[0]["IBLOCK_ID"],
    "!ID" => $arResult['ID']
);
//$arResult['RAND_ELEMENT']["FILTER"]=$arFilter;
$res = CIBlockElement::GetList(Array("RAND"=>"ASC"), $arFilter, false, Array ("nTopCount" => 6));
while($ar_fields = $res->GetNext())
{
    $arResult['RAND_ELEMENT'][] = array("NAME" => $ar_fields["NAME"], "PREVIEW_PICTURE" => CFile::GetPath($ar_fields["PREVIEW_PICTURE"]), "DETAIL_PAGE_URL" => $ar_fields["DETAIL_PAGE_URL"]) ;
}
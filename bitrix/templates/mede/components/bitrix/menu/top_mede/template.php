<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <ul class="menu">
        <li><a class="curr" href="/">�������</a></li>
<?foreach($arResult as $arItem):?>
        <li>
            <a class="" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        </li>
<?endforeach?>
        <li><a class="curr" href="/search.php">�����</a></li>
    </ul>

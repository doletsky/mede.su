<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������");
?>

    <!-- BREADCRUMBS NAVIGATION -->

    <div class="breadcrumb clearfix bottom-50">
        <div class="alignleft"><a href="/">�������</a><img src="images/breadcr-dvdr.gif" alt=""><span>������</span></div>

        <!-- PORTFOLIO FILTER -->

<!--        <ul id="filter" class="alignright">-->
<!--            <li class="current"><a href="#">All</a><img src="images/breadcr-dvdr.gif" alt=""></li>-->
<!--            <li><a href="#">Category 1</a><img src="images/breadcr-dvdr.gif" alt=""></li>-->
<!--            <li><a href="#">Category 2</a><img src="images/breadcr-dvdr.gif" alt=""></li>-->
<!--            <li><a href="#">Category 3</a><img src="images/breadcr-dvdr.gif" alt=""></li>-->
<!--            <li><a href="#">Category 4</a><img src="images/breadcr-dvdr.gif" alt=""></li>-->
<!--            <li><a href="#">Category 5</a></li>-->
<!--        </ul>-->
        <?$APPLICATION->IncludeComponent("bitrix:menu","sub_top_mede",Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "top",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            )
        );?>

    </div>

<?$APPLICATION->IncludeComponent("bitrix:news.list","list_3_col",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "34",
        "NEWS_COUNT" => "6",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => $_REQUEST['SECTION_ID'],
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "������",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>
    <!-- 3 COLUMN PORTFOLIO -->


<!--    </div>-->



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
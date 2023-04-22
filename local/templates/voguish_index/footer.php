<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
<div class="col-md-3 bann-left">
    <?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
	"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
	),
	false
);?>

    <h3>Recent Posts</h3>
    <div class="blo-top">
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href="single.html"><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/1b.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="single.html">Little Invaders </a></h4>
                <p>pellentesque dui, non felis. Maecenas male </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href="single.html"><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/2b.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="single.html">Little Invaders </a></h4>
                <p>pellentesque dui, non felis. Maecenas male </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids">
            <div class="blog-grid-left">
                <a href=""><img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/3b.jpg" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h4><a href="single.html">Little Invaders </a></h4>
                <p>pellentesque dui, non felis. Maecenas male </p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <h3>Категории</h3>

    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"categories", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "categories"
	),
	false
);?>
<!--    <div class="blo-top">-->
<!--        <li><a href="#">||   Lorem Ipsum passage</a></li>-->
<!--        <li><a href="#">||   Finibus Bonorum et</a></li>-->
<!--        <li><a href="#">||   Treatise on the theory</a></li>-->
<!--        <li><a href="#">||   Characteristic words</a></li>-->
<!--        <li><a href="#">||   combined with a handful</a></li>-->
<!--        <li><a href="#">||   which looks reasonable</a></li>-->
<!--    </div>-->
    <h3>Newsletter</h3>

    <div class="blo-top">
        <div class="name">
            <form>
                <input type="text" placeholder="email" required="">
            </form>
        </div>
        <div class="button">
            <form>
                <input type="submit" value="Subscribe">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="clearfix"> </div>
<?php if($APPLICATION->GetCurPage(false) == '/'): ?>
    <div class="fle-xsel">
        <ul id="flexiselDemo3">
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/6.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/5.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/1.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/4.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/6.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="banner-1">
                        <img src="<?=DEFAULT_TEMPLATE_PATH;?>/images/1.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </li>
        </ul>

        <script type="text/javascript">
            $(window).load(function() {

                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="<?=DEFAULT_TEMPLATE_PATH;?>/js/jquery.flexisel.js"></script>
        <div class="clearfix"> </div>
    </div>
<?php endif; ?>
</div>
</body>
</html>
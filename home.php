<?php
/*
Template Name: home
*/
?>

<?php get_header()?>
    <main>
<div id="all">
<div id="back">
    <div id="contar">
    <div id="wrapper">
    <div id="main" role="main">
    <div class="moduletable">
    <div class="custom">
     <div class="block-travel">
    <div class="text-travel"><span class="travel-headline"><?php the_field('text'); ?></span> 
    <span class="travel-subline"><?php the_field('subtext'); ?></span></div>
     <button class="button-st ">Начать путешествие</button> 
    <img class="button-line" src="<?php bloginfo('template_url')?> /assets/img/dot.png" alt="" >
    </div>
     </div>
   </div>
    <!--блок текст путешествие + кнопка с точкой-->
                     <div class="custom">
                            <div class="block-info">
                                <div class="block-text bg-top-left"><span class="info-subline">мы</span>
                                    <h1 class="info-headline">1</h1>
                                    <span class="info-subline">на рынке</span>
                                </div>
                                <div class="block-text bg-top-right"><span class="info-subline">гаранитруем</span>
                                    <h1 class="info-headline">50%</h1>
                                    <span class="info-subline">безопасность</span>
                                </div>
                                <div class="block-text bg-bottom-left"><span class="info-subline">календарик за</span>
                                    <div class="block-year">
                                        <h1 class="info-headline">2001г.</h1>
                                        
                                    </div>
                                    <span class="info-subline">в подарок</span>
                                </div>
                                <div class="block-text bg-bottom-right"><span class="info-subline">путешествие</span>
                                    <h1 class="info-headline">597</h1>
                                    <span class="info-subline">дней</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
    </main>
</body>
</html>
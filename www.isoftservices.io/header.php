<?php
/**
 * header.php — shared site header
 * Include this file at the top of every page PHP file.
 *
 * Required variables (set BEFORE including this file):
 *   $COMP_PREFIX  — unique Wix component prefix for this page (string)
 *   $ACTIVE_NAV   — label of the active top-level nav item, e.g. 'Home' (string, '' if none)
 */
?>
<style id="static-dropdown-fix">
  /* Fix overflow clipping on the Wix nav container */
  .NHM1d1 { overflow: visible !important; }
  .NHM1d1 .R_TAzU { overflow: visible !important; }
  .NHM1d1 .R_TAzU .y7qwii { overflow: visible !important; }
  .XwCBRN { overflow: visible !important; }
  wix-dropdown-menu { overflow: visible !important; }

  .wixui-dropdown-menu__item {
    position: relative;
    cursor: pointer;
  }
  .wixui-dropdown-menu__item .JS76Uv { cursor: pointer; }
  .wixui-dropdown-menu__item .UiHgGh,
  .wixui-dropdown-menu__item [role="button"] { cursor: pointer !important; }

  /* ── Simple dropdown (Industries, About Us) ── */
  .static-submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    box-shadow: 0 4px 20px rgba(0,0,0,.15);
    list-style: none;
    margin: 4px 0 0 0;
    padding: 6px 0;
    min-width: 180px;
    z-index: 999999;
    white-space: nowrap;
  }
  .wixui-dropdown-menu__item:hover > .static-submenu { display: block; }
  .static-submenu li { display: block; cursor: pointer !important; }
  /* Override Wix's [data-state~=header] a { cursor: default !important } */
  .static-submenu li a,
  .static-submenu li a *,
  [data-state~=header] .static-submenu li a,
  [data-state~=header] .static-submenu li a *,
  [data-state~=header] .static-submenu li {
    cursor: pointer !important;
  }
  .static-submenu li a {
    display: block;
    padding: 10px 20px;
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    text-decoration: none;
    cursor: pointer !important;
    transition: background-color 0.2s, color 0.2s;
  }
  .static-submenu li a:hover {
    background-color: #f5f5f5;
    color: #9B30C8;
    cursor: pointer !important;
  }

  /* ── Services Mega Menu ── */
  .services-mega-menu {
    display: none;
    position: fixed;
    top: 70px;
    left: 0;
    width: 100vw;
    background: #fff;
    border-top: 3px solid #9B30C8;
    box-shadow: 0 8px 32px rgba(0,0,0,.15);
    z-index: 999999;
    flex-direction: row;
    align-items: stretch;
    font-family: Helvetica, Arial, sans-serif;
  }
  .wixui-dropdown-menu__item:hover > .services-mega-menu { display: flex; }

  .smm-left {
    flex: 1 1 0;
    padding: 32px 48px 32px 80px;
    border-right: 1px solid #f0f0f0;
  }
  .smm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px 48px;
  }
  .smm-card {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    text-decoration: none;
    color: inherit;
    padding: 8px;
    border-radius: 8px;
    transition: background 0.18s;
  }
  .smm-card:hover { background: #faf5ff; }
  .smm-icon {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .smm-text {
    display: flex;
    flex-direction: column;
    gap: 4px;
  }
  .smm-title {
    font-size: 15px;
    font-weight: 700;
    color: #222;
    line-height: 1.2;
  }
  .smm-desc {
    font-size: 13px;
    color: #666;
    line-height: 1.45;
  }
  .smm-card:hover .smm-title { color: #9B30C8; }

  .smm-right {
    width: 300px;
    flex-shrink: 0;
    padding: 28px 36px 28px 28px;
    display: flex;
    flex-direction: column;
    gap: 16px;
  }
  .smm-image-wrap {
    width: 100%;
    border-radius: 8px;
    overflow: hidden;
    height: 160px;
  }
  .smm-image-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .smm-cta-title {
    font-size: 15px;
    font-weight: 700;
    color: #222;
    margin: 0;
    line-height: 1.3;
  }
  .smm-cta-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0;
  }
  .smm-cta-links li {
    border-bottom: 1px solid #eee;
  }
  .smm-cta-links li a {
    display: block;
    padding: 10px 0;
    font-size: 14px;
    color: #333;
    text-decoration: none;
    transition: color 0.18s;
  }
  .smm-cta-links li a:hover { color: #9B30C8; cursor: pointer !important; }
  .smm-cta-links li a,
  [data-state~=header] .smm-cta-links li a,
  [data-state~=header] .smm-card,
  .smm-card {
    cursor: pointer !important;
  }
  a.smm-cta-title {
    display: block;
    font-size: 15px;
    font-weight: 700;
    color: #222;
    text-decoration: none;
    line-height: 1.3;
    transition: color 0.18s;
  }
  a.smm-cta-title:hover { color: #9B30C8; }
</style>
<header id="comp-<?php echo $COMP_PREFIX; ?>" class="comp-<?php echo $COMP_PREFIX; ?> S6Dcte comp-<?php echo $COMP_PREFIX; ?>-container" slots="[object Object]" wix="[object Object]"><section id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18" tabindex="-1" data-block-level-container="Section" class="xuzjBY comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18-container comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18 xuzjBY wixui-header undefined Gzsk0j" data-testid="section-container"><div id="bgLayers_comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18" data-hook="bgLayers" data-motion-part="BG_LAYER comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div><div id="bgMedia_comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18" data-motion-part="BG_MEDIA comp-<?php echo $COMP_PREFIX; ?>_r_comp-kbgajy18" class="VgO9Yg"></div></div><!--$--><div id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4ixwbz" role="" class="PiVxGu MDrwHQ comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4ixwbz wixui-box" dir="ltr"><div aria-hidden="true" class="yPXgy9 YqUfCX inner-box wixui-box"></div><div data-testid="responsive-container-content" class="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4ixwbz-container"><!--$--><div id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4izd92" role="" class="PiVxGu MDrwHQ comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4izd92-container comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4izd92 wixui-box" dir="ltr"><div aria-hidden="true" class="yPXgy9 YqUfCX inner-box wixui-box"></div><!--$--><div id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wx7q3" data-testid="imageX" class="lyNaha comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wx7q3 JdNFxG wixui-image"><a data-motion-part="BG_LAYER comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wx7q3" data-testid="linkElement" href="/" target="_self" class="h1DYhE"><picture data-testId="pictureElement" class="QebvG3"><source sizes="163px" srcSet="https://static.wixstatic.com/media/97cf05_528b65bad1314da8a5901d023dc18aea~mv2.png/v1/crop/x_0,y_5,w_346,h_95/fill/w_163,h_45,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/97cf05_528b65bad1314da8a5901d023dc18aea~mv2.png 163w, https://static.wixstatic.com/media/97cf05_528b65bad1314da8a5901d023dc18aea~mv2.png/v1/crop/x_0,y_5,w_346,h_95/fill/w_326,h_90,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/97cf05_528b65bad1314da8a5901d023dc18aea~mv2.png 326w" media="(max-width: 1920px)" height="45" width="163"/><img fetchpriority="high" src="https://static.wixstatic.com/media/97cf05_528b65bad1314da8a5901d023dc18aea~mv2.png" alt="" height="45" width="163" style="--responsive-img-object-fit:cover"/></picture></a></div><!--/$--><!--$--><wix-dropdown-menu id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm" class="XwCBRN NHM1d1 comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm wixui-dropdown-menu hidden-during-prewarmup" tabIndex="-1" dir="ltr" data-stretch-buttons-to-menu-width="true" data-same-width-buttons="false" data-num-items="6" data-menuborder-y="0" data-menubtn-border="0" data-ribbon-els="0" data-label-pad="0" data-ribbon-extra="0" data-dropalign="center"><nav class="R_TAzU" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxmnavContainer" aria-label="Site"><ul class="y7qwii" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxmitemsContainer" style="text-align:center" data-marginallchildren="true"><li id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm0" data-direction="ltr" data-listposition="left" data-data-id="dataItem-kd46lbw6" data-state="<?php echo ($ACTIVE_NAV==='Home') ? 'menu selected  link' : 'menu false  link'; ?>" data-index="0" class="Tg1gOB wixui-dropdown-menu__item xTjc1A"><a data-testid="linkElement" href="/" target="_self" class="UiHgGh" aria-current="page"><div class="yRj2ms"><div class=""><p class="JS76Uv" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm0label">Home</p></div></div></a></li><li id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm2" data-direction="ltr" data-listposition="center" data-data-id="dataItem-le9jvzhg" data-state="menu false  header" data-index="2" class="Tg1gOB wixui-dropdown-menu__item xTjc1A"><div data-testid="linkElement" class="UiHgGh" tabindex="0" aria-haspopup="true" aria-expanded="false" role="button"><div class="yRj2ms"><div class=""><p class="JS76Uv" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm2label">Industries</p></div></div></div><button class="_pfxlW" aria-label="More Industries pages"><svg width="10" height="10" viewBox="0 0 16 11" fill="black" xmlns="http://www.w3.org/2000/svg"><path d="M8 10.5L16 1.86193L14.7387 0.5L8 7.77613L1.26133 0.499999L-5.95321e-08 1.86193L8 10.5Z"></path></svg></button><ul class="static-submenu" aria-hidden="true"><li><a data-testid="linkElement" href="manufacturing" target="_self" class="" tabindex="-1">Manufacturing</a></li><li><a data-testid="linkElement" href="financial-services" target="_self" class="" tabindex="-1">Financial Services</a></li><li><a data-testid="linkElement" href="healthcare" target="_self" class="" tabindex="-1">Health Care</a></li><li><a data-testid="linkElement" href="public-sector" target="_self" class="" tabindex="-1">Public Sector</a></li><li><a data-testid="linkElement" href="technology-and-software" target="_self" class="" tabindex="-1">Technology &amp; Software</a></li><li><a data-testid="linkElement" href="retail" target="_self" class="" tabindex="-1">Retail</a></li><li><a data-testid="linkElement" href="energy" target="_self" class="" tabindex="-1">Energy</a></li></ul></li><li id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm3" data-direction="ltr" data-listposition="center" data-data-id="dataItem-lb4xbaed" data-state="<?php echo ($ACTIVE_NAV==='Success Stories') ? 'menu selected  link' : 'menu false  link'; ?>" data-index="3" class="Tg1gOB wixui-dropdown-menu__item xTjc1A"><a data-testid="linkElement" href="success-stories" target="_self" class="UiHgGh"><div class="yRj2ms"><div class=""><p class="JS76Uv" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm3label">Success Stories</p></div></div></a></li><li id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm4" data-direction="ltr" data-listposition="center" data-data-id="dataItem-lee1gsoj" data-state="menu false  header" data-index="4" class="Tg1gOB wixui-dropdown-menu__item xTjc1A"><div data-testid="linkElement" class="UiHgGh" tabindex="0" aria-haspopup="true" aria-expanded="false" role="button"><div class="yRj2ms"><div class=""><p class="JS76Uv" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm4label">About Us</p></div></div></div><button class="_pfxlW" aria-label="More About Us pages"><svg width="10" height="10" viewBox="0 0 16 11" fill="black" xmlns="http://www.w3.org/2000/svg"><path d="M8 10.5L16 1.86193L14.7387 0.5L8 7.77613L1.26133 0.499999L-5.95321e-08 1.86193L8 10.5Z"></path></svg></button><ul class="static-submenu" aria-hidden="true"><li><a data-testid="linkElement" href="who-we-are" target="_self" class="" tabindex="-1">Who We Are</a></li><li><a data-testid="linkElement" href="our-culture" target="_self" class="" tabindex="-1">Our Culture</a></li><li><a data-testid="linkElement" href="brand-value" target="_self" class="" tabindex="-1">Brand Value</a></li></ul></li><li id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm5" data-direction="ltr" data-listposition="right" data-data-id="dataItem-lczs16tn" data-state="<?php echo ($ACTIVE_NAV==='Careers') ? 'menu selected  link' : 'menu false  link'; ?>" data-index="5" class="Tg1gOB wixui-dropdown-menu__item xTjc1A"><a data-testid="linkElement" href="career" target="_self" class="UiHgGh"><div class="yRj2ms"><div class=""><p class="JS76Uv" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm5label">Careers</p></div></div></a></li><li id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm__more__" data-direction="ltr" data-listposition="right" data-state="menu false  header" data-index="__more__" data-dropdown="false" class="p90CkU xTjc1A"><div data-testid="linkElement" class="UiHgGh" tabindex="0" aria-haspopup="true"><div class="yRj2ms"><div class=""><p class="JS76Uv" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxm__more__label">More</p></div></div></div></li></ul><div class="h3jCPd" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxmdropWrapper" data-dropalign="center" data-dropdown-shown="false"><ul class="wkJ2fp wixui-dropdown-menu__submenu" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxmmoreContainer"></ul></div><div style="display:none" id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lb4wzcxmnavContainer-hiddenA11ySubMenuIndication">Use tab to navigate through the menu items.</div></nav></wix-dropdown-menu><!--/$--><!--$--><div id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lbyw6pa3" class="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lbyw6pa3" data-semantic-classname="button"><a data-testid="linkElement" href="contact" target="_self" class="StylableButton2545352419__root comp-<?php echo $COMP_PREFIX; ?>_r_comp-lbyw6pa3-styleId__root wixui-button StylableButton2545352419__link" aria-label="Contact Us"><span class="StylableButton2545352419__container"><span class="StylableButton2545352419__label wixui-button__label" data-testid="stylablebutton-label">Contact Us</span><span class="StylableButton2545352419__icon wixui-button__icon" aria-hidden="true" data-testid="stylablebutton-icon"><span>
<svg data-bbox="20 51.5 160 97" viewBox="0 0 200 200" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape">
    <g>
        <path d="m131.5 51.5-8.1 8.1L158.1 95H20v11h138.1l-34.7 34.4 8.1 8.1L180 100l-48.5-48.5z" fill-rule="evenodd" clip-rule="evenodd"/>
    </g>
</svg>
</span></span></span></a></div><!--/$--><!--$--><button id="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lemhqxrt" class="comp-<?php echo $COMP_PREFIX; ?>_r_comp-lemhqxrt wixui-vector-image"><div data-testid="svgRoot-comp-<?php echo $COMP_PREFIX; ?>_r_comp-lemhqxrt" class="VDJedC l4CAhn qQrFOK">
<svg preserveAspectRatio="xMidYMid meet" data-bbox="44 64 112 72" viewBox="44 64 112 72" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role=presentation aria-hidden=true aria-label="">
    <g>
        <path d="M156 64v6H44v-6h112z"/>
        <path d="M156 97v6H44v-6h112z"/>
        <path d="M156 130v6H44v-6h112z"/>
    </g>
</svg>
</div></button><!--/$--></div><!--/$--></div></div><!--/$--></section></header>

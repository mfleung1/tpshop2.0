<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"./template/pc/rainbow/public\header.html";i:1526968239;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0039)https://www.glassesgallery.com/about-us -->
<html lang="en-US" class=" wf-futura-pt-n5-active wf-futura-pt-n4-active wf-ratiomodern-n8-active wf-ratiomodern-i4-active wf-ratiomodern-n4-active wf-active">
  
  <head>
    <meta charset="UTF-8">   
    <title>注册-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" /> 
    <link href="/template/pc/rainbow/static/css/reg3.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/base.css"/>   
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" type="text/css" media="all" href="/template/pc/rainbow/static/css/calendar.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="/template/pc/rainbow/static/css/styles-m.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="/template/pc/rainbow/static/css/styles-l.min.css">
    <link rel="icon" type="image/x-icon" href="/template/pc/rainbow/static/images/GlassesGallery_logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="/template/pc/rainbow/static/images/GlassesGallery_logo.png">
    <style>.tk-futura-pt{font-family:"futura-pt",sans-serif;}.tk-ratiomodern{font-family:"ratiomodern",serif;}</style>
    <style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
    <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/style.css">
</head>
  
  <body data-container="body" class="cms-about-us cms-page-view page-layout-content-page" aria-busy="false">
    <div class="zopim" __jx__id="___$_66 ___$_66" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000002; width: 180px; height: 30px; right: 10px; bottom: 0px; display: none;" data-test-id="ChatWidgetButton">
    </div>
    <div class="zopim" __jx__id="___$_4 ___$_4" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000001; right: 8px; bottom: 0px; border-top-left-radius: 5px; border-top-right-radius: 5px; display: none; width: 350px; height: 450px; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 3px 2px;" data-test-id="ChatWidgetWindow">
    </div>
    <div class="page-wrapper">
      <header class="page-header">
        <div class="message-bar">
          <ul>
            <li class="item">
              <a href="<?php echo U('Home/#/#'); ?>" target="_self">渐进透镜</a></li>
            <li class="item">
              <a href="<?php echo U('Home/#/#'); ?>" target="_self">过渡透镜</a></li>
            <li class="item">
              <a href="<?php echo U('Home/#/#'); ?>" target="_self">免费优质镜片</a></li>
            <li class="item">
              <a href="<?php echo U('Home/#/#'); ?>" target="_self">买一送一</a></li>
            <li class="item">
              <a href="<?php echo U('Home/#/#'); ?>" target="_self">所有交易</a></li>
          </ul>
        </div>
        <div class="header content">
          <div class="panel wrapper">
            <div class="panel header">
              <a class="action skip contentarea" href="https://www.glassesgallery.com/about-us#contentarea">
                <span>Skip to Content</span></a>
              <div class="switcher currency switcher-currency" id="switcher-currency">
                <strong class="label switcher-label">
                  <span>Currency</span></strong>
              </div>
            </div>
          </div>
          <div data-block="minicart" class="minicart-wrapper">
            <a class="action showcart" href="https://www.glassesgallery.com/checkout/cart/" data-bind="scope: &#39;minicart_content&#39;">
              <div data-bind="css: { has_item: !getCartParam(&#39;summary_count&#39;) == false }">
                <span class="text">My Cart</span>
                <span class="counter qty empty" data-bind="css: { empty: !!getCartParam(&#39;summary_count&#39;) == false }, blockLoader: isLoading">
                  <span class="counter-number">
                    <!-- ko text: getCartParam('summary_count') -->0
                    <!-- /ko --></span>
                  <span class="counter-label">
                    <!-- ko if: getCartParam('summary_count') -->
                    <!-- /ko --></span>
                </span>
              </div>
            </a>
            <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-1" style="display: none;">
              <div class="block block-minicart empty ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-1" style="display: block;">
                <div id="minicart-content-wrapper" data-bind="scope: &#39;minicart_content&#39;">
                  <div data-bind="css: { has_item: !getCartParam(&#39;summary_count&#39;) == false }">
                    <!-- ko template: getTemplate() -->
                    <div class="block-title">
                      <strong>
                        <span class="text">
                          <!-- ko i18n: 'My Cart' -->
                          <span>My Cart</span>
                          <!-- /ko --></span>
                        <span class="qty empty" data-bind="css: { empty: !!getCartParam(&#39;summary_count&#39;) == false },
                        attr: { title: $t(&#39;Items in Cart&#39;) }" title="Items in Cart">
                          <!-- ko text: getCartParam('summary_count') -->0
                          <!-- /ko --></span></strong>
                    </div>
                    <div class="block-content">
                      <button type="button" id="btn-minicart-close" class="action close" data-action="close" data-bind="attr: { title: $t(&#39;Close&#39;) }" title="Close">
                        <span>
                          <!-- ko i18n: 'Close' -->
                          <span>Close</span>
                          <!-- /ko --></span>
                      </button>
                      <!-- ko if: getCartParam('summary_count') -->
                      <!-- /ko -->
                      <!-- ko if: getCartParam('summary_count') -->
                      <!-- /ko -->
                      <!-- ko ifnot: getCartParam('summary_count') -->
                      <strong class="subtitle empty" data-bind="visible: closeSidebar()">
                        <!-- ko i18n: 'You have no items in your shopping cart.' -->
                        <span>You have no items in your shopping cart.</span>
                        <!-- /ko --></strong>
                      <!-- ko if: getCartParam('cart_empty_message') -->
                      <!-- /ko -->
                      <!-- /ko -->
                      <!-- ko if: getCartParam('possible_onepage_checkout') -->
                      <!-- ko foreach: getRegion('subtotalContainer') -->
                      <!-- ko template: getTemplate() -->
                      <!-- ko foreach: {data: elems, as: 'element'} -->
                      <!-- ko if: hasTemplate() -->
                      <!-- ko template: getTemplate() -->
                      <div class="subtotal">
                        <span class="label">
                          <!-- ko i18n: 'Total' -->
                          <span>Total</span>
                          <!-- /ko --></span>
                        <!-- ko foreach: elems -->
                        <!-- ko template: getTemplate() -->
                        <div class="amount price-container">
                          <!-- ko if: displaySubtotal() -->
                          <!-- ko if: display_cart_subtotal_excl_tax -->
                          <span class="price-wrapper" data-bind="html: cart().subtotal_excl_tax">
                            <span class="price">$0.00</span></span>
                          <!-- /ko -->
                          <!-- ko if: !display_cart_subtotal_excl_tax && display_cart_subtotal_incl_tax -->
                          <!-- /ko -->
                          <!-- ko if: !display_cart_subtotal_excl_tax && !display_cart_subtotal_incl_tax -->
                          <!-- /ko -->
                          <!-- /ko -->
                          <!-- ko ifnot: displaySubtotal() -->
                          <!-- /ko --></div>
                        <!-- /ko -->
                        <!-- /ko --></div>
                      <!-- /ko -->
                      <!-- /ko -->
                      <!-- /ko -->
                      <!-- /ko -->
                      <!-- /ko -->
                      <!-- /ko -->
                      <!-- ko if: getCartParam('summary_count') -->
                      <!-- /ko -->
                      <div id="minicart-widgets" class="minicart-widgets">
                        <!-- ko foreach: getRegion('promotion') -->
                        <!-- ko template: getTemplate() -->
                        <!-- ko foreach: {data: elems, as: 'element'} -->
                        <!-- /ko -->
                        <!-- /ko -->
                        <!-- /ko --></div>
                    </div>
                    <!-- ko foreach: getRegion('sign-in-popup') -->
                    <!-- /ko -->
                    <!-- /ko --></div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-right">
            <ul class="wishlist-link">
              <li class="link wishlist empty" data-bind="scope: &#39;wishlist&#39;">
                <a href="https://www.glassesgallery.com/wishlist/">
                  <span class="label">My Favourites</span>
                  <span class="counter qty">0</span>
                  <!-- ko if: wishlist().counter -->
                  <!-- /ko --></a>
              </li>
            </ul>
            <div class="block block-search">
              <a class="block-title">
                <span>Search</span></a>
            </div>
            <ul class="header links">
              <li>
                <a href="<?php echo U('Home/user/reg'); ?>">注册</a></li>
              <li class="authorization-link" data-label="or">
                <a href="<?php echo U('Home/user/login'); ?>">登录</a></li>
            </ul>
          </div>
          <span data-action="toggle-nav" class="action nav-toggle">
            <span>Toggle Nav</span></span>
          <a class="logo" href="https://www.glassesgallery.com/" title="Glasses Gallery">
            <img src="/template/pc/rainbow/static/svg/logo.svg" alt="Glasses Gallery" width="135" height="64"></a>
        </div>
        <div class="sections nav-sections">
          <div class="section-items nav-sections-items" role="tablist">
            <div class="section-item-title nav-sections-item-title active" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.menu" aria-selected="false" aria-expanded="true" tabindex="0">
              <a class="nav-sections-item-switch" data-toggle="switch" href="https://www.glassesgallery.com/about-us#store.menu">Menu</a></div>
          <!-- 导航菜单 -->
            <div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content" role="tabpanel" aria-hidden="false">
              <nav class="navigation" data-action="navigation">
                <ul id="ui-id-2" class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" tabindex="0">
                  <li id="menu-men" class="level0 nav-1 first level-top  parent ui-menu-item" role="presentation">
                    <a href="https://www.glassesgallery.com/men" class="level-top ui-corner-all" aria-haspopup="true" id="ui-id-3" tabindex="-1" role="menuitem">
                      <span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>
                      <span>男士</span></a>
                    <ul class="level0 submenu ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" aria-hidden="true" aria-expanded="false" style="display: none;">
                      <li class="ui-menu-item" role="presentation">
                        <div class="submenu-wrapper">
                          <ul class="ui-menu ui-widget ui-widget-content ui-corner-all expanded" role="menu" aria-hidden="true" aria-expanded="false" style="display: none;">
                            <li id="menu-eyeglasses" class="level1 nav-1-1 first ui-menu-item" role="presentation">
                              <a href="https://www.glassesgallery.com/men/eyeglasses" id="ui-id-12" class="ui-corner-all" tabindex="-1" role="menuitem">
                                <img src="/template/pc/rainbow/static/images/men_eyeglasses1.jpg">
                                <span>Eyeglasses</span></a>
                            </li>
                            <li id="menu-sunglasses" class="level1 nav-1-2 ui-menu-item" role="presentation">
                              <a href="https://www.glassesgallery.com/men/sunglasses" id="ui-id-13" class="ui-corner-all" tabindex="-1" role="menuitem">
                                <img src="/template/pc/rainbow/static/images/men_sunglasses1.jpg">
                                <span>Sunglasses</span></a>
                            </li>
                            <li id="menu-sportsglasses" class="level1 nav-1-3 ui-menu-item" role="presentation">
                              <a href="https://www.glassesgallery.com/men/sportsglasses" id="ui-id-14" class="ui-corner-all" tabindex="-1" role="menuitem">
                                <img src="/template/pc/rainbow/static/images/men_sports1.jpg">
                                <span>Sportsglasses</span></a>
                            </li>
                            <li id="menu-all-men-collection" class="level1 nav-1-4 last ui-menu-item" role="presentation">
                              <a href="https://www.glassesgallery.com/men/all-men-collection" id="ui-id-15" class="ui-corner-all" tabindex="-1" role="menuitem">
                                <img src="/template/pc/rainbow/static/svg/men-all-icon_1_.svg">
                                <span>All Men's Collection</span></a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li> 
                </ul>
              </nav>
            </div>
            <div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.links" aria-selected="false" aria-expanded="false" tabindex="0">
              <a class="nav-sections-item-switch" data-toggle="switch" href="https://www.glassesgallery.com/about-us#store.links">Account</a></div>
            <div class="section-item-content nav-sections-item-content" id="store.links" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
              <ul class="store links">
                <li>
                  <a href="https://www.glassesgallery.com/customer/account/create/">Register</a></li>
                <li class="authorization-link" data-label="or">
                  <a href="https://www.glassesgallery.com/customer/account/login/">Sign In</a></li>
                <li class="link wishlist empty" data-bind="scope: &#39;wishlist&#39;">
                  <a href="https://www.glassesgallery.com/wishlist/">
                    <span class="label">My Favourites</span>
                    <span class="counter qty">0</span>
                    <!-- ko if: wishlist().counter -->
                    <!-- /ko --></a>
                </li>
              </ul>
            </div>
            <div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.settings" aria-selected="false" aria-expanded="false" tabindex="0">
              <a class="nav-sections-item-switch" data-toggle="switch" href="https://www.glassesgallery.com/about-us#store.settings">Settings</a></div>
            <div class="section-item-content nav-sections-item-content" id="store.settings" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
              <div class="switcher currency switcher-currency" id="switcher-currency-nav">
                <strong class="label switcher-label">
                  <span>Currency</span></strong>
                <div class="actions dropdown options switcher-options">
                  <strong class="language-USD">
                    <span style="font-weight: bold;">$ USD</span></strong>
                </div>
              </div>
            </div>
            <div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store-search" aria-selected="false" aria-expanded="false" tabindex="0">
              <a class="nav-sections-item-switch" data-toggle="switch" href="https://www.glassesgallery.com/about-us#store-search">Search</a></div>
            <div class="section-item-content nav-sections-item-content" id="store-search" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
              <div id="mobile-search" class="block block-search">
                <div class="block-title">
                  <span>Search</span></div>
                <div class="block block-content">
                  <form class="form minisearch" id="mobile_search_mini_form" action="https://www.glassesgallery.com/catalogsearch/result/" method="get">
                    <div class="field search">
                      <label class="label" for="search" data-role="minisearch-label">
                        <span>Search</span></label>
                      <div class="control">
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                          <input type="text" value="" class="input-text tt-hint" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off" readonly="" spellcheck="false" tabindex="-1" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);" dir="ltr">
                          <input id="mobile-search-field" type="text" name="q" value="" placeholder="Search" class="input-text tt-input" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                          <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: futura-pt, sans-serif, futura-pt, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                          <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                            <div class="tt-dataset tt-dataset-storeList-dataset"></div>
                          </div>
                        </span>
                      </div>
                    </div>
                    <div class="actions">
                      <button type="submit" title="Search" class="action search">
                        <span>Search</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
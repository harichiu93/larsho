<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.includes.head')
</head>
<body>

<div class="header-area">
    @include('site.includes.header')
</div> <!-- End header area -->

<div class="site-branding-area">
    @include('site.includes.brand')
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    @include('site.includes.menu')
</div> <!-- End mainmenu area -->


    @include('site.includes.slide')
    <!-- End slider area -->

<div class="promo-area">
    @include('site.includes.promo')
</div> <!-- End promo area -->

<div class="maincontent-area">
    @include('site.includes.lastest')
</div> <!-- End main content area -->

<div class="brands-area">
    @include('site.includes.brands')
</div> <!-- End brands area -->

<div class="product-widget-area">
    @include('site.includes.widget')
</div> <!-- End product widget area -->

<div class="footer-top-area">
    @include('site.includes.footerTop')
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    @include('site.includes.footerBottom')
</div> <!-- End footer bottom area -->

@include('site.includes.script')

</body>
</html>
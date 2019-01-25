<?php

/* __string_template__eec6ef31cdea331b98f26f64091e1fdf9a8f7c7c3d95bc2c5a41b5cd2d962fe3 */
class __TwigTemplate_1d0f9d80c9446337bd7391fbc5ef90fcc8d1f74818e273fe48bbd7f859429cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/press_shop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/press_shop/img/app_icon.png\" />

<title>Lokalisasi • press-shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminLocalization';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.5.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = 'e816b81608c78469469be2845629fbd1';
    var token_admin_orders = 'cd1863ae2dc37580e775c1bc3677bd82';
    var token_admin_customers = '98fc73d7ef2bc20d3e04cda2d7d9483b';
    var token_admin_customer_threads = '3545bb8e549a8bc452752f96c2c47b82';
    var currentIndex = 'index.php?controller=AdminLocalization';
    var employee_token = '5116d82dc5011d55bd18138d59c0e01c';
    var choose_language_translate = 'Pilih bahasa';
    var default_language = '1';
    var admin_modules_link = '/press_shop/admin758kmbcbt/index.php/improve/modules/catalog/recommended?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0';
    var tab_modules_list = 'etranslation';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/press_shop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/press_shop/admin758kmbcbt/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/press_shop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/press_shop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/press_shop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/press_shop/admin758kmbcbt/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/press_shop\\/admin758kmbcbt\\/\";
var baseDir = \"\\/press_shop\\/\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/press_shop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/admin758kmbcbt/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/admin.js?v=1.7.5.0\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/tools.js?v=1.7.5.0\"></script>
<script type=\"text/javascript\" src=\"/press_shop/admin758kmbcbt/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/press_shop/admin758kmbcbt/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminGamification&token=9771513cc32221c97c06df7b771a5cd2';
\t\t\t\tvar current_id_tab = 66;
\t\t\t</script>

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-id adminlocalization\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminDashboard&amp;token=d412a4f709340350e970ebae3b038af1\"></a>
    <span id=\"shop_version\">1.7.5.0</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=549e64548ca83b9b87c880bd582a2565\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCategories&amp;addcategory&amp;token=7ea3080cff267ecf070da880374c73b2\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/press_shop/admin758kmbcbt/index.php/improve/modules/manage?token=7b9783184b06445fe008225f6707b183\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminOrders&amp;token=cd1863ae2dc37580e775c1bc3677bd82\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/press_shop/admin758kmbcbt/index.php/sell/catalog/products/new?token=7b9783184b06445fe008225f6707b183\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d4fc7bfff5ae9677457a3aabfd7008bc\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"174\"
        data-icon=\"icon-AdminParentLocalization\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/localization\"
        data-post-link=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminQuickAccesses&token=5db3ecc051d8c839a333a8e566d5f926\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Lokalisasi - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Tambahkan halaman ini ke QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminQuickAccesses&token=5db3ecc051d8c839a333a8e566d5f926\">
      <i class=\"material-icons\">settings</i>
      Kelola akses cepat
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/press_shop/admin758kmbcbt/index.php?controller=AdminSearch&amp;token=db0c5f9e16e50c49f699232a725d2a26\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nama produk, SKU, referensi...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nama...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor faktur\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/press_shop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Lihat toko
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=91dc816dbc1ef76b8ad66f3db4b633d0\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Sudahkah Anda mempertimbangkan penjualan di pasar?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/press-shop%40admin.com.jpg\" />
      <span>Press Shop</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=5116d82dc5011d55bd18138d59c0e01c\">
      <i class=\"material-icons\">settings_applications</i>
      Profile Anda
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminLogin&amp;logout=1&amp;token=8df692b62a5161404e1cfc9e08c9c5b7\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminDashboard&amp;token=d412a4f709340350e970ebae3b038af1\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Jual</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminOrders&amp;token=cd1863ae2dc37580e775c1bc3677bd82\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Penjualan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminOrders&amp;token=cd1863ae2dc37580e775c1bc3677bd82\" class=\"link\"> Penjualan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/sell/orders/invoices/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Invoice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminSlip&amp;token=e04110398f346c19a8026f2d00bc1440\" class=\"link\"> Nota kredit
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/sell/orders/delivery-slips/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Nota pengiriman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCarts&amp;token=91dc816dbc1ef76b8ad66f3db4b633d0\" class=\"link\"> Daftar belanja
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/press_shop/admin758kmbcbt/index.php/sell/catalog/products?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/sell/catalog/products?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCategories&amp;token=7ea3080cff267ecf070da880374c73b2\" class=\"link\"> Kategori
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminTracking&amp;token=ed92b833ff84aff8d9092a7d0dc1580e\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminAttributesGroups&amp;token=6fde2e69ba2750040ef6fbc392fa4b1d\" class=\"link\"> Atribut dan Fitur
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminManufacturers&amp;token=dc6b95bdc6779090f6e698a92b0aeb55\" class=\"link\"> Brand dan Supplier
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminAttachments&amp;token=6b15034b222869980969614e7caab346\" class=\"link\"> File
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCartRules&amp;token=d4fc7bfff5ae9677457a3aabfd7008bc\" class=\"link\"> Diskon
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/sell/stocks/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCustomers&amp;token=98fc73d7ef2bc20d3e04cda2d7d9483b\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Pelanggan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCustomers&amp;token=98fc73d7ef2bc20d3e04cda2d7d9483b\" class=\"link\"> Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminAddresses&amp;token=53bbe3569459df6820a480439f0338c4\" class=\"link\"> Alamat
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCustomerThreads&amp;token=3545bb8e549a8bc452752f96c2c47b82\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Layanan Pelanggan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCustomerThreads&amp;token=3545bb8e549a8bc452752f96c2c47b82\" class=\"link\"> Layanan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminOrderMessage&amp;token=89dc7a00b0f02317dcb451e72e164f9c\" class=\"link\"> Pesan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminReturn&amp;token=304c7291e4fdf166de1ee2a8bda8d4c6\" class=\"link\"> Retur barang
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminStats&amp;token=549e64548ca83b9b87c880bd582a2565\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistik
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Peningkatan</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminPsMboModule&amp;token=2a36c6edd892bebabe09df87444f9a2f\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modul
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminPsMboModule&amp;token=2a36c6edd892bebabe09df87444f9a2f\" class=\"link\"> Katalog Modul
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/modules/manage?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminThemes&amp;token=3b2f2ecd8221d8cb23d6642f19123982\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Desain
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminThemes&amp;token=3b2f2ecd8221d8cb23d6642f19123982\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminPsMboTheme&amp;token=5c2ac46b93ffb0e1f7da6822f871db1b\" class=\"link\"> Kumpulan Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCmsContent&amp;token=004c3618516245d0120447516c0d474f\" class=\"link\"> Halaman
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/design/modules/positions/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Posisi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminImages&amp;token=e0822fd5edbb545a9b0af25a21e18668\" class=\"link\"> Pengaturan Gambar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminLinkWidget&amp;token=94791bde076c31f69d2be255b2c5f6fb\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCarriers&amp;token=e87b0609ff29710c5c35410cd36c601f\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Pengiriman
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCarriers&amp;token=e87b0609ff29710c5c35410cd36c601f\" class=\"link\"> Kurir
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/shipping/preferences?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/press_shop/admin758kmbcbt/index.php/improve/payment/payment_methods?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pembayaran
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/payment/payment_methods?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Cara Pembayaran
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/payment/preferences?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Preferensi
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/press_shop/admin758kmbcbt/index.php/improve/international/localization/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internasional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/international/localization/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Lokalisasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminZones&amp;token=57bfcf2b78e685bc5df1e62cbef8604e\" class=\"link\"> Lokasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminTaxes&amp;token=f9d4ca6455a46ab6f4c80f8d8cac544e\" class=\"link\"> Pajak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/improve/international/translations/settings?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Terjemahan
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfigurasi</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/press_shop/admin758kmbcbt/index.php/configure/shop/preferences/preferences?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parameter Toko
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/shop/preferences/preferences?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Umum
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/shop/order-preferences/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Pengaturan Order
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/shop/product-preferences/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Produk
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/shop/customer-preferences/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Pengaturan Pelanggan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminContacts&amp;token=613e5bd5bbf4023f708d37af167cfdee\" class=\"link\"> Kontak
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/shop/seo-urls/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminSearchConf&amp;token=3b9584154a0a29694076e604a0b4485c\" class=\"link\"> Cari
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminGamification&amp;token=9771513cc32221c97c06df7b771a5cd2\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/system-information/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parameter lanjutan
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/system-information/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Informasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/performance/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Kinerja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/administration/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Administrasi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/emails/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/import/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Impor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminEmployees&amp;token=5116d82dc5011d55bd18138d59c0e01c\" class=\"link\"> Karyawan
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminRequestSql&amp;token=b5764ebaf3f53628abe45fc672046b34\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/press_shop/admin758kmbcbt/index.php/configure/advanced/logs/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminWebservice&amp;token=9b6fcf9dcd4ee8f3dfddff7e2467e6e3\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Lokalisasi</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Lokalisasi          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminPsMboModule&token=2a36c6edd892bebabe09df87444f9a2f';
    var controller = 'AdminLocalization';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                              <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/press_shop/admin758kmbcbt/index.php/improve/modules/catalog?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\"                title=\"Modul yang direkomendasikan\"
                              >
                Modul yang direkomendasikan
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/press_shop/admin758kmbcbt/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminLocalization%253Fversion%253D1.7.5.0%2526country%253Did/Bantuan?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class=\"nav-item\">
                    <a href=\"/press_shop/admin758kmbcbt/index.php/improve/international/localization/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" id=\"subtab-AdminLocalization\" class=\"nav-link tab active current\" data-submenu=\"66\">
                      Lokalisasi
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminLanguages&token=fbd99c6c747b990487418ee213063257\" id=\"subtab-AdminLanguages\" class=\"nav-link tab \" data-submenu=\"67\">
                      Bahasa
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminCurrencies&token=d32ebe667f51293e6d4a6f6405475174\" id=\"subtab-AdminCurrencies\" class=\"nav-link tab \" data-submenu=\"68\">
                      Mata Uang
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/press_shop/admin758kmbcbt/index.php/improve/international/geolocation/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\" id=\"subtab-AdminGeolocation\" class=\"nav-link tab \" data-submenu=\"69\">
                      Geolocation
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
    </div>
    
</div>
    
    <div class=\"content-div  with-tabs\">

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ayo kita mulai!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/press_shop\\/admin758kmbcbt\\/index.php?controller=AdminDashboard&token=d412a4f709340350e970ebae3b038af1\"}]},{\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"\\/press_shop\\/admin758kmbcbt\\/index.php\\/sell\\/catalog\\/products\\/new?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/press_shop\\/admin758kmbcbt\\/index.php?controller=AdminThemes&token=3b2f2ecd8221d8cb23d6642f19123982\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"\\/press_shop\\/admin758kmbcbt\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\",\"2\":\"Sesuaikan tawaran Anda dengan pasar: Tambahkan cara pembayaran untuk pelanggan!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"\\/press_shop\\/admin758kmbcbt\\/index.php\\/improve\\/payment\\/payment_methods?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dan Anda bisa memilih untuk menambahkan cara pembayaran lainnya dari sini!\",\"page\":\"\\/press_shop\\/admin758kmbcbt\\/index.php\\/improve\\/payment\\/payment_methods?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\",\"2\":\"Pilih solusi pengiriman yang paling mungkin akan cocok dengan pelanggan! Buat kurir Anda sendiri atau tambahkan modul yang siap pakai.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/press_shop\\/admin758kmbcbt\\/index.php?controller=AdminCarriers&token=e87b0609ff29710c5c35410cd36c601f\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Anda bisa menawarkan pilihan pengantaran yang lebih banyak dengan membentuk kurir tambahan\",\"page\":\"http:\\/\\/localhost\\/press_shop\\/admin758kmbcbt\\/index.php?controller=AdminCarriers&token=e87b0609ff29710c5c35410cd36c601f\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Tingkatkan toko Anda dengan modul\",\"subtitle\":{\"1\":\"Tambahkan fitur baru dan kelola fitur yang ada berkat modul.\",\"2\":\"Beberapa modul sudah terinstal, modul yang lain mungkin gratis atau berbayar - jelajahi pilihan kami dan temukan apa saja yang tersedia!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Temukan pilihan modul kami di tab pertama. Kelola modul Anda di tab kedua dan periksa pemberitahuan di tab ketiga.\",\"options\":[\"savepoint\"],\"page\":\"\\/press_shop\\/admin758kmbcbt\\/index.php\\/improve\\/modules\\/catalog?_token=4s8pZLQnTyw3EomDNQRcwck0ddRDLnROzqeLz360qH0\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\n          Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Pelatihan<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminWelcome&token=469d9d77e8452054003cad6fe3de3071\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1240
        $this->displayBlock('content_header', $context, $blocks);
        // line 1241
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1242
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1243
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1244
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Modul dan layanan yang direkomendasikan</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/press_shop/admin758kmbcbt/index.php?controller=AdminDashboard&amp;token=d412a4f709340350e970ebae3b038af1\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=press-shop%40admin.com&amp;firstname=Press&amp;lastname=Shop&amp;website=http%3A%2F%2Flocalhost%2Fpress_shop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/press_shop/admin758kmbcbt/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=press-shop%40admin.com&amp;firstname=Press&amp;lastname=Shop&amp;website=http%3A%2F%2Flocalhost%2Fpress_shop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1367
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1240
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1241
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1242
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1243
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1367
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__eec6ef31cdea331b98f26f64091e1fdf9a8f7c7c3d95bc2c5a41b5cd2d962fe3";
    }

    public function getDebugInfo()
    {
        return array (  1446 => 1367,  1441 => 1243,  1436 => 1242,  1431 => 1241,  1426 => 1240,  1417 => 84,  1409 => 1367,  1284 => 1244,  1281 => 1243,  1278 => 1242,  1275 => 1241,  1273 => 1240,  113 => 84,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__eec6ef31cdea331b98f26f64091e1fdf9a8f7c7c3d95bc2c5a41b5cd2d962fe3", "");
    }
}

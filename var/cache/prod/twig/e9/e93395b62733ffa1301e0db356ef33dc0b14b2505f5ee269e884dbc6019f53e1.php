<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__543452574bcb424afecd3d105b8fe15a5bd2095393bc1f18daf7bd9f7eebd29b */
class __TwigTemplate_33f782a3a94d268ad53e4c56a4ebdc190ff3eef27394eb25d3e3d167fa73266b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Tema & Logo > Tema • Petty</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'it';
    var lang_is_rtl = '0';
    var full_language_code = 'it';
    var full_cldr_language_code = 'it-IT';
    var country_iso_code = 'IT';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'È stato effettuato un nuovo ordine nel tuo negozio.';
    var order_number_msg = 'Numero dell\\'ordine: ';
    var total_msg = 'Totale: ';
    var from_msg = 'Da: ';
    var see_order_msg = 'Vedi quest\\'ordine';
    var new_customer_msg = 'Un nuovo cliente si è registrato nel tuo negozio.';
    var customer_name_msg = 'Nome cliente: ';
    var new_msg = 'Al tuo negozio è stato inviato un nuovo messaggio.';
    var see_msg = 'Leggi questo messaggio';
    var token = '3e737625688ec2f29be2667ad1b855c6';
    var token_admin_orders = tokenAdminOrders = 'e457bfbffc09395b9464a436d5a3e5c2';
    var token_admin_customers = 'c11ec84c160adc15a07b26adf4d0efc9';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'a628348a14a3c610cfb4b3d92ebecd86';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '62e128e31cc2fb112ff0d54f3b079052';
    var choose_language_translate = 'Scegli la lingua:';
    var default_language = '1';
    var admin_modules_link = '/admin2/index.php/improve/modules/catalog/recommended?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo';
    var admin_notification_get_link = '/admin2/index.php/common/notifications?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo'";
        // line 42
        echo ";
    var admin_notification_push_link = adminNotificationPushLink = '/admin2/index.php/common/notifications/ack?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo';
    var tab_modules_list = '';
    var update_success_msg = 'Aggiornato con successo';
    var errorLogin = 'PrestaShop non ha potuto accedere ad Addons. Si prega di controllare le tue credenziali e la tua connessione Internet.';
    var search_product_msg = 'Cerca un prodotto';
  </script>

      <link href=\"/admin2/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin2/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin2\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin2\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\";
        // line 65
        echo "u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin2/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/admin2/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin2/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin2/themes/default/js/bundle/module/module_card.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.ini";
        // line 90
        echo "tialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin2/index.php/common/notifications?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/admin2\\/index.php?controller=AdminGamification&token=7b61848f3e51dde1d591b63778745994\";
            var current_id_tab = 53;
        </script>

";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-it adminthemes\"
  data-base-url=\"/admin2/index.php\"  data-token=\"PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin2/index.php?controller=AdminDashboard&amp;token=71b0f4d0a736b37e4ec279391974f746\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accesso Veloce
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin2/index.php/improve/modules/manage?token=47ca40ccc76f553dc0e2053ab7d21ffe\"
                 data-item=\"Moduli installati\"
      >Moduli installati</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin2/index.php/sell/catalog/categories/new?token=47ca40ccc76f553dc0e2053ab7d21ffe\"
                 data-item=\"Nuova categoria\"
      >Nuova categoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin2/index.php/sell/catalog/products/new?token=47ca40ccc76f553dc0e2053ab7d21ffe\"
                 data-item=\"Nuovo prodotto\"
      >Nuovo prodotto</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin2/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=36f3d7ca8339bedfe7c6b21431dfd496\"
                 data-item=\"Nuovo voucher\"
      >Nuovo voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin2/index.php?controller=AdminOrders&am";
        // line 144
        echo "p;token=e457bfbffc09395b9464a436d5a3e5c2\"
                 data-item=\"Ordini\"
      >Ordini</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/admin2/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f7d46eb7ca339a3eb25dc2402d8b820d\"
                 data-item=\"Valutazione catalogo\"
      >Valutazione catalogo</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"75\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-2W0vzXYDar__greGjH0auejT8Ljkoo\"
        data-post-link=\"http://localhost/admin2/index.php?controller=AdminQuickAccesses&token=76d6d8981c7e40a1f2715b5f45a661f6\"
        data-prompt-text=\"Da\\' un nome a questo shortcut:\"
        data-link=\"Tema &amp; Logo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Aggiungi a QuickAccess la pagina corrente
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/admin2/index.php?controller=AdminQuickAccesses&token=76d6d8981c7e40a1f2715b5f45a661f6\">
      <i class=\"material-icons\">settings</i>
      Gestisci gli accessi rapidi
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin2/index.php?controller=AdminSearch&amp;token=56b67a10cd15d6fd7ba3b85d1f2f536f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Ricerca (es. riferimento prodotto, nome cliente...)\" aria-label=\"Barra di ricerca\">
    <div class=\"input-group-append\">
      <button type=\"button\" cl";
        // line 183
        echo "ass=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Ovunque
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Ovunque\" href=\"#\" data-value=\"0\" data-placeholder=\"Cosa hai bisogno di trovare?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Ovunque</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome prodotto, riferimento, ecc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogo</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti per nome</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per indirizzo IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti per indirizzo IP</a>
        <a class=\"dropdown-item\" data-item=\"Ordini\" href=\"#\" data-value=\"3\" data-placeholder=\"ID ordine\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Ordini</a>
        <a class=\"dropdown-item\" data-item=\"Fatture\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero fattura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Fatture</a>
        <a class=\"dropdown-item\" data-item=\"Carrelli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrello\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrelli</a>
        <a class=\"dropdown-item\" data-item=\"Moduli\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome modulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduli</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CERCA</span><i class=\"material-icons\">search</i></button>
    </div>
  </";
        // line 199
        echo "div>
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Vai al negozio</span>
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
              Ordini<span id=\"_nb_new_orders_\"></span>
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
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
   ";
        // line 259
        echo "           data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messaggi<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo ordine :(<br>
              Hai consultato i tuoi <strong><a href=\"http://localhost/admin2/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=026172b8763d410b9a869cf3f69674a4\">carrelli abbandonati</a></strong>?<br>Il tuo prossimo ordine potrebbe essere nascosto lì!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo cliente :(<br>
              Sei stato attivo sui social media in questi giorni?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora non ci sono nuovi messaggi.<br>
              Sembra che tutti i tuoi clienti siano felici :)
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
      da <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
    ";
        // line 306
        echo "  #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrato <strong>_date_add_</strong>
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
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bentornato, Marco</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin2/index.php/configure/advanced/employees/1/edit?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\">
      <i class=\"material-icons\">edit</i>
      <span>Il tuo profilo</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Risorse</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Addestramento</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&a";
        // line 339
        echo "mp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trova un Esperto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace di PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro Assistenza</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/admin2/index.php?controller=AdminLogin&amp;logout=1&amp;token=0662c60f714dfc3e09fc2f6620e4ef12\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Esci</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin2/index.php/configure/advanced/employees/toggle-navigation?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/admin2/index.php?controller=AdminDashboard&amp;token=71b0f4d0a736b37e4ec279391974f746\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pannello di controllo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title";
        // line 376
        echo "\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin2/index.php/sell/orders/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Ordini
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin2/index.php/sell/orders/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Ordini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin2/index.php/sell/orders/invoices/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Fatture
                                </a>
                              </li>

       ";
        // line 411
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin2/index.php/sell/orders/credit-slips/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin2/index.php/sell/orders/delivery-slips/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Bolle di consegna
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminCarts&amp;token=026172b8763d410b9a869cf3f69674a4\" class=\"link\"> Carrello della spesa
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin2/index.php/sell/catalog/products?_token=PRa_8eQ";
        // line 442
        echo "BVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin2/index.php/sell/catalog/products?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin2/index.php/sell/catalog/categories?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Categorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin2/index.php/sell/catalog/monitoring/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljk";
        // line 472
        echo "oo\" class=\"link\"> Monitoraggio
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminAttributesGroups&amp;token=fa46957a6d1c314d3889bb5acbef8790\" class=\"link\"> Attributi e Funzionalità
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin2/index.php/sell/catalog/brands/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Marche &amp; Fornitori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin2/index.php/sell/attachments/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                         ";
        // line 504
        echo "       <a href=\"http://localhost/admin2/index.php?controller=AdminCartRules&amp;token=36f3d7ca8339bedfe7c6b21431dfd496\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin2/index.php/sell/stocks/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Magazzino
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin2/index.php/sell/customers/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-levelt";
        // line 536
        echo "wo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin2/index.php/sell/customers/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin2/index.php/sell/addresses/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Indirizzi
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/admin2/index.php?controller=AdminCustomerThreads&amp;token=a628348a14a3c610cfb4b3d92ebecd86\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servizio clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                     ";
        // line 567
        echo "         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminCustomerThreads&amp;token=a628348a14a3c610cfb4b3d92ebecd86\" class=\"link\"> Servizio clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin2/index.php/sell/customer-service/order-messages/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Messaggi d&#039;ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminReturn&amp;token=c0dc5512ea270e2c21043130986c2996\" class=\"link\"> Restituzione Prodotto
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin2/index.php/modules/metrics/legacy/stats?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" cla";
        // line 597
        echo "ss=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiche
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin2/index.php/modules/metrics/legacy/stats?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Statistiche
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin2/index.php/modules/metrics?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
        ";
        // line 632
        echo "        <span class=\"title\">Migliora</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin2/index.php/improve/modules/manage?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduli
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin2/index.php/improve/modules/manage?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Gestione Moduli
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin2/index.php/modules/addons/modules/catalog?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Catalogo Moduli
                                </a>
                           ";
        // line 664
        echo "   </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin2/index.php/improve/design/themes/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin2/index.php/improve/design/themes/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Tema &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
              ";
        // line 694
        echo "                <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin2/index.php/modules/addons/themes/catalog?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Catalogo dei Temi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin2/index.php/improve/design/mail_theme/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin2/index.php/improve/design/cms-pages/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Pagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin2/index.php/improve/design/modules/positions/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Posizioni
                                </a>
                              </li>

                                                                                  
                       ";
        // line 724
        echo "       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminImages&amp;token=638ad2caa581cac643060c1ef489c0b5\" class=\"link\"> Impostazioni immagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin2/index.php/modules/link-widget/list?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Elenco Link
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/admin2/index.php?controller=AdminCarriers&amp;token=2ba63a63020caf213e25f6c4a58ddfbd\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Spedizione
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" cl";
        // line 755
        echo "ass=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminCarriers&amp;token=2ba63a63020caf213e25f6c4a58ddfbd\" class=\"link\"> Mezzi di spedizione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin2/index.php/improve/shipping/preferences/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin2/index.php/improve/payment/payment_methods?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                      ";
        // line 787
        echo "                      </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin2/index.php/improve/payment/payment_methods?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Metodi di Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin2/index.php/improve/payment/preferences?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin2/index.php/improve/international/localization/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internazionale
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                              ";
        // line 818
        echo "      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin2/index.php/improve/international/localization/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Localizzazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin2/index.php/improve/international/zones/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Località
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin2/index.php/improve/international/taxes/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Tasse
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"lin";
        // line 849
        echo "k-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin2/index.php/improve/international/translations/settings?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Traduzioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/admin2/index.php?controller=AdminPsfacebookModule&amp;token=62f79c1003d1678bdcb0565237b3e827\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminPsfacebookModule&amp;token=62f79c1003d1678bdcb0565237b3e827\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
              ";
        // line 880
        echo "                
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=dc211da2c916c847925e6a0e00f670e1\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configura</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin2/index.php/configure/shop/preferences/preferences?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parametri Negozio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=";
        // line 917
        echo "\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin2/index.php/configure/shop/preferences/preferences?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Generale
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin2/index.php/configure/shop/order-preferences/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Impostazioni Ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin2/index.php/configure/shop/product-preferences/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin2/index.php/configure/shop/customer-preferences/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Impostazioni clienti
                                </a>
                              </li>

                                                                  ";
        // line 946
        echo "                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin2/index.php/configure/shop/contacts/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Contatto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin2/index.php/configure/shop/seo-urls/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Traffico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminSearchConf&amp;token=5acdcf9a204411817a28bf2b81f2c42b\" class=\"link\"> Cerca
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/admin2/index.php?controller=AdminGamification&amp;token=7b61848f3e51dde1d591b63778745994\" class=\"link\"> Merchant Expertise
                                </a>
        ";
        // line 976
        echo "                      </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin2/index.php/configure/advanced/system-information/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parametri Avanzati
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin2/index.php/configure/advanced/system-information/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Informazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin2/index.php/";
        // line 1007
        echo "configure/advanced/performance/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Prestazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin2/index.php/configure/advanced/administration/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Amministrazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin2/index.php/configure/advanced/emails/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin2/index.php/configure/advanced/import/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Importa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-Admi";
        // line 1038
        echo "nParentEmployees\">
                                <a href=\"/admin2/index.php/configure/advanced/employees/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Dipendenti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin2/index.php/configure/advanced/sql-requests/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin2/index.php/configure/advanced/logs/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin2/index.php/configure/advanced/webservice-keys/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                            ";
        // line 1067
        echo "  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin2/index.php/configure/advanced/feature-flags/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" class=\"link\"> Funzionalità Sperimentali
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Tema &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema &amp; Logo &gt; Tema          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin2/index.php/improve/design/themes/import?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\"                  title=\"Aggiungi tema\"                >
                  <i class=\"material-icons\">add</i>                  Aggiungi tema
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin2/index.php/improve/design/themes/export?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\"                  title=\"Esporta il tema attuale\"                >
       ";
        // line 1116
        echo "           <i class=\"material-icons\">cloud_download</i>                  Esporta il tema attuale
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aiuto\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin2/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.7%2526country%253Dit/Aiuto?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\"
                   id=\"product_form_open_help\"
                >
                  Aiuto
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/admin2/index.php/improve/design/themes/?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"";
        // line 1140
        echo "53\">
                      Tema & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/admin2/index.php?controller=AdminPsThemeCustoConfiguration&token=f16d498d63f308d4686a9aa8480baedb\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"131\">
                      Pagine configurazione
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/admin2/index.php?controller=AdminPsThemeCustoAdvanced&token=796ece697718b5bc18906a6ed4280f9a\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"132\">
                      Personalizzazione avanzata
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ";
        // line 1163
        echo "                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin2/index.php/improve/design/themes/import?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\"              title=\"Aggiungi tema\"            >
              Aggiungi tema
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/admin2/index.php/improve/design/themes/export?_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo\"              title=\"Esporta il tema attuale\"            >
              Esporta il tema attuale
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aiuto\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin2/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.7%2526country%253Dit/Aiuto?_token=PRa_8eQBVQfE-2W0vzXYDar__";
        // line 1188
        echo "greGjH0auejT8Ljkoo\"
            >
              Aiuto
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Moduli e Servizi raccomandati',
        'Close': 'Chiudi',
      },
      recommendedModulesUrl: '/admin2/index.php/modules/addons/modules/recommended?tabClassName=AdminThemes&_token=PRa_8eQBVQfE-2W0vzXYDar__greGjH0auejT8Ljkoo',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1224
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    La versione mobile di questa pagina non è ancora disponibile.
  </p>
  <p class=\"mt-2\">
    Si prega di utilizzare un computer desktop per accedere a questa pagina, fin quando non sarà stata adattata ai dispositivi mobili.
  </p>
  <p class=\"mt-2\">
    Grazie.
  </p>
  <a href=\"http://localhost/admin2/index.php?controller=AdminDashboard&amp;token=71b0f4d0a736b37e4ec279391974f746\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Indietro
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-IT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/it/login?email=marco.salmi89%40gmail.com&amp;firstname=Marco&amp;lastname=Salmi&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin2/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Collega il tuo negozio al marketplace di PrestaShop al fine di importare automaticamente tutti i tuoi acquisti di Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t";
        // line 1272
        echo "</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Non hai ancora un account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Scopri la potenza di PrestaShop Addons! Esplora il Market Ufficiale di PrestaShop e trovi oltre 3500 moduli innovativi e temi che ottimizzano i rapporti di conversione, incrementano il traffico, fidelizzano il cliente e massimizzano i tuoi ritorni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Collegati con PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/it/forgot-your-password\">Ho dimenticato la mia password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/it/login?email=marco.salmi89%40gmail.com&amp;firstname=Marco&amp;lastname=Salmi&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrea un account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"bt";
        // line 1312
        echo "n btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Accedi
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
        // line 1332
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1224
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1332
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__543452574bcb424afecd3d105b8fe15a5bd2095393bc1f18daf7bd9f7eebd29b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1494 => 1332,  1477 => 1224,  1468 => 106,  1459 => 1332,  1437 => 1312,  1395 => 1272,  1341 => 1224,  1303 => 1188,  1276 => 1163,  1251 => 1140,  1225 => 1116,  1174 => 1067,  1143 => 1038,  1110 => 1007,  1077 => 976,  1045 => 946,  1014 => 917,  975 => 880,  942 => 849,  909 => 818,  876 => 787,  842 => 755,  809 => 724,  777 => 694,  745 => 664,  711 => 632,  674 => 597,  642 => 567,  609 => 536,  575 => 504,  541 => 472,  509 => 442,  476 => 411,  439 => 376,  400 => 339,  365 => 306,  316 => 259,  254 => 199,  236 => 183,  195 => 144,  152 => 106,  134 => 90,  107 => 65,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__543452574bcb424afecd3d105b8fe15a5bd2095393bc1f18daf7bd9f7eebd29b", "");
    }
}

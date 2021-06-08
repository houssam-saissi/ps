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

/* __string_template__438dd22b0656146434cf1baf5ff213388a93952737453761534cd54accc82585 */
class __TwigTemplate_cc52ba268f226bef3f3ea31344c756b7c3189047d7129057186612c797d4d514 extends \Twig\Template
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
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Thème et logo > Thème • Musée de Bank Al-Maghrib</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '1.7.7.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'c02b3c9e10a3a982f11a1c971c464ad7';
    var token_admin_orders = '07acedc0d12753279fe8cb26166a0fd3';
    var token_admin_customers = '5761a6f78f1863e4998ac60633c54989';
    var token_admin_customer_threads = '9c92f09e386062cc15f914c42d3c3f15';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '65b6456c06258c8b1997c29808eacbd8';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin942xnb0td/index.php/improve/modules/catalog/recommended?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo';
    var admin_notification_get_link = '/admin942xnb0td/index.php/common/notifications?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo';
    var admin_notification_push_link = '/admin942xnb0td/index.php/common/notifications/ack?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/admin942xnb0td/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin942xnb0td/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin942xnb0td\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin942xnb0td\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\";
var currency = {\"iso_code\":\"MAD\",\"sign\":\"MAD\",\"name\":\"Dirham marocain\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MAD\",\"currencySymbol\":\"MAD\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin942xnb0td/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.7.4\"></script>
<script type=\"text/javascript\" src=\"/admin942xnb0td/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.7.4\"></script>
<script type=\"text/javascript\" src=\"/admin942xnb0td/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin942xnb0td/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin942xnb0td/themes/default/js/bundle/module/module_card.js?v=1.7.7.4\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin942xnb0td/index.php/common/notifications?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/ps.wyxar.com\\/admin942xnb0td\\/index.php?controller=AdminGamification&token=b600b93eaa6790767fa874135e2e610b\";
            var current_id_tab = 53;
        </script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/admin942xnb0td/index.php\"  data-token=\"QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminDashboard&amp;token=9121f10f26d149c215b5d6c6a6068ca6\"></a>
      <span id=\"shop_version\">1.7.7.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminOrders&amp;token=07acedc0d12753279fe8cb26166a0fd3\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=5058b1872fbab0c5f6b1a08c26042a7b\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"https://ps.wyxar.com/admin942xnb0td/index.php/improve/modules/manage?token=2e75d2a5b69eca03e1827eca5a69920d\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c900685fb2131e54a2b3f8af28fdc814\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"https://ps.wyxar.com/admin942xnb0td/index.php/sell/catalog/products/new?token=2e75d2a5b69eca03e1827eca5a69920d\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"https://ps.wyxar.com/admin942xnb0td/index.php/sell/catalog/categories/new?token=2e75d2a5b69eca03e1827eca5a69920d\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"3\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-ATYkvqNo\"
        data-post-link=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminQuickAccesses&token=f1450dee9c627fe87e3f281e329a0bfe\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Th&egrave;me et logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a class=\"dropdown-item\" href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminQuickAccesses&token=f1450dee9c627fe87e3f281e329a0bfe\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin942xnb0td/index.php?controller=AdminSearch&amp;token=6d47b85e6f7f9ed480f07c5270f242cc\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://ps.wyxar.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=669588ef6aaf766b1283b50f1036eee3\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/admin%40mail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Master</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin942xnb0td/index.php/configure/advanced/employees/1/edit?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminLogin&amp;logout=1&amp;token=e3e81d893a7a70f576c968b4e7f72ba2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin942xnb0td/index.php/configure/advanced/employees/toggle-navigation?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminDashboard&amp;token=9121f10f26d149c215b5d6c6a6068ca6\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin942xnb0td/index.php/sell/orders/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin942xnb0td/index.php/sell/orders/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin942xnb0td/index.php/sell/orders/invoices/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin942xnb0td/index.php/sell/orders/credit-slips/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin942xnb0td/index.php/sell/orders/delivery-slips/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCarts&amp;token=669588ef6aaf766b1283b50f1036eee3\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin942xnb0td/index.php/sell/catalog/products?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin942xnb0td/index.php/sell/catalog/products?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin942xnb0td/index.php/sell/catalog/categories?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin942xnb0td/index.php/sell/catalog/monitoring/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminAttributesGroups&amp;token=87eb0da77bcee86bc956e9f0b095d3f0\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin942xnb0td/index.php/sell/catalog/brands/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin942xnb0td/index.php/sell/attachments/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCartRules&amp;token=c900685fb2131e54a2b3f8af28fdc814\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin942xnb0td/index.php/sell/stocks/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin942xnb0td/index.php/sell/customers/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin942xnb0td/index.php/sell/customers/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin942xnb0td/index.php/sell/addresses/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCustomerThreads&amp;token=9c92f09e386062cc15f914c42d3c3f15\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCustomerThreads&amp;token=9c92f09e386062cc15f914c42d3c3f15\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin942xnb0td/index.php/sell/customer-service/order-messages/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminReturn&amp;token=03e172786ef813bfb73926f6f5b4c85d\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminStats&amp;token=5058b1872fbab0c5f6b1a08c26042a7b\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin942xnb0td/index.php/improve/modules/manage?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin942xnb0td/index.php/improve/modules/manage?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin942xnb0td/index.php/modules/addons/modules/catalog?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin942xnb0td/index.php/improve/design/themes/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin942xnb0td/index.php/improve/design/themes/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin942xnb0td/index.php/modules/addons/themes/catalog?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin942xnb0td/index.php/improve/design/mail_theme/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin942xnb0td/index.php/improve/design/cms-pages/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin942xnb0td/index.php/improve/design/modules/positions/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminImages&amp;token=7e6be98acaa0e1322efd37f64e49a418\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin942xnb0td/index.php/modules/link-widget/list?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCarriers&amp;token=252cc8b0d770cd5b69288270c429cbab\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminCarriers&amp;token=252cc8b0d770cd5b69288270c429cbab\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin942xnb0td/index.php/improve/shipping/preferences?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin942xnb0td/index.php/improve/payment/payment_methods?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin942xnb0td/index.php/improve/payment/payment_methods?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin942xnb0td/index.php/improve/payment/preferences?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin942xnb0td/index.php/improve/international/localization/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin942xnb0td/index.php/improve/international/localization/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminZones&amp;token=138cb3fb6039ed88a2cfd49940529b3f\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin942xnb0td/index.php/improve/international/taxes/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin942xnb0td/index.php/improve/international/translations/settings?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin942xnb0td/index.php/configure/shop/preferences/preferences?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin942xnb0td/index.php/configure/shop/preferences/preferences?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin942xnb0td/index.php/configure/shop/order-preferences/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin942xnb0td/index.php/configure/shop/product-preferences/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin942xnb0td/index.php/configure/shop/customer-preferences/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin942xnb0td/index.php/configure/shop/contacts/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin942xnb0td/index.php/configure/shop/seo-urls/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminSearchConf&amp;token=7dcf071c0e73b3d28ecf3399881a40d6\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminGamification&amp;token=b600b93eaa6790767fa874135e2e610b\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin942xnb0td/index.php/configure/advanced/system-information/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/system-information/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/performance/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/administration/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/emails/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/import/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/employees/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/sql-requests/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/logs/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin942xnb0td/index.php/configure/advanced/webservice-keys/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Thème et logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin942xnb0td/index.php/improve/design/themes/import?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\"                  title=\"Ajouter un thème\"                >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin942xnb0td/index.php/improve/design/themes/export?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\"                  title=\"Exporter le thème actif\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin942xnb0td/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D1.7.7.4%2526country%253Dfr/Aide?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/admin942xnb0td/index.php/improve/design/themes/?_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Thème et logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminPsThemeCustoConfiguration&token=b3efddf4f7c26335c21cbceffc046527\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminPsThemeCustoAdvanced&token=d2e2d3022c1543e020274a57f84fabf1\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommandés',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/admin942xnb0td/index.php/modules/addons/modules/recommended?tabClassName=AdminThemes&_token=QyZN50Dtyr708FjJnW5uDgBLirpUXTDxPj-ATYkvqNo',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1130
        $this->displayBlock('content_header', $context, $blocks);
        // line 1131
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1132
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1133
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1134
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://ps.wyxar.com/admin942xnb0td/index.php?controller=AdminDashboard&amp;token=9121f10f26d149c215b5d6c6a6068ca6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=admin%40mail.com&amp;firstname=Master&amp;lastname=Developer&amp;website=http%3A%2F%2Fps.wyxar.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin942xnb0td/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=admin%40mail.com&amp;firstname=Master&amp;lastname=Developer&amp;website=http%3A%2F%2Fps.wyxar.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
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
        // line 1241
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1130
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1131
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1132
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1133
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1241
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
        return "__string_template__438dd22b0656146434cf1baf5ff213388a93952737453761534cd54accc82585";
    }

    public function getDebugInfo()
    {
        return array (  1331 => 1241,  1326 => 1133,  1321 => 1132,  1316 => 1131,  1311 => 1130,  1302 => 103,  1294 => 1241,  1185 => 1134,  1182 => 1133,  1179 => 1132,  1176 => 1131,  1174 => 1130,  143 => 103,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__438dd22b0656146434cf1baf5ff213388a93952737453761534cd54accc82585", "");
    }
}

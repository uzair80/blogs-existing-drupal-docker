<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/blogs_portal/templates/layout/page--technology-blogs.html.twig */
class __TwigTemplate_b84356980e20260bf00a4ca79d83c518bd66da9213037779a5cf12600258f926 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 125
        echo "    </header>
    ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 126)) {
            // line 127
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 128, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 133
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 133)) {
            // line 134
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 141
            echo "    ";
        }
        // line 142
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 143
        $this->displayBlock('content', $context, $blocks);
        // line 170
        echo "    </div>
    ";
        // line 171
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 171) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 171)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 171))) {
            // line 172
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 173, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
          ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
          ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 180
        echo "    <footer class=\"site-footer\">
      ";
        // line 181
        $this->displayBlock('footer', $context, $blocks);
        // line 198
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
          ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "          <div class=\"container\">
          ";
            }
            // line 79
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
              ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
              ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "          </div>
          ";
            }
            // line 89
            echo "          </nav>
        ";
        }
        // line 91
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
          ";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "          <div class=\"container\">
          ";
        }
        // line 95
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 97, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              ";
            // line 99
            echo "              <div class=\"collapse navbar-collapse justify-content-center\" id=\"CollapsingNavbar\">
                ";
            // line 100
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 101
                echo "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 106
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
                ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 107)) {
                // line 108
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 112
            echo "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 113
                echo "                  </div>
                ";
            }
            // line 115
            echo "\t          </div>
            ";
        }
        // line 117
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 118
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 120
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 121
            echo "          </div>
          ";
        }
        // line 123
        echo "        </nav>
      ";
    }

    // line 134
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 136, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 143
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 144, $this->source), "html", null, true);
        echo "\">
          ";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 147, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 153)) {
            // line 154
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 154, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 160
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 160)) {
            // line 161
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 161, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 167
        echo "          </div>
        </div>
      ";
    }

    // line 181
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 182, $this->source), "html", null, true);
        echo "\">
          ";
        // line 183
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 183) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 183)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 183)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 183))) {
            // line 184
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "
              ";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "
              ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
              ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 191
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 191)) {
            // line 192
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 196
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/blogs_portal/templates/layout/page--technology-blogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 196,  375 => 193,  372 => 192,  369 => 191,  363 => 188,  359 => 187,  355 => 186,  351 => 185,  348 => 184,  346 => 183,  341 => 182,  337 => 181,  331 => 167,  324 => 163,  318 => 161,  315 => 160,  308 => 156,  302 => 154,  300 => 153,  294 => 150,  288 => 147,  283 => 145,  278 => 144,  274 => 143,  266 => 137,  262 => 136,  259 => 135,  255 => 134,  250 => 123,  246 => 121,  243 => 120,  239 => 118,  236 => 117,  232 => 115,  228 => 113,  225 => 112,  219 => 109,  216 => 108,  214 => 107,  209 => 106,  202 => 101,  200 => 100,  197 => 99,  192 => 97,  190 => 96,  185 => 95,  181 => 93,  179 => 92,  174 => 91,  170 => 89,  166 => 87,  163 => 86,  157 => 83,  154 => 82,  152 => 81,  148 => 80,  143 => 79,  139 => 77,  137 => 76,  132 => 75,  129 => 74,  125 => 73,  118 => 198,  116 => 181,  113 => 180,  106 => 176,  102 => 175,  98 => 174,  94 => 173,  91 => 172,  89 => 171,  86 => 170,  84 => 143,  81 => 142,  78 => 141,  75 => 134,  72 => 133,  65 => 129,  61 => 128,  58 => 127,  56 => 126,  53 => 125,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.top_header: Items for the top header region.
 * - page.top_header_form: Items for the top header form region.
 * - page.header: Items for the header region.
 * - page.header_form: Items for the header form region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * Theme variables:
 * - navbar_top_attributes: Items for the header region.
 * - navbar_attributes: Items for the header region.
 * - content_attributes: Items for the header region.
 * - sidebar_first_attributes: Items for the highlighted region.
 * - sidebar_second_attributes: Items for the primary menu region.
 * - sidebar_collapse: If the sidebar_first will collapse.
 *
 * @see template_preprocess_page()
 * @see bootstrap_barrio_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"{{ 'Site header'|t}}\">
      {% block head %}
        {% if page.secondary_menu or page.top_header or page.top_header_form %}
          <nav{{ navbar_top_attributes }}>
          {% if container_navbar %}
          <div class=\"container\">
          {% endif %}
              {{ page.secondary_menu }}
              {{ page.top_header }}
              {% if page.top_header_form %}
                <div class=\"form-inline navbar-form ml-auto\">
                  {{ page.top_header_form }}
                </div>
              {% endif %}
          {% if container_navbar %}
          </div>
          {% endif %}
          </nav>
        {% endif %}
        <nav{{ navbar_attributes }}>
          {% if container_navbar %}
          <div class=\"container\">
          {% endif %}
            {{ page.header }}
            {% if page.primary_menu or page.header_form %}
              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"{{ navbar_collapse_btn_data }}\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              {# <div class=\"{{ navbar_collapse_class }}\" id=\"CollapsingNavbar\"> #}
              <div class=\"collapse navbar-collapse justify-content-center\" id=\"CollapsingNavbar\">
                {% if navbar_offcanvas %}
                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                {% endif %}
                {{ page.primary_menu }}
                {% if page.header_form %}
                  <div class=\"form-inline navbar-form justify-content-end\">
                    {{ page.header_form }}
                  </div>
                {% endif %}
                {% if navbar_offcanvas %}
                  </div>
                {% endif %}
\t          </div>
            {% endif %}
            {% if sidebar_collapse %}
              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            {% endif %}
          {% if container_navbar %}
          </div>
          {% endif %}
        </nav>
      {% endblock %}
    </header>
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"{{ container }} section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      {% block featured %}
        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section {{ container }} clearfix\" role=\"complementary\">
            {{ page.featured_top }}
          </aside>
        </div>
      {% endblock %}
    {% endif %}
    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      {% block content %}
        <div id=\"main\" class=\"{{ container }}\">
          {{ page.breadcrumb }}
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main{{ content_attributes }}>
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  {{ page.content }}
                </section>
              </main>
            {% if page.sidebar_first %}
              <div{{ sidebar_first_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_first }}
                </aside>
              </div>
            {% endif %}
            {% if page.sidebar_second %}
              <div{{ sidebar_second_attributes }}>
                <aside class=\"section\" role=\"complementary\">
                  {{ page.sidebar_second }}
                </aside>
              </div>
            {% endif %}
          </div>
        </div>
      {% endblock %}
    </div>
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"{{ container }} clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
      </div>
    {% endif %}
    <footer class=\"site-footer\">
      {% block footer %}
        <div class=\"{{ container }}\">
          {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
            <div class=\"site-footer__top clearfix\">
              {{ page.footer_first }}
              {{ page.footer_second }}
              {{ page.footer_third }}
              {{ page.footer_fourth }}
            </div>
          {% endif %}
          {% if page.footer_fifth %}
            <div class=\"site-footer__bottom\">
              {{ page.footer_fifth }}
            </div>
          {% endif %}
        </div>
      {% endblock %}
    </footer>
  </div>
</div>
", "themes/custom/blogs_portal/templates/layout/page--technology-blogs.html.twig", "/opt/drupal/web/themes/custom/blogs_portal/templates/layout/page--technology-blogs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 126);
        static $filters = array("t" => 72, "escape" => 128);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

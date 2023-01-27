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

/* themes/custom/blogs_portal/templates/content/node--pak-blogs--full.html.twig */
class __TwigTemplate_fca206022189de8ad07de6d2e6a01803e213a0a128f92bb8a6de339cca449fb9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'submitted' => [$this, 'block_submitted'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/node"), "html", null, true);
        echo "

";
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : ("")), 6 => "clearfix"];
        // line 75
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo ">
\t<header>
\t\t";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 77, $this->source), "html", null, true);
        echo "
\t\t";
        // line 78
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 79
            echo "\t\t\t<h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">
\t\t\t\t<a href=\"";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 80, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 80, $this->source), "html", null, true);
            echo "</a>
\t\t\t</h4>
\t\t";
        }
        // line 83
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 83, $this->source), "html", null, true);
        echo "
\t\t";
        // line 84
        if (($context["display_submitted"] ?? null)) {
            // line 85
            echo "\t\t\t<div class=\"node__meta\">
\t\t\t\t";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 86, $this->source), "html", null, true);
            echo "
\t\t\t\t";
            // line 87
            $this->displayBlock('submitted', $context, $blocks);
            // line 95
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 95, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 98
        echo "\t</header>
\t<div";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 99), 99, $this->source), "html", null, true);
        echo ">
\t\t";
        // line 101
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-6\">
\t\t\t\t";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_3", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_image", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-8 offset-2\">
\t\t\t\t";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pakistan_blogs", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
\t\t\t</div>

\t\t</div>
\t</div>
</article>
";
    }

    // line 87
    public function block_submitted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "\t\t\t\t\t<em";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 88, $this->source), "html", null, true);
        echo ">
\t\t\t\t\t\t";
        // line 89
        echo t("Submitted by
\t\t\t\t\t\t@author_name
\t\t\t\t\t\ton
\t\t\t\t\t\t@date", array("@author_name" =>         // line 90
($context["author_name"] ?? null), "@date" =>         // line 92
($context["date"] ?? null), ));
        // line 93
        echo "\t\t\t\t\t</em>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/blogs_portal/templates/content/node--pak-blogs--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 93,  151 => 92,  150 => 90,  146 => 89,  141 => 88,  137 => 87,  126 => 112,  117 => 106,  111 => 103,  107 => 101,  103 => 99,  100 => 98,  93 => 95,  91 => 87,  87 => 86,  84 => 85,  82 => 84,  77 => 83,  69 => 80,  64 => 79,  62 => 78,  58 => 77,  52 => 75,  50 => 71,  49 => 70,  48 => 69,  47 => 68,  46 => 67,  45 => 65,  40 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{{ attach_library('bootstrap_barrio/node') }}

{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
<article{{attributes.addClass(classes)}}>
\t<header>
\t\t{{ title_prefix }}
\t\t{% if label and not page %}
\t\t\t<h4{{title_attributes.addClass('node__title')}}>
\t\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t\t</h4>
\t\t{% endif %}
\t\t{{ title_suffix }}
\t\t{% if display_submitted %}
\t\t\t<div class=\"node__meta\">
\t\t\t\t{{ author_picture }}
\t\t\t\t{% block submitted %}
\t\t\t\t\t<em{{author_attributes}}>
\t\t\t\t\t\t{% trans %}Submitted by
\t\t\t\t\t\t{{ author_name }}
\t\t\t\t\t\ton
\t\t\t\t\t\t{{ date }}{% endtrans %}
\t\t\t\t\t</em>
\t\t\t\t{% endblock %}
\t\t\t\t{{ metadata }}
\t\t\t</div>
\t\t{% endif %}
\t</header>
\t<div{{content_attributes.addClass('node__content','clearfix')}}>
\t\t{# {{ content }} #}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-6\">
\t\t\t\t{{ content.field_title_3 }}
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t{{ content.field_blog_image }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-8 offset-2\">
\t\t\t\t{{ content.field_pakistan_blogs }}
\t\t\t</div>

\t\t</div>
\t</div>
</article>
", "themes/custom/blogs_portal/templates/content/node--pak-blogs--full.html.twig", "/opt/drupal/web/themes/custom/blogs_portal/templates/content/node--pak-blogs--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "if" => 78, "block" => 87, "trans" => 89);
        static $filters = array("escape" => 62, "clean_class" => 67);
        static $functions = array("attach_library" => 62);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'trans'],
                ['escape', 'clean_class'],
                ['attach_library']
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

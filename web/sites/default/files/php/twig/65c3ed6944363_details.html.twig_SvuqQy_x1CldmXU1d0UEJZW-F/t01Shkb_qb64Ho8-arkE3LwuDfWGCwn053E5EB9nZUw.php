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

/* core/themes/claro/templates/details.html.twig */
class __TwigTemplate_21e10ad919362f898224cb0a677da39c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/details.html.twig"));

        // line 23
        $context["classes"] = ["claro-details", ((        // line 25
($context["accordion"] ?? null)) ? ("claro-details--accordion") : ("")), ((        // line 26
($context["accordion_item"] ?? null)) ? ("claro-details--accordion-item") : ("")), (((($__internal_compile_0 =         // line 27
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#module_package_listing"] ?? null) : null)) ? ("claro-details--package-listing") : (""))];
        // line 31
        $context["content_wrapper_classes"] = ["claro-details__wrapper", "details-wrapper", ((        // line 34
($context["accordion"] ?? null)) ? ("claro-details__wrapper--accordion") : ("")), ((        // line 35
($context["accordion_item"] ?? null)) ? ("claro-details__wrapper--accordion-item") : ("")), (((($__internal_compile_1 =         // line 36
($context["element"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#module_package_listing"] ?? null) : null)) ? ("claro-details__wrapper--package-listing") : (""))];
        // line 40
        $context["inner_wrapper_classes"] = ["claro-details__content", ((        // line 42
($context["accordion"] ?? null)) ? ("claro-details__content--accordion") : ("")), ((        // line 43
($context["accordion_item"] ?? null)) ? ("claro-details__content--accordion-item") : ("")), (((($__internal_compile_2 =         // line 44
($context["element"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#module_package_listing"] ?? null) : null)) ? ("claro-details__content--package-listing") : (""))];
        // line 47
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">";
        // line 48
        if (($context["title"] ?? null)) {
            // line 50
            $context["summary_classes"] = ["claro-details__summary", ((            // line 52
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 53
($context["required"] ?? null)) ? ("form-required") : ("")), ((            // line 54
($context["accordion"] ?? null)) ? ("claro-details__summary--accordion") : ("")), ((            // line 55
($context["accordion_item"] ?? null)) ? ("claro-details__summary--accordion-item") : ("")), (((($__internal_compile_3 =             // line 56
($context["element"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#module_package_listing"] ?? null) : null)) ? ("claro-details__summary--package-listing") : (""))];
            // line 60
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            echo ">";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 61, $this->source), "html", null, true);
            // line 62
            if (($context["required"] ?? null)) {
                // line 63
                echo "<span class=\"required-mark\"></span>";
            }
            // line 65
            echo "</summary>";
        }
        // line 67
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
        echo ">
    ";
        // line 68
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 69
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            echo ">
    ";
        }
        // line 71
        echo "
      ";
        // line 72
        if (($context["errors"] ?? null)) {
            // line 73
            echo "        <div class=\"form-item form-item--error-message\">
          ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 74, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 77
        if (($context["description"] ?? null)) {
            // line 78
            echo "<div class=\"claro-details__description";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["disabled"] ?? null)) ? (" is-disabled") : ("")));
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 78, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 80
        if (($context["children"] ?? null)) {
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 81, $this->source), "html", null, true);
        }
        // line 83
        if (($context["value"] ?? null)) {
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 84, $this->source), "html", null, true);
        }
        // line 87
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 88
            echo "    </div>
    ";
        }
        // line 90
        echo "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["accordion", "accordion_item", "element", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "description", "disabled", "children", "value"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  136 => 90,  132 => 88,  130 => 87,  127 => 84,  125 => 83,  122 => 81,  120 => 80,  113 => 78,  111 => 77,  105 => 74,  102 => 73,  100 => 72,  97 => 71,  91 => 69,  89 => 68,  84 => 67,  81 => 65,  78 => 63,  76 => 62,  74 => 61,  70 => 60,  68 => 56,  67 => 55,  66 => 54,  65 => 53,  64 => 52,  63 => 50,  61 => 48,  57 => 47,  55 => 44,  54 => 43,  53 => 42,  52 => 40,  50 => 36,  49 => 35,  48 => 34,  47 => 31,  45 => 27,  44 => 26,  43 => 25,  42 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a details element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the details element.
 * - errors: (optional) Any errors for this details element, may not be set.
 * - title: (optional) The title of the element, may not be set.
 * - description: (optional) The description of the element, may not be set.
 * - children: (optional) The children of the element, may not be set.
 * - value: (optional) The value of the element, may not be set.
 * - accordion: whether the details element should look as an accordion.
 * - accordion_item: whether the details element is an item of an accordion
 *   list.
 * - disabled: whether the details is disabled.
 *
 * @see template_preprocess_details()
 * @see claro_preprocess_details()
 */
#}
{%
  set classes = [
    'claro-details',
    accordion ? 'claro-details--accordion',
    accordion_item ? 'claro-details--accordion-item',
    element['#module_package_listing'] ? 'claro-details--package-listing',
  ]
%}
{%
  set content_wrapper_classes = [
    'claro-details__wrapper',
    'details-wrapper',
    accordion ? 'claro-details__wrapper--accordion',
    accordion_item ? 'claro-details__wrapper--accordion-item',
    element['#module_package_listing'] ? 'claro-details__wrapper--package-listing',
  ]
%}
{%
  set inner_wrapper_classes = [
    'claro-details__content',
    accordion ? 'claro-details__content--accordion',
    accordion_item ? 'claro-details__content--accordion-item',
    element['#module_package_listing'] ? 'claro-details__content--package-listing',
  ]
%}
<details{{ attributes.addClass(classes) }}>
  {%- if title -%}
    {%
      set summary_classes = [
        'claro-details__summary',
        required ? 'js-form-required',
        required ? 'form-required',
        accordion ? 'claro-details__summary--accordion',
        accordion_item ? 'claro-details__summary--accordion-item',
        element['#module_package_listing'] ? 'claro-details__summary--package-listing',

    ]
    %}
    <summary{{ summary_attributes.addClass(summary_classes) }}>
      {{- title -}}
      {%- if required -%}
        <span class=\"required-mark\"></span>
      {%- endif -%}
    </summary>
  {%- endif -%}
  <div{{ content_attributes.addClass(content_wrapper_classes) }}>
    {% if accordion or accordion_item %}
    <div{{ create_attribute({class: inner_wrapper_classes}) }}>
    {% endif %}

      {% if errors %}
        <div class=\"form-item form-item--error-message\">
          {{ errors }}
        </div>
      {% endif %}
      {%- if description -%}
        <div class=\"claro-details__description{{ disabled ? ' is-disabled' }}\">{{ description }}</div>
      {%- endif -%}
      {%- if children -%}
        {{ children }}
      {%- endif -%}
      {%- if value -%}
        {{ value }}
      {%- endif -%}

    {% if accordion or accordion_item %}
    </div>
    {% endif %}
  </div>
</details>
", "core/themes/claro/templates/details.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/PlantillaWs/web/core/themes/claro/templates/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 48);
        static $filters = array("escape" => 47);
        static $functions = array("create_attribute" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute']
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
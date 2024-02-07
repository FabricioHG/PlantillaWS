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

/* core/modules/update/templates/update-project-status.html.twig */
class __TwigTemplate_52996ed92c19b9fb9927d5d5530bb8ff extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/modules/update/templates/update-project-status.html.twig"));

        // line 31
        $context["status_classes"] = [(((twig_get_attribute($this->env, $this->source,         // line 32
($context["project"] ?? null), "status", [], "any", false, false, true, 32) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 33
($context["project"] ?? null), "status", [], "any", false, false, true, 33) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-update__status--revoked") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 34
($context["project"] ?? null), "status", [], "any", false, false, true, 34) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 35
($context["project"] ?? null), "status", [], "any", false, false, true, 35) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 36
($context["project"] ?? null), "status", [], "any", false, false, true, 36) == twig_constant("Drupal\\update\\UpdateManagerInterface::CURRENT"))) ? ("project-update__status--current") : (""))];
        // line 39
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "attributes", [], "any", false, false, true, 39), "addClass", ["project-update__status", ($context["status_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
        echo ">";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 40)) {
            // line 41
            echo "<span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</span>";
        } else {
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "reason", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        }
        // line 45
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 51
        if (($context["url"] ?? null)) {
            // line 52
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 52, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 52, $this->source), "html", null, true);
            echo "</a>";
        } else {
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 54, $this->source), "html", null, true);
        }
        // line 56
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["existing_version"] ?? null), 56, $this->source), "html", null, true);
        echo "
  ";
        // line 57
        if (((($context["install_type"] ?? null) == "dev") && ($context["datestamp"] ?? null))) {
            // line 58
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["datestamp"] ?? null), 58, $this->source), "html", null, true);
            echo ")</span>
  ";
        }
        // line 60
        echo "</div>

";
        // line 62
        if (($context["versions"] ?? null)) {
            // line 63
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 64
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["version"], 64, $this->source), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 67
        echo "
";
        // line 69
        $context["extra_classes"] = [(((twig_get_attribute($this->env, $this->source,         // line 70
($context["project"] ?? null), "status", [], "any", false, false, true, 70) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SECURE"))) ? ("project-not-secure") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 71
($context["project"] ?? null), "status", [], "any", false, false, true, 71) == twig_constant("Drupal\\update\\UpdateManagerInterface::REVOKED"))) ? ("project-revoked") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 72
($context["project"] ?? null), "status", [], "any", false, false, true, 72) == twig_constant("Drupal\\update\\UpdateManagerInterface::NOT_SUPPORTED"))) ? ("project-not-supported") : (""))];
        // line 75
        echo "<div class=\"project-updates__details\">
  ";
        // line 76
        if (($context["extras"] ?? null)) {
            // line 77
            echo "    <div class=\"extra\">
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 79
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extra"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["extra_classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                echo ">
          ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["extra"], "label", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo ": ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["extra"], "data", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </div>
  ";
        }
        // line 85
        echo "  ";
        $context["includes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["includes"] ?? null), 85, $this->source), ", ");
        // line 86
        echo "  ";
        if (($context["disabled"] ?? null)) {
            // line 87
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Includes:"));
            echo "
    <ul>
      <li>
        ";
            // line 90
            echo t("Enabled: %includes", array("%includes" =>             // line 91
($context["includes"] ?? null), ));
            // line 93
            echo "      </li>
      <li>
        ";
            // line 95
            $context["disabled"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 95, $this->source), ", ");
            // line 96
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 97
($context["disabled"] ?? null), ));
            // line 99
            echo "      </li>
    </ul>
  ";
        } else {
            // line 102
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 103
($context["includes"] ?? null), ));
            // line 105
            echo "  ";
        }
        // line 106
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["project", "status", "url", "title", "existing_version", "install_type", "datestamp", "versions", "extras", "disabled"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/update/templates/update-project-status.html.twig";
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
        return array (  197 => 106,  194 => 105,  192 => 103,  190 => 102,  185 => 99,  183 => 97,  181 => 96,  179 => 95,  175 => 93,  173 => 91,  172 => 90,  165 => 87,  162 => 86,  159 => 85,  155 => 83,  144 => 80,  139 => 79,  135 => 78,  132 => 77,  130 => 76,  127 => 75,  125 => 72,  124 => 71,  123 => 70,  122 => 69,  119 => 67,  109 => 64,  104 => 63,  102 => 62,  98 => 60,  92 => 58,  90 => 57,  85 => 56,  82 => 54,  75 => 52,  73 => 51,  66 => 46,  63 => 45,  60 => 43,  55 => 41,  53 => 40,  49 => 39,  47 => 36,  46 => 35,  45 => 34,  44 => 33,  43 => 32,  42 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the project status report.
 *
 * Available variables:
 * - title: The project title.
 * - url: The project URL.
 * - status: The project status.
 *   - label: The project status label.
 *   - attributes: HTML attributes for the project status.
 *   - reason: The reason you should update the project.
 *   - icon: The project status version indicator icon.
 * - existing_version: The version of the installed project.
 * - versions: The available versions of the project.
 * - install_type: The type of project (e.g., dev).
 * - datestamp: The date/time of a project version's release.
 * - extras: HTML attributes and additional information about the project.
 *   - attributes: HTML attributes for the extra item.
 *   - label: The label for an extra item.
 *   - data: The data about an extra item.
 * - includes: The projects within the project.
 * - disabled: The currently disabled projects in the project.
 *
 * @see template_preprocess_update_project_status()
 *
 * @ingroup themeable
 */
#}
{%
  set status_classes = [
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SECURE') ? 'project-update__status--security-error',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::REVOKED') ? 'project-update__status--revoked',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SUPPORTED') ? 'project-update__status--not-supported',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_CURRENT') ? 'project-update__status--not-current',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::CURRENT') ? 'project-update__status--current',
  ]
%}
<div{{ status.attributes.addClass('project-update__status', status_classes) }}>
  {%- if status.label -%}
    <span>{{ status.label }}</span>
  {%- else -%}
    {{ status.reason }}
  {%- endif %}
  <span class=\"project-update__status-icon\">
    {{ status.icon }}
  </span>
</div>

<div class=\"project-update__title\">
  {%- if url -%}
    <a href=\"{{ url }}\">{{ title }}</a>
  {%- else -%}
    {{ title }}
  {%- endif %}
  {{ existing_version }}
  {% if install_type == 'dev' and datestamp %}
    <span class=\"project-update__version-date\">({{ datestamp }})</span>
  {% endif %}
</div>

{% if versions %}
  {% for version in versions %}
    {{ version }}
  {% endfor %}
{% endif %}

{%
  set extra_classes = [
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SECURE') ? 'project-not-secure',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::REVOKED') ? 'project-revoked',
    project.status == constant('Drupal\\\\update\\\\UpdateManagerInterface::NOT_SUPPORTED') ? 'project-not-supported',
  ]
%}
<div class=\"project-updates__details\">
  {% if extras %}
    <div class=\"extra\">
      {% for extra in extras %}
        <div{{ extra.attributes.addClass(extra_classes) }}>
          {{ extra.label }}: {{ extra.data }}
        </div>
      {% endfor %}
    </div>
  {% endif %}
  {% set includes = includes|join(', ') %}
  {% if disabled %}
    {{ 'Includes:'|t }}
    <ul>
      <li>
        {% trans %}
          Enabled: {{ includes|placeholder }}
        {% endtrans %}
      </li>
      <li>
        {% set disabled = disabled|join(', ') %}
        {% trans %}
          Disabled: {{ disabled|placeholder }}
        {% endtrans %}
      </li>
    </ul>
  {% else %}
    {% trans %}
      Includes: {{ includes|placeholder }}
    {% endtrans %}
  {% endif %}
</div>
", "core/modules/update/templates/update-project-status.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/PlantillaWs/web/core/modules/update/templates/update-project-status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 40, "for" => 63, "trans" => 90);
        static $filters = array("escape" => 39, "join" => 85, "t" => 87, "placeholder" => 91);
        static $functions = array("constant" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'trans'],
                ['escape', 'join', 't', 'placeholder'],
                ['constant']
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
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

/* core/themes/claro/templates/status-report-general-info.html.twig */
class __TwigTemplate_ccbbace4012ebe8e06038a13de9ce50e extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/claro/templates/status-report-general-info.html.twig"));

        // line 32
        echo "<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("General System Information"));
        echo "</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--drupal\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Drupal Version"));
        echo "</h3>
        ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["drupal"] ?? null), "value", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["drupal"] ?? null), "description", [], "any", false, false, true, 40)) {
            // line 41
            echo "          <div class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["drupal"] ?? null), "description", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 43
        echo "      </div>
    </div>

    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Web Server"));
        echo "</h3>
        ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webserver"] ?? null), "value", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
        ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["webserver"] ?? null), "description", [], "any", false, false, true, 51)) {
            // line 52
            echo "          <div class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["webserver"] ?? null), "description", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 54
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last Cron Run"));
        echo "</h3>
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "value", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "run_cron", [], "any", false, false, true, 61)) {
            // line 62
            echo "          <div class=\"system-status-general-info__run-cron\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "run_cron", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 64
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "description", [], "any", false, false, true, 64)) {
            // line 65
            echo "          <div class=\"system-status-general-info__description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "description", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 67
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("PHP"));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version"));
        echo "</h4>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php"] ?? null), "value", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
        ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["php"] ?? null), "description", [], "any", false, false, true, 74)) {
            // line 75
            echo "          <div class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php"] ?? null), "description", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 77
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Memory limit"));
        echo "</h4>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php_memory_limit"] ?? null), "value", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["php_memory_limit"] ?? null), "description", [], "any", false, false, true, 79)) {
            // line 80
            echo "          <div class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["php_memory_limit"] ?? null), "description", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 82
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Database"));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Version"));
        echo "</h4>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system_version"] ?? null), "value", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["database_system_version"] ?? null), "description", [], "any", false, false, true, 89)) {
            // line 90
            echo "          <div class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system_version"] ?? null), "description", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 92
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("System"));
        echo "</h4>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system"] ?? null), "value", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "
        ";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["database_system"] ?? null), "description", [], "any", false, false, true, 94)) {
            // line 95
            echo "          <div class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["database_system"] ?? null), "description", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "</div>
        ";
        }
        // line 97
        echo "      </div>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["drupal", "webserver", "cron", "php", "php_memory_limit", "database_system_version", "database_system"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/status-report-general-info.html.twig";
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
        return array (  209 => 97,  203 => 95,  201 => 94,  195 => 93,  192 => 92,  186 => 90,  184 => 89,  178 => 88,  174 => 87,  167 => 82,  161 => 80,  159 => 79,  153 => 78,  150 => 77,  144 => 75,  142 => 74,  136 => 73,  132 => 72,  125 => 67,  119 => 65,  116 => 64,  110 => 62,  108 => 61,  104 => 60,  100 => 59,  93 => 54,  87 => 52,  85 => 51,  81 => 50,  77 => 49,  69 => 43,  63 => 41,  61 => 40,  57 => 39,  53 => 38,  45 => 33,  42 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status report general info.
 *
 * Available variables:
 * - drupal: The status of Drupal installation:
 *   - value: The current status of Drupal installation.
 *   - description: The description for current status of Drupal installation.
 * - cron: The status of cron:
 *   - value: The current status of cron.
 *   - description: The description for current status of cron.
 *   - cron.run_cron: An array to render a button for running cron.
 * - database_system: The status of database system:
 *   - value: The current status of database system.
 *   - description: The description for current status of cron.
 * - database_system_version: The info about current database version:
 *   - value: The current version of database.
 *   - description: The description for current version of database.
 * - php: The current version of PHP:
 *   - value: The status of currently installed PHP version.
 *   - description: The description for current installed PHP version.
 * - php_memory_limit: The info about current PHP memory limit:
 *   - value: The status of currently set PHP memory limit.
 *   - description: The description for currently set PHP memory limit.
 * - webserver: The info about currently installed web server:
 *   - value: The status of currently installed web server.
 *   - description: The description for the status of currently installed web
 *     server.
 */
#}
<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">{{ 'General System Information'|t }}</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--drupal\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Drupal Version'|t }}</h3>
        {{ drupal.value }}
        {% if drupal.description %}
          <div class=\"description\">{{ drupal.description }}</div>
        {% endif %}
      </div>
    </div>

    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Web Server'|t }}</h3>
        {{ webserver.value }}
        {% if webserver.description %}
          <div class=\"description\">{{ webserver.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Last Cron Run'|t }}</h3>
        {{ cron.value }}
        {% if cron.run_cron %}
          <div class=\"system-status-general-info__run-cron\">{{ cron.run_cron }}</div>
        {% endif %}
        {% if cron.description %}
          <div class=\"system-status-general-info__description\">{{ cron.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'PHP'|t }}</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Version'|t }}</h4>{{ php.value }}
        {% if php.description %}
          <div class=\"description\">{{ php.description }}</div>
        {% endif %}

        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Memory limit'|t }}</h4>{{ php_memory_limit.value }}
        {% if php_memory_limit.description %}
          <div class=\"description\">{{ php_memory_limit.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item card\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Database'|t }}</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Version'|t }}</h4>{{ database_system_version.value }}
        {% if database_system_version.description %}
          <div class=\"description\">{{ database_system_version.description }}</div>
        {% endif %}

        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'System'|t }}</h4>{{ database_system.value }}
        {% if database_system.description %}
          <div class=\"description\">{{ database_system.description }}</div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
", "core/themes/claro/templates/status-report-general-info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/PlantillaWs/web/core/themes/claro/templates/status-report-general-info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40);
        static $filters = array("t" => 33, "escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
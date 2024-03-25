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

/* themes/contrib/neato/templates/base/page.html.twig */
class __TwigTemplate_d9b5fce8ec29086f917b078a6c2f0b1e extends Template
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
        // line 1
        echo "<div role=\"document\" class=\"page\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2)) {
            // line 3
            echo "    <header id=\"site-header\">
      <div class=\"outer-wrapper\">
        ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
      </div>
    </header>
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 10)) {
            // line 11
            echo "    <section id=\"featured\">
      <div class=\"columns\">
        ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 18)) {
            // line 19
            echo "    <section id=\"breadcrumb\">
      <div class=\"outer-wrapper\">
        ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 25
        echo "
  <main role=\"main\" class=\"outer-wrapper\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 29)) {
            // line 30
            echo "      <aside id=\"sidebar-first\" role=\"complementary\" class=\"sidebar\">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 34
        echo "
    <section id=\"content\">
      ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
    </section>

    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 39)) {
            // line 40
            echo "      <aside id=\"sidebar-second\" role=\"complementary\" class=\"sidebar\">
        ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 44
        echo "  </main>

  ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 46) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 46))) {
            // line 47
            echo "    <footer id=\"site-footer\" role=\"contentinfo\">
      ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 48)) {
                // line 49
                echo "        <section class=\"footer-top\">
          ";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "
        </section>
      ";
            }
            // line 53
            echo "
      ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 54)) {
                // line 55
                echo "        <section class=\"footer-bottom\">
          ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "
        </section>
      ";
            }
            // line 59
            echo "    </footer>
  ";
        }
        // line 61
        echo "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/neato/templates/base/page.html.twig";
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
        return array (  163 => 61,  159 => 59,  153 => 56,  150 => 55,  148 => 54,  145 => 53,  139 => 50,  136 => 49,  134 => 48,  131 => 47,  129 => 46,  125 => 44,  119 => 41,  116 => 40,  114 => 39,  108 => 36,  104 => 34,  98 => 31,  95 => 30,  93 => 29,  87 => 25,  80 => 21,  76 => 19,  74 => 18,  71 => 17,  64 => 13,  60 => 11,  58 => 10,  55 => 9,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/neato/templates/base/page.html.twig", "C:\\xampp\\htdocs\\SiteDrupal\\themes\\contrib\\neato\\templates\\base\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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

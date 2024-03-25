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

/* themes/contrib/neato/templates/base/html.html.twig */
class __TwigTemplate_c0d94e5cefe436031e0c8d46f92e922f extends Template
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
        // line 43
        $context["body_classes"] = [((        // line 44
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 45
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 45, $this->source))))), ((        // line 46
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 46, $this->source)))) : ("")), ((        // line 47
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 50
        echo "<!DOCTYPE html>
<html";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 51, $this->source), "html", null, true);
        echo ">
<head>
  <head-placeholder token=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 53, $this->source));
        echo "\">
  <title>";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 54, $this->source), " | "));
        echo "</title>
  <css-placeholder token=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 55, $this->source));
        echo "\">
  <js-placeholder token=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 56, $this->source));
        echo "\">
</head>
<body";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        echo ">
  <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
  </a>
  ";
        // line 62
        if (($context["page_top"] ?? null)) {
            // line 63
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 63, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["page"] ?? null)) {
            // line 67
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 67, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 69
        echo "
  ";
        // line 70
        if (($context["page_bottom"] ?? null)) {
            // line 71
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 71, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 73
        echo "
  <js-bottom-placeholder token=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 74, $this->source));
        echo "\">
</body>
</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page", "page_bottom"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/neato/templates/base/html.html.twig";
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
        return array (  113 => 74,  110 => 73,  104 => 71,  102 => 70,  99 => 69,  93 => 67,  91 => 66,  88 => 65,  82 => 63,  80 => 62,  75 => 60,  70 => 58,  65 => 56,  61 => 55,  57 => 54,  53 => 53,  48 => 51,  45 => 50,  43 => 47,  42 => 46,  41 => 45,  40 => 44,  39 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/neato/templates/base/html.html.twig", "C:\\xampp\\htdocs\\SiteDrupal\\themes\\contrib\\neato\\templates\\base\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 43, "if" => 62);
        static $filters = array("clean_class" => 45, "escape" => 51, "raw" => 53, "safe_join" => 54, "t" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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

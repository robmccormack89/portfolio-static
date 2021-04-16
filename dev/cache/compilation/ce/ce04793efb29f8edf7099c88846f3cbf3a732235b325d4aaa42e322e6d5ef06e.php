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

/* page.twig */
class __TwigTemplate_69b500f51195c49b17741e5caa11ea25f6d201be41af095c49db9715b758f315 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "page.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div id=\"Page";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["single"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" class=\"page-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["single"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
        echo " page uk-section uk-container\" data-template=\"single.twig\">
    <div class=\"uk-grid-large uk-grid\" uk-grid=\"\">

      <section class=\"left-section uk-width-2-3@m uk-first-column\">
        <article class=\"uk-article\">

          <header class=\"article-header\">
            <h1 class=\"uk-article-title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["single"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
          </header>
          
          ";
        // line 14
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["single"] ?? null), "status", [], "any", false, false, false, 14), "draft"))) {
            // line 15
            echo "            <p>
              <span class=\"uk-label uk-label-warning\">This page is in Draft mode</span>
            </p>
          ";
        }
        // line 19
        echo "          
          ";
        // line 20
        $this->displayBlock('page_content', $context, $blocks);
        // line 27
        echo "
        </article>
      </section>

      ";
        // line 31
        $this->loadTemplate("sidebar.twig", "page.twig", 31)->display($context);
        // line 32
        echo "
    </div>

  </div>
";
    }

    // line 20
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["single"] ?? null), "content", [], "any", false, false, false, 21)) {
            // line 22
            echo "              ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["single"] ?? null), "content", [], "any", false, false, false, 22), "page.twig", 22)->display($context);
            // line 23
            echo "            ";
        } else {
            // line 24
            echo "              Nothing to see here. Yet...
            ";
        }
        // line 26
        echo "          ";
    }

    public function getTemplateName()
    {
        return "page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 26,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  99 => 20,  91 => 32,  89 => 31,  83 => 27,  81 => 20,  78 => 19,  72 => 15,  70 => 14,  64 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}
  <div id=\"Page{{single.id}}\" class=\"page-{{single.id}} page uk-section uk-container\" data-template=\"single.twig\">
    <div class=\"uk-grid-large uk-grid\" uk-grid=\"\">

      <section class=\"left-section uk-width-2-3@m uk-first-column\">
        <article class=\"uk-article\">

          <header class=\"article-header\">
            <h1 class=\"uk-article-title\">{{single.title}}</h1>
          </header>
          
          {% if single.status == 'draft' %}
            <p>
              <span class=\"uk-label uk-label-warning\">This page is in Draft mode</span>
            </p>
          {% endif %}
          
          {% block page_content %}
            {% if single.content %}
              {% include single.content %}
            {% else %}
              Nothing to see here. Yet...
            {% endif %}
          {% endblock %}

        </article>
      </section>

      {% include 'sidebar.twig' %}

    </div>

  </div>
{% endblock %}

", "page.twig", "C:\\xampp\\htdocs\\static.com\\app\\views\\page\\page.twig");
    }
}
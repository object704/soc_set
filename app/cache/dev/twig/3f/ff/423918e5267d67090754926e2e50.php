<?php

/* ApplicationSonataUserBundle:Navigation_temp:job_show.html.twig */
class __TwigTemplate_3fff423918e5267d67090754926e2e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stell' => array($this, 'block_stell'),
            'glav' => array($this, 'block_glav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ApplicationSonataUserBundle:Role_template:student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->env->getExtension('security')->isGranted("ROLE_STUDENT")) {
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stell($context, array $blocks = array())
    {
        // line 5
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/job_show.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/user.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />


";
    }

    // line 12
    public function block_glav($context, array $blocks = array())
    {
        // line 13
        echo "<h2>Вакансия</h2>

<div id=\"first\">
    <p><span>Вакансия</span></p>
    ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "entity"), "name")) {
            // line 18
            echo "    <p> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</p>
    ";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "entity"), "opisanie")) {
            // line 21
            echo "    <p>Описание: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "opisanie"), "html", null, true);
            echo "</p>
    ";
        }
        // line 23
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "entity"), "navikOpit")) {
            // line 24
            echo "    <p>Опыт работы: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "navikOpit"), "html", null, true);
            echo " </p>
    ";
        }
        // line 26
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "entity"), "tipRab")) {
            // line 27
            echo "    <p>Тип зантости: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tipRab"), "html", null, true);
            echo " </p>
    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "entity"), "obazannosti")) {
            // line 30
            echo "    <p>Обязанности: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "obazannosti"), "html", null, true);
            echo " </p>
    ";
        }
        // line 32
        echo "    <p>Дата размещения: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "timeRazmech"), "Y/m/d"), "html", null, true);
        echo " </p>


</div>

";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Navigation_temp:job_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

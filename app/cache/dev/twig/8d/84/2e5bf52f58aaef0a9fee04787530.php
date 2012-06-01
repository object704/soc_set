<?php

/* ApplicationSonataUserBundle:Navigation_temp:compania_show.html.twig */
class __TwigTemplate_8d842e5bf52f58aaef0a9fee04787530 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/compania.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/user.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

";
    }

    // line 12
    public function block_glav($context, array $blocks = array())
    {
        // line 13
        echo "<h2>Компания ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</h2>

";
        // line 17
        echo "

<div id=\"logo\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/uploads/com_big2.png"), "html", null, true);
        echo " \"></div>
<div id=\"first\">
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
        echo "</p>
    <p><span>Адрес компании:</span> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adres"), "html", null, true);
        echo "</p>

    <p>Сайт: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "site"), "html", null, true);
        echo " </p>
    <p>Телефон: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telefon"), "html", null, true);
        echo " </p>


</div>
<div id=\"sot\"><h4>Сотрудники</h4> </div>
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Navigation_temp:compania_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

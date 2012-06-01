<?php

/* ApplicationSonataUserBundle:Navigation_temp:messages_show.html.twig */
class __TwigTemplate_433fcceb9ffd4d42122bb875fa61fc89 extends Twig_Template
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
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/searchDialogs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/man_card.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/people.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

";
    }

    // line 13
    public function block_glav($context, array $blocks = array())
    {
        // line 14
        echo "<h2>Диалоги</h2>
<div id=\"searchList\">

    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "mes_entity"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dialog_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">
       <div class=\"main-man-div\">
        <div class=\"foto-man-div\">
            <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "entity"), "avatar")), "html", null, true);
            echo " \">
        </div>
        <div class=\"fgs-btn-man-div\">
            <div class=\"fgs-man-div\">
                <div class=\"fio-man-div\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastName"), "html", null, true);
            echo "
                </div>
                <div class=\"grp-man-div\">

                </div>

            </div>
        </div>
    </div>
    </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "     ";
        if (($this->getContext($context, "mes_entity") == null)) {
            // line 39
            echo "    <div id=\"nothingSearched\">
        <center><br><br><br><br><br>Вам ещё никто не написал!</center>
    </div>
    ";
        }
        // line 43
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Navigation_temp:messages_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

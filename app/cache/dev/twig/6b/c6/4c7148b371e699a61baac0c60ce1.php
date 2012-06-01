<?php

/* ApplicationSonataUserBundle:Navigation_temp:people.html.twig */
class __TwigTemplate_6bc64c7148b371e699a61baac0c60ce1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/searchPeople.css"), "html", null, true);
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
        echo "<h2>Поиск людей</h2>
<div id=\"searchList\">

    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "         ";
            if ((($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getContext($context, "entity"), "id")) && ($this->getAttribute($this->getContext($context, "entity"), "role") == "ROLE_STUDENT"))) {
                // line 19
                echo "
            <div class=\"main-man-div\">
                <div class=\"foto-man-div\">
                    <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "entity"), "avatar")), "html", null, true);
                echo " \">
                </div>
                <div class=\"fgs-btn-man-div\">
                    <div class=\"fgs-man-div\">
                        <div class=\"fio-man-div\">
                            <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prosmotr", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastName"), "html", null, true);
                echo "</a>
                        </div>
                        <div class=\"grp-man-div\">
                            ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "group"), "html", null, true);
                echo "
                        </div>
                        <div class=\"status-man-div\">
                            ";
                // line 33
                if ($this->getAttribute($this->getContext($context, "entity"), "status")) {
                    // line 34
                    echo "                            Online
                            ";
                }
                // line 36
                echo "                        </div>
                    </div>
                </div>
            </div>
    ";
            }
            // line 41
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "    <div id=\"navigation\">
        ";
        // line 44
        echo $this->getAttribute($this->getContext($context, "entities"), "render", array(), "method");
        echo "
    </div>
</div>

<div id=\"searchPanel\">
    <div id=\"searchForm\">

        <form action=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("people"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "searchForm"));
        echo ">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "searchForm"));
        echo "
            <input type=\"submit\" value=\"Найти\" />
        </form>

    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Navigation_temp:people.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

<?php

/* ApplicationSonataUserBundle:Navigation_temp:jobs.html.twig */
class __TwigTemplate_bc5ca00a4b576dbe165074924368b172 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/vakansia.css"), "html", null, true);
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
        echo "<script>
    \$(function() {
        \$(\"form input.date\").datepicker({dateFormat: 'yy-mm-dd'});
    });
</script>
<h2>Поиск работы</h2>
<div id=\"searchList\">
    ";
        // line 21
        if (($this->getContext($context, "rowcount") != 0)) {
            // line 22
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 23
                echo "            <div class=\"main-man-div\">
                <div class=\"foto-man-div\">
                    <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/uploads/logo_com.png"), "html", null, true);
                echo " \">
                </div>
                <div class=\"fgs-btn-man-div\">
                    <div class=\"fgs-man-div\">
                        <div class=\"fio-man-div\">
                            В компанию  <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compania", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "compania"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "compania"), "html", null, true);
                echo "</a> требуется
                        </div>
                        <div class=\"grp-man-div\">
                            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jobs_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
                echo "</a>
                        </div>
                        <div class=\"status-man-div\">
                            ";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "timeRazmech"), "Y/m/d"), "html", null, true);
                echo "
                        </div>
                    </div>
                 </div>
            </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "
    ";
        } else {
            // line 44
            echo "        <div id=\"nothingSearched\">
                <center><br><br><br><br><br>Ничего не найдено</center>
         </div>
    ";
        }
        // line 48
        echo "</div>

<div id=\"searchPanel\">
    <div id=\"searchForm\">

        <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jobs"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "searchForm"));
        echo ">
            ";
        // line 54
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
        return "ApplicationSonataUserBundle:Navigation_temp:jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

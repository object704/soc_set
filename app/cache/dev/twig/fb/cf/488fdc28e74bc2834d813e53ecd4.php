<?php

/* ApplicationSonataUserBundle:Role_template:student.html.twig */
class __TwigTemplate_fbcf488fdc28e74bc2834d813e53ecd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stell' => array($this, 'block_stell'),
            'glav' => array($this, 'block_glav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stell($context, array $blocks = array())
    {
        // line 6
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/profile.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

    ";
    }

    // line 40
    public function block_glav($context, array $blocks = array())
    {
        // line 41
        echo "
        <h2>Измените свой профиль</h2>

        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            <input type=\"submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("prof.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
        </form>


        ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('stell', $context, $blocks);
        // line 10
        echo "

<div id=\"nav_g\">
    <ul>
        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof"), "html", null, true);
        echo "\">Профиль</a></li>
        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("people"), "html", null, true);
        echo "\">Люди</a></li>
        <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jobs"), "html", null, true);
        echo "\">Вакансии</a></li>
        <li><a href=\"#kontak\">Моё портфолио</a></li>
        <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\">Настройки</a></li>
    </ul>
</div>

<script>
    try{
    var el=document.getElementById('nav_g').getElementsByTagName('a');
    var el2=document.getElementById('nav_g').getElementsByTagName('li');
    var url=document.location.href;

    for(var i=0;i<el.length; i++){
        if (url==el[i].href){
            el2[i].className += 'active';
        };
    };
    }catch(e){}

</script>

<div id=\"content\">

    <div id=\"main\">
        ";
        // line 40
        $this->displayBlock('glav', $context, $blocks);
        // line 51
        echo "    </div>

    <div id=\"sections\">
        <h2>Навигация</h2>
        <ul>
            <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("first_page"), "html", null, true);
        echo "\">Моя страница</a></li>
            <li><a href=\"#fg\">Мои друзья</a></li>
            ";
        // line 58
        if (($this->getAttribute($this->getContext($context, "user"), "message_count") > 0)) {
            // line 59
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messages"), "html", null, true);
            echo "\">Сообщения +";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "message_count"), "html", null, true);
            echo "</a></li>
            ";
        } else {
            // line 61
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("messages"), "html", null, true);
            echo "\">Сообщения</a></li>
            ";
        }
        // line 63
        echo "            <li><a href=\"#df\">Домашние задания</a></li>
            <li><a href=\"#df\">Конспекты</a></li>
            <li><a href=\"#df\">Блог группы</a></li>
            <li><a href=\"#df\">Расписание</a></li>
            <li><a href=\"#df\">События</a></li>
            <li><a href=\"#df\">Список предметов</a></li>
            <li><a href=\"#df\">Информация о группе</a></li>
            <li><a href=\"#df\">Вебинары</a></li>
        </ul>

        <form id=\"search\" action=\"search/\" method=\"get\">
            <p>Поиск по сайту
            <p><input type=\"text\"> <button type=\"submit\">Искать</button>
        </form>
    </div>
    <script>
        try{
            var el=document.getElementById('sections').getElementsByTagName('a');
            var el2=document.getElementById('sections').getElementsByTagName('li');
            var url=document.location.href;

            for(var i=0;i<el.length; i++){
                if (url==el[i].href){
                    el2[i].className += 'active';
                };
            };
        }catch(e){}

    </script>


    <div id=\"news\">
        <h2>Ближайшие события</h2>



        <h2>Расписание на день</h2>



    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Role_template:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

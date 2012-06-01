<?php

/* ApplicationSonataUserBundle:Role_template:prepod.html.twig */
class __TwigTemplate_ecde8e45c8290229875da4474cd37480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"nav_g\">
    <ul>
        ";
        // line 7
        if ($this->env->getExtension('routing')->getPath("prof")) {
            // line 8
            echo "            <li class=\"active\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof"), "html", null, true);
            echo "\">Профиль</a></li>
        ";
        } else {
            // line 10
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof"), "html", null, true);
            echo "\">Профиль</a></li>
        ";
        }
        // line 12
        echo "        <li><a href=\"#kontakt\">Контакты</a></li>
        <li><a href=\"\">Вакансии</a></li>
        <li><a href=\"\">Настройки</a></li>
    </ul>
</div>

<div id=\"content\">

    <div id=\"main\">
        <h2>Последняя активность</h2>
    </div>

    <div id=\"sections\">
        <h2>Навигация</h2>
        <ul>
            <li><a href=\"\"><span>Моя страница</span></a></li>
            <li><a href=\"\"><span>Сообщения</span></a></li>
            <li><a href=\"\"><span>Группы</span></a></li>
            <li><a href=\"\"><span>Расписание</span></a></li>
            <li><a href=\"\"><span>Вебинары</span></a></li>
        </ul>

        <form id=\"search\" action=\"search/\" method=\"get\">
            <p>Поиск по сайту
            <p><input type=\"text\"> <button type=\"submit\">Искать</button>
        </form>
    </div>

    <div id=\"news\">
        <h2>Ближайшие события</h2>

        <h3>03.04.12</h3>
        <p>Контент. Контент. Контент. Контент. Контент. Контент.
            Контент. Контент. Контент. Контент. Контент. Контент.
        <h2>Расписание на день</h2>
        <h3>03.04.12</h3>
        <p>Календарь.Календарь.Календарь.
            Календарь.
            Календарь.

    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Role_template:prepod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

<?php

/* ApplicationSonataUserBundle:Navigation_temp:prosmotr.html.twig */
class __TwigTemplate_5db73113a02bebde302f095ebe4d9963 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/prosmotr.css"), "html", null, true);
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

    // line 13
    public function block_glav($context, array $blocks = array())
    {
        // line 14
        echo "<h2>Профиль ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastName"), "html", null, true);
        echo "</h2>
<script>
    \$(document).ready(function() {
        \$(\"a.gallery\").fancybox();
        //\$(\"#buttonFriend\").button().css(\"width\",\"200px\");
        \$(\"#sendMsgBtn\").button().css(\"width\",\"200px\");
        \$(\"#buttonFriend\").button().css(\"width\",\"200px\");
    });

    \$(document).ready(function() {

        \$(\"#sendMsgDialog\").dialog({
            autoOpen:false,
            closeOnEscape:true,
            position:[\"center\"],
            draggable:true,
            resizable:false,
            modal:false
        });

        \$(\"#sendMsgBtn\").click(function(){
            \$(\"#sendMsgDialog\").dialog(\"open\");
        });
    });

</script>






<div id=\"foto_friends_info_wall\">
    <div id=\"foto_friends\">
        <div id=\"foto\"><a class=\"gallery\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "entity"), "put")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "entity"), "put")), "html", null, true);
        echo "\"></a></div>
        <div id=\"sendMsg\"><input type=\"button\" value=\"Написать сообщение\" id=\"sendMsgBtn\"></div>
        <div id=\"friendBtnDiv\"><input type=\"button\" value=\"Добавить в друзья\" onclick=\"\" id=\"buttonFriend\" class=\"textBtn\"></div>


    </div>

</div>



<div id=\"first\">
    <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.firstName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstName"), "html", null, true);
        echo "</p>
    <p>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.lastName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastName"), "html", null, true);
        echo "</p>
    <p>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "email"), "html", null, true);
        echo " </p>
    <p>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_user_profile_form_spec", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "spec"), "html", null, true);
        echo " </p>
    <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_user_profile_form_grouppa", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "group"), "html", null, true);
        echo "


</div>
<div id=\"sendMsgDialog\" title=\"Написать сообщение\">
    <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prosmotr", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 70
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <input type=\"submit\" id=\"_submit2\" value=\"Отправить\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Navigation_temp:prosmotr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

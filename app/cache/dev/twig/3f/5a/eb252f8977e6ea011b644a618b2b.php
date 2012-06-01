<?php

/* ApplicationSonataUserBundle:Navigation_temp:first_page.html.twig */
class __TwigTemplate_3f5aeb252f8977e6ea011b644a618b2b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/userbundle/css/first.css"), "html", null, true);
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
        echo "<h2>Ваш профиль</h2>
<script>
    \$(document).ready(function() {
        \$(\"a.gallery\").fancybox();
        //\$(\"#buttonFriend\").button().css(\"width\",\"200px\");
        \$(\"#changeFotoBtn\").button().css(\"width\",\"200px\");
    });

</script>

";
        // line 25
        echo "



<div id=\"foto_friends_info_wall\">
    <div id=\"foto_friends\">
        <div id=\"foto\"><a class=\"gallery\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "user"), "put")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "user"), "put")), "html", null, true);
        echo "\"></a></div>

        <div id=\"changeFoto\"><input type=\"button\" class=\"textBtn\" id=\"changeFotoBtn\" value=\"Сменить фото\"></div>

    </div>

</div>
<div id=\"changeFotoDialog\" title=\"Сменить фото\">
    <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("first_page"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "


        <input type=\"submit\" value=\"Загрузить\" />
    </form>
</div>


<div id=\"first\">
    <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.firstName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "firstName"), "html", null, true);
        echo "</p>
    <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.lastName", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "lastName"), "html", null, true);
        echo "</p>

    <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_user_profile_form_spec", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "spec"), "html", null, true);
        echo " </p>
    <p>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos_user_profile_form_grouppa", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "group"), "html", null, true);
        echo " </p>


</div>

";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Navigation_temp:first_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

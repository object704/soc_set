<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_3926ff83c926f5cebc3e3f1dbcd91c39 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\" class=\"edit_link\" title=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_edit", array(), "SonataAdminBundle");
            echo "\">
        <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/page_white_edit.png"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("action_edit", array(), "SonataAdminBundle");
            echo "\" />
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

<?php

/* SimpleThingsEntityAuditBundle:Audit:index.html.twig */
class __TwigTemplate_0b6029e4c660566f6273173a46b5b11e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'simplethings_entityaudit_content' => array($this, 'block_simplethings_entityaudit_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SimpleThingsEntityAuditBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_simplethings_entityaudit_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Revisions</h1>

<ul>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewrevision", array("rev" => $this->getAttribute($this->getContext($context, "revision"), "rev"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "timestamp"), "r"), "html", null, true);
            echo " -- ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "revision", true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "revision", true), "username"), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

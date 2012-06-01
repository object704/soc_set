<?php

/* SimpleThingsEntityAuditBundle:Audit:view_entity.html.twig */
class __TwigTemplate_324cd1eca02b324c7ede1987b135afa0 extends Twig_Template
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
        echo "<h1>Change history for ";
        echo twig_escape_filter($this->env, $this->getContext($context, "className"), "html", null, true);
        echo " with identifiers of ";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "</h1>

<p><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_home"), "html", null, true);
        echo "\">Home</a></p>

<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_compare", array("className" => $this->getContext($context, "className"), "id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"get\">
<table>
    <thead>
    <tr>
        <th colspan=\"3\">&nbsp;</th>
        <th colspan=\"2\">Compare</th>
    </tr>
    <tr>
        <th>Revision</th>
        <th>Date</th>
        <th>User</th>
        <th>Old</th>
        <th>New</th>
    </tr>
    </thead>
    <tbody>

";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 26
            echo "    <tr>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("simple_things_entity_audit_viewentity_detail", array("rev" => $this->getAttribute($this->getContext($context, "revision"), "rev"), "className" => $this->getContext($context, "className"), "id" => $this->getContext($context, "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "</a></td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "timestamp"), "r"), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "revision", true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "revision", true), "username"), "Anonymous")) : ("Anonymous")), "html", null, true);
            echo "</td>

        <td><input type=\"radio\" name=\"oldRev\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                echo " checked=\"checked\"";
            }
            echo " /></td>
        <td><input type=\"radio\" name=\"newRev\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                echo " checked=\"checked\"";
            }
            echo " /></td>
    </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "    </tbody>
</table>

    <input type=\"submit\" value=\"Compare Revisions\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "SimpleThingsEntityAuditBundle:Audit:view_entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

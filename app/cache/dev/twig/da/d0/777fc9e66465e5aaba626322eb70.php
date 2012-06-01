<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_dad0777fc9e66465e5aaba626322eb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'batch' => array($this, 'block_batch'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 18
            echo "                <li class=\"btn\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "        </ul>
    </div>
";
    }

    // line 24
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array(), "list");
    }

    // line 31
    public function block_table_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <thead>
                        <tr class=\"sonata-ba-list-field-header\">
                            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 35
            echo "                                ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "getOption", array(0 => "code"), "method") == "_batch") && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 36
                echo "                                    <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                      <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                    </th>
                                ";
            } else {
                // line 40
                echo "                                    ";
                $context["sortable"] = false;
                // line 41
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"))) {
                    // line 42
                    echo "                                        ";
                    $context["sortable"] = true;
                    // line 43
                    echo "                                        ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by") == $this->getAttribute($this->getContext($context, "field_description"), "name"));
                    // line 44
                    echo "                                        ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "sortparameters", array(0 => $this->getContext($context, "field_description"), 1 => $this->getAttribute($this->getContext($context, "admin"), "datagrid")), "method");
                    // line 45
                    echo "                                        ";
                    $context["sort_active_class"] = (($this->getContext($context, "current")) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 46
                    echo "                                        ";
                    $context["sort_by"] = (($this->getContext($context, "current")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "_sort_order")));
                    // line 47
                    echo "                                    ";
                }
                // line 48
                echo "
                                    ";
                // line 49
                ob_start();
                // line 50
                echo "                                        <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
                echo " ";
                if ($this->getContext($context, "sortable")) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, "sort_by")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "sort_active_class"), "html", null, true);
                }
                echo "\">
                                            ";
                // line 51
                if ($this->getContext($context, "sortable")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getContext($context, "sort_parameters")), "method"), "html", null, true);
                    echo "\">";
                }
                // line 52
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "field_description"), "label")), "method"), "html", null, true);
                echo "
                                            ";
                // line 53
                if ($this->getContext($context, "sortable")) {
                    echo "</a>";
                }
                // line 54
                echo "                                        </th>
                                    ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 56
                echo "                                ";
            }
            // line 57
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "                        </tr>
                    </thead>
                ";
    }

    // line 62
    public function block_table_body($context, array $blocks = array())
    {
        // line 63
        echo "                    <tbody>
                        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 65
            echo "                            <tr>
                                ";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 67
                echo "                                    ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getContext($context, "field_description"));
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 69
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "                    </tbody>
                ";
    }

    // line 74
    public function block_table_footer($context, array $blocks = array())
    {
        // line 75
        echo "                    <tr>
                        <th colspan=\"";
        // line 76
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")) - (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? (2) : (1))), "html", null, true);
        echo "\">
                            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "

                            ";
        // line 79
        if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method")) > 0)) {
            // line 80
            echo "                                -
                                ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "getExportFormats", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 83
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 0), "method") + array("format" => $this->getContext($context, "format")))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "format"), "html", null, true);
                echo "</a>";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ",";
                }
                // line 84
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 85
            echo "                            ";
        }
        // line 86
        echo "                        </th>

                        <th>
                            ";
        // line 89
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 90
        echo "                        </th>
                    </tr>

                    ";
        // line 93
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 94
            echo "                        <tr>
                            <td colspan=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")), "html", null, true);
            echo "\" class=\"pager\">

                                <div class=\"pagination\">
                                    <ul>

                                        ";
            // line 100
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != 1)) {
                // line 101
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_first_pager", array(), "SonataAdminBundle");
                echo "\">&laquo;</a></li>
                                        ";
            }
            // line 103
            echo "
                                        ";
            // line 104
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"))) {
                // line 105
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_previous_pager", array(), "SonataAdminBundle");
                echo "\">&lsaquo;</a></li>
                                        ";
            }
            // line 107
            echo "
                                        ";
            // line 109
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "getLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 110
                echo "                                            ";
                if (($this->getContext($context, "page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"))) {
                    // line 111
                    echo "                                                <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                            ";
                } else {
                    // line 113
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 115
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 116
            echo "
                                        ";
            // line 117
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"))) {
                // line 118
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_next_pager", array(), "SonataAdminBundle");
                echo "\">&rsaquo;</a></li>
                                        ";
            }
            // line 120
            echo "
                                        ";
            // line 121
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage"))) {
                // line 122
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_last_pager", array(), "SonataAdminBundle");
                echo "\">&raquo;</a></li>
                                        ";
            }
            // line 124
            echo "
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    ";
        }
        // line 131
        echo "                ";
    }

    // line 137
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 138
        echo "                            jQuery(document).ready(function(\$){
                               \$('#list_batch_checkbox').click(function(){
                                   \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked')).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                               });
                               \$(\"td.sonata-ba-list-field-batch input[type='checkbox']\").change(function(){
                                   \$(this).parent().parent().toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'));
                               });
                            });
                        ";
    }

    // line 150
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 151
        echo "                            <select name=\"action\">
                                ";
        // line 152
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "batchactions"));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 153
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "label"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 155
        echo "                            </select>

                            <label>
                                <input type=\"checkbox\" name=\"all_elements\"/>
                                ";
        // line 159
        echo $this->env->getExtension('translator')->getTranslator()->trans("all_elements", array(), "SonataAdminBundle");
        // line 160
        echo "                            </label>

                            <input type=\"submit\" class=\"btn primary\" value=\"";
        // line 162
        echo $this->env->getExtension('translator')->getTranslator()->trans("btn_batch", array(), "SonataAdminBundle");
        echo "\" />
                        ";
    }

    // line 135
    public function block_batch($context, array $blocks = array())
    {
        // line 136
        echo "                    <script type=\"text/javascript\">
                        ";
        // line 137
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 147
        echo "                    </script>

                    <div class=\"actions sonata-ba-list-actions\">
                        ";
        // line 150
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 164
        echo "                    </div>
                ";
    }

    // line 26
    public function block_list_table($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["batchactions"] = $this->getAttribute($this->getContext($context, "admin"), "batchactions");
        // line 28
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results")) > 0)) {
            // line 29
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "batch", 1 => $this->getAttribute($this->getContext($context, "admin"), "filterParameters")), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <table class=\"zebra-striped bordered-table\">
                ";
            // line 31
            $this->displayBlock('table_header', $context, $blocks);
            // line 61
            echo "
                ";
            // line 62
            $this->displayBlock('table_body', $context, $blocks);
            // line 73
            echo "
                ";
            // line 74
            $this->displayBlock('table_footer', $context, $blocks);
            // line 132
            echo "            </table>

            ";
            // line 134
            if ((twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0)) {
                // line 135
                echo "                ";
                $this->displayBlock('batch', $context, $blocks);
                // line 166
                echo "            ";
            }
            // line 167
            echo "        </form>
    ";
        } else {
            // line 169
            echo "        <p class=\"notice\">
          ";
            // line 170
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_result", array(), "SonataAdminBundle");
            // line 171
            echo "        </p>
    ";
        }
    }

    // line 175
    public function block_list_filters($context, array $blocks = array())
    {
        // line 176
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 177
            echo "        <form class=\"sonata-filter-form form-stacked ";
            echo ((($this->getAttribute($this->getContext($context, "admin"), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 179
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_filters", array(), "SonataAdminBundle");
            echo "</legend>

                <div class=\"filter_container ";
            // line 181
            echo (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <table class=\"bordered-table\">
                        ";
            // line 183
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 184
                echo "                        <tr id=\"filter_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "filter"), "name"), "html", null, true);
                echo "_row\" class=\"filter ";
                echo (($this->getAttribute($this->getContext($context, "filter"), "isActive")) ? ("active") : ("inactive"));
                echo "\">
                                <td class=\"filter-title\">";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getAttribute($this->getContext($context, "filter"), "label")), "method"), "html", null, true);
                echo "</td>
                                <td class=\"filter-type\">";
                // line 186
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getChild", array(0 => $this->getAttribute($this->getContext($context, "filter"), "formName")), "method"), "getChild", array(0 => "type"), "method"));
                echo "</td>
                                <td class=\"filter-value\">";
                // line 187
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getChild", array(0 => $this->getAttribute($this->getContext($context, "filter"), "formName")), "method"), "getChild", array(0 => "value"), "method"));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 190
            echo "                    </table>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 194
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getChild", array(0 => "_page"), "method"), "setRendered", array(), "method");
            // line 195
            echo "                    ";
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

                    <input type=\"submit\" class=\"btn primary\" value=\"";
            // line 197
            echo $this->env->getExtension('translator')->getTranslator()->trans("btn_filter", array(), "SonataAdminBundle");
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_reset_filter", array(), "SonataAdminBundle");
            echo "</a>

                </div>
            </fieldset>

        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

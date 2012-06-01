<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_270d6a4bf43f4c92b915f5a6f8c4ab42 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" >
            ";
            // line 19
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 20
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "sonata_admin"), "inline") == "table")) {
                    // line 21
                    echo "                    ";
                    if ($this->getAttribute($this->getContext($context, "form"), "getChildren", array(), "method")) {
                        // line 22
                        echo "                        <table class=\"bordered-table\">
                            <thead>
                                <tr>
                                    ";
                        // line 25
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getChild", array(0 => 0), "method"), "getChildren", array(), "method"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 26
                            echo "                                        ";
                            if (($this->getContext($context, "field_name") == "_delete")) {
                                // line 27
                                echo "                                            <th>";
                                echo $this->env->getExtension('translator')->getTranslator()->trans("action_delete", array(), "SonataAdminBundle");
                                echo "</th>
                                        ";
                            } else {
                                // line 29
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "get", array(0 => "sonata_admin"), "method"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "label")), "method"), "html", null, true);
                                echo "</th>
                                        ";
                            }
                            // line 31
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 32
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 35
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "getChildren", array(), "method"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 36
                            echo "                                    <tr>
                                        ";
                            // line 37
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "getChildren", array(), "method"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 38
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "field_name"), "html", null, true);
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "errors")) > 0)) {
                                    echo " clearfix error";
                                }
                                echo "\">
                                                ";
                                // line 39
                                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                                    // line 40
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"));
                                    echo "

                                                    ";
                                    // line 42
                                    $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                    // line 43
                                    echo "                                                ";
                                } else {
                                    // line 44
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"));
                                    echo "
                                                ";
                                }
                                // line 46
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "vars"), "errors")) > 0)) {
                                    // line 47
                                    echo "                                                    <div class=\"sonata-ba-field-error-messages\">
                                                        ";
                                    // line 48
                                    echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "nested_field"));
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 51
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 53
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 55
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 58
                    echo "                ";
                } elseif ($this->getAttribute($this->getContext($context, "form"), "getChildren", array(), "method")) {
                    // line 59
                    echo "                    <div>
                        ";
                    // line 60
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "getChildren", array(), "method"));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 61
                        echo "                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "getChildren", array(), "method"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 62
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                                // line 63
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"), array("inline" => "natural", "edit" => "inline"));
                                // line 66
                                echo "
                                    ";
                                // line 67
                                $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                // line 68
                                echo "                                ";
                            } else {
                                // line 69
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"));
                                echo "
                                ";
                            }
                            // line 71
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 72
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 73
                    echo "                    </div>
                ";
                }
                // line 75
                echo "            ";
            } else {
                // line 76
                echo "                ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
                echo "
            ";
            }
            // line 78
            echo "
        </span>

        ";
            // line 81
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 82
                echo "
            ";
                // line 83
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                    // line 84
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(this);\"
                        class=\"sonata-ba-action\"
                        title=\"";
                    // line 89
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "\"
                        >
                        <img
                            src=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                    echo "\"
                            alt=\"";
                    // line 93
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "\"
                         />
                    </a>
                </span>
            ";
                }
                // line 98
                echo "
            ";
                // line 100
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 101
                    echo "                <script type=\"text/javascript\">
                    jQuery('div#field_container_";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "sortable"), "html", null, true);
                    echo "').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "sortable"), "html", null, true);
                    echo " input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 133
                echo "
            ";
                // line 135
                echo "            ";
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 136
                echo "
        ";
            } else {
                // line 138
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 139
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                    // line 140
                    echo "                    <a
                        href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(this);\"
                        class=\"sonata-ba-action\"
                        title=\"";
                    // line 144
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "\"
                        >
                        <img
                            src=\"";
                    // line 147
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                    echo "\"
                            alt=\"";
                    // line 148
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "\"
                         />
                    </a>
                ";
                }
                // line 152
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 154
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\">

            </div>

            ";
                // line 158
                $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 159
                echo "        ";
            }
            // line 160
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

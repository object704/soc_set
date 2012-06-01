<?php

/* ShtumiUsefulBundle::fields.html.twig */
class __TwigTemplate_d0e999d4aa1603ba4d1d8eae96ca8b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'type_ajax_autocomplete_widget' => array($this, 'block_type_ajax_autocomplete_widget'),
            'dependent_filtered_entity_widget' => array($this, 'block_dependent_filtered_entity_widget'),
            'daterange_widget' => array($this, 'block_daterange_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('type_ajax_autocomplete_widget', $context, $blocks);
        // line 66
        echo "

";
        // line 68
        $this->displayBlock('dependent_filtered_entity_widget', $context, $blocks);
        // line 109
        echo "

";
        // line 111
        $this->displayBlock('daterange_widget', $context, $blocks);
    }

    // line 1
    public function block_type_ajax_autocomplete_widget($context, array $blocks = array())
    {
        // line 2
        echo "
    <script type=\"text/javascript\">
        if (typeof jQuery.ui == 'undefined'){
            \$.getScript('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/shtumiuseful/js/jqueryui/jquery-ui-1.8.18.custom.min.js"), "html", null, true);
        echo "');
        }

    </script>

    <script>
        \$(function() {

            \$( \"#";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getVars", array(), "method"), "id"), "html", null, true);
        echo "\"  ).autocomplete({
                source: function( request, response ) {
                    \$.ajax({
                        url: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shtumi_ajaxautocomplete"), "html", null, true);
        echo "\",
                        dataType: \"json\",
                        data: {
                            maxRows: 12,
                            letters: request.term,
                            entity_alias: \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "entity_alias"), "html", null, true);
        echo "\"
                        },
                        success: function( data ) {
                            response( \$.map( data, function( item ) {
                                return {
                                    label: item,
                                    value: item
                                }
                            }));
                        }
                    });
                },
                minLength: 2,
                open: function() {
                    \$( this ).removeClass( \"ui-corner-all\" ).addClass( \"ui-corner-top\" );
                },
                close: function() {
                    \$( this ).removeClass( \"ui-corner-top\" ).addClass( \"ui-corner-all\" );
                }
            });

        });
    </script>

    <style>
        .ui-autocomplete {
            max-height: 100px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        }
            /* IE 6 doesn't support max-height
           * we use height instead, but this forces the menu to always be this tall
           */
        * html .ui-autocomplete {
            height: 100px;
        }
    </style>


    ";
        // line 63
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "

";
    }

    // line 68
    public function block_dependent_filtered_entity_widget($context, array $blocks = array())
    {
        // line 69
        echo "
    <select ";
        // line 70
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "></select>

    <img src='";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/images/ajax-loader.gif"), "html", null, true);
        echo "' id='loader' style='display: none;'>
    <script type=\"text/javascript\">
        \$(document).ready(function(){

            \$(\"select#";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "getChild", array(0 => $this->getContext($context, "parent_field")), "method"), "getVars", array(), "method"), "id"), "html", null, true);
        echo "\").change( function() {
                var selected_index = ";
        // line 77
        echo twig_escape_filter($this->env, (($this->getContext($context, "value")) ? ($this->getContext($context, "value")) : (0)), "html", null, true);
        echo ";
                \$(\"#loader\").show();
                \$.ajax({
                    type: \"POST\",
                    data: {
                        parent_id: \$(this).val(),
                        entity_alias: \"";
        // line 83
        echo twig_escape_filter($this->env, $this->getContext($context, "entity_alias"), "html", null, true);
        echo "\",
                        empty_value: \"";
        // line 84
        echo twig_escape_filter($this->env, $this->getContext($context, "empty_value"), "html", null, true);
        echo "\"
                    },
                    url:\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("shtumi_dependent_filtered_entity"), "html", null, true);
        echo "\",
                    success: function(msg){
                        if (msg != ''){
                            \$(\"select#";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getVars", array(), "method"), "id"), "html", null, true);
        echo "\").html(msg).show();
                            \$.each(\$(\"select#";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getVars", array(), "method"), "id"), "html", null, true);
        echo " option\"), function (index, option){
                                if (\$(option).val() == selected_index)
                                    \$(option).attr('selected', 'selected');
                            })
                            \$(\"#loader\").hide();
                        }
                        else
                        {
                            \$(\"select#";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getVars", array(), "method"), "id"), "html", null, true);
        echo "\").html('<em>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "no_result_msg")), "html", null, true);
        echo "</em>');
                            \$(\"#loader\").hide();
                        }
                    }
                });
            });
            \$(\"select#";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "getChild", array(0 => $this->getContext($context, "parent_field")), "method"), "getVars", array(), "method"), "id"), "html", null, true);
        echo "\").trigger('change');
        });
    </script>

";
    }

    // line 111
    public function block_daterange_widget($context, array $blocks = array())
    {
        // line 112
        echo "
    <style type=\"text/css\">@import \"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/js/datepicker/jquery.datepick.css"), "html", null, true);
        echo "\";</style>
    <style type=\"text/css\">@import \"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/css/daterange.css"), "html", null, true);
        echo "\";</style>
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/js/datepicker/jquery.datepick.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/shtumiuseful/js/datepicker/jquery.datepick-" . twig_slice($this->env, $this->getContext($context, "locale"), 0, 2)) . ".js")), "html", null, true);
        echo "\"></script>

    <script>
        \$(function(){
            \$('input#";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "getVars", array(), "method"), "id"), "html", null, true);
        echo "').datepick({
                rangeSelect: true, monthsToShow: 2, showTrigger: '#calImg', dateFormat: '";
        // line 121
        echo twig_escape_filter($this->env, $this->getContext($context, "datepicker_date_format"), "html", null, true);
        echo "' });
        })
    </script>

    <input ";
        // line 125
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" class=\"shtumi-daterange\">

    <div style=\"display: none;\">
        <img id=\"calImg\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/shtumiuseful/js/datepicker/calendar-green.gif"), "html", null, true);
        echo "\" alt=\"Popup\" class=\"trigger\" height='22' align='absmiddle' style='margin-left: 10px;'>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ShtumiUsefulBundle::fields.html.twig";
    }

}

<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_b802fa3389610b74d988a1db7e03f81d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'generic_label' => array($this, 'block_generic_label'),
            'field_label' => array($this, 'block_field_label'),
            'form_label' => array($this, 'block_form_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_row' => array($this, 'block_field_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'field_enctype' => array($this, 'block_field_enctype'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_rest' => array($this, 'block_field_rest'),
            'field_rows' => array($this, 'block_field_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('date_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('time_widget', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('number_widget', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('money_widget', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('url_widget', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('search_widget', $context, $blocks);
        // line 145
        echo "
";
        // line 146
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('field_widget', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('password_widget', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 171
        echo "
";
        // line 172
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        echo "
";
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('generic_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('field_label', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('field_row', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 235
        echo "
";
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('field_enctype', $context, $blocks);
        // line 243
        echo "
";
        // line 244
        $this->displayBlock('field_errors', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('field_rest', $context, $blocks);
        // line 273
        echo "
";
        // line 275
        echo "
";
        // line 276
        $this->displayBlock('field_rows', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('widget_container_attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 15
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->env->getExtension('form')->renderRow($this->getContext($context, "prototype"))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 23
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 30
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 32
                echo "            <li>
                ";
                // line 33
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"), null, array("in_list_checkbox" => true, "widget" => $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "        </ul>
    ";
        } else {
            // line 38
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 39
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 40
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 42
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 43
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 44
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 45
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 46
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 48
                echo "        ";
            }
            // line 49
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 50
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 56
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 57
        ob_start();
        // line 58
        echo "    <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 68
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 69
        ob_start();
        // line 70
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 71
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 73
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 74
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 75
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
            ";
            // line 76
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 77
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 86
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 88
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 89
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "year")), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "month")), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "day"))));
            // line 93
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 99
    public function block_time_widget($context, array $blocks = array())
    {
        // line 100
        ob_start();
        // line 101
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 102
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 104
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 105
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "hour"), array("attr" => array("size" => "1")));
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "minute"), array("attr" => array("size" => "1")));
            if ($this->getContext($context, "with_seconds")) {
                echo ":";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "second"), array("attr" => array("size" => "1")));
            }
            // line 106
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 111
    public function block_number_widget($context, array $blocks = array())
    {
        // line 112
        ob_start();
        // line 113
        echo "    ";
        // line 114
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 115
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 119
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 120
        ob_start();
        // line 121
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "number")) : ("number"));
        // line 122
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 126
    public function block_money_widget($context, array $blocks = array())
    {
        // line 127
        ob_start();
        // line 128
        echo "    ";
        echo strtr($this->getContext($context, "money_pattern"), array("{{ widget }}" => $this->renderBlock("field_widget", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 132
    public function block_url_widget($context, array $blocks = array())
    {
        // line 133
        ob_start();
        // line 134
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "url")) : ("url"));
        // line 135
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 139
    public function block_search_widget($context, array $blocks = array())
    {
        // line 140
        ob_start();
        // line 141
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "search")) : ("search"));
        // line 142
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 146
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 147
        ob_start();
        // line 148
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 149
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 153
    public function block_field_widget($context, array $blocks = array())
    {
        // line 154
        ob_start();
        // line 155
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 156
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 160
    public function block_password_widget($context, array $blocks = array())
    {
        // line 161
        ob_start();
        // line 162
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "password")) : ("password"));
        // line 163
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 167
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 168
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "hidden")) : ("hidden"));
        // line 169
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
    }

    // line 172
    public function block_email_widget($context, array $blocks = array())
    {
        // line 173
        ob_start();
        // line 174
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "email")) : ("email"));
        // line 175
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 181
    public function block_generic_label($context, array $blocks = array())
    {
        // line 182
        ob_start();
        // line 183
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 184
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " required")));
            // line 185
            echo "    ";
        }
        // line 186
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
            // line 187
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">
            ";
            // line 188
            echo $this->getContext($context, "widget");
            echo "
            <span>
                ";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 194
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 199
    public function block_field_label($context, array $blocks = array())
    {
        // line 200
        ob_start();
        // line 201
        echo "    ";
        $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("for" => $this->getContext($context, "id")));
        // line 202
        echo "    ";
        $this->displayBlock("generic_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 206
    public function block_form_label($context, array $blocks = array())
    {
        // line 207
        ob_start();
        // line 208
        echo "    ";
        $this->displayBlock("generic_label", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 214
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 215
        ob_start();
        // line 216
        echo "    ";
        $this->displayBlock("field_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 220
    public function block_field_row($context, array $blocks = array())
    {
        // line 221
        ob_start();
        // line 222
        echo "    <div class=\"clearfix ";
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"))))) ? ("error") : (""));
        echo " \">
        ";
        // line 223
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null)));
        echo "
        <div class=\"input\">
            ";
        // line 225
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
            ";
        // line 226
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 232
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 233
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
";
    }

    // line 238
    public function block_field_enctype($context, array $blocks = array())
    {
        // line 239
        ob_start();
        // line 240
        echo "    ";
        if ($this->getContext($context, "multipart")) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 244
    public function block_field_errors($context, array $blocks = array())
    {
        // line 245
        ob_start();
        // line 246
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 247
            echo "        ";
            if (((!$this->getAttribute($this->getContext($context, "form"), "hasParent")) || twig_in_filter("repeated", $this->getAttribute($this->getContext($context, "form"), "get", array(0 => "types"), "method")))) {
                // line 248
                echo "            <div class=\"clearfix error\">
        ";
            }
            // line 250
            echo "        <span class=\"help-inline\">
            ";
            // line 251
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 252
                echo "                ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    // line 253
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 255
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 256
            echo "        </span>
        ";
            // line 257
            if (((!$this->getAttribute($this->getContext($context, "form"), "hasParent")) || twig_in_filter("repeated", $this->getAttribute($this->getContext($context, "form"), "get", array(0 => "types"), "method")))) {
                // line 258
                echo "            </div>
        ";
            }
            // line 260
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 264
    public function block_field_rest($context, array $blocks = array())
    {
        // line 265
        ob_start();
        // line 266
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 267
            echo "        ";
            if ((!$this->getAttribute($this->getContext($context, "child"), "rendered"))) {
                // line 268
                echo "            ";
                echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
                echo "
        ";
            }
            // line 270
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 276
    public function block_field_rows($context, array $blocks = array())
    {
        // line 277
        ob_start();
        // line 278
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    ";
        // line 279
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 280
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, "child"));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 285
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 286
        ob_start();
        // line 287
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "full_name"), "html", null, true);
        echo "\"";
        if ($this->getContext($context, "read_only")) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, "required")) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, "max_length")) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "max_length"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "pattern")) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "pattern"), "html", null, true);
            echo "\"";
        }
        // line 288
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 292
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 293
        ob_start();
        // line 294
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
    ";
        // line 295
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

}

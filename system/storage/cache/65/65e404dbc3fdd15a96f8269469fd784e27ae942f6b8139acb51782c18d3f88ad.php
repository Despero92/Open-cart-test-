<?php

/* default/template/information/partnership.twig */
class __TwigTemplate_82315ae74496b5134cf2148edaeadb19210c7a53ab064b52c30653a1d255bbba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"information-contact\" class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"row\">
        <div id=\"content\" class=\"col-sm-12\">
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <p>";
        // line 11
        echo (isset($context["partnership_text"]) ? $context["partnership_text"] : null);
        echo "</p>

            ";
        // line 13
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "            <p>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</p>
            ";
        } else {
            // line 16
            echo "            <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <fieldset>
                    <div class=\"form-group required\">
                        <label for=\"input-name\" class=\"col-sm-2 control-label\">";
            // line 19
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"name\" value=\"";
            // line 21
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"input-name\" class=\"form-control\"
                                   placeholder=\"Name\">
                            ";
            // line 23
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array(), "any", true, true)) {
                // line 24
                echo "                            <div class=\"text-danger\">";
                echo (isset($context["error_name"]) ? $context["error_name"] : null);
                echo "</div>
                            ";
            }
            // line 26
            echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"input-email\" class=\"col-sm-2 control-label\">";
            // line 29
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
            // line 31
            echo (isset($context["email"]) ? $context["email"] : null);
            echo "\" id=\"input-email\" class=\"form-control\"
                                   placeholder=\"Email\">
                            ";
            // line 33
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "email", array(), "any", true, true)) {
                // line 34
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_email"]) ? $context["error_email"] : null);
                echo "</div>
                            ";
            }
            // line 36
            echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"input-company\" class=\"col-sm-2 control-label\">";
            // line 39
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"age\" value=\"";
            // line 41
            echo (isset($context["age"]) ? $context["age"] : null);
            echo "\" id=\"input-age\" class=\"form-control\"
                                   placeholder=\"Age\">
                            ";
            // line 43
            if ($this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "age", array(), "any", false, true), "unsuitable", array(), "any", true, true)) {
                // line 44
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_age_unsuitable"]) ? $context["error_age_unsuitable"] : null);
                echo "</div>
                            ";
            } elseif ($this->getAttribute(            // line 45
(isset($context["error"]) ? $context["error"] : null), "age", array(), "any", true, true)) {
                // line 46
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_age"]) ? $context["error_age"] : null);
                echo "</div>
                            ";
            }
            // line 48
            echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"input-company\" class=\"col-sm-2 control-label\">";
            // line 51
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"company\" value=\"";
            // line 53
            echo (isset($context["company"]) ? $context["company"] : null);
            echo "\" id=\"input-company\"
                                   class=\"form-control\"
                                   placeholder=\"Company\">
                            ";
            // line 56
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "company", array(), "any", true, true)) {
                // line 57
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_company"]) ? $context["error_company"] : null);
                echo "</div>
                            ";
            }
            // line 59
            echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label for=\"input-company\" class=\"col-sm-2 control-label\">";
            // line 62
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partnership_tax"]) ? $context["partnership_tax"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 65
                echo "                                ";
                if (($context["item"] == (isset($context["tax_form"]) ? $context["tax_form"] : null))) {
                    // line 66
                    echo "                                    <input type=\"radio\" name=\"tax_form\" value=\"";
                    echo $context["item"];
                    echo "\" selected=\"selected\">
                                ";
                } else {
                    // line 68
                    echo "                                    <input type=\"radio\" name=\"tax_form\" value=\"";
                    echo $context["item"];
                    echo "\">
                                ";
                }
                // line 70
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                            ";
            // line 72
            echo "                                ";
            // line 73
            echo "                                ";
            // line 74
            echo "                                    ";
            // line 75
            echo "                                        ";
            // line 76
            echo "                                    ";
            // line 77
            echo "                                        ";
            // line 78
            echo "                                    ";
            // line 79
            echo "                                ";
            // line 80
            echo "                            ";
            // line 81
            echo "                            ";
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "tax_form", array(), "any", true, true)) {
                // line 82
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_tax_form"]) ? $context["error_tax_form"] : null);
                echo "</div>
                            ";
            }
            // line 84
            echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"input-document\" class=\"col-sm-2 control-label\">";
            // line 87
            echo (isset($context["entry_file"]) ? $context["entry_file"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"file\" name=\"file\" value=\"\" id=\"input-document\" class=\"form-control\">
                            ";
            // line 90
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "file", array(), "any", true, true)) {
                // line 91
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_file_type"]) ? $context["error_file_type"] : null);
                echo "</div>
                            ";
            } elseif ($this->getAttribute(            // line 92
(isset($context["error"]) ? $context["error"] : null), "file_size", array(), "any", true, true)) {
                // line 93
                echo "                                <div class=\"text-danger\">";
                echo (isset($context["error_file_size"]) ? $context["error_file_size"] : null);
                echo "</div>
                            ";
            }
            // line 95
            echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"input-comment\" class=\"col-sm-2 control-label\">";
            // line 98
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                            <textarea name=\"comment\" id=\"input-comment\" class=\"form-control\" rows=\"10\"
                                      placeholder=\"Your message\">";
            // line 101
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</textarea>
                        </div>
                    </div>
                </fieldset>
                <div class=\"buttons\">
                    <div class=\"pull-right\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 107
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\">
                    </div>
                </div>
            </form>
            ";
        }
        // line 112
        echo "        </div>
    </div>
</div>
";
        // line 115
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/information/partnership.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 115,  282 => 112,  274 => 107,  265 => 101,  259 => 98,  254 => 95,  248 => 93,  246 => 92,  241 => 91,  239 => 90,  233 => 87,  228 => 84,  222 => 82,  219 => 81,  217 => 80,  215 => 79,  213 => 78,  211 => 77,  209 => 76,  207 => 75,  205 => 74,  203 => 73,  201 => 72,  199 => 71,  193 => 70,  187 => 68,  181 => 66,  178 => 65,  174 => 64,  169 => 62,  164 => 59,  158 => 57,  156 => 56,  150 => 53,  145 => 51,  140 => 48,  134 => 46,  132 => 45,  127 => 44,  125 => 43,  120 => 41,  115 => 39,  110 => 36,  104 => 34,  102 => 33,  97 => 31,  92 => 29,  87 => 26,  81 => 24,  79 => 23,  74 => 21,  69 => 19,  62 => 16,  56 => 14,  54 => 13,  49 => 11,  45 => 10,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-contact" class="container">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="row">*/
/*         <div id="content" class="col-sm-12">*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <p>{{ partnership_text }}</p>*/
/* */
/*             {% if success %}*/
/*             <p>{{ success }}</p>*/
/*             {% else %}*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*                 <fieldset>*/
/*                     <div class="form-group required">*/
/*                         <label for="input-name" class="col-sm-2 control-label">{{ entry_name }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control"*/
/*                                    placeholder="Name">*/
/*                             {% if error.name is defined %}*/
/*                             <div class="text-danger">{{ error_name }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label for="input-email" class="col-sm-2 control-label">{{ entry_email }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control"*/
/*                                    placeholder="Email">*/
/*                             {% if error.email is defined %}*/
/*                                 <div class="text-danger">{{ error_email }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label for="input-company" class="col-sm-2 control-label">{{ entry_company }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="age" value="{{ age }}" id="input-age" class="form-control"*/
/*                                    placeholder="Age">*/
/*                             {% if error.age.unsuitable is defined %}*/
/*                                 <div class="text-danger">{{ error_age_unsuitable }}</div>*/
/*                             {% elseif error.age is defined %}*/
/*                                 <div class="text-danger">{{ error_age }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label for="input-company" class="col-sm-2 control-label">{{ entry_company }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="company" value="{{ company }}" id="input-company"*/
/*                                    class="form-control"*/
/*                                    placeholder="Company">*/
/*                             {% if error.company is defined %}*/
/*                                 <div class="text-danger">{{ error_company }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label for="input-company" class="col-sm-2 control-label">{{ entry_company }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             {% for item in partnership_tax %}*/
/*                                 {% if item == tax_form %}*/
/*                                     <input type="radio" name="tax_form" value="{{ item }}" selected="selected">*/
/*                                 {% else %}*/
/*                                     <input type="radio" name="tax_form" value="{{ item }}">*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             {#<select name="tax_form" id="">#}*/
/*                                 {#<option value=""></option>#}*/
/*                                 {#{% for item in partnership_tax %}#}*/
/*                                     {#{% if item == tax_form %}#}*/
/*                                         {#<option selected="selected">{{ item }}</option>#}*/
/*                                     {#{% else %}#}*/
/*                                         {#<option>{{ item }}</option>#}*/
/*                                     {#{% endif %}#}*/
/*                                 {#{% endfor %}#}*/
/*                             {#</select>#}*/
/*                             {% if error.tax_form is defined %}*/
/*                                 <div class="text-danger">{{ error_tax_form }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="input-document" class="col-sm-2 control-label">{{ entry_file }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="file" name="file" value="" id="input-document" class="form-control">*/
/*                             {% if error.file is defined %}*/
/*                                 <div class="text-danger">{{ error_file_type }}</div>*/
/*                             {% elseif error.file_size is defined%}*/
/*                                 <div class="text-danger">{{ error_file_size }}</div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="input-comment" class="col-sm-2 control-label">{{ entry_comment }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <textarea name="comment" id="input-comment" class="form-control" rows="10"*/
/*                                       placeholder="Your message">{{ comment }}</textarea>*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right">*/
/*                         <input type="submit" class="btn btn-primary" value="{{ button_submit }}">*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/

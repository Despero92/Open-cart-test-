<?php

/* setting/store_form.twig */
class __TwigTemplate_c57bd5eb94207b0b9de5cc6c22e112f6505937db41c2712665c8d82611275f96 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-store\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-store\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_store"]) ? $context["tab_store"] : null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_local"]) ? $context["tab_local"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_server"]) ? $context["tab_server"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-url\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["help_url"]) ? $context["help_url"] : null), "html");
        echo "\">";
        echo (isset($context["entry_url"]) ? $context["entry_url"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_url\" value=\"";
        // line 46
        echo (isset($context["config_url"]) ? $context["config_url"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_url"]) ? $context["entry_url"] : null);
        echo "\" id=\"input-url\" class=\"form-control\" />
                  ";
        // line 47
        if ((isset($context["error_url"]) ? $context["error_url"] : null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_url"]) ? $context["error_url"] : null);
            echo "</div>
                  ";
        }
        // line 50
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ssl\"><span data-toggle=\"tooltip\" data-html=\"true\" title=\"";
        // line 53
        echo (isset($context["help_ssl"]) ? $context["help_ssl"] : null);
        echo "\">";
        echo (isset($context["entry_ssl"]) ? $context["entry_ssl"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_ssl\" value=\"";
        // line 55
        echo (isset($context["config_ssl"]) ? $context["config_ssl"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ssl"]) ? $context["entry_ssl"] : null);
        echo "\" id=\"input-ssl\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 59
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 61
        echo (isset($context["config_meta_title"]) ? $context["config_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 62
        if ((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null)) {
            // line 63
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_meta_title"]) ? $context["error_meta_title"] : null);
            echo "</div>
                  ";
        }
        // line 65
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 68
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 70
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["config_meta_description"]) ? $context["config_meta_description"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 74
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 76
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["config_meta_keyword"]) ? $context["config_meta_keyword"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 80
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 84
            echo "                    ";
            if (($this->getAttribute($context["theme"], "value", array()) == (isset($context["config_theme"]) ? $context["config_theme"] : null))) {
                // line 85
                echo "                    <option value=\"";
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    ";
            } else {
                // line 87
                echo "                    <option value=\"";
                echo $this->getAttribute($context["theme"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["theme"], "text", array());
                echo "</option>
                    ";
            }
            // line 89
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 95
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 99
            echo "                    ";
            if (($this->getAttribute($context["layout"], "layout_id", array()) == (isset($context["config_layout_id"]) ? $context["config_layout_id"] : null))) {
                // line 100
                echo "                    <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 102
                echo "                    <option value=\"";
                echo $this->getAttribute($context["layout"], "layout_id", array());
                echo "\">";
                echo $this->getAttribute($context["layout"], "name", array());
                echo "</option>
                    ";
            }
            // line 104
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 111
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 113
        echo (isset($context["config_name"]) ? $context["config_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 114
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 115
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 117
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 120
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 122
        echo (isset($context["config_owner"]) ? $context["config_owner"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_owner"]) ? $context["entry_owner"] : null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 123
        if ((isset($context["error_owner"]) ? $context["error_owner"] : null)) {
            // line 124
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_owner"]) ? $context["error_owner"] : null);
            echo "</div>
                  ";
        }
        // line 126
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 129
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 131
        echo (isset($context["entry_address"]) ? $context["entry_address"] : null);
        echo "\" id=\"input-address\" class=\"form-control\">";
        echo (isset($context["config_address"]) ? $context["config_address"] : null);
        echo "</textarea>
                  ";
        // line 132
        if ((isset($context["error_address"]) ? $context["error_address"] : null)) {
            // line 133
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address"]) ? $context["error_address"] : null);
            echo "</div>
                  ";
        }
        // line 135
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 138
        echo (isset($context["help_geocode"]) ? $context["help_geocode"] : null);
        echo "\">";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 140
        echo (isset($context["config_geocode"]) ? $context["config_geocode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_geocode"]) ? $context["entry_geocode"] : null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 144
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 146
        echo (isset($context["config_email"]) ? $context["config_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 147
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 148
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                  ";
        }
        // line 150
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 153
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 155
        echo (isset($context["config_telephone"]) ? $context["config_telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 156
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 157
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                  ";
        }
        // line 159
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 162
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 164
        echo (isset($context["config_fax"]) ? $context["config_fax"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_fax"]) ? $context["entry_fax"] : null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 168
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 169
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 170
        echo (isset($context["config_image"]) ? $context["config_image"] : null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" title=\"";
        // line 174
        echo (isset($context["help_open"]) ? $context["help_open"] : null);
        echo "\">";
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 176
        echo (isset($context["entry_open"]) ? $context["entry_open"] : null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo (isset($context["config_open"]) ? $context["config_open"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" title=\"";
        // line 180
        echo (isset($context["help_comment"]) ? $context["help_comment"] : null);
        echo "\">";
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 182
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["config_comment"]) ? $context["config_comment"] : null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 185
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 186
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
            // line 187
            echo (isset($context["help_location"]) ? $context["help_location"] : null);
            echo "\">";
            echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
            echo "</span></label>
                <div class=\"col-sm-10\">
                  ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 190
                echo "                  <div class=\"checkbox\">
                    <label>
                      ";
                // line 192
                if (twig_in_filter($this->getAttribute($context["location"], "location_id", array()), (isset($context["config_location"]) ? $context["config_location"] : null))) {
                    // line 193
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                    // line 194
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                } else {
                    // line 196
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo $this->getAttribute($context["location"], "location_id", array());
                    echo "\" />
                      ";
                    // line 197
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "
                      ";
                }
                // line 199
                echo "                    </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                </div>
              </div>
              ";
        }
        // line 205
        echo "            </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 208
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 212
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["config_country_id"]) ? $context["config_country_id"] : null))) {
                // line 213
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 215
                echo "                    <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                    ";
            }
            // line 217
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 222
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 229
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 233
            echo "                    ";
            if (($this->getAttribute($context["language"], "code", array()) == (isset($context["config_language"]) ? $context["config_language"] : null))) {
                // line 234
                echo "                    <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 236
                echo "                    <option value=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
                    ";
            }
            // line 238
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 243
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 247
            echo "                    ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["config_currency"]) ? $context["config_currency"] : null))) {
                // line 248
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    ";
            } else {
                // line 250
                echo "                    <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                    ";
            }
            // line 252
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 259
        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 261
        echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 264
        if ((isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 265
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 266
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 268
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 269
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 271
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 273
        if ( !(isset($context["config_tax"]) ? $context["config_tax"] : null)) {
            // line 274
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 275
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 277
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 278
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 280
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 284
        echo (isset($context["help_tax_default"]) ? $context["help_tax_default"] : null);
        echo "\">";
        echo (isset($context["entry_tax_default"]) ? $context["entry_tax_default"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 287
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 288
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "shipping")) {
            // line 289
            echo "                      <option value=\"shipping\" selected=\"selected\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        } else {
            // line 291
            echo "                      <option value=\"shipping\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        }
        // line 293
        echo "                      ";
        if (((isset($context["config_tax_default"]) ? $context["config_tax_default"] : null) == "payment")) {
            // line 294
            echo "                      <option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        } else {
            // line 296
            echo "                      <option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        }
        // line 298
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 302
        echo (isset($context["help_tax_customer"]) ? $context["help_tax_customer"] : null);
        echo "\">";
        echo (isset($context["entry_tax_customer"]) ? $context["entry_tax_customer"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 305
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 306
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "shipping")) {
            // line 307
            echo "                      <option value=\"shipping\" selected=\"selected\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        } else {
            // line 309
            echo "                      <option value=\"shipping\">";
            echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
            echo "</option>
                      ";
        }
        // line 311
        echo "                      ";
        if (((isset($context["config_tax_customer"]) ? $context["config_tax_customer"] : null) == "payment")) {
            // line 312
            echo "                      <option value=\"payment\" selected=\"selected\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        } else {
            // line 314
            echo "                      <option value=\"payment\">";
            echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
            echo "</option>
                      ";
        }
        // line 316
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 321
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 323
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 327
            echo "                      ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["config_customer_group_id"]) ? $context["config_customer_group_id"] : null))) {
                // line 328
                echo "                      <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 330
                echo "                      <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                      ";
            }
            // line 332
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 337
        echo (isset($context["help_customer_group_display"]) ? $context["help_customer_group_display"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group_display"]) ? $context["entry_customer_group_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 340
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 342
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["config_customer_group_display"]) ? $context["config_customer_group_display"] : null))) {
                // line 343
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 344
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            } else {
                // line 346
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
                        ";
                // line 347
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                        ";
            }
            // line 349
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "                    ";
        if ((isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null)) {
            // line 353
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_customer_group_display"]) ? $context["error_customer_group_display"] : null);
            echo "</div>
                    ";
        }
        // line 355
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 358
        echo (isset($context["help_customer_price"]) ? $context["help_customer_price"] : null);
        echo "\">";
        echo (isset($context["entry_customer_price"]) ? $context["entry_customer_price"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 361
        if ((isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 362
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 363
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 365
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 366
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 368
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 370
        if ( !(isset($context["config_customer_price"]) ? $context["config_customer_price"] : null)) {
            // line 371
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 372
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 374
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 375
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 377
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 381
        echo (isset($context["help_account"]) ? $context["help_account"] : null);
        echo "\">";
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 384
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 386
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_account_id"]) ? $context["config_account_id"] : null))) {
                // line 387
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 389
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            }
            // line 391
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 397
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 399
        echo (isset($context["entry_cart_weight"]) ? $context["entry_cart_weight"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 402
        if ((isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 403
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 404
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 406
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 407
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 409
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 411
        if ( !(isset($context["config_cart_weight"]) ? $context["config_cart_weight"] : null)) {
            // line 412
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 413
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 415
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 416
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 418
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 422
        echo (isset($context["help_checkout_guest"]) ? $context["help_checkout_guest"] : null);
        echo "\">";
        echo (isset($context["entry_checkout_guest"]) ? $context["entry_checkout_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 425
        if ((isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 426
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 427
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 429
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 430
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 432
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 434
        if ( !(isset($context["config_checkout_guest"]) ? $context["config_checkout_guest"] : null)) {
            // line 435
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 436
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 438
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 439
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 441
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 445
        echo (isset($context["help_checkout"]) ? $context["help_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 448
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                      ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 450
            echo "                      ";
            if (($this->getAttribute($context["information"], "information_id", array()) == (isset($context["config_checkout_id"]) ? $context["config_checkout_id"] : null))) {
                // line 451
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            } else {
                // line 453
                echo "                      <option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
                      ";
            }
            // line 455
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 460
        echo (isset($context["help_order_status"]) ? $context["help_order_status"] : null);
        echo "\">";
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 464
            echo "                      ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["config_order_status_id"]) ? $context["config_order_status_id"] : null))) {
                // line 465
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            } else {
                // line 467
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                      ";
            }
            // line 469
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 475
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 477
        echo (isset($context["help_stock_display"]) ? $context["help_stock_display"] : null);
        echo "\">";
        echo (isset($context["entry_stock_display"]) ? $context["entry_stock_display"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 480
        if ((isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 481
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 482
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 484
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 485
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 487
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 489
        if ( !(isset($context["config_stock_display"]) ? $context["config_stock_display"] : null)) {
            // line 490
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 491
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 493
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 494
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 496
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 500
        echo (isset($context["help_stock_checkout"]) ? $context["help_stock_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_stock_checkout"]) ? $context["entry_stock_checkout"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 503
        if ((isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 504
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 505
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 507
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 508
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 510
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 512
        if ( !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)) {
            // line 513
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 514
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 516
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 517
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 519
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 526
        echo (isset($context["entry_logo"]) ? $context["entry_logo"] : null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 527
        echo (isset($context["logo"]) ? $context["logo"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 528
        echo (isset($context["config_logo"]) ? $context["config_logo"] : null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 532
        echo (isset($context["help_icon"]) ? $context["help_icon"] : null);
        echo "\">";
        echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 533
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 534
        echo (isset($context["config_icon"]) ? $context["config_icon"] : null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 540
        echo (isset($context["help_secure"]) ? $context["help_secure"] : null);
        echo "\">";
        echo (isset($context["entry_secure"]) ? $context["entry_secure"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">
                    ";
        // line 543
        if ((isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 544
            echo "                    <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                    ";
            // line 545
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 547
            echo "                    <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                    ";
            // line 548
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 550
        echo "                  </label>
                  <label class=\"radio-inline\">
                    ";
        // line 552
        if ( !(isset($context["config_secure"]) ? $context["config_secure"] : null)) {
            // line 553
            echo "                    <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                    ";
            // line 554
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 556
            echo "                    <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                    ";
            // line 557
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 559
        echo "                  </label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 571
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script>   <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 592
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 601
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 607
        echo (isset($context["config_zone_id"]) ? $context["config_zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 614
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 627
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/store_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1552 => 627,  1536 => 614,  1526 => 607,  1517 => 601,  1505 => 592,  1481 => 571,  1467 => 559,  1462 => 557,  1459 => 556,  1454 => 554,  1451 => 553,  1449 => 552,  1445 => 550,  1440 => 548,  1437 => 547,  1432 => 545,  1429 => 544,  1427 => 543,  1419 => 540,  1410 => 534,  1404 => 533,  1398 => 532,  1391 => 528,  1385 => 527,  1381 => 526,  1372 => 519,  1367 => 517,  1364 => 516,  1359 => 514,  1356 => 513,  1354 => 512,  1350 => 510,  1345 => 508,  1342 => 507,  1337 => 505,  1334 => 504,  1332 => 503,  1324 => 500,  1318 => 496,  1313 => 494,  1310 => 493,  1305 => 491,  1302 => 490,  1300 => 489,  1296 => 487,  1291 => 485,  1288 => 484,  1283 => 482,  1280 => 481,  1278 => 480,  1270 => 477,  1265 => 475,  1258 => 470,  1252 => 469,  1244 => 467,  1236 => 465,  1233 => 464,  1229 => 463,  1221 => 460,  1215 => 456,  1209 => 455,  1201 => 453,  1193 => 451,  1190 => 450,  1186 => 449,  1182 => 448,  1174 => 445,  1168 => 441,  1163 => 439,  1160 => 438,  1155 => 436,  1152 => 435,  1150 => 434,  1146 => 432,  1141 => 430,  1138 => 429,  1133 => 427,  1130 => 426,  1128 => 425,  1120 => 422,  1114 => 418,  1109 => 416,  1106 => 415,  1101 => 413,  1098 => 412,  1096 => 411,  1092 => 409,  1087 => 407,  1084 => 406,  1079 => 404,  1076 => 403,  1074 => 402,  1068 => 399,  1063 => 397,  1056 => 392,  1050 => 391,  1042 => 389,  1034 => 387,  1031 => 386,  1027 => 385,  1023 => 384,  1015 => 381,  1009 => 377,  1004 => 375,  1001 => 374,  996 => 372,  993 => 371,  991 => 370,  987 => 368,  982 => 366,  979 => 365,  974 => 363,  971 => 362,  969 => 361,  961 => 358,  956 => 355,  950 => 353,  947 => 352,  939 => 349,  934 => 347,  929 => 346,  924 => 344,  919 => 343,  917 => 342,  913 => 340,  909 => 339,  902 => 337,  896 => 333,  890 => 332,  882 => 330,  874 => 328,  871 => 327,  867 => 326,  859 => 323,  854 => 321,  847 => 316,  841 => 314,  835 => 312,  832 => 311,  826 => 309,  820 => 307,  818 => 306,  814 => 305,  806 => 302,  800 => 298,  794 => 296,  788 => 294,  785 => 293,  779 => 291,  773 => 289,  771 => 288,  767 => 287,  759 => 284,  753 => 280,  748 => 278,  745 => 277,  740 => 275,  737 => 274,  735 => 273,  731 => 271,  726 => 269,  723 => 268,  718 => 266,  715 => 265,  713 => 264,  707 => 261,  702 => 259,  694 => 253,  688 => 252,  680 => 250,  672 => 248,  669 => 247,  665 => 246,  657 => 243,  651 => 239,  645 => 238,  637 => 236,  629 => 234,  626 => 233,  622 => 232,  616 => 229,  606 => 222,  600 => 218,  594 => 217,  586 => 215,  578 => 213,  575 => 212,  571 => 211,  565 => 208,  560 => 205,  555 => 202,  547 => 199,  542 => 197,  537 => 196,  532 => 194,  527 => 193,  525 => 192,  521 => 190,  517 => 189,  510 => 187,  507 => 186,  505 => 185,  497 => 182,  490 => 180,  481 => 176,  474 => 174,  467 => 170,  461 => 169,  457 => 168,  448 => 164,  443 => 162,  438 => 159,  432 => 157,  430 => 156,  424 => 155,  419 => 153,  414 => 150,  408 => 148,  406 => 147,  400 => 146,  395 => 144,  386 => 140,  379 => 138,  374 => 135,  368 => 133,  366 => 132,  360 => 131,  355 => 129,  350 => 126,  344 => 124,  342 => 123,  336 => 122,  331 => 120,  326 => 117,  320 => 115,  318 => 114,  312 => 113,  307 => 111,  299 => 105,  293 => 104,  285 => 102,  277 => 100,  274 => 99,  270 => 98,  264 => 95,  257 => 90,  251 => 89,  243 => 87,  235 => 85,  232 => 84,  228 => 83,  222 => 80,  213 => 76,  208 => 74,  199 => 70,  194 => 68,  189 => 65,  183 => 63,  181 => 62,  175 => 61,  170 => 59,  161 => 55,  154 => 53,  149 => 50,  143 => 48,  141 => 47,  135 => 46,  128 => 44,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  95 => 32,  89 => 29,  85 => 27,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-store" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-store" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-store" data-toggle="tab">{{ tab_store }}</a></li>*/
/*             <li><a href="#tab-local" data-toggle="tab">{{ tab_local }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-server" data-toggle="tab">{{ tab_server }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-url"><span data-toggle="tooltip" data-html="true" title="{{ help_url|escape('html') }}">{{ entry_url }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_url" value="{{ config_url }}" placeholder="{{ entry_url }}" id="input-url" class="form-control" />*/
/*                   {% if error_url %}*/
/*                   <div class="text-danger">{{ error_url }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ssl"><span data-toggle="tooltip" data-html="true" title="{{ help_ssl }}">{{ entry_ssl }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_ssl" value="{{ config_ssl }}" placeholder="{{ entry_ssl }}" id="input-ssl" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_meta_title" value="{{ config_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   {% if error_meta_title %}*/
/*                   <div class="text-danger">{{ error_meta_title }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ config_meta_description }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ config_meta_keyword }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_theme" id="input-theme" class="form-control">*/
/*                     {% for theme in themes %}*/
/*                     {% if theme.value == config_theme %}*/
/*                     <option value="{{ theme.value }}" selected="selected">{{ theme.text }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ theme.value }}">{{ theme.text }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                   <br />*/
/*                   <img src="" alt="" id="theme" class="img-thumbnail" /></div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-layout">{{ entry_layout }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_layout_id" id="input-layout" class="form-control">*/
/*                     {% for layout in layouts %}*/
/*                     {% if layout.layout_id == config_layout_id %}*/
/*                     <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-store">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_name" value="{{ config_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   {% if error_name %}*/
/*                   <div class="text-danger">{{ error_name }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-owner">{{ entry_owner }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_owner" value="{{ config_owner }}" placeholder="{{ entry_owner }}" id="input-owner" class="form-control" />*/
/*                   {% if error_owner %}*/
/*                   <div class="text-danger">{{ error_owner }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-address">{{ entry_address }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_address" rows="5" placeholder="{{ entry_address }}" id="input-address" class="form-control">{{ config_address }}</textarea>*/
/*                   {% if error_address %}*/
/*                   <div class="text-danger">{{ error_address }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-geocode"><span data-toggle="tooltip" data-container="#tab-general" title="{{ help_geocode }}">{{ entry_geocode }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_geocode" value="{{ config_geocode }}" placeholder="{{ entry_geocode }}" id="input-geocode" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_email" value="{{ config_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                   {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_telephone" value="{{ config_telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                   {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-fax">{{ entry_fax }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="config_fax" value="{{ config_fax }}" placeholder="{{ entry_fax }}" id="input-fax" class="form-control" />*/
/*                 </div>*/
/*               </div>              */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-image">{{ entry_image }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_image" value="{{ config_image }}" id="input-image" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-open"><span data-toggle="tooltip" title="{{ help_open }}">{{ entry_open }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_open" rows="5" placeholder="{{ entry_open }}" id="input-open" class="form-control">{{ config_open }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-comment"><span data-toggle="tooltip" title="{{ help_comment }}">{{ entry_comment }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="config_comment" rows="5" placeholder="{{ entry_comment }}" id="input-comment" class="form-control">{{ config_comment }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               {% if locations %}*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_location }}">{{ entry_location }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   {% for location in locations %}*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       {% if location.location_id in config_location %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" checked="checked" />*/
/*                       {{ location.name }}*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="config_location[]" value="{{ location.location_id }}" />*/
/*                       {{ location.name }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-local">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_country_id" id="input-country" class="form-control">*/
/*                     {% for country in countries %}*/
/*                     {% if country.country_id == config_country_id %}*/
/*                     <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_zone_id" id="input-zone" class="form-control">*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-language">{{ entry_language }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_language" id="input-language" class="form-control">*/
/*                     {% for language in languages %}*/
/*                     {% if language.code == config_language %}*/
/*                     <option value="{{ language.code }}" selected="selected">{{ language.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ language.code }}">{{ language.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="config_currency" id="input-currency" class="form-control">*/
/*                     {% for currency in currencies %}*/
/*                     {% if currency.code == config_currency %}*/
/*                     <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_tax }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_tax }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_tax %}*/
/*                       <input type="radio" name="config_tax" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_tax %}*/
/*                       <input type="radio" name="config_tax" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_tax" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-default"><span data-toggle="tooltip" title="{{ help_tax_default }}">{{ entry_tax_default }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_default" id="input-tax-default" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% if config_tax_default == 'shipping' %}*/
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       {% else %}*/
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_tax_default == 'payment' %}*/
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       {% else %}*/
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-tax-customer"><span data-toggle="tooltip" title="{{ help_tax_customer }}">{{ entry_tax_customer }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_tax_customer" id="input-tax-customer" class="form-control">*/
/*                       <option value="">{{ text_none }}</option>*/
/*                       {% if config_tax_customer == 'shipping' %}*/
/*                       <option value="shipping" selected="selected">{{ text_shipping }}</option>*/
/*                       {% else %}*/
/*                       <option value="shipping">{{ text_shipping }}</option>*/
/*                       {% endif %}*/
/*                       {% if config_tax_customer == 'payment' %}*/
/*                       <option value="payment" selected="selected">{{ text_payment }}</option>*/
/*                       {% else %}*/
/*                       <option value="payment">{{ text_payment }}</option>*/
/*                       {% endif %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_account }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{ help_customer_group }}">{{ entry_customer_group }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_customer_group_id" id="input-customer-group" class="form-control">*/
/*                       {% for customer_group in customer_groups %}*/
/*                       {% if customer_group.customer_group_id == config_customer_group_id %}*/
/*                       <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_group_display }}">{{ entry_customer_group_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     {% for customer_group in customer_groups %}*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         {% if customer_group.customer_group_id in config_customer_group_display %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*                         {{ customer_group.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="config_customer_group_display[]" value="{{ customer_group.customer_group_id }}" />*/
/*                         {{ customer_group.name }}*/
/*                         {% endif %}*/
/*                       </label>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                     {% if error_customer_group_display %}*/
/*                     <div class="text-danger">{{ error_customer_group_display }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_customer_price }}">{{ entry_customer_price }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_customer_price %}*/
/*                       <input type="radio" name="config_customer_price" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_customer_price" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-account"><span data-toggle="tooltip" title="{{ help_account }}">{{ entry_account }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_account_id" id="input-account" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_account_id %}*/
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_checkout }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_cart_weight }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_cart_weight %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_cart_weight" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_checkout_guest }}">{{ entry_checkout_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_checkout_guest %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_checkout_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-checkout"><span data-toggle="tooltip" title="{{ help_checkout }}">{{ entry_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_checkout_id" id="input-checkout" class="form-control">*/
/*                       <option value="0">{{ text_none }}</option>*/
/*                       {% for information in informations %}*/
/*                       {% if information.information_id == config_checkout_id %}*/
/*                       <option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ information.information_id }}">{{ information.title }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-order-status"><span data-toggle="tooltip" title="{{ help_order_status }}">{{ entry_order_status }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="config_order_status_id" id="input-order-status" class="form-control">*/
/*                       {% for order_status in order_statuses %}*/
/*                       {% if order_status.order_status_id == config_order_status_id %}*/
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_stock }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_display }}">{{ entry_stock_display }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_stock_display %}*/
/*                       <input type="radio" name="config_stock_display" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_display" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_stock_checkout }}">{{ entry_stock_checkout }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not config_stock_checkout %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="config_stock_checkout" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-logo">{{ entry_logo }}</label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail"><img src="{{ logo }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_logo" value="{{ config_logo }}" id="input-logo" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-icon"><span data-toggle="tooltip" title="{{ help_icon }}">{{ entry_icon }}</span></label>*/
/*                 <div class="col-sm-10"><a href="" id="thumb-icon" data-toggle="image" class="img-thumbnail"><img src="{{ icon }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="config_icon" value="{{ config_icon }}" id="input-icon" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-server">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_secure }}">{{ entry_secure }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline">*/
/*                     {% if config_secure %}*/
/*                     <input type="radio" name="config_secure" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_secure" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                   <label class="radio-inline">*/
/*                     {% if not config_secure %}*/
/*                     <input type="radio" name="config_secure" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="config_secure" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'config_theme\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_theme\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#theme').attr('src', html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_theme\']').trigger('change');*/
/* //--></script>   <script type="text/javascript"><!--*/
/* $('select[name=\'config_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'config_country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'config_zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'config_country_id\']').trigger('change');*/
/* //--></script></div>*/
/* {{ footer }} */

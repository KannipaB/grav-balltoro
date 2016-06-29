<?php

/* partials/base.html.twig */
class __TwigTemplate_f0759bb46fde50d10bd5026cb9fb7a186811c6b7ddd2e013590a97bdb19318f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"top\" class=\"";
        // line 39
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 120
        echo "        ";
        $this->displayBlock('showcase', $context, $blocks);
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
        ";
        // line 126
        $this->displayBlock('footer', $context, $blocks);
        // line 146
        echo "    </div>
    ";
        // line 147
        $this->displayBlock('bottom', $context, $blocks);
        // line 160
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.css"), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/line-icon/style.css"), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/main.css"), "method");
        // line 19
        echo "
        ";
        // line 20
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 21
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 24
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 34
        echo "    ";
    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "            <nav class=\"navbar-top bg-inverse\">
                <div class=\"nav-bar\">
                    <a href=\"#\">
                        <img class=\"nav-bar__logo \" src=\"https://balltoro.com/ui/web/images/main-logo.png\">
                    </a>
                    <button class=\"navbar-toggler pull-xs-right nav-bar__toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                </div>
            </nav>
            <div class=\"collapse\" id=\"exCollapsingNavbar\">
                <div class=\"bg-inverse nav-bar\">
                    <ul class=\"nav-bar__dropdown--position\">
                        <li>
                            <a href=\"#\" class=\"nav-list__menu\">ผลบอลวันนี้</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__menu\">ตารางการแข่งขัน</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__menu\" data-toggle=\"collapse\" data-target=\"#drilldown-1\">
                                ข่าวฟุตบอล
                                <i class=\"fa fa-chevron-down\"></i>
                            </a>
                            <ul id=\"drilldown-1\" class=\"nav nav-pills nav-stacked collapse\">
                                <li>
                                    <a href=\"#\" class=\"nav-list__collapse\">
                                        <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                        English Premier League
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"nav-list__collapse\">
                                        <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                        Thai Premier League
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"nav-list__collapse\">
                                        <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                        ข่าวทั้งหมด
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__menu\" data-toggle=\"collapse\" data-target=\"#drilldown-2\">
                                สกู๊ปฟุตบอล
                                <i class=\"fa fa-chevron-down\"></i>
                            </a>
                            <ul id=\"drilldown-2\" class=\"nav nav-pills nav-stacked collapse\">
                                <li>
                                    <a href=\"#\" class=\"nav-list__collapse\">
                                        <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                        English Premier League
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"nav-list__collapse\">
                                        <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                        Thai Premier League
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"nav-list__collapse\">
                                        <i class=\"fa fa-angle-right nav-list__collapse--icon\"></i>
                                        สกู๊ปทั้งหมด
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\" class=\"nav-list__menu\" type=\"button\"><i class=\"fa fa-sign-in fa-2x\"></i> เข้าสู่ระบบ</a>
                        </li>
                    </ul>
                </div>
            </div>
        ";
    }

    // line 120
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        // line 123
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 124
        echo "        ";
    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
    }

    // line 126
    public function block_footer($context, array $blocks = array())
    {
        // line 127
        echo "            <footer class=\"footer\">
                <ul>
                    <li><a href=\"#\" class=\"footer__link\">หน้าแรก</a></li>
                    <li><a href=\"#\" class=\"footer__link\">ผลบอลวันนี้</a></li>
                    <li><a href=\"#\" class=\"footer__link\">ตารางการแข่งขัน</a></li>
                    <li><a href=\"#\" class=\"footer__link\">ข่าวฟุตบอล</a></li>
                    <li><a href=\"#\" class=\"footer__link\">สกู๊ปทั้งหมด</a></li>
                    <li><a href=\"#\" class=\"footer__link\">กฎและข้อตกลง</a></li>
                    <li><a href=\"#\" class=\"footer__link\">เกี่ยวกับเรา</a></li>
                </ul>
                <div class=\"footer-social text-xs-center\">
                    <a href=\"#\" class=\"footer-social__icon footer-social__icon--facebook\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\" class=\"footer-social__icon footer-social__icon--twitter\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\" class=\"footer-social__icon footer-social__icon--pinterest\"><i class=\"fa fa-pinterest-p\"></i></a>
                    <a href=\"#\" class=\"footer-social__icon footer-social__icon--google-plus\"><i class=\"fa fa-google-plus\"></i></a>
                    <p>Copyright © 2015</p>
                </div>
            </footer>
        ";
    }

    // line 147
    public function block_bottom($context, array $blocks = array())
    {
        // line 148
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 148,  308 => 147,  286 => 127,  283 => 126,  278 => 123,  274 => 124,  271 => 123,  268 => 122,  263 => 120,  182 => 42,  179 => 41,  175 => 34,  172 => 33,  169 => 32,  166 => 31,  163 => 30,  159 => 27,  156 => 26,  153 => 25,  150 => 24,  147 => 23,  144 => 22,  141 => 21,  139 => 20,  136 => 19,  133 => 18,  130 => 17,  127 => 16,  124 => 15,  121 => 14,  113 => 35,  111 => 30,  105 => 28,  103 => 14,  98 => 12,  94 => 11,  91 => 10,  89 => 9,  81 => 8,  78 => 7,  75 => 6,  69 => 160,  67 => 147,  64 => 146,  62 => 126,  59 => 125,  57 => 122,  54 => 121,  51 => 120,  49 => 41,  44 => 39,  41 => 38,  39 => 6,  33 => 3,  30 => 2,  28 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/bootstrap.css') %}*/
/*         {% do assets.addCss('theme://css/font-awesome.min.css') %}*/
/*         {% do assets.addCss('theme://css/line-icon/style.css') %}*/
/*         {% do assets.addCss('theme://css-compiled/main.css') %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery',101) %}*/
/*         {% do assets.addJs('theme://js/bootstrap.min.js',100) %}*/
/*         {% do assets.addJs('theme://js/main.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*             <nav class="navbar-top bg-inverse">*/
/*                 <div class="nav-bar">*/
/*                     <a href="#">*/
/*                         <img class="nav-bar__logo " src="https://balltoro.com/ui/web/images/main-logo.png">*/
/*                     </a>*/
/*                     <button class="navbar-toggler pull-xs-right nav-bar__toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">*/
/*                         <i class="fa fa-bars"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </nav>*/
/*             <div class="collapse" id="exCollapsingNavbar">*/
/*                 <div class="bg-inverse nav-bar">*/
/*                     <ul class="nav-bar__dropdown--position">*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__menu">ผลบอลวันนี้</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__menu">ตารางการแข่งขัน</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__menu" data-toggle="collapse" data-target="#drilldown-1">*/
/*                                 ข่าวฟุตบอล*/
/*                                 <i class="fa fa-chevron-down"></i>*/
/*                             </a>*/
/*                             <ul id="drilldown-1" class="nav nav-pills nav-stacked collapse">*/
/*                                 <li>*/
/*                                     <a href="#" class="nav-list__collapse">*/
/*                                         <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                         English Premier League*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="nav-list__collapse">*/
/*                                         <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                         Thai Premier League*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="nav-list__collapse">*/
/*                                         <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                         ข่าวทั้งหมด*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__menu" data-toggle="collapse" data-target="#drilldown-2">*/
/*                                 สกู๊ปฟุตบอล*/
/*                                 <i class="fa fa-chevron-down"></i>*/
/*                             </a>*/
/*                             <ul id="drilldown-2" class="nav nav-pills nav-stacked collapse">*/
/*                                 <li>*/
/*                                     <a href="#" class="nav-list__collapse">*/
/*                                         <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                         English Premier League*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="nav-list__collapse">*/
/*                                         <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                         Thai Premier League*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" class="nav-list__collapse">*/
/*                                         <i class="fa fa-angle-right nav-list__collapse--icon"></i>*/
/*                                         สกู๊ปทั้งหมด*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#" class="nav-list__menu" type="button"><i class="fa fa-sign-in fa-2x"></i> เข้าสู่ระบบ</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*         {% block showcase %}{% endblock %}*/
/* */
/*         {% block body %}*/
/*             {% block content %}{% endblock %}*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*             <footer class="footer">*/
/*                 <ul>*/
/*                     <li><a href="#" class="footer__link">หน้าแรก</a></li>*/
/*                     <li><a href="#" class="footer__link">ผลบอลวันนี้</a></li>*/
/*                     <li><a href="#" class="footer__link">ตารางการแข่งขัน</a></li>*/
/*                     <li><a href="#" class="footer__link">ข่าวฟุตบอล</a></li>*/
/*                     <li><a href="#" class="footer__link">สกู๊ปทั้งหมด</a></li>*/
/*                     <li><a href="#" class="footer__link">กฎและข้อตกลง</a></li>*/
/*                     <li><a href="#" class="footer__link">เกี่ยวกับเรา</a></li>*/
/*                 </ul>*/
/*                 <div class="footer-social text-xs-center">*/
/*                     <a href="#" class="footer-social__icon footer-social__icon--facebook"><i class="fa fa-facebook"></i></a>*/
/*                     <a href="#" class="footer-social__icon footer-social__icon--twitter"><i class="fa fa-twitter"></i></a>*/
/*                     <a href="#" class="footer-social__icon footer-social__icon--pinterest"><i class="fa fa-pinterest-p"></i></a>*/
/*                     <a href="#" class="footer-social__icon footer-social__icon--google-plus"><i class="fa fa-google-plus"></i></a>*/
/*                     <p>Copyright © 2015</p>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */

<?php

/* default.html.twig */
class __TwigTemplate_f5b520135e1d2f987280ce71a3b7185975bc654affa87c95411941b9c923afc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
\t\t\t<div class=\"row social social__border\">
\t\t\t\t<a href=\"#\" class=\"col-xs-3 social__button social__button--facebook fa fa-2x fa-facebook\"></a>
\t\t\t\t<a href=\"#\" class=\"col-xs-3 social__button social__button--twitter fa fa-2x fa-twitter\"></a>
\t\t\t\t<a href=\"#\" class=\"col-xs-3 social__button social__button--google-plus fa fa-2x fa-google-plus\"></a>
\t\t\t\t<a href=\"#\" class=\"col-xs-3 social__button social__button--line fa-2x icon-line\"></a>
\t\t\t</div>
\t\t\t<div class=\"row carousel slide\" id=\"featured\" data-ride=\"carousel\" data-interval=\"3000\">
\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<div class=\"featured-content\">
\t\t\t\t\t\t\t<div class=\"featured-content__image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO 1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featured-content__date\">
\t\t\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featured-content__headline\">
\t\t\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<div class=\"featured-content\">
\t\t\t\t\t\t\t<div class=\"featured-content__image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 31
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO 1\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featured-content__date\">
\t\t\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"featured-content__headline\">
\t\t\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"featured-content__separator\"></div>
\t\t\t</div>
\t\t\t<div class=\"row scoop m-t-2\">
\t\t\t\t<div class=\"category__header\">
\t\t\t\t\t<div class=\"pull-xs-left\">
\t\t\t\t\t\t<h5>Special Scoops</h5>
\t\t\t\t\t\t<p>สกู๊ปพิเศษ</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-xs-right\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scoop__content\">
\t\t\t\t\t<div class=\"scoop__content--image\">
\t\t\t\t\t\t<img src=\"";
        // line 56
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scoop__content--date\">
\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scoop__content--headline\">
\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"scoop__content\">
\t\t\t\t\t<div class=\"scoop__content--image\">
\t\t\t\t\t\t<img src=\"";
        // line 67
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scoop__content--date\">
\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"scoop__content--headline\">
\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"col-xs-6 p-l-0\">
\t\t\t\t\t\t<div class=\"scoop__content\">
\t\t\t\t\t\t\t<div class=\"scoop__content--image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--date\">
\t\t\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--headline\">
\t\t\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 p-r-0\">
\t\t\t\t\t\t<div class=\"scoop__content\">
\t\t\t\t\t\t\t<div class=\"scoop__content--image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 93
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--date\">
\t\t\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--headline\">
\t\t\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"col-xs-6 p-l-0\">
\t\t\t\t\t\t<div class=\"scoop__content\">
\t\t\t\t\t\t\t<div class=\"scoop__content--image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--date\">
\t\t\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--headline\">
\t\t\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6 p-r-0\">
\t\t\t\t\t\t<div class=\"scoop__content\">
\t\t\t\t\t\t\t<div class=\"scoop__content--image\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"DEMO SCOOP\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--date\">
\t\t\t\t\t\t\t\t14 มิ.ย. 2559 20:00
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"scoop__content--headline\">
\t\t\t\t\t\t\t\t<a href=\"#\">HEADLINE</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-xs-right\">
\t\t\t\t\t<a href=\"#\">สกู๊ปทั้งหมด <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row news m-t-2\">
\t\t\t\t<div class=\"category__header\">
\t\t\t\t\t<div class=\"pull-xs-left\">
\t\t\t\t\t\t<h5>News</h5>
\t\t\t\t\t\t<p>ข่าวและความเคลื่อนไหวล่าสุด</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-xs-right\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"news__content\">
\t\t\t\t\t<div class=\"col-xs-3 p-x-0\">
\t\t\t\t\t\t<div class=\"news__content--image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 149
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t<div class=\"news__content--date\">14 มิ.ย. 2559 20:00</div>
\t\t\t\t\t\t<div class=\"news__content--headline\"><a href=\"#\">HEADLINE</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"news__content\">
\t\t\t\t\t<div class=\"col-xs-3 p-x-0\">
\t\t\t\t\t\t<div class=\"news__content--image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 160
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/featured-demo-img-2.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t<div class=\"news__content--date\">14 มิ.ย. 2559 20:00</div>
\t\t\t\t\t\t<div class=\"news__content--headline\"><a href=\"#\">HEADLINE</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-xs-right p-y-1\">
\t\t\t\t\t<a href=\"#\">ข่าวทั้งหมด <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row result-board\">
\t\t\t\t<div class=\"row result-board__button collapsed\" data-toggle=\"collapse\" href=\"#collapse-dropdown\" aria-expanded=\"false\" aria-controls=\"collapse-dropdown\">
\t\t\t\t\t<span>ผลบอล</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse\" id=\"collapse-dropdown\">
\t\t\t\t\t<div class=\"dropdown\" >
\t\t\t\t\t\t<div  type=\"button\" id=\"menu-toggler\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon\"></i>
\t\t\t\t\t\t\t<div class=\"result-board__league-dropdown\">
\t\t\t\t\t\t\t\t<span>English Premier League</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"dropdown-menu result-board__league-dropdown--list\" role=\"menu\" aria-labelledby=\"menu-toggler\">
\t\t\t\t\t\t\t<p>league result</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"result-board__league-result\">
\t\t\t\t\t\t<p>No Match Result.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row result-board\">
\t\t\t\t<div class=\"row result-board__button collapsed\" data-toggle=\"collapse\" href=\"#collapse-dropdown1\" aria-expanded=\"false\" aria-controls=\"collapse-dropdown\">
\t\t\t\t\t<span>ตารางแข่งวันนี้</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse\" id=\"collapse-dropdown1\">
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div  type=\"button\" id=\"menu-toggler1\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon\"></i>
\t\t\t\t\t\t\t<div class=\"result-board__league-dropdown \">
\t\t\t\t\t\t\t\t<span>English Premier League</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"dropdown-menu result-board__league-dropdown--list\" role=\"menu\" aria-labelledby=\"menu-toggler1\">
\t\t\t\t\t\t\t<p>league result</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"result-board__league-result\">
\t\t\t\t\t\t<p>No Match Result.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row result-board\">
\t\t\t\t<div class=\"table-description\">
\t\t\t\t\t<span>ตารางคะแนน</span><span>อัพเดท 20 มิ.ย. 2559 15:10</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"dropdown\" >
                        <span  type=\"button\" id=\"menu-toggler2\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon\"></i>
                            <span class=\"result-board__league-dropdown\">
                                <span class=\"\">Premier League</span>
                            </span>
                        </span>
\t\t\t\t\t<div class=\"dropdown-menu result-board__league-dropdown--list\" role=\"menu\" aria-labelledby=\"menu-toggler2\" >
\t\t\t\t\t\t<p>league result</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"result-board__league-result league-table\">
\t\t\t\t\t<table class =\"table-sm league-table--box\">
\t\t\t\t\t\t<thead class=\"league-table__header\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Pos</th>
\t\t\t\t\t\t\t<th>Teams</th>
\t\t\t\t\t\t\t<th>P</th>
\t\t\t\t\t\t\t<th>+/-</th>
\t\t\t\t\t\t\t<th>Pts</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr class=\"rank-1 league-table\">
\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">เลสเตอร์ ซิตี้</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>32</td>
\t\t\t\t\t\t\t<td>81</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"rank-2 league-table\">
\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">อาร์เซนอล</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>29</td>
\t\t\t\t\t\t\t<td>71</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"rank-3 league-table\">
\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">ทอตนัมฮอตสเปอร์</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>34</td>
\t\t\t\t\t\t\t<td>70</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"rank-4 league-table\">
\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">แมนเชสเตอร์ซิตี</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>30</td>
\t\t\t\t\t\t\t<td>66</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"league-table\">
\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">แมนเชสเตอร์ ยูไนเต็ท</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t<td>66</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"league-table\">
\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">เซาแทมป์ตัน</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>18</td>
\t\t\t\t\t\t\t<td>63</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"league-table\">
\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">เวสต์แฮมยูไนเต็ด</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>14</td>
\t\t\t\t\t\t\t<td>62</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"league-table\">
\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">ลิเวอร์พูล</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>13</td>
\t\t\t\t\t\t\t<td>60</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"league-table\">
\t\t\t\t\t\t\t<td>9</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">สโตกซิตี</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>-14</td>
\t\t\t\t\t\t\t<td>51</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"league-table\">
\t\t\t\t\t\t\t<td>10</td>
\t\t\t\t\t\t\t<td class=\"league-table__team-names\">
\t\t\t\t\t\t\t\t<a href=\"#\">เชลซี</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>38</td>
\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t<td>50</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
\t\t\t<div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
\t\t\t<div class=\"row ad-box text-xs-center\">ADVERTISE HERE</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 160,  202 => 149,  171 => 121,  155 => 108,  137 => 93,  121 => 80,  105 => 67,  91 => 56,  63 => 31,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="container">*/
/* 		<div class="col-xs-12">*/
/* 			<div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/* 			<div class="row social social__border">*/
/* 				<a href="#" class="col-xs-3 social__button social__button--facebook fa fa-2x fa-facebook"></a>*/
/* 				<a href="#" class="col-xs-3 social__button social__button--twitter fa fa-2x fa-twitter"></a>*/
/* 				<a href="#" class="col-xs-3 social__button social__button--google-plus fa fa-2x fa-google-plus"></a>*/
/* 				<a href="#" class="col-xs-3 social__button social__button--line fa-2x icon-line"></a>*/
/* 			</div>*/
/* 			<div class="row carousel slide" id="featured" data-ride="carousel" data-interval="3000">*/
/* 				<div class="carousel-inner" role="listbox">*/
/* 					<div class="carousel-item active">*/
/* 						<div class="featured-content">*/
/* 							<div class="featured-content__image">*/
/* 								<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO 1">*/
/* 							</div>*/
/* 							<div class="featured-content__date">*/
/* 								14 มิ.ย. 2559 20:00*/
/* 							</div>*/
/* 							<div class="featured-content__headline">*/
/* 								<a href="#">HEADLINE</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="carousel-item">*/
/* 						<div class="featured-content">*/
/* 							<div class="featured-content__image">*/
/* 								<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO 1">*/
/* 							</div>*/
/* 							<div class="featured-content__date">*/
/* 								14 มิ.ย. 2559 20:00*/
/* 							</div>*/
/* 							<div class="featured-content__headline">*/
/* 								<a href="#">HEADLINE</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="featured-content__separator"></div>*/
/* 			</div>*/
/* 			<div class="row scoop m-t-2">*/
/* 				<div class="category__header">*/
/* 					<div class="pull-xs-left">*/
/* 						<h5>Special Scoops</h5>*/
/* 						<p>สกู๊ปพิเศษ</p>*/
/* 					</div>*/
/* 					<div class="pull-xs-right">*/
/* 						<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="scoop__content">*/
/* 					<div class="scoop__content--image">*/
/* 						<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/* 					</div>*/
/* 					<div class="scoop__content--date">*/
/* 						14 มิ.ย. 2559 20:00*/
/* 					</div>*/
/* 					<div class="scoop__content--headline">*/
/* 						<a href="#">HEADLINE</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="scoop__content">*/
/* 					<div class="scoop__content--image">*/
/* 						<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/* 					</div>*/
/* 					<div class="scoop__content--date">*/
/* 						14 มิ.ย. 2559 20:00*/
/* 					</div>*/
/* 					<div class="scoop__content--headline">*/
/* 						<a href="#">HEADLINE</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div>*/
/* 					<div class="col-xs-6 p-l-0">*/
/* 						<div class="scoop__content">*/
/* 							<div class="scoop__content--image">*/
/* 								<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/* 							</div>*/
/* 							<div class="scoop__content--date">*/
/* 								14 มิ.ย. 2559 20:00*/
/* 							</div>*/
/* 							<div class="scoop__content--headline">*/
/* 								<a href="#">HEADLINE</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-6 p-r-0">*/
/* 						<div class="scoop__content">*/
/* 							<div class="scoop__content--image">*/
/* 								<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/* 							</div>*/
/* 							<div class="scoop__content--date">*/
/* 								14 มิ.ย. 2559 20:00*/
/* 							</div>*/
/* 							<div class="scoop__content--headline">*/
/* 								<a href="#">HEADLINE</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div>*/
/* 					<div class="col-xs-6 p-l-0">*/
/* 						<div class="scoop__content">*/
/* 							<div class="scoop__content--image">*/
/* 								<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/* 							</div>*/
/* 							<div class="scoop__content--date">*/
/* 								14 มิ.ย. 2559 20:00*/
/* 							</div>*/
/* 							<div class="scoop__content--headline">*/
/* 								<a href="#">HEADLINE</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-6 p-r-0">*/
/* 						<div class="scoop__content">*/
/* 							<div class="scoop__content--image">*/
/* 								<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="DEMO SCOOP">*/
/* 							</div>*/
/* 							<div class="scoop__content--date">*/
/* 								14 มิ.ย. 2559 20:00*/
/* 							</div>*/
/* 							<div class="scoop__content--headline">*/
/* 								<a href="#">HEADLINE</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="text-xs-right">*/
/* 					<a href="#">สกู๊ปทั้งหมด <i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row news m-t-2">*/
/* 				<div class="category__header">*/
/* 					<div class="pull-xs-left">*/
/* 						<h5>News</h5>*/
/* 						<p>ข่าวและความเคลื่อนไหวล่าสุด</p>*/
/* 					</div>*/
/* 					<div class="pull-xs-right">*/
/* 						<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="news__content">*/
/* 					<div class="col-xs-3 p-x-0">*/
/* 						<div class="news__content--image">*/
/* 							<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-9">*/
/* 						<div class="news__content--date">14 มิ.ย. 2559 20:00</div>*/
/* 						<div class="news__content--headline"><a href="#">HEADLINE</a></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="news__content">*/
/* 					<div class="col-xs-3 p-x-0">*/
/* 						<div class="news__content--image">*/
/* 							<img src="{{ url('theme://images/featured-demo-img-2.png') }}" alt="">*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-xs-9">*/
/* 						<div class="news__content--date">14 มิ.ย. 2559 20:00</div>*/
/* 						<div class="news__content--headline"><a href="#">HEADLINE</a></div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="text-xs-right p-y-1">*/
/* 					<a href="#">ข่าวทั้งหมด <i class="fa fa-angle-right" aria-hidden="true"></i></a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row result-board">*/
/* 				<div class="row result-board__button collapsed" data-toggle="collapse" href="#collapse-dropdown" aria-expanded="false" aria-controls="collapse-dropdown">*/
/* 					<span>ผลบอล</span>*/
/* 				</div>*/
/* 				<div class="collapse" id="collapse-dropdown">*/
/* 					<div class="dropdown" >*/
/* 						<div  type="button" id="menu-toggler" data-toggle="dropdown">*/
/* 							<i class="fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon"></i>*/
/* 							<div class="result-board__league-dropdown">*/
/* 								<span>English Premier League</span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="dropdown-menu result-board__league-dropdown--list" role="menu" aria-labelledby="menu-toggler">*/
/* 							<p>league result</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="result-board__league-result">*/
/* 						<p>No Match Result.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row result-board">*/
/* 				<div class="row result-board__button collapsed" data-toggle="collapse" href="#collapse-dropdown1" aria-expanded="false" aria-controls="collapse-dropdown">*/
/* 					<span>ตารางแข่งวันนี้</span>*/
/* 				</div>*/
/* 				<div class="collapse" id="collapse-dropdown1">*/
/* 					<div class="dropdown">*/
/* 						<div  type="button" id="menu-toggler1" data-toggle="dropdown">*/
/* 							<i class="fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon"></i>*/
/* 							<div class="result-board__league-dropdown ">*/
/* 								<span>English Premier League</span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="dropdown-menu result-board__league-dropdown--list" role="menu" aria-labelledby="menu-toggler1">*/
/* 							<p>league result</p>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="result-board__league-result">*/
/* 						<p>No Match Result.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row result-board">*/
/* 				<div class="table-description">*/
/* 					<span>ตารางคะแนน</span><span>อัพเดท 20 มิ.ย. 2559 15:10</span>*/
/* 				</div>*/
/* 				<div class="dropdown" >*/
/*                         <span  type="button" id="menu-toggler2" data-toggle="dropdown">*/
/*                             <i class="fa fa-chevron-down pull-xs-right result-board__league-dropdown--icon"></i>*/
/*                             <span class="result-board__league-dropdown">*/
/*                                 <span class="">Premier League</span>*/
/*                             </span>*/
/*                         </span>*/
/* 					<div class="dropdown-menu result-board__league-dropdown--list" role="menu" aria-labelledby="menu-toggler2" >*/
/* 						<p>league result</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="result-board__league-result league-table">*/
/* 					<table class ="table-sm league-table--box">*/
/* 						<thead class="league-table__header">*/
/* 						<tr>*/
/* 							<th>Pos</th>*/
/* 							<th>Teams</th>*/
/* 							<th>P</th>*/
/* 							<th>+/-</th>*/
/* 							<th>Pts</th>*/
/* 						</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						<tr class="rank-1 league-table">*/
/* 							<td>1</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">เลสเตอร์ ซิตี้</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>32</td>*/
/* 							<td>81</td>*/
/* 						</tr>*/
/* 						<tr class="rank-2 league-table">*/
/* 							<td>2</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">อาร์เซนอล</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>29</td>*/
/* 							<td>71</td>*/
/* 						</tr>*/
/* 						<tr class="rank-3 league-table">*/
/* 							<td>3</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">ทอตนัมฮอตสเปอร์</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>34</td>*/
/* 							<td>70</td>*/
/* 						</tr>*/
/* 						<tr class="rank-4 league-table">*/
/* 							<td>4</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">แมนเชสเตอร์ซิตี</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>30</td>*/
/* 							<td>66</td>*/
/* 						</tr>*/
/* 						<tr class="league-table">*/
/* 							<td>5</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">แมนเชสเตอร์ ยูไนเต็ท</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>14</td>*/
/* 							<td>66</td>*/
/* 						</tr>*/
/* 						<tr class="league-table">*/
/* 							<td>6</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">เซาแทมป์ตัน</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>18</td>*/
/* 							<td>63</td>*/
/* 						</tr>*/
/* 						<tr class="league-table">*/
/* 							<td>7</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">เวสต์แฮมยูไนเต็ด</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>14</td>*/
/* 							<td>62</td>*/
/* 						</tr>*/
/* 						<tr class="league-table">*/
/* 							<td>8</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">ลิเวอร์พูล</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>13</td>*/
/* 							<td>60</td>*/
/* 						</tr>*/
/* 						<tr class="league-table">*/
/* 							<td>9</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">สโตกซิตี</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>-14</td>*/
/* 							<td>51</td>*/
/* 						</tr>*/
/* 						<tr class="league-table">*/
/* 							<td>10</td>*/
/* 							<td class="league-table__team-names">*/
/* 								<a href="#">เชลซี</a>*/
/* 							</td>*/
/* 							<td>38</td>*/
/* 							<td>6</td>*/
/* 							<td>50</td>*/
/* 						</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/* 			<div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/* 			<div class="row ad-box text-xs-center">ADVERTISE HERE</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

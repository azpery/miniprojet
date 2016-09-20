<?php

/* default/index.html.twig */
class __TwigTemplate_a8e233faa44d7469f4f18f7dc34779f09325b6a974ae5f9dc5f8950fd127c6c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"file-tree\" class=\"col-xs-3\">
  <ul class=\"img-indicators\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 7
            echo "        <li data-target=\"#carousel\" class=\"img-indicator\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\"><img src=\"images/original/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\"></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
</div>
<div id=\"carousel\" class=\"carousel slide col-xs-9\" data-ride=\"carousel\">
  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            echo "    <div class=\"item ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo "active";
            }
            echo "\">
      <img src=\"images/original/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" alt=\"...\">
      <div class=\"carousel-caption\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "
      </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>

  <!-- Controls -->
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "<script>
\$('.carousel').carousel()
</script>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 35,  141 => 34,  125 => 21,  107 => 17,  102 => 15,  95 => 14,  78 => 13,  72 => 9,  53 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div id="file-tree" class="col-xs-3">*/
/*   <ul class="img-indicators">*/
/*   {% for image in images %}*/
/*         <li data-target="#carousel" class="img-indicator" data-slide-to="{{loop.index0}}"><img src="images/original/{{image.path}}"></li>*/
/*   {% endfor %}*/
/* </ul>*/
/* </div>*/
/* <div id="carousel" class="carousel slide col-xs-9" data-ride="carousel">*/
/*   <div class="carousel-inner" role="listbox">*/
/*     {% for image in images %}*/
/*     <div class="item {%if loop.index0 == 0%}active{%endif%}">*/
/*       <img src="images/original/{{image.path}}" alt="...">*/
/*       <div class="carousel-caption">*/
/*         {{image.title}}*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <!-- Controls -->*/
/*   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script>*/
/* $('.carousel').carousel()*/
/* </script>*/
/* {% endblock %}*/
/* */

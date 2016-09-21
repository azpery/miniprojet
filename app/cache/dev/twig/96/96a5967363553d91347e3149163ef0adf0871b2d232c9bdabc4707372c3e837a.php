<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_fb4ff9d730493952412b17e96929043141e2b2fc6ee7fc0a7034c4fbd41d7d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b29a5d7f61ca0699c85a0a9d7e5a8f7fd3bd56ebc2c30f1e683dfb95a95d3bd = $this->env->getExtension("native_profiler");
        $__internal_5b29a5d7f61ca0699c85a0a9d7e5a8f7fd3bd56ebc2c30f1e683dfb95a95d3bd->enter($__internal_5b29a5d7f61ca0699c85a0a9d7e5a8f7fd3bd56ebc2c30f1e683dfb95a95d3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b29a5d7f61ca0699c85a0a9d7e5a8f7fd3bd56ebc2c30f1e683dfb95a95d3bd->leave($__internal_5b29a5d7f61ca0699c85a0a9d7e5a8f7fd3bd56ebc2c30f1e683dfb95a95d3bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f7a4649557c033981d4dbee0188ca474ea7b0d287ad65288aa7696cfcdf994a = $this->env->getExtension("native_profiler");
        $__internal_8f7a4649557c033981d4dbee0188ca474ea7b0d287ad65288aa7696cfcdf994a->enter($__internal_8f7a4649557c033981d4dbee0188ca474ea7b0d287ad65288aa7696cfcdf994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8f7a4649557c033981d4dbee0188ca474ea7b0d287ad65288aa7696cfcdf994a->leave($__internal_8f7a4649557c033981d4dbee0188ca474ea7b0d287ad65288aa7696cfcdf994a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e656a0e7aeda8a5c2a700d1545fccb66cfeaba17f61db30029d4895ef1c5462 = $this->env->getExtension("native_profiler");
        $__internal_5e656a0e7aeda8a5c2a700d1545fccb66cfeaba17f61db30029d4895ef1c5462->enter($__internal_5e656a0e7aeda8a5c2a700d1545fccb66cfeaba17f61db30029d4895ef1c5462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5e656a0e7aeda8a5c2a700d1545fccb66cfeaba17f61db30029d4895ef1c5462->leave($__internal_5e656a0e7aeda8a5c2a700d1545fccb66cfeaba17f61db30029d4895ef1c5462_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e29075d12f62e310bd7ba6bf551f9ae411d1e2b4dc5db6b96c8585306879a7d8 = $this->env->getExtension("native_profiler");
        $__internal_e29075d12f62e310bd7ba6bf551f9ae411d1e2b4dc5db6b96c8585306879a7d8->enter($__internal_e29075d12f62e310bd7ba6bf551f9ae411d1e2b4dc5db6b96c8585306879a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e29075d12f62e310bd7ba6bf551f9ae411d1e2b4dc5db6b96c8585306879a7d8->leave($__internal_e29075d12f62e310bd7ba6bf551f9ae411d1e2b4dc5db6b96c8585306879a7d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

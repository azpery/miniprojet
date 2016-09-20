<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_367850dcd11c4506c091105306c0985512462754f339f29b8f0b309b58dd9036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0a0944dfd97848df0c3d1bd7a6323860483cd442881f7ec172356cc212260791 = $this->env->getExtension("native_profiler");
        $__internal_0a0944dfd97848df0c3d1bd7a6323860483cd442881f7ec172356cc212260791->enter($__internal_0a0944dfd97848df0c3d1bd7a6323860483cd442881f7ec172356cc212260791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0944dfd97848df0c3d1bd7a6323860483cd442881f7ec172356cc212260791->leave($__internal_0a0944dfd97848df0c3d1bd7a6323860483cd442881f7ec172356cc212260791_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c59b8bfdd5c89a931b1768d183b1f4a080db0507eb0d2e6bd3f1be3dab05682c = $this->env->getExtension("native_profiler");
        $__internal_c59b8bfdd5c89a931b1768d183b1f4a080db0507eb0d2e6bd3f1be3dab05682c->enter($__internal_c59b8bfdd5c89a931b1768d183b1f4a080db0507eb0d2e6bd3f1be3dab05682c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c59b8bfdd5c89a931b1768d183b1f4a080db0507eb0d2e6bd3f1be3dab05682c->leave($__internal_c59b8bfdd5c89a931b1768d183b1f4a080db0507eb0d2e6bd3f1be3dab05682c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23816d4c31f309512123e7de7d7cd12cbaaa86756e1fd4eab95feede337753e7 = $this->env->getExtension("native_profiler");
        $__internal_23816d4c31f309512123e7de7d7cd12cbaaa86756e1fd4eab95feede337753e7->enter($__internal_23816d4c31f309512123e7de7d7cd12cbaaa86756e1fd4eab95feede337753e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23816d4c31f309512123e7de7d7cd12cbaaa86756e1fd4eab95feede337753e7->leave($__internal_23816d4c31f309512123e7de7d7cd12cbaaa86756e1fd4eab95feede337753e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b27174265f9f1f39b4ddb89389eeadc678c7d7c46682a3e5fd611c09e0d1c5b = $this->env->getExtension("native_profiler");
        $__internal_9b27174265f9f1f39b4ddb89389eeadc678c7d7c46682a3e5fd611c09e0d1c5b->enter($__internal_9b27174265f9f1f39b4ddb89389eeadc678c7d7c46682a3e5fd611c09e0d1c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b27174265f9f1f39b4ddb89389eeadc678c7d7c46682a3e5fd611c09e0d1c5b->leave($__internal_9b27174265f9f1f39b4ddb89389eeadc678c7d7c46682a3e5fd611c09e0d1c5b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

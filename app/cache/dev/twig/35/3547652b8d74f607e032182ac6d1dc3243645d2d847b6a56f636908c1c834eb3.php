<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f328918c99aa94b9f3aa072e42f134f7a661dda07487164de0e7219030883fa2 extends Twig_Template
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
        $__internal_2b1a6dae92b0493ae75df10baba96c9112d7fa4218c368153c8bc248aa74b53a = $this->env->getExtension("native_profiler");
        $__internal_2b1a6dae92b0493ae75df10baba96c9112d7fa4218c368153c8bc248aa74b53a->enter($__internal_2b1a6dae92b0493ae75df10baba96c9112d7fa4218c368153c8bc248aa74b53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1a6dae92b0493ae75df10baba96c9112d7fa4218c368153c8bc248aa74b53a->leave($__internal_2b1a6dae92b0493ae75df10baba96c9112d7fa4218c368153c8bc248aa74b53a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_758e7d10edcd38daca98d7f8c45f792aa37075c0e338d31ac1e37f8e2fc591bf = $this->env->getExtension("native_profiler");
        $__internal_758e7d10edcd38daca98d7f8c45f792aa37075c0e338d31ac1e37f8e2fc591bf->enter($__internal_758e7d10edcd38daca98d7f8c45f792aa37075c0e338d31ac1e37f8e2fc591bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_758e7d10edcd38daca98d7f8c45f792aa37075c0e338d31ac1e37f8e2fc591bf->leave($__internal_758e7d10edcd38daca98d7f8c45f792aa37075c0e338d31ac1e37f8e2fc591bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2f6c7aff96725318cf7ab43aa8397c1f7d5984652105871dd9932ab97385c2e = $this->env->getExtension("native_profiler");
        $__internal_a2f6c7aff96725318cf7ab43aa8397c1f7d5984652105871dd9932ab97385c2e->enter($__internal_a2f6c7aff96725318cf7ab43aa8397c1f7d5984652105871dd9932ab97385c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2f6c7aff96725318cf7ab43aa8397c1f7d5984652105871dd9932ab97385c2e->leave($__internal_a2f6c7aff96725318cf7ab43aa8397c1f7d5984652105871dd9932ab97385c2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e52a6219411e3d37b6c7db4397c13655aaaee5790890fd6da3bda960f73bc57 = $this->env->getExtension("native_profiler");
        $__internal_3e52a6219411e3d37b6c7db4397c13655aaaee5790890fd6da3bda960f73bc57->enter($__internal_3e52a6219411e3d37b6c7db4397c13655aaaee5790890fd6da3bda960f73bc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e52a6219411e3d37b6c7db4397c13655aaaee5790890fd6da3bda960f73bc57->leave($__internal_3e52a6219411e3d37b6c7db4397c13655aaaee5790890fd6da3bda960f73bc57_prof);

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

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_65a2b55ab16d7bf6b3635bfe8e9867b23744ad866eb96eb82b0fabfc8ba98f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_764e204b39d9138fe3a4fb5d2055cac0ac1f2edcca3dd5b3cab797bafdb5ad6e = $this->env->getExtension("native_profiler");
        $__internal_764e204b39d9138fe3a4fb5d2055cac0ac1f2edcca3dd5b3cab797bafdb5ad6e->enter($__internal_764e204b39d9138fe3a4fb5d2055cac0ac1f2edcca3dd5b3cab797bafdb5ad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_764e204b39d9138fe3a4fb5d2055cac0ac1f2edcca3dd5b3cab797bafdb5ad6e->leave($__internal_764e204b39d9138fe3a4fb5d2055cac0ac1f2edcca3dd5b3cab797bafdb5ad6e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea34f23a5b8c00ed20f547bde8ec0cb4dbcb44dca2c3cb99d60ad073d4c72726 = $this->env->getExtension("native_profiler");
        $__internal_ea34f23a5b8c00ed20f547bde8ec0cb4dbcb44dca2c3cb99d60ad073d4c72726->enter($__internal_ea34f23a5b8c00ed20f547bde8ec0cb4dbcb44dca2c3cb99d60ad073d4c72726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ea34f23a5b8c00ed20f547bde8ec0cb4dbcb44dca2c3cb99d60ad073d4c72726->leave($__internal_ea34f23a5b8c00ed20f547bde8ec0cb4dbcb44dca2c3cb99d60ad073d4c72726_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

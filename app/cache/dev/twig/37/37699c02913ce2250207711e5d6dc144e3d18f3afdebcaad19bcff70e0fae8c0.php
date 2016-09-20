<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1225845dccbbdde405f6429c02bd0dbb0531972f965bc088639a6ff4efadc22e extends Twig_Template
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
        $__internal_1c6d85751777c51c2b1eca875d848c84c6b93ea5f3128ced3815f58793213276 = $this->env->getExtension("native_profiler");
        $__internal_1c6d85751777c51c2b1eca875d848c84c6b93ea5f3128ced3815f58793213276->enter($__internal_1c6d85751777c51c2b1eca875d848c84c6b93ea5f3128ced3815f58793213276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c6d85751777c51c2b1eca875d848c84c6b93ea5f3128ced3815f58793213276->leave($__internal_1c6d85751777c51c2b1eca875d848c84c6b93ea5f3128ced3815f58793213276_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_98d958eb646686a0d1ca81cdfa8358376c3fcf2c4596e1f82c5dc74792013c43 = $this->env->getExtension("native_profiler");
        $__internal_98d958eb646686a0d1ca81cdfa8358376c3fcf2c4596e1f82c5dc74792013c43->enter($__internal_98d958eb646686a0d1ca81cdfa8358376c3fcf2c4596e1f82c5dc74792013c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_98d958eb646686a0d1ca81cdfa8358376c3fcf2c4596e1f82c5dc74792013c43->leave($__internal_98d958eb646686a0d1ca81cdfa8358376c3fcf2c4596e1f82c5dc74792013c43_prof);

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

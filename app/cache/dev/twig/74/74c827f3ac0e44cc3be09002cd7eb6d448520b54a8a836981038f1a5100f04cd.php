<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_396dbf6cfd11feec6879f352d275524a744cdaa434bf9fc52d01fa54ac85555a extends Twig_Template
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
        $__internal_2c9cf7a033c806974f09f953d9685185b8c0df94fb05e671c073d7a3cbe4af32 = $this->env->getExtension("native_profiler");
        $__internal_2c9cf7a033c806974f09f953d9685185b8c0df94fb05e671c073d7a3cbe4af32->enter($__internal_2c9cf7a033c806974f09f953d9685185b8c0df94fb05e671c073d7a3cbe4af32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2c9cf7a033c806974f09f953d9685185b8c0df94fb05e671c073d7a3cbe4af32->leave($__internal_2c9cf7a033c806974f09f953d9685185b8c0df94fb05e671c073d7a3cbe4af32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_387875454e72043e5bfd056b81c8e2536c1582f9a5e90d9063b2e6459280dbbd extends Twig_Template
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
        $__internal_0b1c6d638961f67defd83b9e32a5c24db75c9d2748972f6a2efa6cbf63c17aab = $this->env->getExtension("native_profiler");
        $__internal_0b1c6d638961f67defd83b9e32a5c24db75c9d2748972f6a2efa6cbf63c17aab->enter($__internal_0b1c6d638961f67defd83b9e32a5c24db75c9d2748972f6a2efa6cbf63c17aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0b1c6d638961f67defd83b9e32a5c24db75c9d2748972f6a2efa6cbf63c17aab->leave($__internal_0b1c6d638961f67defd83b9e32a5c24db75c9d2748972f6a2efa6cbf63c17aab_prof);

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

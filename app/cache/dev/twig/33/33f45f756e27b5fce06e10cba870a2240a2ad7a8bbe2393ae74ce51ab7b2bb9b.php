<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c5f4e2799904b68908c270477fea7be24a496c37779e31b9b2983a55cdb1bf42 extends Twig_Template
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
        $__internal_0bf854425c5536f31730a776aa433def86acf7f2894ce1c8df12aeac879ed936 = $this->env->getExtension("native_profiler");
        $__internal_0bf854425c5536f31730a776aa433def86acf7f2894ce1c8df12aeac879ed936->enter($__internal_0bf854425c5536f31730a776aa433def86acf7f2894ce1c8df12aeac879ed936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0bf854425c5536f31730a776aa433def86acf7f2894ce1c8df12aeac879ed936->leave($__internal_0bf854425c5536f31730a776aa433def86acf7f2894ce1c8df12aeac879ed936_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

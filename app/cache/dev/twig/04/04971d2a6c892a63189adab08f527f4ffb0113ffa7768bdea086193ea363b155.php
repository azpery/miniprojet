<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3f781ca607155bf9c90691440f58997a450c19ae3a1c204411d4de469f30be34 extends Twig_Template
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
        $__internal_6041c1465cf233cf9e7dad4ab026f0b73f2b8b19e928ec2fea102feacb30cbc4 = $this->env->getExtension("native_profiler");
        $__internal_6041c1465cf233cf9e7dad4ab026f0b73f2b8b19e928ec2fea102feacb30cbc4->enter($__internal_6041c1465cf233cf9e7dad4ab026f0b73f2b8b19e928ec2fea102feacb30cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6041c1465cf233cf9e7dad4ab026f0b73f2b8b19e928ec2fea102feacb30cbc4->leave($__internal_6041c1465cf233cf9e7dad4ab026f0b73f2b8b19e928ec2fea102feacb30cbc4_prof);

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

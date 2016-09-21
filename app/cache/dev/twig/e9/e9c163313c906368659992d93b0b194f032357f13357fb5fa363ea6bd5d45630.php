<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_db380496abf2973cfaaae364b97bb821fca8ad213bff105e2666ee649e06f8ce extends Twig_Template
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
        $__internal_7428b48df17f824965a7accdd167304b655e8b8a88bfa7580674eefc8c62b058 = $this->env->getExtension("native_profiler");
        $__internal_7428b48df17f824965a7accdd167304b655e8b8a88bfa7580674eefc8c62b058->enter($__internal_7428b48df17f824965a7accdd167304b655e8b8a88bfa7580674eefc8c62b058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7428b48df17f824965a7accdd167304b655e8b8a88bfa7580674eefc8c62b058->leave($__internal_7428b48df17f824965a7accdd167304b655e8b8a88bfa7580674eefc8c62b058_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

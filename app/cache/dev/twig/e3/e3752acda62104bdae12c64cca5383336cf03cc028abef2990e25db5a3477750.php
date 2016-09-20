<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d1f3bc0f77b78181cc8b7d6bd4d9ae7af84bc2620a0337662321e20867da6397 extends Twig_Template
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
        $__internal_3a41d9e913ff45d6994dc723daf46a029ccb737af3f174d45be8a6cecb1b22b7 = $this->env->getExtension("native_profiler");
        $__internal_3a41d9e913ff45d6994dc723daf46a029ccb737af3f174d45be8a6cecb1b22b7->enter($__internal_3a41d9e913ff45d6994dc723daf46a029ccb737af3f174d45be8a6cecb1b22b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a41d9e913ff45d6994dc723daf46a029ccb737af3f174d45be8a6cecb1b22b7->leave($__internal_3a41d9e913ff45d6994dc723daf46a029ccb737af3f174d45be8a6cecb1b22b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

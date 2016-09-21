<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1339a85cce626b405cf68aa896e0a7485bdee00ea375218480478e1576925be6 extends Twig_Template
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
        $__internal_0b3e46379944d75f18fc7d0fb31db106a5bc8ff8e98c91e942afeff288a8f115 = $this->env->getExtension("native_profiler");
        $__internal_0b3e46379944d75f18fc7d0fb31db106a5bc8ff8e98c91e942afeff288a8f115->enter($__internal_0b3e46379944d75f18fc7d0fb31db106a5bc8ff8e98c91e942afeff288a8f115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0b3e46379944d75f18fc7d0fb31db106a5bc8ff8e98c91e942afeff288a8f115->leave($__internal_0b3e46379944d75f18fc7d0fb31db106a5bc8ff8e98c91e942afeff288a8f115_prof);

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

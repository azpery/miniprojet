<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_16aa63bea1c7dc85057c8cc3fe78ccda90e3387d9af49b012e55b0fe9bbd6f26 extends Twig_Template
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
        $__internal_78b8f7398d301023185f728aa242b30dc062025f77114603e1722062d9b27a05 = $this->env->getExtension("native_profiler");
        $__internal_78b8f7398d301023185f728aa242b30dc062025f77114603e1722062d9b27a05->enter($__internal_78b8f7398d301023185f728aa242b30dc062025f77114603e1722062d9b27a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_78b8f7398d301023185f728aa242b30dc062025f77114603e1722062d9b27a05->leave($__internal_78b8f7398d301023185f728aa242b30dc062025f77114603e1722062d9b27a05_prof);

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

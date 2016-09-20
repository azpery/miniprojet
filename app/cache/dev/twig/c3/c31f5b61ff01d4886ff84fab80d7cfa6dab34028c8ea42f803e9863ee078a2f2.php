<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0bbe1307f549493aa9705e06a8b7a96ee60f623bfe37eea9e44ce94b30bda0fd extends Twig_Template
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
        $__internal_ea165071e242a0b62401592c987994ce0c06665ac2796d9b47f3a8bf528c9b95 = $this->env->getExtension("native_profiler");
        $__internal_ea165071e242a0b62401592c987994ce0c06665ac2796d9b47f3a8bf528c9b95->enter($__internal_ea165071e242a0b62401592c987994ce0c06665ac2796d9b47f3a8bf528c9b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ea165071e242a0b62401592c987994ce0c06665ac2796d9b47f3a8bf528c9b95->leave($__internal_ea165071e242a0b62401592c987994ce0c06665ac2796d9b47f3a8bf528c9b95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

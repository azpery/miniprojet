<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c02002b1f8142cc0463076a91f18c073f96e148a21b2f664aeefb1d8697e36af extends Twig_Template
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
        $__internal_c2b0cc6cfd932c6b279480ad530a968c0fc8b77f7a6687de68d8b9d1007d1206 = $this->env->getExtension("native_profiler");
        $__internal_c2b0cc6cfd932c6b279480ad530a968c0fc8b77f7a6687de68d8b9d1007d1206->enter($__internal_c2b0cc6cfd932c6b279480ad530a968c0fc8b77f7a6687de68d8b9d1007d1206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c2b0cc6cfd932c6b279480ad530a968c0fc8b77f7a6687de68d8b9d1007d1206->leave($__internal_c2b0cc6cfd932c6b279480ad530a968c0fc8b77f7a6687de68d8b9d1007d1206_prof);

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

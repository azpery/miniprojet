<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f5cb94fae3ae9dfbd494b2c741a7dc1d0adf4b2ec1d42ee488a94315507cae0d extends Twig_Template
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
        $__internal_cef9c22dc98f342fc6c68871ddda6b6a4b0575d8b7900ba73f4086070127c714 = $this->env->getExtension("native_profiler");
        $__internal_cef9c22dc98f342fc6c68871ddda6b6a4b0575d8b7900ba73f4086070127c714->enter($__internal_cef9c22dc98f342fc6c68871ddda6b6a4b0575d8b7900ba73f4086070127c714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cef9c22dc98f342fc6c68871ddda6b6a4b0575d8b7900ba73f4086070127c714->leave($__internal_cef9c22dc98f342fc6c68871ddda6b6a4b0575d8b7900ba73f4086070127c714_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2295677f92d527f77acc0a180d972d25aa23864a6ddf0e14754091615be9c75d extends Twig_Template
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
        $__internal_ea3cec89a438e01972a8214057668638d6ebe8118b6219489f7ec04a934a501d = $this->env->getExtension("native_profiler");
        $__internal_ea3cec89a438e01972a8214057668638d6ebe8118b6219489f7ec04a934a501d->enter($__internal_ea3cec89a438e01972a8214057668638d6ebe8118b6219489f7ec04a934a501d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ea3cec89a438e01972a8214057668638d6ebe8118b6219489f7ec04a934a501d->leave($__internal_ea3cec89a438e01972a8214057668638d6ebe8118b6219489f7ec04a934a501d_prof);

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

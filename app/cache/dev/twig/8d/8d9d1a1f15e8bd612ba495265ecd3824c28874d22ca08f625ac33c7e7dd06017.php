<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c338386be69ee5603d1e18e19323ca5b30b47479b2e5fc588062f391488cb821 extends Twig_Template
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
        $__internal_40d4504183725d1c06bbfa24c5a157cc1321df28c9e336633814d90ce5adcb82 = $this->env->getExtension("native_profiler");
        $__internal_40d4504183725d1c06bbfa24c5a157cc1321df28c9e336633814d90ce5adcb82->enter($__internal_40d4504183725d1c06bbfa24c5a157cc1321df28c9e336633814d90ce5adcb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_40d4504183725d1c06bbfa24c5a157cc1321df28c9e336633814d90ce5adcb82->leave($__internal_40d4504183725d1c06bbfa24c5a157cc1321df28c9e336633814d90ce5adcb82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

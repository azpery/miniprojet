<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_35ac9907689a6c3afcee0df69994c7c7a4ffdae2c6e44410e8fa502bff790739 extends Twig_Template
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
        $__internal_425ee931c68471a58a9b08fd472a9aff70f667d5a0a18855e99bb0128a029447 = $this->env->getExtension("native_profiler");
        $__internal_425ee931c68471a58a9b08fd472a9aff70f667d5a0a18855e99bb0128a029447->enter($__internal_425ee931c68471a58a9b08fd472a9aff70f667d5a0a18855e99bb0128a029447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_425ee931c68471a58a9b08fd472a9aff70f667d5a0a18855e99bb0128a029447->leave($__internal_425ee931c68471a58a9b08fd472a9aff70f667d5a0a18855e99bb0128a029447_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

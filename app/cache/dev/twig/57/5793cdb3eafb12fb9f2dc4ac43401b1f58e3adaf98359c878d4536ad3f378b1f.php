<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_534f322c32f04390af6dfbaf5d68a43c74d755a1bd9350b566e45fd0ecd42e18 extends Twig_Template
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
        $__internal_6b404ec0e8aac6136888b6727c97f1f850e9b7c75b57e51c5c747e9e0d7cf7af = $this->env->getExtension("native_profiler");
        $__internal_6b404ec0e8aac6136888b6727c97f1f850e9b7c75b57e51c5c747e9e0d7cf7af->enter($__internal_6b404ec0e8aac6136888b6727c97f1f850e9b7c75b57e51c5c747e9e0d7cf7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6b404ec0e8aac6136888b6727c97f1f850e9b7c75b57e51c5c747e9e0d7cf7af->leave($__internal_6b404ec0e8aac6136888b6727c97f1f850e9b7c75b57e51c5c747e9e0d7cf7af_prof);

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

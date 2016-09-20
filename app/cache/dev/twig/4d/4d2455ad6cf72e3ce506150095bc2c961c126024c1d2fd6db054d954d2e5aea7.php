<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_09515c147338e9106852bdab17cff97f8fa5cd084248988bffec0fb43fc92129 extends Twig_Template
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
        $__internal_7d92745e3030ee8a7280aa3b7af1ab9310904a73f5abede3eb57cb8d4b84374c = $this->env->getExtension("native_profiler");
        $__internal_7d92745e3030ee8a7280aa3b7af1ab9310904a73f5abede3eb57cb8d4b84374c->enter($__internal_7d92745e3030ee8a7280aa3b7af1ab9310904a73f5abede3eb57cb8d4b84374c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7d92745e3030ee8a7280aa3b7af1ab9310904a73f5abede3eb57cb8d4b84374c->leave($__internal_7d92745e3030ee8a7280aa3b7af1ab9310904a73f5abede3eb57cb8d4b84374c_prof);

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

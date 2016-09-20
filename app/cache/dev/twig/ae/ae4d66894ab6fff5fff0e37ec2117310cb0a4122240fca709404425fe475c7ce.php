<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_31571120856010b96a62d968be215cfe9be909ccbdb36d7c1dc10845cc5f93e7 extends Twig_Template
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
        $__internal_a9cbd8295df06a34259220c76bfbe637d77308624eb2cec4cee982781cd88e18 = $this->env->getExtension("native_profiler");
        $__internal_a9cbd8295df06a34259220c76bfbe637d77308624eb2cec4cee982781cd88e18->enter($__internal_a9cbd8295df06a34259220c76bfbe637d77308624eb2cec4cee982781cd88e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a9cbd8295df06a34259220c76bfbe637d77308624eb2cec4cee982781cd88e18->leave($__internal_a9cbd8295df06a34259220c76bfbe637d77308624eb2cec4cee982781cd88e18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

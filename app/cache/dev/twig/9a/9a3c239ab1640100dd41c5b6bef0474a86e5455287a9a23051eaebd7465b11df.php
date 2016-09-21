<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_11eade28a74238f8e2992771e9c33e1fbe9278a76731502b7eb778d31d09328f extends Twig_Template
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
        $__internal_92ea3ba33a5d133c688d14020dcc848b1d895761d3a9f353bfdef324d331e25b = $this->env->getExtension("native_profiler");
        $__internal_92ea3ba33a5d133c688d14020dcc848b1d895761d3a9f353bfdef324d331e25b->enter($__internal_92ea3ba33a5d133c688d14020dcc848b1d895761d3a9f353bfdef324d331e25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_92ea3ba33a5d133c688d14020dcc848b1d895761d3a9f353bfdef324d331e25b->leave($__internal_92ea3ba33a5d133c688d14020dcc848b1d895761d3a9f353bfdef324d331e25b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

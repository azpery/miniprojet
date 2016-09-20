<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f5f36c2159a37994b8853e78c9c17c717038240dd4f86b97097419c81c6fea7a extends Twig_Template
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
        $__internal_73604d352de4dfcf30c4eb6be2ec597c67bdac766d96d9a70ff6d9976c11c450 = $this->env->getExtension("native_profiler");
        $__internal_73604d352de4dfcf30c4eb6be2ec597c67bdac766d96d9a70ff6d9976c11c450->enter($__internal_73604d352de4dfcf30c4eb6be2ec597c67bdac766d96d9a70ff6d9976c11c450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_73604d352de4dfcf30c4eb6be2ec597c67bdac766d96d9a70ff6d9976c11c450->leave($__internal_73604d352de4dfcf30c4eb6be2ec597c67bdac766d96d9a70ff6d9976c11c450_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

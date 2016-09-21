<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3d571610e885110bef1115f1ebf97e28ba2771406d870fbac4e89aaf8d7e4e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cf8ea09d3119fd2c2f8e52fc928bcaf584cc3343586acd7c091bafdade12a12 = $this->env->getExtension("native_profiler");
        $__internal_2cf8ea09d3119fd2c2f8e52fc928bcaf584cc3343586acd7c091bafdade12a12->enter($__internal_2cf8ea09d3119fd2c2f8e52fc928bcaf584cc3343586acd7c091bafdade12a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf8ea09d3119fd2c2f8e52fc928bcaf584cc3343586acd7c091bafdade12a12->leave($__internal_2cf8ea09d3119fd2c2f8e52fc928bcaf584cc3343586acd7c091bafdade12a12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0598b88e7d346b8356a6f60cecbfc9684afda84bb06b08dc9ba92657a850560a = $this->env->getExtension("native_profiler");
        $__internal_0598b88e7d346b8356a6f60cecbfc9684afda84bb06b08dc9ba92657a850560a->enter($__internal_0598b88e7d346b8356a6f60cecbfc9684afda84bb06b08dc9ba92657a850560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0598b88e7d346b8356a6f60cecbfc9684afda84bb06b08dc9ba92657a850560a->leave($__internal_0598b88e7d346b8356a6f60cecbfc9684afda84bb06b08dc9ba92657a850560a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc633c0c6a645c22ffddd326122ea1ea57b196e40668b6429b316c1e38d669ad = $this->env->getExtension("native_profiler");
        $__internal_dc633c0c6a645c22ffddd326122ea1ea57b196e40668b6429b316c1e38d669ad->enter($__internal_dc633c0c6a645c22ffddd326122ea1ea57b196e40668b6429b316c1e38d669ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc633c0c6a645c22ffddd326122ea1ea57b196e40668b6429b316c1e38d669ad->leave($__internal_dc633c0c6a645c22ffddd326122ea1ea57b196e40668b6429b316c1e38d669ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32ad8737c27fbd9814fb3367acd4a293076bf34de3841c4107846f42d3fc736c = $this->env->getExtension("native_profiler");
        $__internal_32ad8737c27fbd9814fb3367acd4a293076bf34de3841c4107846f42d3fc736c->enter($__internal_32ad8737c27fbd9814fb3367acd4a293076bf34de3841c4107846f42d3fc736c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_32ad8737c27fbd9814fb3367acd4a293076bf34de3841c4107846f42d3fc736c->leave($__internal_32ad8737c27fbd9814fb3367acd4a293076bf34de3841c4107846f42d3fc736c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

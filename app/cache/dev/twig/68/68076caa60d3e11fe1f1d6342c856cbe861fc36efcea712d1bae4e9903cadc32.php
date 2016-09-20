<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3acc10f6c63b0977c5b765e501b24b2c5f1af5e3f8e68cc773ead66ac5d095a4 extends Twig_Template
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
        $__internal_e26abc6ba96d88dfdeee89e2b3ca4731d627b71effaf78abc497bbe33f7dcf2e = $this->env->getExtension("native_profiler");
        $__internal_e26abc6ba96d88dfdeee89e2b3ca4731d627b71effaf78abc497bbe33f7dcf2e->enter($__internal_e26abc6ba96d88dfdeee89e2b3ca4731d627b71effaf78abc497bbe33f7dcf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26abc6ba96d88dfdeee89e2b3ca4731d627b71effaf78abc497bbe33f7dcf2e->leave($__internal_e26abc6ba96d88dfdeee89e2b3ca4731d627b71effaf78abc497bbe33f7dcf2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aecfa346e3c8140a6e4641a0db7f010e5eaf022838799b381b1cceeb29073fc4 = $this->env->getExtension("native_profiler");
        $__internal_aecfa346e3c8140a6e4641a0db7f010e5eaf022838799b381b1cceeb29073fc4->enter($__internal_aecfa346e3c8140a6e4641a0db7f010e5eaf022838799b381b1cceeb29073fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aecfa346e3c8140a6e4641a0db7f010e5eaf022838799b381b1cceeb29073fc4->leave($__internal_aecfa346e3c8140a6e4641a0db7f010e5eaf022838799b381b1cceeb29073fc4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c5a4c023373b4b3367f338ec8a817c0e691602d12efd291d769833a166903c1 = $this->env->getExtension("native_profiler");
        $__internal_4c5a4c023373b4b3367f338ec8a817c0e691602d12efd291d769833a166903c1->enter($__internal_4c5a4c023373b4b3367f338ec8a817c0e691602d12efd291d769833a166903c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c5a4c023373b4b3367f338ec8a817c0e691602d12efd291d769833a166903c1->leave($__internal_4c5a4c023373b4b3367f338ec8a817c0e691602d12efd291d769833a166903c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6f06209a30b28329714fafc99780c01c0b6ce00e345b081b6fa10ecee8701e8 = $this->env->getExtension("native_profiler");
        $__internal_b6f06209a30b28329714fafc99780c01c0b6ce00e345b081b6fa10ecee8701e8->enter($__internal_b6f06209a30b28329714fafc99780c01c0b6ce00e345b081b6fa10ecee8701e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b6f06209a30b28329714fafc99780c01c0b6ce00e345b081b6fa10ecee8701e8->leave($__internal_b6f06209a30b28329714fafc99780c01c0b6ce00e345b081b6fa10ecee8701e8_prof);

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

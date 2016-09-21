<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b4bd72310e129f8e32cced5be2aaadd1125e8e499b53ae399d704fe7da61a438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7430c9be84b16f28947ee8c8a4c27c5f2b59507634494a373e4d2051cdc97288 = $this->env->getExtension("native_profiler");
        $__internal_7430c9be84b16f28947ee8c8a4c27c5f2b59507634494a373e4d2051cdc97288->enter($__internal_7430c9be84b16f28947ee8c8a4c27c5f2b59507634494a373e4d2051cdc97288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7430c9be84b16f28947ee8c8a4c27c5f2b59507634494a373e4d2051cdc97288->leave($__internal_7430c9be84b16f28947ee8c8a4c27c5f2b59507634494a373e4d2051cdc97288_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0db96a47c9b53d696d73c2f494153839b688f6c44a8985d61658570167d3b83c = $this->env->getExtension("native_profiler");
        $__internal_0db96a47c9b53d696d73c2f494153839b688f6c44a8985d61658570167d3b83c->enter($__internal_0db96a47c9b53d696d73c2f494153839b688f6c44a8985d61658570167d3b83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0db96a47c9b53d696d73c2f494153839b688f6c44a8985d61658570167d3b83c->leave($__internal_0db96a47c9b53d696d73c2f494153839b688f6c44a8985d61658570167d3b83c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72aec5182c282a91fd046408f2a337ae0e4fbe77b21433213ae095170c505b0a = $this->env->getExtension("native_profiler");
        $__internal_72aec5182c282a91fd046408f2a337ae0e4fbe77b21433213ae095170c505b0a->enter($__internal_72aec5182c282a91fd046408f2a337ae0e4fbe77b21433213ae095170c505b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_72aec5182c282a91fd046408f2a337ae0e4fbe77b21433213ae095170c505b0a->leave($__internal_72aec5182c282a91fd046408f2a337ae0e4fbe77b21433213ae095170c505b0a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

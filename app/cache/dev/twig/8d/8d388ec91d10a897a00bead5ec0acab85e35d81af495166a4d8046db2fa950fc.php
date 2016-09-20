<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_661ddbfc51b45c1ead38e6b65618b5c25d579f6b6f037ac0e501c1358246facc extends Twig_Template
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
        $__internal_4b1910d28d9a373799143d8b3defcdb85ec51fa118c36f2172b40e67863fc750 = $this->env->getExtension("native_profiler");
        $__internal_4b1910d28d9a373799143d8b3defcdb85ec51fa118c36f2172b40e67863fc750->enter($__internal_4b1910d28d9a373799143d8b3defcdb85ec51fa118c36f2172b40e67863fc750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b1910d28d9a373799143d8b3defcdb85ec51fa118c36f2172b40e67863fc750->leave($__internal_4b1910d28d9a373799143d8b3defcdb85ec51fa118c36f2172b40e67863fc750_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_650fbab797552e7a6d4b0960e885bc25704970428ae0be53f826d8aaefcf0026 = $this->env->getExtension("native_profiler");
        $__internal_650fbab797552e7a6d4b0960e885bc25704970428ae0be53f826d8aaefcf0026->enter($__internal_650fbab797552e7a6d4b0960e885bc25704970428ae0be53f826d8aaefcf0026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_650fbab797552e7a6d4b0960e885bc25704970428ae0be53f826d8aaefcf0026->leave($__internal_650fbab797552e7a6d4b0960e885bc25704970428ae0be53f826d8aaefcf0026_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccb9546673ddf52622c03d36a029219fd2639fe2fff611569421a98d44099ea4 = $this->env->getExtension("native_profiler");
        $__internal_ccb9546673ddf52622c03d36a029219fd2639fe2fff611569421a98d44099ea4->enter($__internal_ccb9546673ddf52622c03d36a029219fd2639fe2fff611569421a98d44099ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccb9546673ddf52622c03d36a029219fd2639fe2fff611569421a98d44099ea4->leave($__internal_ccb9546673ddf52622c03d36a029219fd2639fe2fff611569421a98d44099ea4_prof);

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

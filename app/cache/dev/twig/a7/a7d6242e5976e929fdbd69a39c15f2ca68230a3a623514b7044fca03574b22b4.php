<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_367850dcd11c4506c091105306c0985512462754f339f29b8f0b309b58dd9036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a16f690c3ec5d34afdf4097c95cf604462f3ba7e271a29ec438641c27cce5bf = $this->env->getExtension("native_profiler");
        $__internal_7a16f690c3ec5d34afdf4097c95cf604462f3ba7e271a29ec438641c27cce5bf->enter($__internal_7a16f690c3ec5d34afdf4097c95cf604462f3ba7e271a29ec438641c27cce5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a16f690c3ec5d34afdf4097c95cf604462f3ba7e271a29ec438641c27cce5bf->leave($__internal_7a16f690c3ec5d34afdf4097c95cf604462f3ba7e271a29ec438641c27cce5bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_952d6c202de5d9800eb812df3ee204903497e1a809a3a2b0d6d1d8bb2ed677b5 = $this->env->getExtension("native_profiler");
        $__internal_952d6c202de5d9800eb812df3ee204903497e1a809a3a2b0d6d1d8bb2ed677b5->enter($__internal_952d6c202de5d9800eb812df3ee204903497e1a809a3a2b0d6d1d8bb2ed677b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_952d6c202de5d9800eb812df3ee204903497e1a809a3a2b0d6d1d8bb2ed677b5->leave($__internal_952d6c202de5d9800eb812df3ee204903497e1a809a3a2b0d6d1d8bb2ed677b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14a7ecbd264ed7ba1c6ab593db90589e6a47b940b19a694dd5c9eea3837a4cf8 = $this->env->getExtension("native_profiler");
        $__internal_14a7ecbd264ed7ba1c6ab593db90589e6a47b940b19a694dd5c9eea3837a4cf8->enter($__internal_14a7ecbd264ed7ba1c6ab593db90589e6a47b940b19a694dd5c9eea3837a4cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_14a7ecbd264ed7ba1c6ab593db90589e6a47b940b19a694dd5c9eea3837a4cf8->leave($__internal_14a7ecbd264ed7ba1c6ab593db90589e6a47b940b19a694dd5c9eea3837a4cf8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47bb791d562a10b5d74972d0aacfcfed21a202ce18ebaca9aec12663ac6f7345 = $this->env->getExtension("native_profiler");
        $__internal_47bb791d562a10b5d74972d0aacfcfed21a202ce18ebaca9aec12663ac6f7345->enter($__internal_47bb791d562a10b5d74972d0aacfcfed21a202ce18ebaca9aec12663ac6f7345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47bb791d562a10b5d74972d0aacfcfed21a202ce18ebaca9aec12663ac6f7345->leave($__internal_47bb791d562a10b5d74972d0aacfcfed21a202ce18ebaca9aec12663ac6f7345_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

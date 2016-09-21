<?php

/* base.html.twig */
class __TwigTemplate_e3a17a685d7efdd5781466d62c6d1721d80ce20f582c56eea8d594cdad87e5b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c4dab8b562660620022903fc6d326abf715cbb95e2023f2750b91b888f5e872 = $this->env->getExtension("native_profiler");
        $__internal_7c4dab8b562660620022903fc6d326abf715cbb95e2023f2750b91b888f5e872->enter($__internal_7c4dab8b562660620022903fc6d326abf715cbb95e2023f2750b91b888f5e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/custom.css"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <div class=\"row\">
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "      </div>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_7c4dab8b562660620022903fc6d326abf715cbb95e2023f2750b91b888f5e872->leave($__internal_7c4dab8b562660620022903fc6d326abf715cbb95e2023f2750b91b888f5e872_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d73cf1a341aad5a3f1cd48f6ed12f628d0734c270faf51bdfe76f751c4236173 = $this->env->getExtension("native_profiler");
        $__internal_d73cf1a341aad5a3f1cd48f6ed12f628d0734c270faf51bdfe76f751c4236173->enter($__internal_d73cf1a341aad5a3f1cd48f6ed12f628d0734c270faf51bdfe76f751c4236173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d73cf1a341aad5a3f1cd48f6ed12f628d0734c270faf51bdfe76f751c4236173->leave($__internal_d73cf1a341aad5a3f1cd48f6ed12f628d0734c270faf51bdfe76f751c4236173_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f82368f6c6b32404db3351f6629beed4945e799e6fcc22a997f9f1371e26d10e = $this->env->getExtension("native_profiler");
        $__internal_f82368f6c6b32404db3351f6629beed4945e799e6fcc22a997f9f1371e26d10e->enter($__internal_f82368f6c6b32404db3351f6629beed4945e799e6fcc22a997f9f1371e26d10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        ";
        
        $__internal_f82368f6c6b32404db3351f6629beed4945e799e6fcc22a997f9f1371e26d10e->leave($__internal_f82368f6c6b32404db3351f6629beed4945e799e6fcc22a997f9f1371e26d10e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_40e1e7dda05842a489960eeac5d12532bb467ee1a64d0aaa7b476dac52799821 = $this->env->getExtension("native_profiler");
        $__internal_40e1e7dda05842a489960eeac5d12532bb467ee1a64d0aaa7b476dac52799821->enter($__internal_40e1e7dda05842a489960eeac5d12532bb467ee1a64d0aaa7b476dac52799821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_40e1e7dda05842a489960eeac5d12532bb467ee1a64d0aaa7b476dac52799821->leave($__internal_40e1e7dda05842a489960eeac5d12532bb467ee1a64d0aaa7b476dac52799821_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7d503dfa84a6decb7b523a290c55945459cb4bb35e335c345b10113d16d7f19 = $this->env->getExtension("native_profiler");
        $__internal_c7d503dfa84a6decb7b523a290c55945459cb4bb35e335c345b10113d16d7f19->enter($__internal_c7d503dfa84a6decb7b523a290c55945459cb4bb35e335c345b10113d16d7f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
        ";
        
        $__internal_c7d503dfa84a6decb7b523a290c55945459cb4bb35e335c345b10113d16d7f19->leave($__internal_c7d503dfa84a6decb7b523a290c55945459cb4bb35e335c345b10113d16d7f19_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 21,  119 => 20,  108 => 15,  100 => 9,  94 => 8,  82 => 5,  73 => 23,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  56 => 16,  54 => 15,  46 => 11,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/app/css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('bundles/app/css/custom.css') }}" />*/
/*         {% block stylesheets %}*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*       <div class="row">*/
/*         {% block body %}{% endblock %}*/
/*       </div>*/
/*         <script src="{{ asset('bundles/app/js/jquery.js')}}"></script>*/
/*         <script src="{{ asset('bundles/app/js/main.js')}}"></script>*/
/*         <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/*         {% block javascripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

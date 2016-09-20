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
        $__internal_05a4feaab88cb1316b2a5f1d79d5fe62ac8d7c14d29dbc421bdf3cd0bb3b3532 = $this->env->getExtension("native_profiler");
        $__internal_05a4feaab88cb1316b2a5f1d79d5fe62ac8d7c14d29dbc421bdf3cd0bb3b3532->enter($__internal_05a4feaab88cb1316b2a5f1d79d5fe62ac8d7c14d29dbc421bdf3cd0bb3b3532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_05a4feaab88cb1316b2a5f1d79d5fe62ac8d7c14d29dbc421bdf3cd0bb3b3532->leave($__internal_05a4feaab88cb1316b2a5f1d79d5fe62ac8d7c14d29dbc421bdf3cd0bb3b3532_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a0f54ec00e30b8f259eff2429b6906c8d4745eea70543df6e35edc329a3ecd7 = $this->env->getExtension("native_profiler");
        $__internal_9a0f54ec00e30b8f259eff2429b6906c8d4745eea70543df6e35edc329a3ecd7->enter($__internal_9a0f54ec00e30b8f259eff2429b6906c8d4745eea70543df6e35edc329a3ecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a0f54ec00e30b8f259eff2429b6906c8d4745eea70543df6e35edc329a3ecd7->leave($__internal_9a0f54ec00e30b8f259eff2429b6906c8d4745eea70543df6e35edc329a3ecd7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_866206b2f54b6d21217491fa1ee2f938cfc6c0a60485794e375bb3be742f83b3 = $this->env->getExtension("native_profiler");
        $__internal_866206b2f54b6d21217491fa1ee2f938cfc6c0a60485794e375bb3be742f83b3->enter($__internal_866206b2f54b6d21217491fa1ee2f938cfc6c0a60485794e375bb3be742f83b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        ";
        
        $__internal_866206b2f54b6d21217491fa1ee2f938cfc6c0a60485794e375bb3be742f83b3->leave($__internal_866206b2f54b6d21217491fa1ee2f938cfc6c0a60485794e375bb3be742f83b3_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a1fe220b66890857e18a23841001a4a6e3f55ad7d11a8a0db83907b36792ba5 = $this->env->getExtension("native_profiler");
        $__internal_6a1fe220b66890857e18a23841001a4a6e3f55ad7d11a8a0db83907b36792ba5->enter($__internal_6a1fe220b66890857e18a23841001a4a6e3f55ad7d11a8a0db83907b36792ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a1fe220b66890857e18a23841001a4a6e3f55ad7d11a8a0db83907b36792ba5->leave($__internal_6a1fe220b66890857e18a23841001a4a6e3f55ad7d11a8a0db83907b36792ba5_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e10b56463992b127682604f7f8ceade3d43aca7fc3df59102f6171131d208ded = $this->env->getExtension("native_profiler");
        $__internal_e10b56463992b127682604f7f8ceade3d43aca7fc3df59102f6171131d208ded->enter($__internal_e10b56463992b127682604f7f8ceade3d43aca7fc3df59102f6171131d208ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "
        ";
        
        $__internal_e10b56463992b127682604f7f8ceade3d43aca7fc3df59102f6171131d208ded->leave($__internal_e10b56463992b127682604f7f8ceade3d43aca7fc3df59102f6171131d208ded_prof);

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

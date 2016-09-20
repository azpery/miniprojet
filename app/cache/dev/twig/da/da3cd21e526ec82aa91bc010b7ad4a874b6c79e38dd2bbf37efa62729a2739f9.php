<?php

/* base.html.twig */
class __TwigTemplate_bb60fafc549f2987680fbec0a00b6d0f7bce975fa37fa370bede627a326e631f extends Twig_Template
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
        $__internal_7b9c4a07023a5bc190e955782712418e663add23ff195ef78d4668c90a9e9c3d = $this->env->getExtension("native_profiler");
        $__internal_7b9c4a07023a5bc190e955782712418e663add23ff195ef78d4668c90a9e9c3d->enter($__internal_7b9c4a07023a5bc190e955782712418e663add23ff195ef78d4668c90a9e9c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_7b9c4a07023a5bc190e955782712418e663add23ff195ef78d4668c90a9e9c3d->leave($__internal_7b9c4a07023a5bc190e955782712418e663add23ff195ef78d4668c90a9e9c3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a56fe798e02e0af684ae2924f30b96b799bfddca2a5c639551e862b91a4ea60 = $this->env->getExtension("native_profiler");
        $__internal_6a56fe798e02e0af684ae2924f30b96b799bfddca2a5c639551e862b91a4ea60->enter($__internal_6a56fe798e02e0af684ae2924f30b96b799bfddca2a5c639551e862b91a4ea60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6a56fe798e02e0af684ae2924f30b96b799bfddca2a5c639551e862b91a4ea60->leave($__internal_6a56fe798e02e0af684ae2924f30b96b799bfddca2a5c639551e862b91a4ea60_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1f5f3c1fd945d028218dfb06980320a4fa7d32f4ef2158235a09d4facf11191 = $this->env->getExtension("native_profiler");
        $__internal_c1f5f3c1fd945d028218dfb06980320a4fa7d32f4ef2158235a09d4facf11191->enter($__internal_c1f5f3c1fd945d028218dfb06980320a4fa7d32f4ef2158235a09d4facf11191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
        ";
        
        $__internal_c1f5f3c1fd945d028218dfb06980320a4fa7d32f4ef2158235a09d4facf11191->leave($__internal_c1f5f3c1fd945d028218dfb06980320a4fa7d32f4ef2158235a09d4facf11191_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d3633a490c4a4c34dbb5da12024c3c4c3f3535f0de57dec0782addd975a71f = $this->env->getExtension("native_profiler");
        $__internal_a6d3633a490c4a4c34dbb5da12024c3c4c3f3535f0de57dec0782addd975a71f->enter($__internal_a6d3633a490c4a4c34dbb5da12024c3c4c3f3535f0de57dec0782addd975a71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6d3633a490c4a4c34dbb5da12024c3c4c3f3535f0de57dec0782addd975a71f->leave($__internal_a6d3633a490c4a4c34dbb5da12024c3c4c3f3535f0de57dec0782addd975a71f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ad971acbb177ebbd70c61e920480d528aeb78aff82a592c7cef92bccf2ad71d = $this->env->getExtension("native_profiler");
        $__internal_9ad971acbb177ebbd70c61e920480d528aeb78aff82a592c7cef92bccf2ad71d->enter($__internal_9ad971acbb177ebbd70c61e920480d528aeb78aff82a592c7cef92bccf2ad71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "
        ";
        
        $__internal_9ad971acbb177ebbd70c61e920480d528aeb78aff82a592c7cef92bccf2ad71d->leave($__internal_9ad971acbb177ebbd70c61e920480d528aeb78aff82a592c7cef92bccf2ad71d_prof);

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
        return array (  121 => 20,  115 => 19,  104 => 15,  96 => 9,  90 => 8,  78 => 5,  69 => 22,  67 => 19,  63 => 18,  59 => 17,  56 => 16,  54 => 15,  46 => 11,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/*         {% block javascripts %}*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

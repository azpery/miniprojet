<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_426325cf71b87a953b4160831f082255ed475ac57f2785d3f7f8d680076248b5 extends Twig_Template
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
        $__internal_f7360fb2c671f09c5a6bf7f007a7414dc9efb95b9e721d223c8d9c420caaf013 = $this->env->getExtension("native_profiler");
        $__internal_f7360fb2c671f09c5a6bf7f007a7414dc9efb95b9e721d223c8d9c420caaf013->enter($__internal_f7360fb2c671f09c5a6bf7f007a7414dc9efb95b9e721d223c8d9c420caaf013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f7360fb2c671f09c5a6bf7f007a7414dc9efb95b9e721d223c8d9c420caaf013->leave($__internal_f7360fb2c671f09c5a6bf7f007a7414dc9efb95b9e721d223c8d9c420caaf013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

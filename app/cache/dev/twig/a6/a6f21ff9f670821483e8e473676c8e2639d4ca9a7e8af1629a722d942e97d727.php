<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3fab655287f5801b29a194b1299e7fc1cf447c022caeb68356727720e3840508 extends Twig_Template
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
        $__internal_7e3057afb9b36858a16e7767491e08f24b1cb53ef59a58236852b67a294bf348 = $this->env->getExtension("native_profiler");
        $__internal_7e3057afb9b36858a16e7767491e08f24b1cb53ef59a58236852b67a294bf348->enter($__internal_7e3057afb9b36858a16e7767491e08f24b1cb53ef59a58236852b67a294bf348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7e3057afb9b36858a16e7767491e08f24b1cb53ef59a58236852b67a294bf348->leave($__internal_7e3057afb9b36858a16e7767491e08f24b1cb53ef59a58236852b67a294bf348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

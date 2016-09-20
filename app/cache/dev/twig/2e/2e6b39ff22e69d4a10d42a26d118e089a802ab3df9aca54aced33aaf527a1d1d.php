<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_93bffae3201e386c4515df2384a37b767e68e08fbdf9d637d10583c56336dc5b extends Twig_Template
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
        $__internal_d6085699a8ee0c6cb8520167f0ef56580e191e19d86524accfdea8f0a3d12dee = $this->env->getExtension("native_profiler");
        $__internal_d6085699a8ee0c6cb8520167f0ef56580e191e19d86524accfdea8f0a3d12dee->enter($__internal_d6085699a8ee0c6cb8520167f0ef56580e191e19d86524accfdea8f0a3d12dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d6085699a8ee0c6cb8520167f0ef56580e191e19d86524accfdea8f0a3d12dee->leave($__internal_d6085699a8ee0c6cb8520167f0ef56580e191e19d86524accfdea8f0a3d12dee_prof);

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

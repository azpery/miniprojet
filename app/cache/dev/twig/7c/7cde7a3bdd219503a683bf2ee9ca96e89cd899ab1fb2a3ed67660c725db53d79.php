<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0e10cb279b02490ec84923f29d0ef64271e9291b05808924026ca91b99fa9c0d extends Twig_Template
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
        $__internal_04b8ba423b561dda9855444c6ae282fc678b170fee976c643f5e44594f4accf6 = $this->env->getExtension("native_profiler");
        $__internal_04b8ba423b561dda9855444c6ae282fc678b170fee976c643f5e44594f4accf6->enter($__internal_04b8ba423b561dda9855444c6ae282fc678b170fee976c643f5e44594f4accf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_04b8ba423b561dda9855444c6ae282fc678b170fee976c643f5e44594f4accf6->leave($__internal_04b8ba423b561dda9855444c6ae282fc678b170fee976c643f5e44594f4accf6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

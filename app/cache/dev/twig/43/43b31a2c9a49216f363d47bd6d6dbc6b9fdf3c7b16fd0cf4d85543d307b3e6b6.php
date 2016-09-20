<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a97482d61dcc0316fff34aa8a828013466befa264b4154b0e6fc71cc20ba5a94 extends Twig_Template
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
        $__internal_53aeaad8b6e6e16ba6f28de6e4d75f6ae7f5a11a7a3360fee05954e3ccc7844d = $this->env->getExtension("native_profiler");
        $__internal_53aeaad8b6e6e16ba6f28de6e4d75f6ae7f5a11a7a3360fee05954e3ccc7844d->enter($__internal_53aeaad8b6e6e16ba6f28de6e4d75f6ae7f5a11a7a3360fee05954e3ccc7844d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_53aeaad8b6e6e16ba6f28de6e4d75f6ae7f5a11a7a3360fee05954e3ccc7844d->leave($__internal_53aeaad8b6e6e16ba6f28de6e4d75f6ae7f5a11a7a3360fee05954e3ccc7844d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

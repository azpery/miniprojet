<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3ff88d36186d9c192acbdc1a46ca55c80ec723169cce830ffbe550ae0afe41ed extends Twig_Template
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
        $__internal_5a725cbf4bd5029ccb3dda9e727b02610431ba5932345dbf80189bf325db1bea = $this->env->getExtension("native_profiler");
        $__internal_5a725cbf4bd5029ccb3dda9e727b02610431ba5932345dbf80189bf325db1bea->enter($__internal_5a725cbf4bd5029ccb3dda9e727b02610431ba5932345dbf80189bf325db1bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5a725cbf4bd5029ccb3dda9e727b02610431ba5932345dbf80189bf325db1bea->leave($__internal_5a725cbf4bd5029ccb3dda9e727b02610431ba5932345dbf80189bf325db1bea_prof);

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

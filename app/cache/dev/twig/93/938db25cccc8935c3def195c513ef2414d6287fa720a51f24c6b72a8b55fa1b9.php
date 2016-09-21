<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_62acf7b7cbc5e793ce7bfb637701dc8f13f24c99308920e37fb76b941b202ca6 extends Twig_Template
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
        $__internal_35ae560d202ef93dfca233e98deae512694d5867da9b26066166dab59e0f4e75 = $this->env->getExtension("native_profiler");
        $__internal_35ae560d202ef93dfca233e98deae512694d5867da9b26066166dab59e0f4e75->enter($__internal_35ae560d202ef93dfca233e98deae512694d5867da9b26066166dab59e0f4e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_35ae560d202ef93dfca233e98deae512694d5867da9b26066166dab59e0f4e75->leave($__internal_35ae560d202ef93dfca233e98deae512694d5867da9b26066166dab59e0f4e75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

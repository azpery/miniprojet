<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c3a8293a50648863b0d2f2e9b289ae234affc1319abd40dcec557ba549334777 extends Twig_Template
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
        $__internal_ac699ffad916ec06058a662c1a307bc13642cb5cacaf5514ac2939a377df1285 = $this->env->getExtension("native_profiler");
        $__internal_ac699ffad916ec06058a662c1a307bc13642cb5cacaf5514ac2939a377df1285->enter($__internal_ac699ffad916ec06058a662c1a307bc13642cb5cacaf5514ac2939a377df1285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ac699ffad916ec06058a662c1a307bc13642cb5cacaf5514ac2939a377df1285->leave($__internal_ac699ffad916ec06058a662c1a307bc13642cb5cacaf5514ac2939a377df1285_prof);

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

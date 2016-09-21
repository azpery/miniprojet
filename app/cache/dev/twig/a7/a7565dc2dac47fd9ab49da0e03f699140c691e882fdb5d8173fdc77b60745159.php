<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2569a673633db96166b8fd99db4a17f4b2319882d5b1104d9c0f643afa80d940 extends Twig_Template
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
        $__internal_09456aca2459ad7f6014c69fd6dd179d25fa4feb37b4173761c93be09100d543 = $this->env->getExtension("native_profiler");
        $__internal_09456aca2459ad7f6014c69fd6dd179d25fa4feb37b4173761c93be09100d543->enter($__internal_09456aca2459ad7f6014c69fd6dd179d25fa4feb37b4173761c93be09100d543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_09456aca2459ad7f6014c69fd6dd179d25fa4feb37b4173761c93be09100d543->leave($__internal_09456aca2459ad7f6014c69fd6dd179d25fa4feb37b4173761c93be09100d543_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

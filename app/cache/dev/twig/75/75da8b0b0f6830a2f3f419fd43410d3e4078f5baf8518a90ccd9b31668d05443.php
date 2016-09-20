<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_828c00efe2cdff0b8322594f85f078629fd2411a65339a854aef192df6e6e94a extends Twig_Template
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
        $__internal_d31beb4295858791f0c1b447a9ce3ffe81aceae4f475c66ef9f4e530ea45fcaf = $this->env->getExtension("native_profiler");
        $__internal_d31beb4295858791f0c1b447a9ce3ffe81aceae4f475c66ef9f4e530ea45fcaf->enter($__internal_d31beb4295858791f0c1b447a9ce3ffe81aceae4f475c66ef9f4e530ea45fcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d31beb4295858791f0c1b447a9ce3ffe81aceae4f475c66ef9f4e530ea45fcaf->leave($__internal_d31beb4295858791f0c1b447a9ce3ffe81aceae4f475c66ef9f4e530ea45fcaf_prof);

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

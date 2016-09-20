<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_392dc3ec3a49b671d7d6eb37628b11046f986d08889a7a3b5e8ed5afd0bcdc86 extends Twig_Template
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
        $__internal_40dd90487c4848f5e68d01fedca13d85f133564cbe581c5bf89d1733090d6f7f = $this->env->getExtension("native_profiler");
        $__internal_40dd90487c4848f5e68d01fedca13d85f133564cbe581c5bf89d1733090d6f7f->enter($__internal_40dd90487c4848f5e68d01fedca13d85f133564cbe581c5bf89d1733090d6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_40dd90487c4848f5e68d01fedca13d85f133564cbe581c5bf89d1733090d6f7f->leave($__internal_40dd90487c4848f5e68d01fedca13d85f133564cbe581c5bf89d1733090d6f7f_prof);

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

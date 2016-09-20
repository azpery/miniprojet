<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9137b1a517b907871ada17bd859b481ae981cd55ba9a877485ec8796e6b13d82 extends Twig_Template
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
        $__internal_3b255e25640a5e0946e04d004f2931ffadc1c8cb496fbb9141a72b648bffdfbf = $this->env->getExtension("native_profiler");
        $__internal_3b255e25640a5e0946e04d004f2931ffadc1c8cb496fbb9141a72b648bffdfbf->enter($__internal_3b255e25640a5e0946e04d004f2931ffadc1c8cb496fbb9141a72b648bffdfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3b255e25640a5e0946e04d004f2931ffadc1c8cb496fbb9141a72b648bffdfbf->leave($__internal_3b255e25640a5e0946e04d004f2931ffadc1c8cb496fbb9141a72b648bffdfbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e39004222afcb7ad0ec885ba00c34923e9d26975aadb54dbd29f8ec3f01d70c4 extends Twig_Template
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
        $__internal_4e30ef4d9e949243c35330f057f8daf6f69509a5b6d5d832a1afe4f28c3c33d5 = $this->env->getExtension("native_profiler");
        $__internal_4e30ef4d9e949243c35330f057f8daf6f69509a5b6d5d832a1afe4f28c3c33d5->enter($__internal_4e30ef4d9e949243c35330f057f8daf6f69509a5b6d5d832a1afe4f28c3c33d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4e30ef4d9e949243c35330f057f8daf6f69509a5b6d5d832a1afe4f28c3c33d5->leave($__internal_4e30ef4d9e949243c35330f057f8daf6f69509a5b6d5d832a1afe4f28c3c33d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

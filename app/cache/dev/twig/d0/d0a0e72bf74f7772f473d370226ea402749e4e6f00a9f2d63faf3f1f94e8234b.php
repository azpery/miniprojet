<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_81f62e55ee87c734266290f1975313c2827474433c939fb8033226b781c62290 extends Twig_Template
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
        $__internal_9e100e51bb1c70e022c45ed74b4442938c096692397b85b87e962c263eb15c5a = $this->env->getExtension("native_profiler");
        $__internal_9e100e51bb1c70e022c45ed74b4442938c096692397b85b87e962c263eb15c5a->enter($__internal_9e100e51bb1c70e022c45ed74b4442938c096692397b85b87e962c263eb15c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9e100e51bb1c70e022c45ed74b4442938c096692397b85b87e962c263eb15c5a->leave($__internal_9e100e51bb1c70e022c45ed74b4442938c096692397b85b87e962c263eb15c5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

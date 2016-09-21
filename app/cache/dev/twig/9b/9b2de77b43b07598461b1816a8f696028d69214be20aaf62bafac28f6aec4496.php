<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ed2c384394c167abc5352e118ac30082aad75b409f897718e9a1372f440dd554 extends Twig_Template
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
        $__internal_fa01a4ebfd6f6c1dbabe304c8af1afef99854f606db9e6273e4e7118e89fbafc = $this->env->getExtension("native_profiler");
        $__internal_fa01a4ebfd6f6c1dbabe304c8af1afef99854f606db9e6273e4e7118e89fbafc->enter($__internal_fa01a4ebfd6f6c1dbabe304c8af1afef99854f606db9e6273e4e7118e89fbafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fa01a4ebfd6f6c1dbabe304c8af1afef99854f606db9e6273e4e7118e89fbafc->leave($__internal_fa01a4ebfd6f6c1dbabe304c8af1afef99854f606db9e6273e4e7118e89fbafc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

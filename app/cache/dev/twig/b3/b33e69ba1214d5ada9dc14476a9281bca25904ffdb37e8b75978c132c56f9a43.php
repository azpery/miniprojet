<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_985e2f1186a74261c681742cd49bdef568f8f710c800b834bcc1b1238f76cb19 extends Twig_Template
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
        $__internal_6967878f7a8bf790c820b9a583a022ab7b5061f1937628fcd5969763e9b0bdaf = $this->env->getExtension("native_profiler");
        $__internal_6967878f7a8bf790c820b9a583a022ab7b5061f1937628fcd5969763e9b0bdaf->enter($__internal_6967878f7a8bf790c820b9a583a022ab7b5061f1937628fcd5969763e9b0bdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6967878f7a8bf790c820b9a583a022ab7b5061f1937628fcd5969763e9b0bdaf->leave($__internal_6967878f7a8bf790c820b9a583a022ab7b5061f1937628fcd5969763e9b0bdaf_prof);

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

<?php

/* @PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig */
class __TwigTemplate_d7060f6607d8bf1aabce2e0f66838d6f47be4b50da32d0ad6a7fd5fd0ec87a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'shipping_preferences_handling' => array($this, 'block_shipping_preferences_handling'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('shipping_preferences_handling', $context, $blocks);
    }

    public function block_shipping_preferences_handling($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"col-xl-10\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">filter_none</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Handling", array(), "Admin.Shipping.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"alert alert-info\" role=\"alert\">
                <ul>
                  <li>
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you set these parameters to 0, they will be disabled.", array(), "Admin.Shipping.Help"), "html", null, true);
        echo "
                  </li>
                  <li>
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Coupons are not taken into account when calculating free shipping.", array(), "Admin.Shipping.Help"), "html", null, true);
        echo "
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Handling charges", array(), "Admin.Shipping.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["handlingForm"] ?? null), "shipping_handling_charges", array()), 'errors');
        echo "
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["handlingForm"] ?? null), "shipping_handling_charges", array()), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free shipping starts at", array(), "Admin.Shipping.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["handlingForm"] ?? null), "free_shipping_price", array()), 'errors');
        echo "
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["handlingForm"] ?? null), "free_shipping_price", array()), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free shipping starts at", array(), "Admin.Shipping.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["handlingForm"] ?? null), "free_shipping_weight", array()), 'errors');
        echo "
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["handlingForm"] ?? null), "free_shipping_weight", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 78,  109 => 71,  105 => 70,  100 => 68,  92 => 63,  88 => 62,  83 => 60,  75 => 55,  71 => 54,  66 => 52,  55 => 44,  49 => 41,  37 => 32,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig", "/var/www/html/press_shop/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_handling.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_6ddc216faa59a07abe95bc8b7a0881f5557b0706db83acd786cf3af7f8d6ad1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"Yoga Studio Template\">
        <meta name=\"keywords\" content=\"Yoga, unica, creative, html\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap\"
              rel=\"stylesheet\">
        <!-- Css Styles -->

        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">

        <title>";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Search model -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"inner-header\">
                <div class=\"logo\">
                    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
                <div class=\"header-right\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/search.png"), "html", null, true);
        echo "\" alt=\"\" class=\"search-trigger\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/man.png"), "html", null, true);
        echo "\" alt=\"\">
                    <a href=\"#\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/bag.png"), "html", null, true);
        echo "\" alt=\"\">
                        <span>2</span>
                    </a>
                </div>
                <div class=\"user-access\">
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Register</a>
                    <a href=\"#\" class=\"in\">Sign in</a>
                </div>
                <nav class=\"main-menu mobile-menu\">
                    <ul>
                        <li><a class=\"active\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                        <li><a href=\"./categories.html\">Shop</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"product-page.html\">Product Page</a></li>
                                <li><a href=\"shopping-cart.html\">Shopping Card</a></li>
                                <li><a href=\"check-out.html\">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class=\"header-info\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"header-item\">
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/delivery.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Free shipping on orders over \$30 in USA</p>
                    </div>
                </div>
                <div class=\"col-md-4 text-left text-lg-center\">
                    <div class=\"header-item\">
                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/voucher.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class=\"col-md-4 text-left text-xl-right\">
                    <div class=\"header-item\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/sales.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>30% off on dresses. Use code: 30OFF</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->
        ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "





        <!-- Footer Section Begin -->
        <footer class=\"footer-section spad\">
            <div class=\"container\">
                <div class=\"newslatter-form\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Your email address\">
                                <button type=\"submit\">Subscribe to our newsletter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"footer-widget\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>About us</h4>
                                <ul>
                                    <li>About Us</li>
                                    <li>Community</li>
                                    <li>Jobs</li>
                                    <li>Shipping</li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>Customer Care</h4>
                                <ul>
                                    <li>Search</li>
                                    <li>Privacy Policy</li>
                                    <li>2019 Lookbook</li>
                                    <li>Shipping & Delivery</li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>Our Services</h4>
                                <ul>
                                    <li>Free Shipping</li>
                                    <li>Free Returnes</li>
                                    <li>Our Franchising</li>
                                    <li>Terms and conditions</li>
                                    <li>Privacy Policy</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>Information</h4>
                                <ul>
                                    <li>Payment methods</li>
                                    <li>Times and shipping costs</li>
                                    <li>Product Returns</li>
                                    <li>Shipping methods</li>
                                    <li>Conformity of the products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"social-links-warp\">
                <div class=\"container\">
                    <div class=\"social-links\">
                        <a href=\"\" class=\"instagram\"><i class=\"fa fa-instagram\"></i><span>instagram</span></a>
                        <a href=\"\" class=\"pinterest\"><i class=\"fa fa-pinterest\"></i><span>pinterest</span></a>
                        <a href=\"\" class=\"facebook\"><i class=\"fa fa-facebook\"></i><span>facebook</span></a>
                        <a href=\"\" class=\"twitter\"><i class=\"fa fa-twitter\"></i><span>twitter</span></a>
                        <a href=\"\" class=\"youtube\"><i class=\"fa fa-youtube\"></i><span>youtube</span></a>
                        <a href=\"\" class=\"tumblr\"><i class=\"fa fa-tumblr-square\"></i><span>tumblr</span></a>
                    </div>
                </div>

                <div class=\"container text-center pt-5\">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins Begin -->
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <!-- Js Plugins End -->

        ";
        // line 212
        $this->displayBlock('javascripts', $context, $blocks);
        // line 213
        echo "    </body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 212
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 212,  402 => 107,  384 => 25,  365 => 23,  351 => 213,  349 => 212,  343 => 209,  339 => 208,  335 => 207,  331 => 206,  327 => 205,  323 => 204,  319 => 203,  315 => 202,  219 => 108,  217 => 107,  205 => 98,  196 => 92,  187 => 86,  172 => 74,  168 => 73,  157 => 65,  149 => 60,  141 => 55,  136 => 53,  132 => 52,  124 => 49,  99 => 26,  97 => 25,  92 => 23,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"description\" content=\"Yoga Studio Template\">
        <meta name=\"keywords\" content=\"Yoga, unica, creative, html\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <!-- Google Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap\"
              rel=\"stylesheet\">
        <!-- Css Styles -->

        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">

        <title>{% block title %}Welcome!{% endblock %}</title>

        {% block stylesheets %}{% endblock %}
    </head>
    <body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Search model -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"inner-header\">
                <div class=\"logo\">
                    <a href=\"{{ path('home')}}\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"\"></a>
                </div>
                <div class=\"header-right\">
                    <img src=\"{{ asset('img/icons/search.png') }}\" alt=\"\" class=\"search-trigger\">
                    <img src=\"{{ asset('img/icons/man.png') }}\" alt=\"\">
                    <a href=\"#\">
                        <img src=\"{{ asset('img/icons/bag.png') }}\" alt=\"\">
                        <span>2</span>
                    </a>
                </div>
                <div class=\"user-access\">
                    <a href=\"{{ path('inscription')}}\">Register</a>
                    <a href=\"#\" class=\"in\">Sign in</a>
                </div>
                <nav class=\"main-menu mobile-menu\">
                    <ul>
                        <li><a class=\"active\" href=\"{{ path('home')}}\">Home</a></li>
                        <li><a href=\"./categories.html\">Shop</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"product-page.html\">Product Page</a></li>
                                <li><a href=\"shopping-cart.html\">Shopping Card</a></li>
                                <li><a href=\"check-out.html\">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ path('about')}}\">About</a></li>
                        <li><a href=\"{{ path('contact')}}\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class=\"header-info\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"header-item\">
                        <img src=\"{{ asset('img/icons/delivery.png') }}\" alt=\"\">
                        <p>Free shipping on orders over \$30 in USA</p>
                    </div>
                </div>
                <div class=\"col-md-4 text-left text-lg-center\">
                    <div class=\"header-item\">
                        <img src=\"{{ asset('img/icons/voucher.png') }}\" alt=\"\">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class=\"col-md-4 text-left text-xl-right\">
                    <div class=\"header-item\">
                        <img src=\"{{ asset('img/icons/sales.png') }}\" alt=\"\">
                        <p>30% off on dresses. Use code: 30OFF</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->
        {% block body %}{% endblock %}






        <!-- Footer Section Begin -->
        <footer class=\"footer-section spad\">
            <div class=\"container\">
                <div class=\"newslatter-form\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form action=\"#\">
                                <input type=\"text\" placeholder=\"Your email address\">
                                <button type=\"submit\">Subscribe to our newsletter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"footer-widget\">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>About us</h4>
                                <ul>
                                    <li>About Us</li>
                                    <li>Community</li>
                                    <li>Jobs</li>
                                    <li>Shipping</li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>Customer Care</h4>
                                <ul>
                                    <li>Search</li>
                                    <li>Privacy Policy</li>
                                    <li>2019 Lookbook</li>
                                    <li>Shipping & Delivery</li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>Our Services</h4>
                                <ul>
                                    <li>Free Shipping</li>
                                    <li>Free Returnes</li>
                                    <li>Our Franchising</li>
                                    <li>Terms and conditions</li>
                                    <li>Privacy Policy</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h4>Information</h4>
                                <ul>
                                    <li>Payment methods</li>
                                    <li>Times and shipping costs</li>
                                    <li>Product Returns</li>
                                    <li>Shipping methods</li>
                                    <li>Conformity of the products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"social-links-warp\">
                <div class=\"container\">
                    <div class=\"social-links\">
                        <a href=\"\" class=\"instagram\"><i class=\"fa fa-instagram\"></i><span>instagram</span></a>
                        <a href=\"\" class=\"pinterest\"><i class=\"fa fa-pinterest\"></i><span>pinterest</span></a>
                        <a href=\"\" class=\"facebook\"><i class=\"fa fa-facebook\"></i><span>facebook</span></a>
                        <a href=\"\" class=\"twitter\"><i class=\"fa fa-twitter\"></i><span>twitter</span></a>
                        <a href=\"\" class=\"youtube\"><i class=\"fa fa-youtube\"></i><span>youtube</span></a>
                        <a href=\"\" class=\"tumblr\"><i class=\"fa fa-tumblr-square\"></i><span>tumblr</span></a>
                    </div>
                </div>

                <div class=\"container text-center pt-5\">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins Begin -->
        <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.slicknav.js') }}\"></script>
        <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
        <script src=\"{{ asset('js/mixitup.min.js') }}\"></script>
        <script src=\"{{ asset('js/main.js') }}\"></script>
        <!-- Js Plugins End -->

        {% block javascripts %}{% endblock %}
    </body>
</html>


", "base.html.twig", "C:\\wamp64\\www\\marketplace\\templates\\base.html.twig");
    }
}

<?php

/* main.html */
class __TwigTemplate_4bc77acce81ef639c55e218a8e9ead86 extends Twig_Template
{
  public function display(array $context)
  {
    // line 1
    echo "<html>
\t<head>
\t\t<link href=\"css/main.css\" rel=\"stylesheet\" type=\"text/css\"></link>
\t\t<!-- jQuery leetness -->
\t\t<script src=\"lib/jquery/js/jquery-1.4.2.min.js\" language=\"javascript\" type=\"text/javascript\">
\t\t</script>
\t\t<script src=\"js/main_onLoad.js\" language=\"javascript\" type=\"text/javascript\">
\t\t</script>
\t\t<title>wall of lol - where the lulz begin</title>
\t</head>
\t<body>
\t\t<div class=\"center_column\" id=\"header\">
\t\t\t<img src=\"img/wol-logo\" alt=\"Wall of LoL\" id=\"logo\" />
\t\t\t<span id=\"author\">written by phishpants && mad_gouki</span>
\t\t</div>
\t\t<div class=\"center_column\" id=\"content\">
\t\t\t<ul id=\"feed\" class=\"feed\">
";
    // line 18
    $context['_parent'] = (array) $context;
    $context['_seq'] = twig_iterator_to_array((isset($context['tweets']) ? $context['tweets'] : null));
    $length = count($context['_seq']);
    $context['loop'] = array(
      'parent'    => $context['_parent'],
      'length'    => $length,
      'index0'    => 0,
      'index'     => 1,
      'revindex0' => $length - 1,
      'revindex'  => $length,
      'first'     => true,
      'last'      => 1 === $length,
    );
    foreach ($context['_seq'] as $context["_key"] => $context["tweet"])
    {
      echo "\t\t\t\t<li class=\"tweet\" id=\"";
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "created_at", array());
      echo "\">
\t\t\t\t\t<p class=\"tweet_avatar\">
\t\t\t\t\t\t<a href=\"http://www.twitter.com/";
      // line 20
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "from_user", array());
      echo "\">
\t\t\t\t\t\t\t<span style=\"display: block; background-image: url('";
      // line 21
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "profile_image_url", array());
      echo "'); height: 48px; width: 48px;\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_text\">\t\t\t\t\t\t
";
      // line 25
      if ($this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "to_user", array()))
      {
        echo "
\t\t\t\t\t\t\t<a class=\"at_link\" href=\"http://www.twitter.com/";
        // line 26
        echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "to_user", array());
        echo "\">@";
        echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "to_user", array());
        echo "</a> 
";
      }
      // line 27
      echo "
\t\t\t\t\t\t";
      // line 28
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "tweet_txt", array());
      echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_info\">
\t\t\t\t\t\t&mdash; <a class=\"from_user\" href=\"http://www.twitter.com/";
      // line 31
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "from_user", array());
      echo "\">";
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "from_user", array());
      echo "</a> 
\t\t\t\t\t\t<a class=\"tweet_id\" href=\"/status/13691957569\">#";
      // line 32
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "tweetID", array());
      echo "</a> 
\t\t\t\t\t\t<span class=\"created_at\">";
      // line 33
      echo $this->getAttribute((isset($context['tweet']) ? $context['tweet'] : null), "fuzzy_timestamp", array());
      echo "</span>
\t\t\t\t\t</p>
\t\t\t\t</li>";
      ++$context['loop']['index0'];
      ++$context['loop']['index'];
      --$context['loop']['revindex0'];
      --$context['loop']['revindex'];
      $context['loop']['first'] = false;
      $context['loop']['last'] = 0 === $context['loop']['revindex0'];
    }
    $context = $context['_parent'];
    // line 35
    echo "
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"center_column\" id=\"footer\">
\t\t\t<div class=\"copyright\">(c) 2010 yo' mama</div>
\t\t</div>
\t</body>
</html>";
  }

  public function getName()
  {
    return "main.html";
  }

}

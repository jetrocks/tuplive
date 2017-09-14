<div id="guide-template">
  <div id="intro-container">
    <h1>This opening title</h1>
    <h2>Presents on scroll-fix-content with affix sidebar</h2>
    <p>Build a simple on scroll then fix to top nav bar with a affix scroll mock on the side.</p>
  </div>
  <div id="nav-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a href="#" class="menu-burger">☰</a>
          <div class="social-container">
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Famishdirectfurniture&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=261855564005026" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="main" class="container">
    <div class="row">
      <div id="sidebar" class="col-md-3 col-lg-3">
        <ul id="affix">
          <li class="current"><a href="#intro">Introduction</a></li>
          <li><a href="#structure">Structure</a></li>
          <li><a href="#styling">Styling</a></li>
          <li><a href="#code">Code</a></li>
        </ul>
      </div>
      <div id="content" class="col-md-9 col-lg-9">
        <h3 id="intro">Introduction</h3>
        <p>Hi everyone, I'm Dave! I came up with a nice little guide on how to create a scroll-fix-content bar with a scrollable sidebar guide (mock). What I used was a leftover JQuery snippet I had from an old project and some CSS3 styling to make it look pretty. Do note, I've only tested how this looks with the 3 sections above the viewport. This isn't fully responsive yet.<br />
        P.S. Please support my dad's business, Amish Direct Furniture, by liking our facebook page. Thanks :)</p>
        <hr />
        <h3 id="structure">Structure</h3>
        <p>The structure of how this is set up is actually pretty simple. I used good ol' CSS3 to make most of this look possible. To slim down the code some more, I'll probably rewrite this using SCSS. Below is a tree of how the document structure is set up.</p>
        <pre>
          - #guide-template
            -- #intro-container
            -- #nav-bar
            -- #main
        </pre>
        <p>Basically, we use the <span class="label label-warning">#guide-template</span> as our wrap. This can also be applied to the body tag. We just need something to wrap it all together.</p>
        <hr />
        <h3 id="styling">Styling</h3>
        <p>Most of this is possible by using the CSS3 View Height (vh) unit for our heights. By making certain divs the view ports height, it helps make the scroll-to-fix bar stick more smoothly. This also goes for the sidebar as well. Since we want the intro to always fit the screen, we set the <span class="label label-warning">#intro-container</span> div's heigh to:</p>
        <code>height: 100vh;</code>
        <p>Note though, this isn't <a href="http://caniuse.com/#feat=viewport-units">cross compatible</a> with everything even though it is mostly supported.</p>
        <hr />
        <h3 id="code">Code</h3>
        <p>The code used is pretty simple. Derived from this <a href="https://css-tricks.com/scroll-fix-content/">article</a> by Chris Coyier, the JQuery used is to apply and unapply the class <span class="label label-warning">fixed</span> from our wrapper div, or in this case <span class="label label-warning">#guide-template</span>. What makes this one different and slightly more smoother is the fact we're not using <a href="https://css-tricks.com/magic-numbers-in-css/">magic numbers</a>, or pre-defined numbers. I'll give both examples of the one Chris provided and the one I'm using. Here is Chris's:</p>
        <pre>
          var wrap = $("#wrap");

          wrap.on("scroll", function(e) {

            if (this.scrollTop > 147) {
              wrap.addClass("fix-search");
            } else {
              wrap.removeClass("fix-search");
            }

          });
        </pre>
        <p>And here is mine:</p>
        <pre>
          var header = $("#guide-template");
            $(window).scroll(function() {    
              var scroll = $(window).scrollTop();
                 if (scroll >= window.innerHeight) {
                    header.addClass("fixed");
                  } else {
                    header.removeClass("fixed");
                  }
          });
        </pre>
        <p>The main, and big, difference between the two is the first one uses a defined number. This is an issue since not all devices are the same height. In the second one, I decided to use the <code>window.innerHeight</code> to define when to add and remove my class. The reason is because combining that with our <code>height: 100vh;</code> means on any desktop machine, it will always stick right after our intro div. I haven't tested this to see if it is responsive but I'm sure with some tweaking, it more than likely can be responsive.</p>
        
      </div>
    </div>
  </div>
</div>
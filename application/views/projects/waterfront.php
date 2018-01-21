<article class="project project-1" id="project-1">
  <div class="post-content">
    <img src="/images/projects/waterfront.jpg" width="250" class="img-fluid float-sm-right ml-sm-2 mb-sm-2" >
    <p>Project Metis was a joint project (with <a href="https://twitter.com/akyan">James Gawn</a>) to develop a new website and content management system for The Waterfront - the student newspaper of Swansea University.</p>

    <p>Prior to this project, the site had been maintained by editing static files and transferring them to the server using FTP.  As a result, only a small amount of the newspaper's content would make it online.  Project Metis aimed to develop a PHP based website around a content management system to make it possible to not only include all of the newspaper's content, but also exclusive online.</p>

    <p>The base website and content management system was launched in September 2006 but continual additions and improvements were made through-out it's life.  Over it's first year of use, Project Metis included full articles, blogs and columns, author profiles, RSS feeds and basic tagging by newspaper issue.</p>

    <p>In March 2007 the site was enhanced to include podcasting, improved commenting and live-blogging of major news events such as the Student Union Sabbatical Elections.</p>

    <p>Project Metis was eventually replaced after two years of use following a review of the Student Union's websites.  An archived copy of the site (including all content) is now hosted at <a href="http://waterfront.dafyddvaughan.co.uk" title="Archived copy of the Waterfront website">waterfront.dafyddvaughan.co.uk</a>.</p>

    <ul class="media-grid">
      <li>
        <a href="/images/projects/waterfront.jpg">
          <img class="thumbnail" src="/images/projects/waterfront-headlines-small.jpg" alt="#"/>
        </a>
      </li>
      <li>
        <a href="/images/projects/waterfront.jpg">
          <img class="thumbnail" src="/images/projects/waterfront-article-small.jpg" alt="#"/>
        </a>
      </li>
      <li>
        <a href="/images/projects/waterfront.jpg">
          <img class="thumbnail" src="/images/projects/waterfront-author-profile-small.jpg" alt="#"/>
        </a>
      </li>
    </ul>

    <div class="clearfix"></div>
  </div>

  <div class="post-meta">
    <p><strong>Developed:</strong> Summer 2006
    <br/><strong>Language:</strong> PHP
    <br/><strong>Blog:</strong> <a href="http://waterfront.dafyddvaughan.co.uk/blogs/projectmetis/" title="Find out more on the Project Metis blog">Project Metis Blog</a> (Archived)
    <br/><strong>More Info:</strong> <a href="http://waterfront.dafyddvaughan.co.uk" title="Visit the archived Waterfront website">Waterfront Website</a> (Archived)</p>
  </div>
</article>


<aside>
  <div class="blog-wrapper">
    <?php if (isset($blogs)) : ?>
      <?php foreach($blogs->get_items() as $item) : $blogs++;?>
        <article class="post post-waterfront post-1" id="post-1">
          <header>
            <h2>Related Blog: <a href="<?php echo $item->get_permalink(); ?>" title="read &#39;<?php echo $item->get_title(); ?>&#39;"><?php echo $item->get_title(); ?></a></h2>
            <p class="post-date"><?php echo $item->get_date('j F Y'); ?></p>
          </header>
          <div class="post-content">
            <p><?php echo $item->get_description(); ?></p>
            <p><a href="<?php echo $item->get_permalink(); ?>" class="findoutmore" title="read more on this entry">Read more &raquo;</a></p>
            <div class="clearfix"></div>
          </div><!-- /.postcontent -->
          <div class="post-meta">
            <p><?php echo blog_link($item->get_permalink()); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</aside>

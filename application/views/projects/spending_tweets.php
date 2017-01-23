<article class="project project-1" id="project-1">
  <div class="post-content">
    <img src="/images/projects/spending-tweets.jpg" width="250" class="post-image img-rounded thumbnail" >

    <p>Spending Tweets was developed as an exercise for <a href="https://mysociety.org">mySociety.org</a>.  I was challenged to produce a twitter bot that would respond to queries from users about local government spending in approximately 4 hours.</p>

    <p>The bot is written in PHP using the <a href="https://www.codeigniter.com">CodeIgniter</a> framework and works by listening for twitter @replies containing a formatted query using the <a href="https://dev.twitter.com/">Twitter API</a>.</p>

    <p>When a valid query is received, the bot attempts to locate the relevant open data using the API provided by <a href="http://openlylocal.com">Openly Local</a>. If information is located, a response is sent containing as much information as possible and a Bit.ly link to full details.</p>

    <div class="clearfix"></div>
  </div>

  <div class="post-meta">
    <p><strong>Developed:</strong> March 2011
    <br/><strong>Language:</strong> PHP / CodeIgniter Framework
    <br/><strong>Code:</strong> <a href="/images/sendingtweets.zip" title="Download the code">SpendingTweets</a> (ZIP, 444 KB)</p>
  </div>
</article>

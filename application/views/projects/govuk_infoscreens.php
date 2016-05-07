<article class="project project-1" id="project-1">
  <header>
    <h2>GOV.UK Infoscreens</h2>
  </header>
  <div class="post-content">
    <img src="/images/projects/govuk-infoscreens.jpg" width="250" class="post-image img-rounded thumbnail" >

    <p>Information screens that provide a near-realtime overview of the editorial work happening during the development of the beta for the single website for government.</p>

    <p>These screens were put together to provide a quick overview of the work taking place and are displayed on a large TV screen in the GOV.UK office running Google Chrome with the <a href="https://chrome.google.com/webstore/detail/dlknooajieciikpedpldejhhijacnbda?hl=en-US">Revolver</a> extension.</p>

    <p>The application is written in PHP using the <a href="http://www.codeigniter.com">CodeIgniter</a> framework and works by reading the content of automated emails produced by the GOV.UK noisy workflow system. A script regularly accesses an IMAP email account, downloads and processes new emails and stores them in application database so the data can be displayed in various ways.</p>

    <p>The data displays refresh between every 2 and 5 minutes to show the most recent information. There are 4 screens in total although not all are in-use:</p>
    <ul>
      <li><strong>Now</strong> - this screen shows an overview of all the recent editorial actions including recently completed pieces of content, content sent for review, content sent out for fact check and fact check responses received.  Each action is displayed in an appropriately coloured box along with the title of the piece of content, the author's name, gravatar and date/time.</li>
      <li><strong>Today &amp; This Week</strong> - this screen gives an overview of the number of content items that have been started, sent for review, fact checked and completed today and how today has contributed to this week's totals. Each content item is displayed as an individual coloured block.</li>
      <li><strong>Today &amp; Yesterday</strong> - similar to 'Today &amp; This Week', this screen gives an overview of the number of content items actioned today and how this compares with yesterday.</li>
      <li><strong>This Week &amp; Last Week</strong> - similar to the above, this screen gives an overview of the number of content items actioned this week and how this compares with last week.</li>
    </ul>

    <ul class="media-grid">
      <li>
        <a href="/images/projects/govuk-infoscreens-a.jpg">
          <img class="thumbnail" src="/images/projects/govuk-infoscreens-a.jpg" alt="example of the 'Now' GovUK infoscreen"/>
        </a>
      </li>
      <li>
        <a href="/images/projects/govuk-infoscreens-b.jpg">
          <img class="thumbnail" src="/images/projects/govuk-infoscreens-b.jpg" alt="example of the 'Today &amp; This Week' GovUK infoscreen"/>
        </a>
      </li>
    </ul>

    <div class="clearfix"></div>
  </div>

  <div class="post-meta">
    <p><strong>Developed:</strong> December 2011
    <br/><strong>Language:</strong> PHP / CodeIgniter Framework
    <br/><strong>Code:</strong> <a href="https://github.com/daibach/govuk-infoscreens">GitHub (daibach/govuk-infoscreens)</a></p>
  </div>
</article>

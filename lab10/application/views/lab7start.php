<a class="twitter-follow-button"
  href="https://twitter.com/twitterdev"
  data-show-count="false"
  data-lang="en">
Follow @twitterdev
</a>
<script type="text/javascript">
window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
</script>
<p class="lead">Ferry Travel Planer</p>

<form name="myform" action="/planner/get_ports_code/" method="post">
    <label for="source">Leaving from: </label><br/>
    <select name="from">
        {ports}
        <option value="{code}">{name}</option>
        {/ports}
    </select>
    <br/>
    <label for="destination">Destination: </label><br/>
    <select name="to">
        {ports}
        <option value="{code}">{name}</option>
        {/ports}
    </select>
    <br/><br/>
    <input class="btn btn-primary" type="submit" value="Submit" />
</form>
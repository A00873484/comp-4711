<a class="twitter-follow-button"
  href="https://twitter.com/bcit"
  data-show-count="false"
  data-lang="en">
Follow @bcit
</a>
<script type="text/javascript" src = "/assets/js/twitter.js"></script>
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
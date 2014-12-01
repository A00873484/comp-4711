<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_email_large' displayText='Email'></span>
<p class="lead">
    <a href="/order/neworder" class="btn btn-large btn-primary">Start a new order</a>    
    <a href="/admin/display" class="btn btn-large btn-primary">Admin</a>    
</p>
<p>Order summary:</p>
<table class="table">
    <tr>
        <th>Order #</th>
        <th>Date/Time</th>
        <th>Amount</th>
    </tr>
    {orders}
    <tr>
        <td>{num}</td>
        <td>{datetime}</td>
        <td>{amount}</td>
    </tr>
    {/orders}
</table>

<p class="lead">
    <a href="/order/neworder" class="btn btn-large btn-primary">Start a new order</a>    
    <a href="/admin/display" class="btn btn-large btn-primary">Admin</a>    
</p>
<p>Order summary:</p>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Picture</th>
    </tr>
    {items}
    <tr>
        <td>{name}</td>
        <td>{description}</td>
        <td>{price}</td>
        <td><img src="/assets/images/{picture}" width="30px" height="30px"></td>
    </tr>
    {/items}
</table>

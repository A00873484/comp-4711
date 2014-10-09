<p class="lead">
    <a href="/order/neworder" class="btn btn-large btn-primary">Start a new order</a>    
    <a href="/admin/list2" class="btn btn-large btn-primary">Show Editable Items!</a>
</p>
<p>Order summary:</p>
<table class="table">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Picture</th>
    </tr>
    {items}
    <tr>
        <td>{code}</td>
        <td>{name}</td>
        <td>{description}</td>
        <td><img src="/assets/images/{picture}" width="30px" height="30px"></td>
    </tr>
    {/items}
</table>


<form action="/admin/post/{code}" method="post">
<p>Jim's Joint Maintenance</p>

{errormessages}

Item Code: <input type="text" name="code" value = "{code}" readonly><br>
Name: <input type="text" name="name" value = "{name}"><br>
Description: <textarea rows="4" cols="50" name="description">
				{description}
			 </textarea><br>
Price: <input type="text" name="price" value = "{price}"><br>
Category: <select id="select" name="category" style="width: 115px;">
			<option value="s" title="Title for Item 1" {category1}>Sweet</option>
			<option value="m" title="Title for Item 2" {category2}>Meat</option>
			<option value="d" title="Drink" {category3}>drink</option>
		  </select><br>
Picture: <img src='/assets/images/{picture}' width='50px' height='50px' name="picture">
<br>

<!--<a href="/admin/change" class="btn btn-large">Submit Changes</a>-->
<input type="submit" value="Submit Changes">

</form>
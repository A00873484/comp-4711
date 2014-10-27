<h4>Days:</h4>

<ul>
	{days}
		<li>{day}</li>
	{/days}
</ul>

<h4>Ports:</h4>
<ul>
	{ports}
	<li>{code}: {port}</li>
	{/ports}
</ul>

<h4>Sailings:</h4>
{sailings}
<h6>From: {origin} to {destination}</h6>
<table>
	<tr>
		<th>Leaves</th>
		<th>Arrives</th>
		<th>Stops</th>
	</tr>
	<tr>
		<td>{depart}</td>
		<td>{arrive}</td>
		<td>
		Stops:
		{stops}
			{port} 
		{/stops}
		</td>
	</tr>
</table>
<br>
{/sailings}
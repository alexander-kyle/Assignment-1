<h1>Your robot assembly</h1>

<form action="/" method="post">
    <select name="value">
        {collections}
            <option value="{head}" >{Piece}</option>               
        {/collections}
    </select>
    <select name="value2">
        {collections2}
            <option value="{body}" >{Piece}</option>               
        {/collections2}
    </select>
    <select name="value3">
        {collections3}
            <option value="{legs}" >{Piece}</option>               
        {/collections3}
    </select>
    <img src="data/{head}.jpeg">
</form>




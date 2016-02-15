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
    <div>
        <table>
            <tr>
                
                <td><img src="../../data/thumb/{head}.jpeg"></td>
                
            </tr>
            <tr>
                <td><img src="../../data/thumb/{body}.jpeg"></td>
            </tr>
            <tr>
                <td><img src="../../data/thumb/{legs}.jpeg"></td>
            </tr>
        </table>
    
    </div>
</form>
<button>Assemble</button>



<form id="portfolioForm" action="/portfolio" method="post">
    View portfolio for 
    <select name="portfolioOfPlayer" onchange="portfolioSelect()">
        <option disabled selected> -- Choose a player to view -- </option>
        {players}
        <option value="{Player}">{Player}</option>
        {/players}
    </select>
    <input name="submit" type="submit" value="Go"/>
</form>


  <?php

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //This is a table that displays the people playing the game for the homepage
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    ?>

<div style="float: left;">
    <h2>Peeps playing da game</h2>
    {gamers}
    <table border="1" width="100%" style="border-collapse: collapse;">
        <tr>
            <td><a href="/portfolio/index/{Player}">{Player}:</a><br /></td>

            <td>Peanuts - {Peanuts},</td>
            <td>Equity - {Equity}</td>
        </tr>
    </table>
    {/gamers}
</div>




<?php

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //This is a small view to show whether your logged in or not ;)
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    ?>
<a style='color: white;'>{sessionPlayer} logged in,</a>
<form action="/" method="post">
    <input style="display: none;" name="sessionPlayer" type="text" value="logout"/>
    <input name="submit" type="submit" value="logout"/>
</form>



